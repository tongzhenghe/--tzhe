<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:50:"../application/index/view/wap/wap/wap/contact.html";i:1558345674;s:53:"../application/index/view/wap/wap/include/header.html";i:1560065679;}*/ ?>
<!doctype html>
<html>
<head>
    <meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1,user-scalable=no">
    <meta name="format-detection" content="telephone=no">
    <meta http-equiv=Content-Type content="text/html; charset=utf-8">
    <meta name="apple-mobile-web-app-capable" content="yes" >
    <title><?php if(!empty($data['seo_title'])): ?><?php echo $data['seo_title']; else: if(!empty($web_setting['seo_title'])): ?><?php echo $web_setting['seo_title']; endif; endif; ?></title>
    <meta name="description" content="<?php if(!empty($data['seo_description'])): ?><?php echo $data['seo_description']; else: if(!empty($web_setting['seo_description'])): ?><?php echo $web_setting['seo_description']; endif; endif; ?>" />
    <meta name="keywords" content="<?php if(!empty($data['seo_keywords'])): ?><?php echo $data['seo_keywords']; else: if(!empty($web_setting['seo_keywords'])): ?><?php echo $web_setting['seo_keywords']; endif; endif; ?>" />
    <link href="/static/index/css/style.css" type="text/css" rel="stylesheet"/>
    <link rel="stylesheet" media="screen and (min-width:320px) and (max-width: 900px) " href="/static/index/css/media640.css" />
    <link rel="stylesheet" href="/static/index/css/new_index.css">
    <link rel="stylesheet" href="/static/index/css/content.css">
    <link rel="stylesheet" href="/static/index/css/fontello.css">
    <link rel="stylesheet" href="/static/index/css/animate.min.css">
    <script src="/static/index/js/jquery.min.js"></script>
    <script src="/static/index/js/rem.js"></script>
    <script src="/static/index/js/wow.min.js"></script>
    <link href="/static/index/css/photoswipe.css"  type="text/css" rel="stylesheet"/>
    <link href="/static/index/css/default-skin.css"  type="text/css" rel="stylesheet"/>
    <style>body{width: 100%;}</style>
<body>
<script src="/static/index/js/photoswipe.js" ></script>
<script src="/static/index/js/photoswipe-ui-default.js" ></script>
<!--header部分-->
<script src="/static/index/js/header_tc4.js" ></script>
<!--header部分-End-->
<link rel="stylesheet" type="text/css" href="/static/index/css/model.css">
<link rel="stylesheet" type="text/css" href="/static/index/css/11swiper.min.css" />
<script src="/static/index/js/jquery-1.11.2.min.js" type="text/javascript"></script>
<script src="/static/index/js/swiper.min.js" type="text/javascript" charset="utf-8"></script>
<!--最新活动-->
<script src="/static/index/js/lxb_call.js"></script>

<div class="bannertop relative" id="bannertop">
    <div class="tempWrap" style="overflow:hidden; position:relative;">
        <ul class="bannertop_container" style="width: 1920px; position: relative; overflow: hidden; padding: 0px; margin: 0px; transition-duration: 0ms; transform: translate(-384px, 0px) translateZ(0px);">
            <?php if(!empty($activity_n_yd)): if(is_array($activity_n_yd) || $activity_n_yd instanceof \think\Collection || $activity_n_yd instanceof \think\Paginator): $k = 0; $__LIST__ = $activity_n_yd;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?>
            <li style="display: table-cell; vertical-align: top; width: 384px;"><img src="<?php echo $vo['img']; ?>" width="100%" onclick="bscnym();return false;"></li>
            <?php endforeach; endif; else: echo "" ;endif; endif; ?>
        </ul>
    </div>
    <div class="bannertop_foncus absolute"><span class="active"></span><span class=""></span><span class=""></span></div>
    <!--最新活动-End-->
</div>
<script>
    TouchSlide({ slideCell:'#bannertop',titCell:'.bannertop_foncus',mainCell:'.bannertop_container',autoPage:'<span></span>',effect:'leftLoop',delayTime:600,interTime:5000,autoPlay:true,titOnClassName:'active' });
</script>

<div id="popMenu" class="popMenu" style="width: 100%; height: 627px; position: absolute; left: 0px; top: 40px; z-index: 1000; overflow: hidden; background-color:rgba(255, 255, 255, 0.98); display: none;">
    <div class="menulists" style="transition-timing-function: cubic-bezier(0.1, 0.57, 0.1, 1); transition-duration: 0ms; transform: translate(0px, -387px) translateZ(0px);">

        <div class="menulist">
            <h3>网站导航</h3>
            <ul class="menuItems clearfix" style="overflow: hidden;">
                <li style="width: 375px;">
                    <a href="/" style="width: 92px; height: 37px;">首页</a>
                    <a href="" style="width: 92px; height: 37px;">医院简介</a>
                    <a href="" style="width: 92px; ">科室介绍</a>
                    <a href="" style="width: 92px; height: 37px;">来院路线</a></li>

                <li style="width: 375px;">
                    <a href="" style="width: 92px; height: 37px;">医生介绍</a>
                </li>

            </ul>
            <div class="menuBtn"><span>展开更多</span><i></i></div>
        </div>
        <?php if(!empty($project)): if(is_array($project) || $project instanceof \think\Collection || $project instanceof \think\Paginator): $k = 0; $__LIST__ = $project;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?>
        <div class="menulist">
            <h3><?php echo $vo['name']; ?></h3>
            <ul class="menuItems clearfix" style="overflow: hidden;">
                <?php if(!empty($vo['children'])): ?>
                <li style="width: 375px; height: 100%;">
                    <?php if(is_array($vo['children']) || $vo['children'] instanceof \think\Collection || $vo['children'] instanceof \think\Paginator): $kc = 0; $__LIST__ = $vo['children'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vc): $mod = ($kc % 2 );++$kc;?>
                    <a href="<?php if(!empty($vc['out_url'])): ?><?php echo $vc['out_url']; else: ?><?php echo url('wap/proi', ['id' => $vc['id']]); endif; ?>" style="width: 92px; height: 37px;"><?php echo $vc['name']; ?></a>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </li>
                <?php endif; ?>
            </ul>
            <div class="menuBtn"><span>展开更多</span><i></i></div>
        </div>
        <?php endforeach; endif; else: echo "" ;endif; endif; ?>
        </div>
    </div>
</div>

<div class="categoryMenu main">
    <ul class="Menu">
        <li class="Menu1"><a href="/index/wap/index">首页</a></li>
        <li class="Menu2"><a href="<?php echo url('wap/about_us'); ?>">华美品牌</a></li>
        <li class="Menu3"><a href="<?php echo url('wap/project'); ?>">项目</a></li>
        <li class="Menu4"><a href="<?php echo url('wap/docl'); ?>">专家</a></li>
        <li class="Menu5"><a href="<?php echo url('wap/real_showl'); ?>">案例</a></li>
        <li class="Menu6"><a href="<?php echo url('wap/contact'); ?>">来院路线</a></li>
    </ul>
</div>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <style type="text/css">
        body, html {width: 100%;height: 100%;margin:0;font-family:"微软雅黑";}
        #allmap{width:100%;height:200px;}
        p{margin-left:1px; font-size:14px;}
    </style>
    <script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=xAPZt5bLlso1HUOgtZxoKo4Y4SGZeiix"></script>
    <title>酒泉华美医疗美容医院</title>
</head>
<body>
<div id="allmap"></div>
</body>
<script type="text/javascript">
    // 百度地图API功能
    var map = new BMap.Map("allmap");
    var point = new BMap.Point(98.525093,39.750313);
    var marker = new BMap.Marker(point);  // 创建标注
    map.addOverlay(marker);              // 将标注添加到地图中
    map.centerAndZoom(point, 15);
    var opts = {
        width : 200,     // 信息窗口宽度
        height: 500,     // 信息窗口高度
        title : "酒泉华美医疗美容医院" , // 信息窗口标题
        enableMessage:true,//设置允许信息窗发送短息
        // message:"亲耐滴，晚上一起吃个饭吧？戳下面的链接看下地址喔~"
    };
    var infoWindow = new BMap.InfoWindow("<p style='font-size: 12px'>地址：甘肃省酒泉市肃州区东大街90号。 </p><p style='font-size: 12px'>联系我们：<a href='tel://0937-2620655' style='color: #a70000;'>0937-2620655</p>", opts);  // 创建信息窗口对象
    // marker.addEventListener("click", function(){
    map.openInfoWindow(infoWindow,point); //开启信息窗口
    // });
</script>

<style>
.titles{
    color: #543611;
    font-size: 19px;
    background: #eae7de;
    margin-right: 10px;
}
.vew{
    width: 92%;
    margin: auto;
}
 .vew ul{
     margin-top: 15px;
}
.vew ul li{
    margin-bottom: 25px;
}
</style>

<div class="vew">
    <ul>
        <li><span class="titles">医院地址：</span><span style="font-size: 16px;"><?php if(!empty($data['address'])): ?><?php echo $data['address']; endif; ?></span></li>
        <li><span class="titles">官方座机：</span><span style="font-size: 16px;"><a href="tel:<?php echo $data['recruit']->recruit_phone; ?>" style="font-size: 16px; color: #bdb093;"><?php echo $data['recruit']->recruit_phone; ?></a></span></li>
        <li><span class="titles">邮箱：</span><span style="font-size: 16px;"><?php echo $data['recruit']->recruit_email; ?></span></li>
        <li><span class="titles">公交路线：</span><span style="font-size: 16px;"><?php if(!empty($data['bus'])): ?><?php echo $data['bus']; endif; ?></span></li>
        <li><span class="titles">应聘地址：</span><span style="font-size: 16px;"> <?php echo $data['recruit']->recruit_address; ?></span></li>
        <li><span class="titles">医院官网地址：</span ><a href="huamei.jqzxyy.com" style="font-size: 16px; color: #bdb093;">huamei.jqzxyy.com</a><span></span></li>

        <li><span class="titles">24小时在线客服：</span><span>
                <?php if(!empty($data['tel'])): if(is_array($data['tel']) || $data['tel'] instanceof \think\Collection || $data['tel'] instanceof \think\Paginator): $k = 0; $__LIST__ = $data['tel'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?>
            <a href="tel:<?php echo $vo; ?>" style="font-size: 16px; color: #bdb093;"><?php echo $vo; ?></a>
                <?php endforeach; endif; else: echo "" ;endif; endif; ?>
        </span></li>
    </ul>

</div>



<script src="/static/index/js/footer.js" ></script>