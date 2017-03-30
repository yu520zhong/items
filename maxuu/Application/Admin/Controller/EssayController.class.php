<?php
namespace Admin\Controller;


//商品控制器
class EssayController extends CommonController {

	//博客列表
	public function index() {
		//获取参数
		$p = I('get.p/d',0);       //当前页码
		//实例化模型
		$Essay = D('Essay');
		//获取微言列表
		$data['essay'] = $Essay->getList('essay',$p);
		//防止空页被访问
		if(empty($data['essay']['data']) && $p > 0){
			$this->redirect('Essay/index',array('cid'=>$cid));
		}
		//查询分类列表
		$data['p'] = $p;
		$this->assign($data);
		$this->display();
	}

	//微言添加
	public function add(){
		//使用七牛云储存上传图片
		$setting=C('UPLOAD_SITEIMG_QINIU');
		$Upload = new \Think\Upload($setting);
		$Upload->autoSub = false;
		$Upload->saveName = time().'_'.mt_rand();
		$info = $Upload->upload($_FILES);

		//实例化模型
		$Essay = D('Essay');
		if(IS_POST){
			//创建数据对象
			if(!$Essay->create(null,1)){
				$this->error('添加微言失败：'.$Essay->getError());
			}
			//处理特殊字段
			//预览图
			if(!$info) {
				$Essay->thumb = '';
			} else {
				$Essay->thumb = $info['thumb']['url'];
			}

			$Essay->content = I('post.content','','htmlpurifier'); //商品描述（富文本过滤）

			//添加到数据库
			if(!$Essay->add()){
				$this->error('添加微言失败！');
			}
			//添加商品成功
			if(isset($_POST['return'])) $this->redirect('Essay/index',array('p'=>$p));
			$this->assign('success',true);
		}

		$this->assign($data);
		$this->display();
	}

	//微言修改
	public function edit(){
		$setting=C('UPLOAD_SITEIMG_QINIU');
		$Upload = new \Think\Upload($setting);
		$Upload->autoSub = false;
		$Upload->saveName = time().'_'.mt_rand();
		$info = $Upload->upload($_FILES);

		//获取参数
		$id = I('get.id/d',0);         //待修改微言ID
		$p = I('get.p/d',0);           //当前页码
		//实例化模型
		$Essay = D('Essay');
		$Essay->thumb = I('post.url');
		 //准备where条件
		$where = array('id'=>$id,'recycle'=>'no');
		if(IS_POST){
			//创建数据对象
			if(!$Essay->create(null,2)){
				$this->error('修改微言失败：'.$Essay->getError());
			}
			//处理特殊字段
			$Essay->content = I('post.content','','htmlpurifier'); //商品描述（富文本过滤）
			//如果有预览图文件上传，则更新预览图
			if($info) {
				$Essay->thumb = $info['thumb']['url'];  //上传成功，保存文件路径
			}

			//保存到数据库
			if(false === $Essay->where($where)->save()){
				$this->error('修改微言失败！');
			}
			//修改商品成功
			if(isset($_POST['return'])) $this->redirect('Essay/index',array('cid'=>$cid,'p'=>$p));
			$this->assign('success',true);
		}
		//查询商品数据
		$data['essay'] = $Essay->getGoods($where);
		if(!$data['essay']){
			$this->error('修改失败：微言不存在。');
		}
		//查询分类列表
		$data['id'] = $id;
		$data['p'] = $p;
		$this->assign($data);
		$this->display();
	}

	//删除商品（放入回收站）
	public function del() {
		//阻止直接访问
		if(!IS_POST) $this->error('删除失败：未选择微言');
		//获取参数
		$p = I('get.p/d',0);     //当前页码
		$id = I('post.id/d',0);  //待处理的商品ID
		//生成跳转地址
		$jump = U('Essay/index',array('p'=>$p));
		//实例化模型
		$Essay = M('Essay');
		//检查表单令牌
		if(!$Essay->autoCheckToken($_POST)){
			$this->error('表单已过期，请重新提交',$jump);
		}
		//将商品放入回收站
		if(false === $Essay->where(array('id'=>$id))->save(array('recycle'=>'yes'))){
			$this->error('删除微言失败',$jump);
		}
		redirect($jump); //删除成功，跳转
	}

	//商品列表快捷修改
	public function change(){
		//阻止直接访问
		if(!IS_POST) $this->error('操作失败：未选择微言');
		//获取参数
		$cid = I('get.cid/d',0);    //分类ID
		$p = I('get.p/d',0);        //当前页码
		$id = I('post.id/d',0);     //待处理商品ID
		$field = I('post.field');   //待处理字段
		$status = I('post.status');	//待处理字段值
		//生成跳转地址
		$jump = U('Essay/index',array('cid'=>$cid,'p'=>$p));
		//实例化模型
		$Essay = M('Essay');
		//检测输入变量
		if($field!='on_sale' && $field!='recommend'){
			$this->error('操作失败：非法字段');
		}
		if($status!='yes' && $status!='no'){
			$this->error('操作失败：非法状态值');
		}
		//检查表单令牌
		if(!$Essay->autoCheckToken($_POST)){
			$this->error('表单已过期，请重新提交',$jump);
		}
		//执行操作
		if(false === $Essay->where(array('id'=>$id,'recycle'=>'no'))->save(array($field=>$status))){
			$this->error('操作失败：数据库保存失败',$jump);
		}
		redirect($jump); //操作成功，跳转
	}

	//商品详情 在线编辑器 图片上传
	public function uploadImage(){
		//上传目录
		$savePath = './Public/Uploads/content';
		//上传配置
		$config = array(
			'savePath' => $savePath,     //存储文件夹
			'subPath' => date('Y-m/d'),  //子目录
			'allowFiles' => array('.gif','.png','.jpg','.jpeg','.bmp')  //允许的文件格式
		);
		//实例化UMEditor配套的文件上传类
		$Upload = new \Components\Uploader('upfile',$config);
		//返回JSON数据给UMEditor
		$type = $_REQUEST['type'];
		$callback=$_GET['callback'];
		$info = $Upload->getFileInfo();
		$info = $callback ? "<script>$callback(".json_encode($info).')</script>' : json_encode($info);
		$this->ajaxReturn($info,'EVAL');
	}
}