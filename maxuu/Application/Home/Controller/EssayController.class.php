<?php

namespace Home\Controller;

class EssayController extends CommonController {
    public function index() {
        $Essay = D('Essay');
        $data['hot'] = $Essay->getHot();
        $this->assign($data);
        $this->display();
    }

    public function essay() {
        $id = I('get.id/d',0);
        $Essay = D('Essay');
        //更新流量量
        $Essay->where(array('id'=>$id))->setInc('click',1);
        //最新微语
        $data['latest'] = $Essay->getLatest();
        //查找当前博客
        $data['essay'] = $Essay->getGoods(array('recycle' => 'no','on_sale'=>'yes','id'=>$id));
        if(empty($data['essay'])){
            $this->error('您访问的微语不存在！');
        }
        //查找推荐微语
        $data['recommend'] = $Essay->getRecommend(5);

        //上一篇
        $data['prev'] = $Essay->where("id<'".$id."'")->order('id desc')->limit('1')->find();

        //下一篇
        $data['next'] = $Essay->where("id>'".$id."'")->order('id asc')->limit('1')->find();

        //查找分类导航
        $this->assign('title',$data['essay']['name'].' - MIUu博客');
        $this->assign($data);
        $this->display();
    }

    public function orders() {//成员详情
        $keyword = trim(I('get.keyword'));
        if (!empty($keyword)) {
            $map['name|content|id'] = array('like','%'.$keyword.'%');
        }
        $field = 'id,name,author,add_time,author,content,thumb,source,url';
        $count = M('Essay')->where($map)->count();    //计算总数
        $Page = new \Think\PageAjax($count, 8);

        $lists = M('Essay')->where($map)->limit($Page->firstRow . ',' . $Page->listRows)->order('id DESC')->select();
        $this->assign("page", $Page->show());
        $this->assign("lists", $lists);
        $this->assign("keyword", $keyword);
        $this->display();
    }

}

?>