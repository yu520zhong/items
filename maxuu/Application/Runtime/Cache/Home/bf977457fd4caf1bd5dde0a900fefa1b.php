<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="renderer" content="webkit">
<meta http-equiv="Cache-Control" content="no-siteapp" />
<title>资源下载 | 米鱼博客</title>
<meta name="keywords" content="前端，前端开发，css，css3，js，js特效，网页特效，php，jquery，jquery ajax，java,技术流博客">
<meta name="description" content="米鱼博客，菜鸟米鱼的个人网站，致力于收集整理互联网最前沿的开发技术和行业资讯，以“勤于思考，善于借鉴”为宗旨，希望通过此博客，将自己的学习成果总结整理出来，与大家一起分享、交流与成长！">
<link rel="shortcut icon" href="/maxuu/Public/Home/img/favicon.png">

<!-- Bootstrap core CSS -->
<link rel="stylesheet" href="/maxuu/Public/Home/css/bootstrap.css" />
<link rel="stylesheet" href="/maxuu/Public/Home/css/bootstrap-reset.css" />

<link rel="stylesheet" href="/maxuu/Public/home/iconfont/iconfont.css" />

<!--external css-->
<link rel="stylesheet" href="/maxuu/Public/home/assets/font-awesome/css/font-awesome.css" />
<link rel="stylesheet" href="/maxuu/Public/home/assets/bxslider/jquery.bxslider.css" />

<link rel="stylesheet" href="/maxuu/Public/home/assets/revolution_slider/css/rs-style.css" media="screen" />
<link rel="stylesheet" href="/maxuu/Public/home/assets/revolution_slider/rs-plugin/css/settings.css" media="screen" />

<!-- Custom styles for this template -->
<link rel="stylesheet" href="/maxuu/Public/Home/css/style.css" />
<link rel="stylesheet" href="/maxuu/Public/Home/css/style-responsive.css" />

<link rel="stylesheet" href="/maxuu/Public/Home/css/kissui.css" />
<link rel="stylesheet" href="/maxuu/Public/Home/css/scrollanim.min.css" />

<link rel="stylesheet" href="/maxuu/Public/Home/plugins/layui/css/layui.css" />
<!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
<!--[if lt IE 9]>
<script src="/maxuu/Public/Home/js/html5shiv.js"></script>
<script src="/maxuu/Public/Home/js/respond.min.js"></script>
<![endif]-->
<?php
$IMG_URL = 'http://7xsqlc.com1.z0.glb.clouddn.com/'; $IMG_THUMB = '?imageView2/1/w/100/h/100'; $IMG_BIG_W = '?imageView2/2/w/840'; $IMG_BIG_H = '?imageView2/2/h/300'; $IMG_BIG_WI = '?imageView2/2/w/840/interlace/1'; $IMG_BIG_HI = '?imageView2/2/h/300/interlace/1'; $IMG_SMALL_165 = '?imageView2/2/w/165'; ?>
</head>
<body>
<!--header start-->
<header class="header-frontend">
    <div class="navbar navbar-default navbar-static-top" id="J_m_nav">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/maxuu">MI<span>Uu</span></a>
            </div>
            <div class="navbar-collapse collapse ">
                <ul class="nav navbar-nav" id="menu">
                    <li id="Index_index"><a href="<?php echo U('Index/index');?>">首页</a></li>
                    <li id="Blog_index"><a href="<?php echo U('Blog/index');?>">技术文摘</a></li>
                    <li id="Down_index"><a href="<?php echo U('Down/index');?>">资源下载</a></li>
                    <li id="Notes_index"><a href="<?php echo U('Notes/index');?>">在路上</a></li>
                    <li id="Essay_index"><a href="<?php echo U('Essay/index');?>">生活微语</a></li>
                    <li id="history_index"><a href="<?php echo U('History/index');?>">历史的今天</a></li>
                    <li class="dropdown" id="function_index">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false">应用 <i class="miuu u-xiala"></i></a>
                        <ul class="dropdown-menu">
                            <li id="tools_index"><a href="<?php echo U('Tools/tools');?>">小工具</a></li>
                            <li id="nav_index"><a href="<?php echo U('Tools/nav');?>">常用导航</a></li>
                            <li id="nav_index"><a href="<?php echo U('Other/webseo');?>">全站搜索</a></li>
                        </ul>
                    </li>
                    <li id="readers_index"><a href="<?php echo U('Tools/readers');?>">留言</a></li>
                    <li class="hidden-xs " id="navbar-search">
                      <a href="#">
                        <i class="miuu u-search"></i>
                      </a>
                      <div class="hidden" id="navbar-search-box">
                        <div class="input-group">
                          <input type="text" class="form-control" id="keywords" placeholder="请输入关键词" autocomplete="off">
                          <span class="input-group-btn">
                            <button class="btn btn-danger searchbar" type="button">点我!</button>
                          </span>
                        </div>
                      </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>
<!--header end-->



    <!-- revolution slider start -->
    <div class="focusbox">
        <div class="container"><h1 class="focusbox-title">资源下载</h1>
            <div class="focusbox-text">收集了互联网各类资源软件,版权归原作者所有！留言是美的。。。</div>
        </div>
    </div>
    <!--container start-->
    <div class="container space30">
        <div class="row">
            <div class="col-md-8">
                <section class="article">
                    <ul class="filter">
                        <li class="filter-title">资源列表</li>
                        <?php if(!empty($categorydown["parent"])): if(is_array($categorydown["parent"])): $i = 0; $__LIST__ = $categorydown["parent"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><li>
                                    <p class="cateline">分类<?php echo ($i); ?>：</p>
                                    <?php if(is_array($v)): foreach($v as $key=>$vv): ?><a href="<?php echo downmkFilterURL('cid',$vv['id']);?>" class="cid-<?php echo ($vv["id"]); ?>" ><?php echo ($vv["name"]); ?></a><?php endforeach; endif; ?></li>
                                </li><?php endforeach; endif; else: echo "" ;endif; endif; ?>
                    </ul>
                    <?php if(empty($down["data"])): ?><p class="no_find">很抱歉，没有找到您需要的下载资源!</p><?php else: ?>
                        <?php if(is_array($down["data"])): foreach($down["data"] as $key=>$v): ?><article class="excerpt excerpt-text">
                                <div class="row">
                                    <?php if(!empty($v["thumb"])): ?><div class="col-md-4">
                                            <a href="<?php echo U('Down/down',array('id'=>$v['id']));?>" class="nail">
                                                <img src="<?php echo ($v["thumb"]); ?>" alt=""  class="thumb">
                                            </a>
                                        </div>
                                        <?php else: endif; ?>
                                    <header class="col-md-8">
                                        <a class="cat" href="javascript:void(0);"><?php echo ($v["category_name"]); ?><i></i></a>
                                        <h2 class="title">
                                            <a href="<?php echo U('Down/down',array('id'=>$v['id']));?>" target="_blank" title="<?php echo ($v["name"]); ?>"><?php echo ($v["name"]); ?></a>
                                        </h2>
                                        <ul class="meta list-inline">
                                            <li><i class="miuu u-rili"></i> <?php echo ($v["add_time"]); ?></li>
                                            <li class="writer"><i class="miuu u-qunzu"></i> <?php echo ($v["author"]); ?></li>
                                            <li class="pv"><i class="miuu u-xiazai"></i> 下载(<?php echo ($v["click"]); ?>)</li>
                                        </ul>
                                        <p class="note"><strong>摘要：</strong><?php echo ($v["desc"]); ?></p>
                                    </header>
                                </div>
                            </article><?php endforeach; endif; endif; ?>

                </section>
                <nav class="text-center">
                    <div class="pagination"><?php echo ($down["pagelist"]); ?></div>
                </nav>
            </div>

            <div class="col-md-4 sidebar">

                <div class="widget widget-posts">
                    <h3>热门推荐</h3>
                    <ul>
                        <?php if(is_array($recommend["data"])): foreach($recommend["data"] as $key=>$v): ?><li>
                            <dl class="hot-article">
                                <dt>
                                    <?php if(!empty($v["thumb"])): ?><a href="<?php echo U('Down/down',array('id'=>$v['id']));?>">
                                            <img class="thumb" src="<?php echo ($v["thumb"]); ?>" >
                                        </a>
                                    <?php else: endif; ?>
                                </dt>
                                <dd><span class="text"><a href="<?php echo U('Down/down',array('id'=>$v['id']));?>"><?php echo ($v["name"]); ?></span></a></dd>
                                <dd><span class="muted"><?php echo ($v["add_time"]); ?></span><span class="muted"><?php echo ($v["author"]); ?></span></dd>
                            </dl>
                        </li><?php endforeach; endif; ?>
                    </ul>
                </div>

                <div class="widget widget-posts">
                    <a href="#" target="_blank" rel="nofollow"><img src="http://7xsqlc.com1.z0.glb.clouddn.com/banner/small-2.png" class="full-img"></a>
                </div>

                <div class="widget widget-posts">
                    <div id="calendar"></div>
                </div>

                <div class="widget widget-posts" >
                   <a href="#" target="_blank" rel="nofollow"><img src="http://7xsqlc.com1.z0.glb.clouddn.com/banner/small-5.jpg" class="full-img"></a>
                </div>
            </div>
            <!--feature end-->
        </div>
    </div>
<!--footer start-->
<footer>
    <div class="container">
        <div class="row">
            <ul class="links list-inline">
                <li><a href="http://lusongsong.com/" target="_blank">卢松松</a></li>
                <li><a href="http://www.ishishang.top/" target="_blank">爱时尚</a></li>
                <li><a href="http://www.taiyangxiao.com/" target="_blank">太阳笑了</a></li>
                <li><a href="http://layer.layui.com/" target="_blank">LayUI</a></li>
                <li><a href="http://themebetter.com/" target="_blank">themebetter</a></li>
                <li><a href="http://themebetter.com/" target="_blank">ThinkPHP</a></li>
                <li><a href="https://jsfiddle.net/yu520zhong/73LL4ohv/" target="_blank">代码演示</a></li>
            </ul>
            <p class="text-muted text-center">©2016 <a href="<?php echo U("About/index");?>">Macyu</a><span id="webTime"></span></p>
            <p class="text-muted text-center">
                <a class="mr10" href="tencent://message/?uin=2211735722&amp;与我交流&amp;Menu=yes" target="_blank">
                    <img border="0" src="http://wpa.qq.com/pa?p=1:2211735722:16" alt="点击我">
                </a>
                <a target="_blank" href="http://mail.qq.com/cgi-bin/qm_share?t=qm_mailme&amp;email=aFldUVhaWV1bWl1bKBkZRgsHBQ" class="mr10">
                    <img src="http://rescdn.qqmail.com/zh_CN/htmledition/images/function/qm_open/ico_mailme_01.png">
                </a>
                <a target="_blank" href="http://mail.qq.com/cgi-bin/qm_share?url=http%3A%2F%2Flocalhost%2Fmake%2F&amp;to=qqmail&amp;desc=&amp;summary=&amp;title=&amp;site=&amp;pics=">
                    <img src="http://rescdn.qqmail.com/zh_CN/htmledition/images/function/qm_open/ico_share_01.png">
                </a>
            </p>
            <p class="text-muted text-center weather-content">
                <iframe src="http://www.thinkpage.cn/weather/weather.aspx?uid=U1E8D42C92&cid=CHBJ000000&l=&p=SMART&a=1&u=C&s=4&m=2&x=1&d=1&fc=&bgc=&bc=&ti=1&in=0&li=" frameborder="0" scrolling="no" width="300" height="27" allowTransparency="true"></iframe>
            </p>

         </div>
    </div>
   <a href="#" id="toTop"></a>
</footer>
<!--footer end-->


<!-- JavaScript -->
<!-- js placed at the end of the document so the pages load faster -->
<script src="/maxuu/Public/Home/js/jquery.js"></script>
<script src="/maxuu/Public/Home/js/bootstrap.min.js"></script>
<script src="/maxuu/Public/Home/js/hover-dropdown.js"></script>
<script src="/maxuu/Public/Home/js/common.js"></script>
<script src="/maxuu/Public/Home/js/main-scripts.js"></script>
<script src="/maxuu/Public/Home/js/scrollanim.min.js"></script>
<script>
/*增加 MODULE 模版变量到 JS 中*/
var ThinkPHP = {
    'MODULE' : '/maxuu/Home',
    'ROOT' : '/maxuu',
    'IMG' : '/maxuu/Public/<?php echo MODULE_NAME;?>/img',
    'FACE' : '/maxuu/Public/<?php echo MODULE_NAME;?>/face',
    'JS' : '/maxuu/Public/Home/js',
    'UPLOADIFY' : '/maxuu/Public/Home/uploadify',
    'UPLOADER' : '<?php echo U("File/upload");?>',
    'INDEX' : '<?php echo U("Index/index");?>',
    'SEARCH' : '<?php echo U("Home/Other/search");?>',
};
</script>
<script type="text/javascript" src="/maxuu/Public/Home/plugins/layui/layui.js"></script>
<script type="text/javascript" src="/maxuu/Public/Home/plugins/layui/lay/dest/layui.all.js"></script>

<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "https://hm.baidu.com/hm.js?ba6f742ccf462cb7a9d6dca60a7a90ea";
  var s = document.getElementsByTagName("script")[0];
  s.parentNode.insertBefore(hm, s);
})();

(function(){
    var bp = document.createElement('script');
    var curProtocol = window.location.protocol.split(':')[0];
    if (curProtocol === 'https') {
        bp.src = 'https://zz.bdstatic.com/linksubmit/push.js';
    }
    else {
        bp.src = 'http://push.zhanzhang.baidu.com/push.js';
    }
    var s = document.getElementsByTagName("script")[0];
    s.parentNode.insertBefore(bp, s);
})();
//自执行匿名函数
(function(){
    window.setTimeout(arguments.callee, 1000);
    //建站时间
    var BirthDay = new Date("12/31/2016 00:00:00");
    //现在时刻
    var today = new Date();
    //运行时间 = 现在时刻 - 建站时间
    timeover = (today.getTime() - BirthDay.getTime());
    sectimeover = timeover / 1000;
    secondsover = Math.floor(sectimeover);
    msPerDay = 24 * 60 * 60 * 1000;
    e_daysover = timeover / msPerDay;
    daysover = Math.floor(e_daysover);
    e_hrsover = (e_daysover - daysover) * 24;
    hrsover = Math.floor(e_hrsover);
    e_minsover = (e_hrsover - hrsover) * 60;
    minsover = Math.floor((e_hrsover - hrsover) * 60);
    seconds = Math.floor((e_minsover - minsover) * 60);
    webTime.innerHTML = "·米鱼博客已运行：" + daysover + "天" + hrsover + "小时" + minsover + "分" + seconds + "秒";
})();
document.getElementsByTagName('iframe')[0].width="500";
</script>
<script>
    // js跳转到搜索结果页面
    $('.search').blur(function() {
        location.href = ThinkPHP['MODULE'] + '/other/search?keywords=' + $(this).text();
    });
    //导航条选中效果
    //筛选列表，分类的当前选中效果
    <?php if(is_array($categorydown["pids"])): foreach($categorydown["pids"] as $key=>$v): ?>$(".cid-<?php echo ($v); ?>").addClass("curr");<?php endforeach; endif; ?>
//文章排序的选中效果
    <?php if(isset($_GET['order'])): ?>$(".order-<?php echo ($_GET['order']); ?>").addClass("curr");
    <?php else: ?>
    $(".order-0").addClass("curr");<?php endif; ?>
$("#Down_index").addClass("active");
</script>
</body>
</html>