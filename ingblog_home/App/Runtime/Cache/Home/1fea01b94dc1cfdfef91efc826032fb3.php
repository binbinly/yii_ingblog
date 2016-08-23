<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <title>浅谈：html5和html的区别-个人博客</title>
    <meta name="keywords" content="个人博客" />
    <meta name="description" content="" />
    <link rel="stylesheet" href="/ingblog_home/Public/css/index.css"/>
    <link rel="stylesheet" href="/ingblog_home/Public/css/style.css"/>
    <link rel="stylesheet" href="/ingblog_home/Public/css/animate.css"/>
    <script type="text/javascript" src="/ingblog_home/Public/js/jquery1.42.min.js"></script>
    <script type="text/javascript" src="/ingblog_home/Public/js/common.js"></script>
    <!--[if lt IE 9]>
    <script src="/ingblog_home/Public/js/html5.js"></script>
    <![endif]-->
</head>

<body>
<!--header start-->
<div id="header">
    <h1>个人博客</h1>
    <p>青春是打开了,就合不上的书。人生是踏上了，就回不了头的路，爱情是扔出了，就收不回的赌注。</p>
</div>
<!--header end-->
<!--nav-->
<div id="nav">
    <ul>
        <li><a href="<?php echo U('index');?>">首页</a></li>
        <li><a href="<?php echo U('about');?>">关于我</a></li>
        <li><a href="<?php echo U('shuo');?>">碎言碎语</a></li>
        <li><a href="<?php echo U('riji');?>">个人日记</a></li>
        <li><a href="<?php echo U('xc');?>">相册展示</a></li>
        <li><a href="<?php echo U('learn');?>">学无止境</a></li>
        <li><a href="<?php echo U('guestbook');?>">留言板</a></li>
        <div class="clear"></div>
    </ul>
</div>
    <!--header end-->
    <!--content start-->
    <div id="say">
     <div class="weizi">
           <div class="wz_text">当前位置：<a href="#">首页</a>><h1>碎言碎语</h1></div>
           </div>
          <ul class="say_box">
                     <div class="sy">
                         <p> 那个可以任意挥霍的年纪，人们叫它'青春'。</p>
                     </div>
                  <span class="dateview">2014-5-31</span>
          </ul>
          <ul class="say_box">
                     <div class="sy">
                         <p> 过去就像回形针，把青春一页页的固定，然后变成了一本不被出版的书。</p>
                     </div>
                  <span class="dateview">2014-5-31</span>
          </ul>
          <ul class="say_box">
                     <div class="sy">
                         <p> 时间好象一把尺子，它能衡量奋斗者前进的进程。
                         时间如同一架天平，它能称量奋斗者成果的重量；
                         时间就像一把皮鞭，它能鞭策我们追赶人生的目标。时间犹如一面战鼓，它能激励我们加快前进的脚步。</p>
                     </div>
                  <span class="dateview">2014-5-31</span>
          </ul>
          <ul class="say_box">
                     <div class="sy">
                         <p>青春，一半明媚，一半忧伤。
                         它是一本惊天地泣鬼神的着作，而我们却读的太匆忙。
                         于不经意间，青春的书籍悄然合上，以至于我们要重新研读它时，
                         却发现青春的字迹早已落满尘埃，模糊不清。</p>
                     </div>
                  <span class="dateview">2014-5-31</span>
          </ul>
     </div>
    <!--content end-->
    <!--footer-->
<div id="footer">
    <p>Design by:<a href="http://www.duanliang920.com" target="_blank">少年</a> 2014-8-9</p>
</div>
<!--footer end-->
<script type="text/javascript">jQuery(".lanmubox").slide({easing:"easeOutBounce",delayTime:400});</script>
<script  type="text/javascript" src="/ingblog_home/Public/js/nav.js"></script>

</body>
</html>