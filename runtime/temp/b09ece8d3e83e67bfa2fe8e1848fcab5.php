<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:80:"/www/wwwroot/huamei.jqzxyy.com/public/../application/index/view/index/about.html";i:1561537403;s:59:"../application/index/view/index/include/contact_header.html";i:1563182661;s:49:"../application/index/view/index/include/left.html";i:1563176392;s:51:"../application/index/view/index/include/footer.html";i:1563180444;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml"><head>    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />    <title><?php if(!empty($data['name'])): ?><?php echo $data['name']; else: if(!empty($web_setting['seo_title'])): ?><?php echo $web_setting['seo_title']; endif; endif; ?></title>    <meta name="description" content="<?php if(!empty($data['intro'])): ?><?php echo $data['intro']; else: if(!empty($web_setting['seo_description'])): ?><?php echo $web_setting['seo_description']; endif; endif; ?>">    <meta name="keywords" content="<?php if(!empty($data['seo_keywords'])): ?><?php echo $data['seo_keywords']; else: if(!empty($web_setting['seo_keywords'])): ?><?php echo $web_setting['seo_keywords']; endif; endif; ?>">    <meta name="author" content="酒泉华美医疗美容医院">    <link href="/static/index/pc/css/All.css" rel="stylesheet" media="screen" type="text/css" />    <link href="/static/index/pc/css/auxiliary.css" rel="stylesheet" media="screen" type="text/css" />    <link href="/static/index/pc/css/category.css" rel="stylesheet" media="screen" type="text/css" />    <script language="javascript" src="http://www.cqddzx.com/js/jquery.js"></script>    <script language="javascript" src="http://js.cqddzx.com/js/swthead.js"></script>    <script src="/static/index/pc/js/jquery.SuperSlide.2.1.1.js" type="text/javascript"></script>    <link href="/static/index/pc/css/style.css" rel="stylesheet" type="text/css">    <!--右侧-->    <script type="text/javascript" src="/static/index/pc/js/leftdh.js"></script>    <script type="text/javascript" src="/static/index/pc/js/rightdh_zt.js"></script>    <link rel="stylesheet" type="text/css" href="/static/index/pc/css/leftdh.css" />    <link rel="stylesheet" type="text/css" href="/static/index/pc/css/rightdh_zt.css" />    <!--右侧-->    <!--文字图标-->    <link href="//netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">    <!--文字图标-->    <style>        .iw_poi_title {color:#CC5522;font-size:14px;font-weight:bold;overflow:hidden;padding-right:13px;white-space:nowrap}        .iw_poi_content {font:12px arial,sans-serif;overflow:visible;padding-top:4px;white-space:-moz-pre-wrap;word-wrap:break-word}    </style></head><body><script>    $(function() {        $('.nav_div ul li').hover(        function() {            $(this).children('.nav_con').fadeIn();            $(this).find("i").addClass('cad');        },function() {            $(this).children('.nav_con').fadeOut();            $(this).find("i").removeClass('cad');        });    });</script><div class="home_header">    <div class="top">        <ul>            <li><span>关注我们：</span>                <a href="http://wpa.qq.com/msgrd?v=3&amp;uin=995769915&amp;site=qq&amp;menu=yes" target="_blank" class="gz_wb1"></a>                <a href="https://m.weibo.cn/u/7096962212?display=0&retcode=6102" target="_blank" class="gz_wb3"></a>                <a href="javascript:;" target="_blank" class="gz_wb4"></a>                <span style=" position: absolute; top: 10px; left: 620px; display: none;"><img src="/static/index/icon/wechat_code.png" width="100"></span>            </li>            <li class="topal2">无假日医院7:30 — 19:00 &nbsp;电话：0937-2620655 </li>        </ul>    </div>    <div class="mininav">        <div class="homelogo"><a href="/"><img src="/favicon.ico" style="margin-left: 39px; margin-bottom: 5px" width="50"/></a><p style="color: white;width: 83%; font-size: 21px;">酒泉华美整形</p></div>        <div class="home_pz">            <dl>               <dd class="lc">亚洲整形<br />领创者</dd>               <dd class="aq">16项<br />安全金标准</dd>               <dd class="b">50项<br />品牌荣誉保障</dd>            </dl>        </div>        <div class="nav_t">            <ul>                <li><a href="/">首页</a></li>                <li><a href="/index/about">品牌故事</a></li>                <li><a href="/index/expertl">华美专家</a></li>                <li><a href="/index/machinel">先进设备</a></li>                <li><a href="javascript:;">真人案例</a></li>            </ul>        </div>    </div></div><div class="home_nav">    <div class="nav_div">        <ul>            <?php if(!empty($project)): if(is_array($project) || $project instanceof \think\Collection || $project instanceof \think\Paginator): $k = 0; $__LIST__ = $project;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?>            <li>                <a><i></i><span><?php echo $vo['name']; ?></span></a>                <div class="nav_con" style="display:none;">                    <div class="nav_div">                        <div class="nav_l"><img src="/static/index/pc/pctestImg/yan[1].png" /><br /><?php echo $vo['name']; ?></div>                        <div class="nav_c">                            <div class="nav_c_t">                                <?php if(!empty($vo['children'])): if(is_array($vo['children']) || $vo['children'] instanceof \think\Collection || $vo['children'] instanceof \think\Paginator): $kc = 0; $__LIST__ = $vo['children'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vc): $mod = ($kc % 2 );++$kc;?>                                <dl>                                    <dt><?php echo $vc['name']; ?></dt>                                    <dd>                                        <?php if(!empty($vc['child'])): if(is_array($vc['child']) || $vc['child'] instanceof \think\Collection || $vc['child'] instanceof \think\Paginator): $ks = 0; $__LIST__ = $vc['child'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vs): $mod = ($ks % 2 );++$ks;?>                                        <a href=""><?php echo $vs['name']; ?></a>                                        <?php endforeach; endif; else: echo "" ;endif; endif; ?>                                    </dd>                                </dl>                                <?php endforeach; endif; else: echo "" ;endif; endif; ?>                            </div>                            <div class="nav_c_b">※ 没找到自己想要的项目，请直接咨询在线医生 <a href="javascript:;" >在线咨询</a></div>                        </div>                        <div class="nav_r"><a href=""><img src="<?php echo $vo['img']; ?>"style="width: 321px;  height: 250px;"/></a></div>                    </div>                </div>            </li>            <?php endforeach; endif; else: echo "" ;endif; endif; ?>            <li><a href="/index/proall" class="qbxm">全部项目</a></li>        </ul>    </div></div><div class="list_banner banner_about"></div><script>    $(".gz_wb4").mouseover(function () {        $(this).next().show();    });    $(".gz_wb4").mouseleave(function () {        $(this).next().hide();    });</script>
<script src="/static/index/pc/js//slider/jssor.core.js" type="text/javascript"></script>
<style>
    body{background: url(/static/index/pc/icon/about_bg.jpg) center no-repeat;background-position-y: 131px;}

    .sec01 {
        width: 100%;
        height: 427px;
        overflow: hidden;
        position: relative;
    }

    .y_con {
        width: 100%;
        height: 920px;
        margin: 0 auto;
        position: relative;
    }
    .about_con h1 {
        font-family: "Times New Roman";
        font-size: 56px;
        color: #000;
        text-align: center;
        text-transform: uppercase;
        margin-top: 42px;
    }
    .animated {
        -webkit-animation-duration: 1s;
        animation-duration: 1s;
        -webkit-animation-fill-mode: both;
        animation-fill-mode: both;
    }
    .about_con h2 {
        width: 110px;
        height: 69px;
        margin: 0 auto;
        margin-top: 24px;
        margin-bottom: 10px;
    }


    .sec03 {
        width: 100%;
        height: 1014px;
        background: url(https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1559642246249&di=a6dba9d77a2a008ef98b40708789d90f&imgtype=0&src=http%3A%2F%2Fatt.aluntan.com%2Fforum%2F201805%2F03%2F105922mxoztmztqjo4tsi4.png)  no-repeat center;
        position: relative;
        overflow: hidden;
        background-position-y: 260px;
    }
    .zj_t h1 {
        font-size: 56px;
        color: #000;
        font-weight: bolder;
        text-align: center;
        padding-top: 38px;
        text-transform: uppercase;
    }
    .zj_t h2 {
        width: 111px;
        height: 57px;
        margin: 0 auto;
        background: url(http://cdpzpc.qyestar.com/statics/images/yyjj_images/azj_h2.png) center no-repeat;
        margin-top: 24px;
        margin-bottom: 28px;
    }
    .zj_t h3 {
        width: 655px;
        height: 73px;
        margin: 0 auto;
        background: url(http://huamei.juhuiny.com/zj_p.png) center no-repeat;
    }
    .sec04 {
        width: 100%;
        height: 920px;
        background: #fff;
        position: relative;
    }
    .jd_t h1 {
        font-size: 56px;
        color: #000;
        text-transform: uppercase;
        font-weight: bolder;
        text-align: center;
        padding-top: 102px;
    }
    .jd_t h2 {
        font-size: 28px;
        color: #000;
        text-align: center;
        font-family: Microsoft Yahei;
        margin-top: 28px;
        font-weight: normal;
    }
    .jd_slide {
        width: 1100px;
        height: 480px;
        margin: 64px auto;
        position: relative;
    }
    .jd_slide .bd {
        margin-left: 34px;
    }
    .jd_slide .prev {
        position: absolute;
        top: 45%;
        left: 0px;
        background: url(http://cdpzpc.qyestar.com/statics/images/yyjj_images/sb_arrow.jpg) no-repeat;
    }
    .jd_slide .prev, .jd_slide .next {
        display: block;
        width: 24px;
        height: 72px;
    }
    .jd_slide .next {
        position: absolute;
        top: 45%;
        right: 0px;
        background: url(http://cdpzpc.qyestar.com/statics/images/yyjj_images/sb_arrow.jpg) 0 -72px no-repeat;
    }
    .jd_slide .prev, .jd_slide .next {
        display: block;
        width: 24px;
        height: 72px;
    }
    .jd_pic {
        width: 288px;
        height: 473px;
        border: 1px solid #8c8c8c;
        background: #cccccc;
    }
    .jd_slide .bd ul li {
        margin: 0 28px;
        float: left;
        _display: inline;
        overflow: hidden;
        text-align: center;
    }
    /* 本例子css */
    .picMarquee-left{ overflow:hidden; position:relative; }
    .picMarquee-left .hd{ overflow:hidden;  height:30px; background:#f4f4f4; padding:0 10px;  }
    .picMarquee-left .hd .prev,.picMarquee-left .hd .next{ display:block;  width:5px; height:9px; float:right; margin-right:5px; margin-top:10px;  overflow:hidden;cursor:pointer; background:url("/static/index/pc/icon/arrow.png") no-repeat;}
    .picMarquee-left .hd .next{ background-position:0 -50px;  }
    .picMarquee-left .hd .prevStop{ background-position:-60px 0; }
    .picMarquee-left .hd .nextStop{ background-position:-60px -50px; }
    .picMarquee-left .bd{ padding:10px;   }
    .picMarquee-left .bd ul{ overflow:hidden; zoom:1; }
    .picMarquee-left .bd ul li{ margin-right: 42px; float:left; _display:inline; overflow:hidden; text-align:center; border: 1px solid #444444; border-radius: 3px;}
    .picMarquee-left .bd ul li .pic{ text-align:center; }
    .picMarquee-left .bd ul li .pic img{width: 100%;height: 439px;display: block;padding: 0px;}
    .picMarquee-left .bd ul li .pic a:hover img{ border-color:#999;  }
    .picMarquee-left .bd ul li .title{ line-height:46px; text-align: center; height: 100%;  background: #cccccc; width: 100%; font-size: 15px;   }
</style>
<div class="cate">
    <!--<script type="text/javascript" src="/static/index/pc/js/jquery.easing.js"></script><div id="fl_menu">-->    <!--<div class="label">-->        <!--<p>关于华美</p>-->        <!--<p style="font-size: 11px;line-height: 9px;letter-spacing: 3px;">About&Us</p>-->    <!--</div>-->    <!--<div class="menu">-->        <!--<a href="/index/about" <?php if(!empty($request_action)  && $request_action == 'about'): ?> style="color: #795527;;background: url(/static/index/pc/pctestImg/y_bs[1].png) 12px 24px no-repeat #dcc9ad;" <?php endif; ?> class="menu_item">华美品牌</a>-->        <!--<a href="/index/" class="menu_item" >华美事记</a>-->        <!--<a href="/index/" class="menu_item" >美例&蜕变</a>-->        <!--<a href="/index/expertl" class="menu_item" <?php if(!empty($request_action)  && $request_action == 'expertl'): ?> style="color: #795527;;background: url(/static/index/pc/pctestImg/y_bs[1].png) 12px 24px no-repeat #dcc9ad;" <?php endif; ?>>专家团队</a>-->        <!--<a href="/index/machinel" class="menu_item" <?php if(!empty($request_action)  && $request_action == 'machinel'): ?> style="color: #795527;;background: url(/static/index/pc/pctestImg/y_bs[1].png) 12px 24px no-repeat #dcc9ad;" <?php endif; ?>>先进设备</a>-->        <!--<a href="/index/contact" class="menu_item" <?php if(!empty($request_action)  && $request_action == 'contact'): ?> style="color: #795527;;background: url(/static/index/pc/pctestImg/y_bs[1].png) 12px 24px no-repeat #dcc9ad;" <?php endif; ?>>联系我们</a>-->        <!--&lt;!&ndash;<div class="side_tips">&ndash;&gt;-->            <!--&lt;!&ndash;<a href="javascript:;">&ndash;&gt;-->            <!--&lt;!&ndash;<img src="/static/index/pc/icon/zx.jpg" style="width: 100%">&ndash;&gt;-->            <!--&lt;!&ndash;</a>&ndash;&gt;-->        <!--&lt;!&ndash;</div>&ndash;&gt;-->    <!--</div>--><!--</div>--><!--<script type="text/javascript">-->    <!--/*关于我们左侧菜单的*/-->    <!--function FloatMenu(){-->        <!--var animationSpeed=1500;-->        <!--var animationEasing='easeOutQuint';-->        <!--var scrollAmount=$(document).scrollTop();-->        <!--var newPosition=menuPosition+scrollAmount;-->        <!--if (newPosition<=578) newPosition = 430;-->        <!--if (newPosition>=2460) newPosition = 2290;-->        <!--if($(window).height()<$('#fl_menu').height()+$('#fl_menu .menu').height()) {-->            <!--$('#fl_menu').css('top',menuPosition);-->        <!--} else {-->            <!--$('#fl_menu').stop().animate({top: newPosition}, animationSpeed, animationEasing);-->        <!--}-->    <!--}-->    <!--$(window).load(function(){-->        <!--menuPosition=$('#fl_menu').position().top;-->        <!--FloatMenu();-->    <!--});-->    <!--$(window).scroll(function(){-->        <!--FloatMenu();-->    <!--});--><!--</script>-->
    <div class="cate_right">
        <div class="cate_url">
            您的位置：<a href="/">首页</a>	><a href="/about/">走近华美</a> > <a href="/about/Machine/">先进设备</a>
        </div>
        <div class="mod18">
            <div id="picBox" class="picBox">
                <div class="intro">
                    <div class="sec01" id="sec01">
                        <div class="about_con y_con">
                            <h1 class="w_oh fadeInDown" style="visibility: visible; animation-name: fadeInDown;">about huamei</h1>
                            <h2 class="w_oh fadeInUp" style="visibility: visible; animation-name: fadeInUp;"></h2>
                            <p class="w_oh fadeInRight" style="font-size: 14px;width: 100%; margin: 20px auto 0px;letter-spacing: 7px; visibility: visible; animation-name: fadeInRight;">
                                <?php if(!empty($data['intro'])): ?><?php echo $data['intro']; endif; ?>
                            </p>
                        </div>
                        <div class="down_arrow"><a href="#sec02" target="_self"></a></div>
                    </div>
                    <div class="sec03" id="sec03">
                        <div class="zj_team y_con">
                            <div class="zj_t">
                                <h1>Expert team</h1>
                                <h2></h2>
                                <h3></h3>
                            </div>
                        </div>
                        <div class="down_arrow"><a href="/swt/"></a></div>
                    </div>
                    <div class="sec04" id="sec04">

                        <div class="jd_sb y_con">
                            <div class="jd_t">
                                <h1>Advanced  Equipment</h1>
                                <h2>先进设备</h2>
                            </div>
                            <div class="jd_slide">
                                <div class="picMarquee-left">
                                    <div class="hd">
                                        <a class="next"></a>
                                        <a class="prev"></a>
                                    </div>
                                    <div class="bd">
                                        <div class="tempWrap" style="overflow:hidden; position:relative; width:426px">
                                            <ul class="picList">
                                                <?php if(!empty($machine)): if(is_array($machine) || $machine instanceof \think\Collection || $machine instanceof \think\Paginator): $k = 0; $__LIST__ = $machine;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?>
                                                <li class="clone" style="float: left; width: 290px;">
                                                    <div class="pic"><a href="<?php echo url('/index/machine', ['id' => $vo['id']]); ?>" target="_blank"><img src="<?php echo $vo['img']; ?>"></a></div>
                                                    <div class="title"><a href="<?php echo url('/index/machine', ['id' => $vo['id']]); ?>" target="_blank"><?php echo $vo['name']; ?></a></div>
                                                </li>  <li class="clone" style="float: left; width: 290px;">
                                                <div class="pic"><a href="<?php echo url('/index/machine', ['id' => $vo['id']]); ?>" target="_blank"><img src="<?php echo $vo['img']; ?>"></a></div>
                                                <div class="title"><a href="<?php echo url('/index/machine', ['id' => $vo['id']]); ?>" target="_blank"><?php echo $vo['name']; ?></a></div>
                                            </li>  <li class="clone" style="float: left; width: 290px;">
                                                <div class="pic"><a href="<?php echo url('/index/machine', ['id' => $vo['id']]); ?>" target="_blank"><img src="<?php echo $vo['img']; ?>"></a></div>
                                                <div class="title"><a href="<?php echo url('/index/machine', ['id' => $vo['id']]); ?>" target="_blank"><?php echo $vo['name']; ?></a></div>
                                            </li>
                                                <?php endforeach; endif; else: echo "" ;endif; endif; ?>
                                            </ul></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <script>
                            jQuery(".picMarquee-left").slide({mainCell:".bd ul",autoPlay:true,effect:"leftMarquee",vis:3,interTime:25,trigger:"click"});
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!--左弹框-->

<!--<div class="hpf_left" id="talk" style="display: none;">-->

<!--<div class="left_bar" style="width: 172px; height: 590px; overflow: hidden;"><a target="_self" style="font-size: 19px;background: #fce207;color: #262626;text-align: center;line-height: 26px;margin-right: 12px;" onclick="close_leftbar();" href="Javascript:void(0);" class="hpf_close">×</a>-->

<!--<div id="left_a1" style="height: 100%; position: relative; margin-top: 28px; display: block;"><img src="/static/index/pc/pctestImg/hpf_01[1].png" style="position:absolute;left:0;"><a href="javascript:swtopen('');void(0)" style=" width:100%; display:block; height:100%;position: absolute; top:0;left:0"></a></div>-->

<!--</div>-->

<!--<div class="left_bar_x" style="width:50px; height:150px; overflow:hidden;position:absolute; top:0; display:none; cursor:pointer;" onmouseover="show_leftbar();"><img src="/static/index/pc/pctestImg/left_bar[1].png"></div>-->

<!--</div>-->

<!--&lt;!&ndash;左弹框-End&ndash;&gt;-->



<!--&lt;!&ndash;中间弹框&ndash;&gt;-->

<!--<div id="TC" class="talkhome" style="display:none; _position:absolute; _right:0; _top: expression(documentElement.scrollTop + documentElement.clientHeight/3)">-->

<!--<div style="display: block; width: 100%; height: 358px; position: relative;">-->

<!--<script>wpup("71")</script>-->

<!--<ul class="picmycss pic_s71" style="margin:0;padding:0;">-->

<!--<li style="position:absolute;left: 0;right: 0;margin: auto;display:block;background: url(http://qy2.cqddzx.com/Public/Uploads/15579957596889.jpeg) 50% 0% no-repeat;width:100%;height:358px;">-->

<!--<a href="javascript:swtopen('');void(0)"-->

<!--style="text-decoration:none;display:block;width:100%;height:358px;" target="_self">&nbsp;</a></li>-->

<!--<div class="num" style="position: absolute; right: 10%; bottom: 10px; display: none;"></div>-->

<!--</ul>-->

<!--</div>-->

<!--&lt;!&ndash;中间弹框-End&ndash;&gt;-->

<!--</div>-->

<!--&lt;!&ndash;右侧导航&ndash;&gt;-->

<!--<div class="swt-right" id="swt-right">-->

    <!--<ul>-->

        <!--<li class="swt-right1"><a href="javascript:void(0)" onclick="swtopen(this.title)" target="_self" title=""></a>-->

        <!--</li>-->

        <!--<li class="swt-right2"><a href="javascript:void(0)" onclick="swtopen(this.title)" target="_self" title=""></a>-->

        <!--</li>-->

        <!--<li class="swt-right3"><a href="javascript:void(0)" onclick="swtopen(this.title)" target="_self" title=""></a>-->

        <!--</li>-->

        <!--<li class="swt-right4"><a href="#" target="_blank" id="swt-right4a"></a></li>-->

        <!--<li class="swt-right6" style="top:235px"><a href="javascript:scroll(0,0);"></a></li>-->

    <!--</ul>-->

<!--</div>-->



<script>

    document.getElementById("swt-right4a").onmouseover = function () {

        document.getElementById("weixin_ewmzx").style.display = "block";

    };

    document.getElementById("swt-right4a").onmouseout = function () {

        document.getElementById("weixin_ewmzx").style.display = "none";

    };

    document.getElementById("callBtn").onclick = function () {

        lxb.call(document.getElementById("telInput"));

    };

</script>



<!-------------网页较底部------------->

<section id="yestar_footer">

    <div class="footer_info clearfix">

        <div class="center_block">

            <div class="footer_contact">

                <img src="/favicon.ico" width="50">

                <p>酒泉华美医疗美容医院</p>

            </div>

            <div class="footer_code">

                <img src="http://huamei.jqzxyy.com/static/index/icon/wechat_code.png" width="50" style="float: left; width: 97px;text-align: center;">

            </div>

            <div class="footer_address">

                <p>医院地址: 甘肃省酒泉市肃州区东大街90号</p>

                <p>联系方式：0937-2620655</p>

                <span>门诊时间：7:30 — 19:00</span>

                <p style="font-size:12px;">©copyright 2010-2019 酒泉华美医疗美容医院 陇ICP备16001738号<script type="text/javascript">

                    var cnzz_protocol = (("https:" == document.location.protocol ) ? " https://" : " http://");

                    document.write(unescape("%3Cspan id='cnzz_stat_icon_1275636803'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s23.cnzz.com/z_stat.php%3Fid%3D1275636803' type='text/javascript'%3E%3C/script%3E"));</script></p>

                <a href="" target="_blank">查看地图</a>

            </div>

        </div>

    </div>

</section>

<div class="footer-d">
    <div class="set-pro" >
    <ul>
        <li style="width: 24%;" class="le2"><img src="/static/index/pc/icon/wechat.png" width="45">&nbsp;&nbsp;&nbsp;官网商城， 限时活动立即抢购。<span  class="le"></span></li>
        <li class="le3">华美热门项目</li>
        <li class="le4">我院地址</li>
        <li class="le5" onclick="hm_swt();">联系美丽客服</li>
    </ul>


        <div class="wechat-top" style="display: none;"><img src="http://huamei.jqzxyy.com/static/index/pc/icon/wechat.png"/></div>


        <dl id="ulThree" style="display: none;">

            <dt class="footer-prol">

                <a bz1="" href="/topics/mae2018/" title="MAE极致美胸">MAE极致美胸</a>

                <a bz1="" href="/topics/pmjg/" title="蜂巢皮秒激光">蜂巢皮秒激光</a>

                <a bz1="" href="/topics/meibi2016/" title="埃菲尔美鼻">埃菲尔美鼻</a>

                <a bz1="" href="/topics/askqb/" title="奥斯卡肌因浄斑">奥斯卡肌因浄斑</a>

                <a bz1="" href="/topics/2016aerfa/" title="阿尔法美眼3.0">阿尔法美眼3.0</a>

                <a bz1="" href="/topics/jznl/" title="晶钻逆龄">晶钻逆龄</a>

                <a bz1="" href="/topics/znrz/" title="微精塑智能溶脂">微精塑智能溶脂</a>

                <a bz1="" href="/topics/2018myg/" title="美学修复美牙冠">美学修复美牙冠</a>

                <a bz1="" href="/topics/2018myg/" title="美学修复美牙冠">美学修复美牙冠</a>

                <a bz1="" href="/topics/2018myg/" title="美学修复美牙冠">美学修复美牙冠</a>

                <a bz1="" href="/topics/2018myg/" title="美学修复美牙冠">美学修复美牙冠</a>

                <a bz1="" href="/topics/2018myg/" title="美学修复美牙冠">美学修复美牙冠</a>

                <a bz1="" href="/topics/2018myg/" title="美学修复美牙冠">美学修复美牙冠</a>

                <a bz1="" href="/topics/2018myg/" title="美学修复美牙冠">美学修复美牙冠</a>

                <a bz1="" href="/topics/2018myg/" title="美学修复美牙冠">美学修复美牙冠</a>

                <a bz1="" href="/topics/2018myg/" title="美学修复美牙冠">美学修复美牙冠</a>

                <a bz1="" href="/topics/2018myg/" title="美学修复美牙冠">美学修复美牙冠</a>

                <a bz1="" href="/topics/2018myg/" title="美学修复美牙冠">美学修复美牙冠</a>

                <a bz1="" href="/topics/2018myg/" title="美学修复美牙冠">美学修复美牙冠</a>

                <a bz1="" href="/topics/2018myg/" title="美学修复美牙冠">美学修复美牙冠</a>

                <a bz1="" href="/topics/2018myg/" title="美学修复美牙冠">美学修复美牙冠</a>

                <a bz1="" href="/topics/2018myg/" title="美学修复美牙冠">美学修复美牙冠</a>

                <a bz1="" href="/topics/2018myg/" title="美学修复美牙冠">美学修复美牙冠</a>

                <a bz1="" href="/topics/2018myg/" title="美学修复美牙冠">美学修复美牙冠</a>

                <a bz1="" href="/topics/2018myg/" title="美学修复美牙冠">美学修复美牙冠</a>

                <a bz1="" href="/topics/2018myg/" title="美学修复美牙冠">美学修复美牙冠</a>

                <a bz1="" href="/topics/2018myg/" title="美学修复美牙冠">美学修复美牙冠</a>

                <a bz1="" href="/topics/2018myg/" title="美学修复美牙冠">美学修复美牙冠</a>

                <a bz1="" href="/topics/2018myg/" title="美学修复美牙冠">美学修复美牙冠</a>

                <a bz1="" href="/topics/2018myg/" title="美学修复美牙冠">美学修复美牙冠</a>

                <a bz1="" href="/topics/2018yxjz/" title="全隐形矫正">全隐形矫正</a>

                <a bz1="" href="/topics/yblp/" title="极线音波拉皮（超声刀）">极线音波拉皮 超声刀</a></dt>


            <dd>

                <span style="margin-right: 46px;">现在【预约】将为您保留专家号一周</span> <a style="background: #f70000;  padding: 4px;color: white; border-radius: 4px;" target="_blank" href="https://lut.zoosnet.net/LR/Chatpre.aspx?id=LUT15187645&lng=cn">

                <span> 联系华美官方客服</span>

            </a>

            </dd>

        </dl>

    </div>

</div>