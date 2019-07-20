<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:48:"../application/index/view/wap/wap/wap/index.html";i:1562892302;s:53:"../application/index/view/wap/wap/include/header.html";i:1560065679;s:53:"../application/index/view/wap/wap/include/footer.html";i:1557887193;}*/ ?>
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

<div id="index_content">
    <div id="index_banner">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <!--banner-->
                <?php if(!empty($banner)): if(is_array($banner) || $banner instanceof \think\Collection || $banner instanceof \think\Paginator): $k = 0; $__LIST__ = $banner;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?>
                <div class="swiper-slide">
                    <a href="<?php if(!empty($vo['out_url'])): ?><?php echo $vo['out_url']; else: ?>javascript:void(0)<?php endif; ?>" <?php if(empty($vo['out_url'])): ?> onClick="bscnym();return false" <?php endif; ?>>
                    <img src="<?php echo $vo['img']; ?>">
                    </a>
                </div>
                <?php endforeach; endif; else: echo "" ;endif; endif; ?>
                <!--banner-->
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>


    <div id="index_type">

        <div id="index_recommend">
            <div id="index_recommend_box">
                <ul>
                    <?php if(!empty($goods)): if(is_array($goods) || $goods instanceof \think\Collection || $goods instanceof \think\Paginator): $k = 0; $__LIST__ = $goods;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?>
                    <li>
                        <a href="javascript:;" onClick="bscnym();return false;"><img src="<?php echo $vo['icon']; ?>"></a>
                    </li>
                    <?php endforeach; endif; else: echo "" ;endif; endif; ?>
                </ul>
            </div>
        </div>
        <div id="index_type_box">
            <ul>
                <!--服务项目-->
                <?php if(!empty($prot)): if(is_array($prot) || $prot instanceof \think\Collection || $prot instanceof \think\Paginator): $k = 0; $__LIST__ = $prot;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?>
                <li>
                    <a href="" onClick="bscnym();return false;">
                        <p><img src="<?php if(!empty($vo['icon'])): ?><?php echo $vo['icon']; endif; ?>"></p>
                    </a>
                </li>
                <?php endforeach; endif; else: echo "" ;endif; endif; ?>
                <!--更多-->
                <li> <a href="<?php echo url('/wap/project'); ?>"><img src="/static/index/icon/index-ite-more.png"></a></li>
                <!--服务项目-End-->
            </ul>
        </div>
    </div>

    <div id="index_broadcast">
        <div id="index_broadcast_title"></div>
        <div id="index_broadcast_msg">
            <div class="index_broadcast_msg" id="index_broadcast_msg_1" style="top: -5px; position: inherit;">
                <img class="data_s" style=" width: 9.3%; float: left;  margin-left: 4%;" d_src="/static/index/icon/laba.png" src="/static/index/icon/laba.png">
                <div class="index_broadcast_msg" id="index_broadcast_msg_1 index_broadcast_msg_2" style="width: 1px;">
                    <div class="swiper-container swiper-containerhot"  style="    width: 80%;  margin-top: 15px;">
                        <div class="swiper-wrapper">
                            <?php if(!empty($ask)): if(is_array($ask) || $ask instanceof \think\Collection || $ask instanceof \think\Paginator): $k = 0; $__LIST__ = $ask;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?>
                            <div class="swiper-slide"><a href="<?php echo url('/wap/aski', ['id' => $vo['id']]); ?>"><li><?php echo $vo['name']; ?></li></a></div>
                            <?php endforeach; endif; else: echo "" ;endif; endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="more"> <a href="<?php echo url('/wap/askl'); ?>" style="color: #fef9ff;">更多</a></div>
    </div>

    <script>
        var swiper222 = new Swiper('.swiper-containerhot', {
            direction: 'vertical',
            loop: true,
            autoplay: {
                delay: 2500,
                disableOnInteraction: true,
            },
            pagination: {
                el: '.swiper-paginationhot',
                clickable: true,
            },
        });
    </script>

    <!--特价优惠-->

    <style>
        .pilist{
            width: 147.667px!important;
        }
        .doclist{
            width: 176px!important;}

    </style>
    <div id="index_yh">
        <div id="index_yh_list_box_2">
            <div class="box_title"><i></i>特价优惠</div>
            <div class="swiper-container">
                <div class="swiper-wrapper" style="">

                    <?php if(!empty($goods_d)): if(is_array($goods_d) || $goods_d instanceof \think\Collection || $goods_d instanceof \think\Paginator): $k = 0; $__LIST__ = $goods_d;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?>
                    <div class="swiper-slide pilist">
                        <li>
                            <img src="<?php echo $vo['icon']; ?>" style="height: 92px;">
                            <b><?php echo $vo['name']; ?></b><br/>
                            <span>￥</span><span><?php echo $vo['price']; ?>元</span>
                            <div class="one_btn_div"><a href="javascript:;" onclick="bscnym();return false;" class="one_btn">咨询详情</a></div>
                        </li>
                    </div>
                    <?php endforeach; endif; else: echo "" ;endif; endif; ?>
                </div>
            </div>
            <!--<div class="swiper-pagination"></div>-->
        </div>
    </div>
    <!--特价优惠-End-->

    <div id="index_yh_list">
        <div class="ys_bt">华美专家团队介绍  <a href="<?php echo url('/wap/docl'); ?>" class="box_btn2">></a></div>
        <div id="index_yh_list_box">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <?php if(!empty($doc)): if(is_array($doc) || $doc instanceof \think\Collection || $doc instanceof \think\Paginator): $k = 0; $__LIST__ = $doc;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?>
                    <div class="swiper-slide doclist">
                        <li>
                            <img src="<?php echo $vo['img']; ?>" height="200">
                            <div class="doc_div">
                                <div class="piclist_zi">
                                    <b style="font-size:14px;"><?php echo $vo['name']; ?>/</b><span style="font-size:11px;"><?php echo $vo['position']; ?></span>
                                    <p style="font-size:12px;"><span style="color: #6b4709; font-weight: 700;">擅长:</span>
                                        <?php if(is_array($vo['be_expert_in']) || $vo['be_expert_in'] instanceof \think\Collection || $vo['be_expert_in'] instanceof \think\Paginator): $ke = 0; $__LIST__ = $vo['be_expert_in'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$voe): $mod = ($ke % 2 );++$ke;if(count($vo['be_expert_in']) > 2): ?><?php echo $voe; ?>..<?php endif; ?><br>
                                        <?php endforeach; endif; else: echo "" ;endif; ?>
                                    </p>
                                </div>
                                <div class="one_btn_div"><a href="<?php echo url('/wap/doci',['id' => $vo['id']]); ?>" class="one_btn">详细了解</a></div>
                            </div>
                        </li>
                    </div>
                    <?php endforeach; endif; else: echo "" ;endif; endif; ?>
                </div>
            </div>
        </div>
    </div>

    <!--真人秀-->
    <div class="part" id="diebian">
        <div class="bg12">
            <div class="top_t">
                <h1 class="h1_tit"><b>&华美  美例蜕变</b></h1>
                <div class="r_tips more"><a href="<?php echo url('/wap/real_showl'); ?>">+查看更多</a></div>
            </div>
            <div class="tab_wrap" id="diebian_tab_wrap">
                <div class="swiper_container gallery_nav">
                    <div class="swiper-wrapper">
                        <?php if(!empty($real_show)): if(is_array($real_show) || $real_show instanceof \think\Collection || $real_show instanceof \think\Paginator): $k = 0; $__LIST__ = $real_show;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?>
                        <div class="swiper-slide"><?php echo $vo['name']; ?></div>
                        <?php endforeach; endif; else: echo "" ;endif; endif; ?>
                    </div>
                </div>
                <div class="swiper_container gallery_con">
                    <div class="swiper-wrapper">
                        <?php if(!empty($real_show)): if(is_array($real_show) || $real_show instanceof \think\Collection || $real_show instanceof \think\Paginator): $k = 0; $__LIST__ = $real_show;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;if(!empty($vo['children'])): if(is_array($vo['children']) || $vo['children'] instanceof \think\Collection || $vo['children'] instanceof \think\Paginator): $kc = 0; $__LIST__ = $vo['children'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vc): $mod = ($kc % 2 );++$kc;?>
                        <div class="swiper-slide">
                            <div class="main_jour">
                                <div class="jour_name flex">
                                    <div class="jour_icon"><img src="/static/index/img/zhenr.jpg" alt=""></div>
                                    <div class="info">酒泉华美</div>
                                </div>
                                <ul class="jour_pic flex">
                                    <!--术前-->
                                    <li>
                                        <a href="javascript:void(0)" onclick="bscnym();return false;" target="_blank">
                                            <img src="<?php echo $vc['icon']; ?>" alt="">
                                            <!-- <em>Before</em> -->
                                        </a>
                                    </li>
                                    <!--术后-->
                                    <li>
                                        <a href="javascript:void(0)" onclick="bscnym();return false;" target="_blank">
                                            <img src="<?php echo $vc['img']; ?>" alt="">
                                            <!-- <em>After</em> -->
                                        </a>
                                    </li>
                                </ul>
                                <div class="jour_text">
                                    <a href="javascript:void(0)" onclick="bscnym();return false;" target="_blank">
                                        <p><?php echo $vc['intro']; ?></p>
                                    </a>
                                </div>
                                <div class="jour_other flex">
                                    <div class="icon icon_shuqian"><?php echo $vc['name']; ?></div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; endif; else: echo "" ;endif; endif; endforeach; endif; else: echo "" ;endif; endif; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="btn btn_go btn_icon"><a href="<?php echo url('/wap/real_showl'); ?>"><span>点击了解更多</span></a></div>
    </div>
    <!--真人秀-END-->

    <link href="/static/index/css/swiper.min.css"  type="text/css"/>
    <script src="/static/index/js/swiper.min.js"></script>

    <script>
        var galleryTop = new Swiper('#diebian_tab_wrap .gallery_con', {
            spaceBetween: 10,
            slidesPerView:1,
            allowTouchMove: true,
            loop:true,
            speed:500,
            loopedSlides:10
        });
        var galleryThumbs = new Swiper('#diebian_tab_wrap .gallery_nav', {
            spaceBetween: 10,
            slidesPerView:'auto',
            loop: true,
            speed:500,
            loopedSlides:10,
            slideToClickedSlide: true
        });
        galleryTop.controller.control = galleryThumbs;
        galleryThumbs.controller.control = galleryTop;

    </script>

    <div class="part" id="meipai">
        <div class="bg12">
            <div class="top_t">
                <h1 class="h1_tit"><b>&华美  造美瞬间</b></h1>
            </div>
            <div class="con_wrap">

                <div class="con_flex flex flex1">
                    <div class="con video">
                        <img class="img_bg" src="http://huamei.juhuiny.com/%E5%BE%AE%E4%BF%A1%E6%88%AA%E5%9B%BE_20190513110219.jpg" alt="<?=$video[0]['path'];?>">
                        <div class="mask">
                            <div class="pop">
                                <div class="btn_video"></div>
                                <p><?=$video[0]['name'];?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="con_flex flex flex2">
                    <div class="con video">
                        <img class="img_bg" src="http://huamei.juhuiny.com/%E5%BE%AE%E4%BF%A1%E6%88%AA%E5%9B%BE_20190513110219.jpg" alt="<?=$video[1]['path'];?>">
                        <div class="mask">
                            <div class="pop">
                                <div class="btn_video"></div>
                                <p><?=$video[1]['name'];?></p>
                            </div>
                        </div>
                    </div>
                    <div class="con video">
                        <img class="img_bg" src="http://huamei.juhuiny.com/%E5%BE%AE%E4%BF%A1%E6%88%AA%E5%9B%BE_20190513110219.jpg" alt="<?=$video[2]['path'];?>">
                        <div class="mask">
                            <div class="pop">
                                <div class="btn_video"></div>
                                <p><?=$video[2]['name'];?></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="btn btn_go btn_icon"><a href="javascript:void(0)"  onclick="bscnym();return false;" target="_blank"><span>更多视频</span></a></div>
            </div>
        </div>
        <div id="video_pop">
            <div class="v_close"></div>
        </div>
    </div>

    <style>
        .zaixian {
            display: none !important;
        }

        #footer {
            margin-bottom: 0 !important;
            display: none !important;
        }

        .sec05_con ul li i {
            padding-top: 89%;
            width: 100px;
            height: 120px;
            display: block;
        }
        #about_con1 i{background: url("/static/index/icon/1.png") no-repeat left 0px; background-size: 100%;}
        #about_con1 i:hover{background: url("/static/index/icon/1.png") no-repeat left -432px; background-size: 100%;}
        #about_con2 i{background: url("/static/index/icon/1.png") no-repeat left -1162px; background-size: 100%;}

        #about_con2 i:hover{background: url("/static/index/icon/1.png") no-repeat left -1307px; background-size: 100%;}

        #about_con3 i{background: url("/static/index/icon/1.png") no-repeat left -868px; background-size: 100%;}
        #about_con3 i:hover{background: url("/static/index/icon/1.png") no-repeat left -1015px; background-size: 100%;}
      .data_s{
         width: 100%;
        display: block;
      }

    </style>
    <section id="sections">
        <section class="sec05" style="overflow: -webkit-paged-x;">
            <div class="sec05_con">
                <ul class="slide_nav clearfix">
                    <li class="cur_active" id="about_con1"><i></i><span>关于华美</span></li>
                    <li id="about_con2"><i></i><span>先进设备</span></li>
                    <li id="about_con3"><i></i><span>荣誉资质</span></li>
                </ul>
                <ul class="sec05_item">
                    <li class="cur_active">
                        <div class="swiper-container">
                            <div class="con video">
                                <img class="img_bg" src="http://huamei.juhuiny.com/%E5%BE%AE%E4%BF%A1%E6%88%AA%E5%9B%BE_20190513175513.png" alt="http://huamei.juhuiny.com/%E5%8D%8E%E7%BE%8E%E6%AD%A3%E5%BC%8F%E7%89%883.15.mp4">
                                <div class="mask" style="height: 86%;">
                                    <div class="pop">
                                        <div class="btn_video"style="width: 2.5rem;height: 2.5rem; margin: 0 auto;background: url(/static/index/img/btn_icon_video.png) no-repeat;background-size: 100%;"></div>
                                        <p style="font-size: 15px">酒泉华美医疗美容医院</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="swiper-container2">
                            <div class="swiper-container1" style="background: white;height: 227px;">

                                <?php if(!empty($sb)): if(is_array($sb) || $sb instanceof \think\Collection || $sb instanceof \think\Paginator): $k = 0; $__LIST__ = $sb;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?>
                                <img style="width: 92%; margin: auto; border: 1px solid #c4b79c9e; padding: 1px;border-radius: 9px; height: 224px;" src="<?php echo $vo['img']; ?>">
                                <?php endforeach; endif; else: echo "" ;endif; endif; ?>
                            </div>
                        </div>
                    </li>

                      <li>
                        <div class="swiper-container3">
                            <div class="swiper-container1" style="background: white;height: 227px;">
                                <img style="width: 92%; margin: auto; border: 1px solid #c4b79c9e; padding: 1px;border-radius: 9px; height: 224px;" src="http://huamei.juhuiny.com/zizhi4.jpg">
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </section>

        <script>
            TouchSlide({ slideCell: "#sec05", titCell: ".slide_nav li", autoPlay: false, effect: 'left' });
            $('.sec05 .slide_nav li').click(function () {
                $(this).addClass('cur_active').siblings('li').removeClass('cur_active');
                $('.sec05 .sec05_item li').eq($(this).index()).addClass('cur_active').siblings('li').removeClass('cur_active');
            });
            var swiper = new Swiper('.sec05_item .swiper-container', {
                slidesPerView: 2,
                slidesPerGroup: 2,
                pagination: {
                    el: '.sec05_item .swiper-pagination',
                    clickable: true,
                },

            });
            var swiper = new Swiper('.sec05_item .swiper-container1', {
                slidesPerView: 2, slidesPerGroup: 2,
                pagination: {
                    el: '.sec05_item .swiper-pagination1',
                    clickable: true,
                },

            });
            var swiper = new Swiper('.sec05_item .swiper-container2', {
                slidesPerView: 2, slidesPerGroup: 2,
                pagination: {
                    el: '.sec05_item .swiper-pagination2',
                    clickable: true,
                },

            });
            var swiper = new Swiper('.sec05_item .swiper-container3', {
                slidesPerView: 2, slidesPerGroup: 2,
                pagination: {
                    el: '.sec05_item .swiper-pagination3',
                    clickable: true,
                },
            });
        </script>
    </section>
    <style>
        .sec_title{
            width: 70%;
            text-align: center;
            margin: auto;
        }

       .sec_title:first-child p {
            color: white;
            font-size: 25px;
            font-family: cursive;
            font-weight: 700;
        }
    </style>

    <section id="sections" style="margin-top: -34px;background: #4a3418;">
        <section class="sec11">
            <div class="sec_title"><p>公益我们一直在路上</p><p style="font-size: 15px;">从未停止，</p></div>
            <div class="sec11_con">
                <section id="sec11" class="slide_common">
                    <ul class="slide_nav clearfix">
                        <li>2012年 <img src="/static/index/testimg/sec11_icon[1].png" /></li>
                        <li>2013年<img src="/static/index/testimg/sec11_icon[1].png" /></li>
                        <li>2014年<img src="/static/index/testimg/sec11_icon[1].png" /></li>
                        <li>2015年<img src="/static/index/testimg/sec11_icon[1].png" /></li>
                        <li>2016年<img src="/static/index/testimg/sec11_icon[1].png" /></li>
                    </ul>
                    <ul class="slide_container">
                        <?php if(!empty($gy)): if(is_array($gy) || $gy instanceof \think\Collection || $gy instanceof \think\Paginator): $k = 0; $__LIST__ = $gy;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?>
                        <li><img src="<?=$vo['img'];?>" /></li>
                        <?php endforeach; endif; else: echo "" ;endif; endif; ?>
                    </ul>
                </section>
            </div>
        </section>
<script>
    var htmlb_over={
        hide:function(){
            $('html,body').height($(window).outerHeight()).css('overflow','hidden');
        },
        show:function(){
            $('html,body').height('auto').css('overflow','auto');
        }
    };
    $('.con.video .btn_video').on('click',function() {
        var thisp=$(this).parents('.con.video');
        var vid=thisp.find('.img_bg').attr('alt');
        var source_i='<video id="show_vd" autoplay="autoplay" src='+vid+' width="100%" height="100%" loop="" controls=""></video>';
        $('#video_pop').append(source_i);
        $('#video_pop').before("<div id='pop_bg_mask'></div>");
        var scrolltop=$(document).scrollTop();
        $('#video_pop').show(function(){
            htmlb_over.hide();
            $('#video_pop .v_close').on('click',function(){
                $('#video_pop video,#pop_bg_mask').remove();
                $('#video_pop,#pop_bg_mask').hide();
                htmlb_over.show();
                $(document).scrollTop(scrolltop);
            })
        });
    })
</script>
<script src="/static/index/js/TouchSlide.js"></script>
<script>
    TouchSlide({ slideCell: "#sec04", titCell: ".slide_nav li" });
    TouchSlide({ slideCell: "#sec11", titCell: ".slide_nav li" });
</script>
</section>
</div>
<script src="/static/index/js/new_index.js"></script>
<div class="bottomFooter"><a class="call_number" href="tel:0937-2620655"><img src="/static/index/icon/beauty_online.png" width="100%" height="auto"/></a>
    <!DOCTYPE html>
    <html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
        <style type="text/css">
            body, html {width: 100%;height: 100%;margin:0;font-family:"微软雅黑";}
            #allmap{width:100%;height:250px;}
            p{margin-left:1px; font-size:14px;}
            .BMap_bubble_title{    color: #9a9895;}
        </style>
        <script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=xAPZt5bLlso1HUOgtZxoKo4Y4SGZeiix"></script>
        <title>酒泉华美医疗美容医院</title>
    </head>
    <body>
    <div id="allmap"></div>
    </body>
    </html>

<script type="text/javascript">

    // 百度地图API功能
    var map = new BMap.Map("allmap");
    var point = new BMap.Point(98.525093,39.750313);
    var marker = new BMap.Marker(point);  // 创建标注
    map.addOverlay(marker);              // 将标注添加到地图中
    map.centerAndZoom(point, 15);
    var opts = {
        width : 200,     // 信息窗口宽度
        height: 100,     // 信息窗口高度
        title : "酒泉华美医疗美容医院" , // 信息窗口标题
        enableMessage:true,//设置允许信息窗发送短息
        // message:"亲耐滴，晚上一起吃个饭吧？戳下面的链接看下地址喔~"
    };
    var infoWindow = new BMap.InfoWindow("<p style='font-size: 12px'>地址：甘肃省酒泉市肃州区东大街90号。 </p><p style='font-size: 12px'>联系我们：<a href='tel://0937-2620655' style='color: #a70000;'>0937-2620655</p>", opts);  // 创建信息窗口对象
    // marker.addEventListener("click", function(){
    map.openInfoWindow(infoWindow,point); //开启信息窗口
    // });

</script>
</div>

<script src="/static/index/js/footer.js" ></script>
<style>#footTool{display:none;}</style>
