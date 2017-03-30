<?php
namespace Home\Model;
use Think\Model;
class EssayModel extends Model {

	/**
	 * 文章列表
	 * @param array|int $cids 分类ID数组
	 * @param int $p 当前页码
	 * @return array 查询结果
	 */

	public function getList($p=0) {
		$field = 'id,name,author,add_time,author,content,keywords,thumb,source,url,click';
		//where条件
		$where = array('recycle' => 'no','on_sale' => 'yes');
		//处理排序条件
		$order = 'id desc';
		//准备分页查询
		$pagesize = C('USER_CONFIG.pagesize'); //每页显示文章数
		$count = $this->where($where)->count();
		$Page = new \Think\Page($count,$pagesize);
		$this->_customPage($Page);
		//查询文章数据
		$data = $this->field($field)->where($where)->order($order)->page($p,$pagesize)->select();
		//获取推荐的小品文
		$recommend = $this->getRecommend($where);
		//返回结果
		return array(
			'data' => $data,
			'recommend' => $recommend,
			'pagelist' => $Page->show(),
		);
	}



	//定制分页类样式
	private function _customPage($Page){
		$Page->lastSuffix = false;
		$Page->setConfig('prev','上一页');
		$Page->setConfig('next','下一页');
		$Page->setConfig('first','首页');
		$Page->setConfig('last','尾页');
		$Page->setConfig('theme',"<ul class='pagination'></li><li>%FIRST%</li><li>%UP_PAGE%</li><li>%LINK_PAGE%</li><li>%DOWN_PAGE%</li><li>%END%</li><li><a> %HEADER%  %NOW_PAGE%/%TOTAL_PAGE% 页</a></ul>");
	}

	//根据$where条件查询文章数据
	public function getGoods($where){
		//定义需要的字段
		$field = 'id,sn,name,thumb,author,add_time,content,source,url,click';
		return $this->field($field)->where($where)->find();
	}


	public function getRecommend($sum){
		$where = array('recycle' => 'no','on_sale' => 'yes','recommend'=>'yes');//准备被推荐的微语
		$field = 'id,name,author,thumb,sn,add_time,content,source,url,click';
		//查询文章数据
		return $this->field($field)->where($where)->order('rand()')
		->limit($sum)->select();
	}

	public function getLatest(){
		$order = 'id desc';
		$where = array('recycle' => 'no','on_sale' => 'yes','recommend'=>'yes');//最新微语
		$field = 'id,name,author,thumb,add_time,source,url,click';
		//查询文章数据
		return $this->field($field)->where($where)->order($order)
		->limit(4)->select();
	}

	public function getHot(){
		$order = 'click desc';
		$where = array('recycle' => 'no','on_sale' => 'yes','recommend'=>'yes');//推荐微语
		$field = 'id,name,author,thumb,add_time,source,url,click';
		//查询文章数据
		return $this->field($field)->where($where)->order($order)
		->limit(4)->select();
	}

}