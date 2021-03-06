<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="renderer" content="webkit">
<meta http-equiv="Cache-Control" content="no-siteapp" />
<title><?php echo ($articles["name"]); ?> | 米鱼博客</title>
<meta name="keywords" content="<?php echo ($articles["keywords"]); ?>">
<meta name="description" content="<?php echo ($articles["desc"]); ?>">
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
<link rel="stylesheet" href="/maxuu/Public/Home/css/index.css" />
<link rel="stylesheet" href="/maxuu/Public/Home/plugins/codemirror/codemirror.css" />
<link rel="stylesheet" href="/maxuu/Public/Home/plugins/codemirror/ambiance.css" />
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
            <div class="container">
            <h1 class="focusbox-title">技术文摘</h1>
            <div class="focusbox-text">整理了互联网各类技术,收集IT方面的相关知识，便于学习交流，版权归原作者所有！</div>
            </div>
    </div>
            <!--container start-->
    <div class="container space30">
        <div class="row">
            <div class="col-md-8 single">

                <div class="content">
                    <header class="article-header">
                        <h1 class="article-title"><a href="#"> <?php echo ($articles["name"]); ?></a>
                        </h1>
                        <div class="article-meta">
                                <span class="item"><?php echo ($articles["add_time"]); ?></span>
                                <span class="item">作者：<?php echo ($articles["author"]); ?></span>
                                <span class="item">来源：<?php echo ($articles["source"]); ?></span>
                                <span class="item post-views">阅读(<?php echo ($articles["click"]); ?>)</span>
                                <span class="item">
                                    <a class="digest-label-link" href="<?php echo blogmkFilterURL('cid',$vv['id']);?>" target="_blank"><?php echo ($v["category_name"]); ?></a>
                                </span>
                        </div>
                    </header>

                    <article class="article-content">
                            <?php if(!empty($articles["thumb"])): ?><p class="text-center">
                                    <img class="alignnone size-full wp-image-74" src="<?php echo ($articles["thumb"]); ?>">
                                </p>
                                <?php else: endif; ?>
                            <?php echo ($articles["content"]); ?>
                            <?php if(!empty($articles["code"])): ?><p>
                                    <textarea name="code" id="code" class="codeshow"><?php echo ($articles["code"]); ?></textarea>
                                    <button class="btn btn-sm mt15" onclick="Preview(code)">运行代码</button>
                                </p>
                                <?php else: endif; ?>
                        <p class="post-copyright">本文系互联网摘录，转载请注明出处：<?php if(is_array($path)): foreach($path as $key=>$v): ?>&nbsp;
                                <a href="<?php echo U('Blog/index',array('cid'=>$v['id']));?>">
                                    <?php echo ($v["name"]); ?>
                                </a>
                                &nbsp;&gt;<?php endforeach; endif; ?>
                            &nbsp;<?php echo ($articles["name"]); ?>
                        </p>
                </article>

                    <div class="post-linkto text-center"><a class="btn btn-success btn-lg" href="<?php echo ($articles["url"]); ?>"
                                                target="_blank" >原文链接</a></div>
                    <div class="share-single"><div class="action-share bdsharebuttonbox bdshare-button-style0-16" data-bd-bind="1473947264016">
                        分享到：
                        <a class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a>
                        <a class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a>
                        <a class="bds_weixin" data-cmd="weixin" title="分享到微信"></a>
                        <a class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a>
                        <a class="bds_sqq" data-cmd="sqq" title="分享到QQ好友"></a>
                        <a class="bds_bdhome" data-cmd="bdhome" title="分享到百度新首页"></a>
                        <a class="bds_tqf" data-cmd="tqf" title="分享到腾讯朋友"></a>
                        <a class="bds_renren" data-cmd="renren" title="分享到人人网"></a>
                        <a class="bds_diandian" data-cmd="diandian" title="分享到点点网"></a>
                        <a class="bds_youdao" data-cmd="youdao" title="分享到有道云笔记"></a>
                        <a class="bds_ty" data-cmd="ty" title="分享到天涯社区"></a>
                        <a class="bds_kaixin001" data-cmd="kaixin001" title="分享到开心网"></a>
                        <a class="bds_taobao" data-cmd="taobao"></a>
                        <a class="bds_douban" data-cmd="douban" title="分享到豆瓣网"></a>
                        <a class="bds_fbook" data-cmd="fbook" title="分享到Facebook"></a>
                        <a class="bds_twi" data-cmd="twi" title="分享到Twitter"></a>
                        <a class="bds_mail" data-cmd="mail" title="分享到邮件分享"></a>
                        <a class="bds_copy" data-cmd="copy" title="分享到复制网址"></a>
                        <a class="bds_more" data-cmd="more">更多</a>
                        (<a class="bds_count" data-cmd="count" title="累计分享0次">0</a>)
                    </div>
                        <script>
                            window._bd_share_config = {
                                common: {
                                    "bdText": "",
                                    "bdMini": "2",
                                    "bdMiniList": false,
                                    "bdPic": "",
                                    "bdStyle": "0"
                                },
                                share: [{
                                    bdCustomStyle: "http://7xsqlc.com1.z0.glb.clouddn.com/css/share.css"
                                }]
                            }
                            with(document) 0[(getElementsByTagName("head")[0] || body).appendChild(createElement("script")).src = "http://bdimg.share.baidu.com/static/api/js/share.js?cdnversion=" + ~(-new Date() / 36e5)];
                        </script></div>
                        <div class="article-tags">标签：
                            <?php if(is_array($keywords)): foreach($keywords as $key=>$v): ?><a href="javascript:void(0)" ><?php echo ($v); ?></a><?php endforeach; endif; ?>
                        </div>
                    <ul class="pager clearfix">
                        <?php if(empty($prev)): else: ?>
                            <li class="previous">
                                <a title="<?php echo ($prev["name"]); ?>" href="<?php echo U('Blog/articles',array('id'=>$prev['id']));?>" data-toggle="tooltip" data-original-title="<?php echo ($prev["name"]); ?>">上一篇</a>
                            </li><?php endif; ?>
                        <?php if(empty($next)): else: ?>
                            <li class="next">
                                <a title="<?php echo ($next["name"]); ?>" href="<?php echo U('Blog/articles',array('id'=>$next['id']));?>" data-toggle="tooltip" data-original-title="<?php echo ($next["name"]); ?>">下一篇</a>
                            </li><?php endif; ?>
                    </ul>

                    <div class="relates">
                        <h3>推荐相关：</h3>
                        <ul>
                            <?php if(is_array($recommend["data"])): foreach($recommend["data"] as $key=>$v): ?><li>
                                    <a href="<?php echo U('Blog/articles',array('id'=>$v['id']));?>"><?php echo ($v["name"]); ?></a>
                                    <time><?php echo ($v["add_time"]); ?></time>
                                </li><?php endforeach; endif; ?>

                        </ul>
                    </div>
                </div>

                    <!-- 多说评论框 start -->
                    <div class="blog-comments mtop15">
                        <div class="ds-thread" data-thread-key="<?php echo ($articles["id"]); ?>" data-title="<?php echo ($articles["name"]); ?>" data-url="/maxuu/Home/Blog/articles"></div>
                <!-- 多说评论框 end -->
                        </div>
                    </div>

           <div class="col-md-4 sidebar">
                <div class="widget widget-posts">
                    <h3>最新文摘</h3>
                    <ul>
                        <?php if(is_array($latest["data"])): foreach($latest["data"] as $key=>$v): ?><li>
                                <a href="<?php echo U('Blog/articles',array(id=>$v['id']));?>">
                                    <dl class="hot-article">
                                        <dt>
                                            <?php if(!empty($v["thumb"])): ?><img class="thumb" src="<?php echo ($v["thumb"]); ?>" >
                                                <?php else: endif; ?>
                                        </dt>
                                        <dd><span class="text"><?php echo ($v["name"]); ?></span></dd>
                                        <dd><span class="muted"><?php echo ($v["add_time"]); ?></span><span class="muted">阅读(<?php echo ($v["click"]); ?>)</span></dd>
                                    </dl>
                                </a>
                            </li><?php endforeach; endif; ?>
                    </ul>
                </div>

                <div class="widget widget-posts">
                   <a href="#" target="_blank" rel="nofollow"><img src="http://7xsqlc.com1.z0.glb.clouddn.com/banner/small-1.jpg" class="full-img"></a>
                </div>

                <div class="widget widget-posts" >
                    <a href="#" target="_blank" rel="nofollow"><img src="http://7xsqlc.com1.z0.glb.clouddn.com/banner/small-4.jpg" class="full-img"></a>
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
<script src="/maxuu/Public/Home/plugins/codemirror/codemirror.js"></script>
<script src="/maxuu/Public/Home/plugins/codemirror/mode/javascript/javascript.js"></script>
<!-- 多说公共JS代码 start (一个网页只需插入一次) -->
<script type="text/javascript">
var duoshuoQuery = {short_name:"maceuu"};
        (function() {
                var ds = document.createElement('script');
                ds.type = 'text/javascript';ds.async = true;
                ds.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') + '//static.duoshuo.com/embed.js';
                ds.charset = 'UTF-8';
                (document.getElementsByTagName('head')[0]
                 || document.getElementsByTagName('body')[0]).appendChild(ds);
        })();
        $("#Blog_index").addClass("active");
        </script>
<!-- 多说公共JS代码 end -->

<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "https://hm.baidu.com/hm.js?ced2bfdf081a8c7f45add898cecdacc2";
  var s = document.getElementsByTagName("script")[0];
  s.parentNode.insertBefore(hm, s);
})();

    $(document).ready(function () {
        if (!document.getElementById("code")) {
            return false;
        }
        var editor_one = CodeMirror.fromTextArea(document.getElementById("code"), {
            lineNumbers: true,
            matchBrackets: true,
            styleActiveLine: true,
            theme: "ambiance"
        });
    });


//运行文本域代码
function Preview(obj) {
    var TestWin=window.open('','',''); //打开一个窗口并赋给变量TestWin。
    TestWin.opener = null // 防止代码对论谈页面修改
    TestWin.document.write(obj.value); //向这个打开的窗口中写入代码code，这样就实现了运行代码功能。
    TestWin.document.close();
};

</script>
<script type="text/javascript" src="/maxuu/Public/Home/plugins/syntaxhighlighter/scripts/shCore.js"></script>
<script type="text/javascript" src="/maxuu/Public/Home/plugins/syntaxhighlighter/scripts/shBrushCss.js"></script>
<script type="text/javascript" src="/maxuu/Public/Home/plugins/syntaxhighlighter/scripts/shBrushJava.js"></script>
<script type="text/javascript" src="/maxuu/Public/Home/plugins/syntaxhighlighter/scripts/shBrushJScript.js"></script>
<script type="text/javascript" src="/maxuu/Public/Home/plugins/syntaxhighlighter/scripts/shBrushPhp.js"></script>
<script type="text/javascript" src="/maxuu/Public/Home/plugins/syntaxhighlighter/scripts/shBrushRuby.js"></script>
<script type="text/javascript" src="/maxuu/Public/Home/plugins/syntaxhighlighter/scripts/shBrushSql.js"></script>
<script type="text/javascript" src="/maxuu/Public/Home/plugins/syntaxhighlighter/scripts/shBrushXml.js"></script>
<link type="text/css" rel="stylesheet" href="/maxuu/Public/Home/plugins/syntaxhighlighter/styles/shCore.css"/>
<link type="text/css" rel="stylesheet" href="/maxuu/Public/Home/plugins/syntaxhighlighter/styles/shThemeRDark.css"/>
<script type="text/javascript">
  SyntaxHighlighter.all();
</script>
</body>
</html>