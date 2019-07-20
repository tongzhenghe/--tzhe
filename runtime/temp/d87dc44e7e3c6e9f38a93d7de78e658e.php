<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:47:"../application/index/view/wap/wap/wap/docl.html";i:1560063216;s:53:"../application/index/view/wap/wap/include/header.html";i:1560065679;}*/ ?>
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

<style>
    .doc-i{
        width: 45%;
        height: 93%;
        padding: 2px;
        float: left;
        box-shadow: 0px 1px 1px rgb(208, 208, 208);
        background: #ffffff;
    }
    .doc-intro{
        width: 54%;
        padding: 11px;
        float:right;
        height: 96%;
    }
   .sec01_con{
       width: 100%;
       height: 238px;
       margin-left: 8px;
       margin-top: 24px;
    }

   .doc-name {
       color: #b59958;
       font-weight: bold;
   }
.position{
    font-weight: unset;
    font-family: cursive;
    font-size: 12px;
}
    .intro-1{
        font-size: 22px;
        margin-bottom: 5px;
    }

    .ry {
        font-size: 14px;
        margin-bottom: 6px;
    }


    .sc p{
        width: 42%;
        font-size: 16px;
        background: #b59a5b;
        text-align: center;
        color: #fffefe;
        padding: 2px;
        font-weight: 700;
        margin-bottom: 3px;
        border-radius: 2px;
    }


    .sc span {
        font-size: 14px;
        font-family: auto;
        float: left;
    }


    .sc{
        width: 100%;
        height: 89px;
        margin-bottom: 10px;
    }
.mo span{
    width: 73%;
    text-align: center;
    background: #c1b59b;
    font-size: 18px;
    padding-left: 16px;
    padding-right: 16px;
    padding-top: 4px;
    line-height: 12px;
    color: #fef9ff;
    border-radius: 50px;
    padding-bottom: 4px;
}
    .mo{
        margin: auto;
        width: 79%;
        /*margin-top: 30px;*/
    }
    .xqzx{
        margin-top: 30px;
    }

</style>
<section id="sections">
    <section class="banner">
        <img src="http://huamei.juhuiny.com/%E5%BE%AE%E4%BF%A1%E5%9B%BE%E7%89%87_20190517180751.png">
    </section>
    <section class="sec01">
        <?php if(!empty($doc)): if(is_array($doc) || $doc instanceof \think\Collection || $doc instanceof \think\Paginator): $k = 0; $__LIST__ = $doc;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?>
        <div class="sec01_con">
            <div class="doc-i"><img src="<?php echo $vo['img']; ?>"></div>
            <div class="doc-intro">
                <ul class="int-ul">
                    <li class="intro-1"><span class="doc-name"><?php echo $vo['name']; ?></span><span style="font-family: monospace;">|</span><span class="position"><?php echo $vo['position']; ?></span></li>
                    <li class="ry"><?php echo $vo['honour']; ?></li>
                    <li class="sc">
                        <p>擅长项目</p>
                        <span><?php echo $vo['be_expert_in']; ?> </span>
                    </li>
                    <li class="mo"><span><a href="<?php echo url('/wap/doci', ['id' => $vo['id']]); ?>">了解详情</a></span></li>
                </ul>
            </div>
        </div>
        <?php endforeach; endif; else: echo "" ;endif; endif; ?>

    </section>
</section>
<script src="/static/index/js/footer.js" ></script>