<?php
namespace Admin\Model;
use Think\Model;
class EssayModel extends Model {
	//表单字段过滤
	protected $insertFields = 'sn,name,author,on_sale,recommend,source,url,keywords,desc,links';
	protected $updateFields = 'sn,name,author,on_sale,recommend,source,url,keywords,desc,links';
	//自动验证
	protected $_validate = array(
		array('name','1,100','訊息名称不合法（1-100个字符）',self::MUST_VALIDATE,'length'),
		array('sn','/^[0-9A-Za-z]{1,10}$/','商品编号不合法（1-10个字符）',self::MUST_VALIDATE),
		array('on_sale',array('yes','no'),'on_sale字段填写错误',self::MUST_VALIDATE,'in'),
		array('recommend',array('yes','no'),'recommend字段填写错误',self::MUST_VALIDATE,'in'),
		array('desc','1,500','摘要长度不合法（1-500个字符）',self::MUST_VALIDATE,'length'),
		array('author','1,30','作者长度不合法（1-30个字符）',self::MUST_VALIDATE,'length'),
		array('source','1,30','出处长度不合法（1-30个字符）',self::MUST_VALIDATE,'length'),
		array('url','1,255','摘要长度不合法（1-255个字符）',self::MUST_VALIDATE,'length'),
		array('links','1,30','站内链接长度不正确（1-30个字符）',self::MUST_VALIDATE,'length'),
	);

	/**
	 * 商品列表
	 * @param string $type 数据用途（商品列表或回收站列表）
	 * @param array|int $cids 分类ID数组
	 * @param int $p 当前页码
	 * @return array 查询结果
	 */
	public function getList($type='essay',$p=0){
		//准备查询条件
		$order = 'id desc';        //排序条件
		$field = 'id,name,name,author,on_sale,recommend,add_time,source,url,keywords,desc,links';
		if($type=='essay'){          //列表页取数据时
			$where = array('recycle' => 'no');
		}elseif($type=='recycle'){   //博客回收站取数据时
			$where = array('recycle' => 'yes');
		}

		//准备分页查询
		$pagesize = C('USER_CONFIG.pagesize');              //每页显示商品数
		$count = $this->where($where)->count(); //获取符合条件的商品总数
		$Page = new \Think\Page($count,$pagesize);          //实例化分页类
		$this->_customPage($Page);                          //定制分页类样式
		//查询数据
		$data = $this->field($field)
				->where($where)->order($order)->page($p,$pagesize)->select();
		//返回结果
		return array(
			'data' => $data,              //商品列表数组
			'pagelist' => $Page->show(),  //分页链接HTML
		);
	}

	//定制分页类样式
	private function _customPage($Page){
		$Page->lastSuffix = false;
		$Page->setConfig('prev','上一页');
		$Page->setConfig('next','下一页');
		$Page->setConfig('first','首页');
		$Page->setConfig('last','尾页');
	}

	//根据$where条件查询数据
	public function getGoods($where){
		//定义需要的字段
		$field = 'id,sn,name,thumb,on_sale,content,recommend,author,add_time,source,url,keywords,desc,links';
		return $this->field($field)->where($where)->find();
	}


	//插入数据前置操作
	protected function _before_insert(&$data, $option){
		$data['recycle'] = 'no';                 //新小品是未删除的
		$data['add_time'] = date('Y-m-d H:i:s'); //新小品的添加时间
	}

}