<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:79:"/www/wwwroot/huamei.jqzxyy.com/public/../application/index/view/index/askl.html";i:1563187180;s:59:"../application/index/view/index/include/contact_header.html";i:1563182661;s:51:"../application/index/view/index/include/footer.html";i:1563180444;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml"><head>    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />    <title><?php if(!empty($data['name'])): ?><?php echo $data['name']; else: if(!empty($web_setting['seo_title'])): ?><?php echo $web_setting['seo_title']; endif; endif; ?></title>    <meta name="description" content="<?php if(!empty($data['intro'])): ?><?php echo $data['intro']; else: if(!empty($web_setting['seo_description'])): ?><?php echo $web_setting['seo_description']; endif; endif; ?>">    <meta name="keywords" content="<?php if(!empty($data['seo_keywords'])): ?><?php echo $data['seo_keywords']; else: if(!empty($web_setting['seo_keywords'])): ?><?php echo $web_setting['seo_keywords']; endif; endif; ?>">    <meta name="author" content="酒泉华美医疗美容医院">    <link href="/static/index/pc/css/All.css" rel="stylesheet" media="screen" type="text/css" />    <link href="/static/index/pc/css/auxiliary.css" rel="stylesheet" media="screen" type="text/css" />    <link href="/static/index/pc/css/category.css" rel="stylesheet" media="screen" type="text/css" />    <script language="javascript" src="http://www.cqddzx.com/js/jquery.js"></script>    <script language="javascript" src="http://js.cqddzx.com/js/swthead.js"></script>    <script src="/static/index/pc/js/jquery.SuperSlide.2.1.1.js" type="text/javascript"></script>    <link href="/static/index/pc/css/style.css" rel="stylesheet" type="text/css">    <!--右侧-->    <script type="text/javascript" src="/static/index/pc/js/leftdh.js"></script>    <script type="text/javascript" src="/static/index/pc/js/rightdh_zt.js"></script>    <link rel="stylesheet" type="text/css" href="/static/index/pc/css/leftdh.css" />    <link rel="stylesheet" type="text/css" href="/static/index/pc/css/rightdh_zt.css" />    <!--右侧-->    <!--文字图标-->    <link href="//netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">    <!--文字图标-->    <style>        .iw_poi_title {color:#CC5522;font-size:14px;font-weight:bold;overflow:hidden;padding-right:13px;white-space:nowrap}        .iw_poi_content {font:12px arial,sans-serif;overflow:visible;padding-top:4px;white-space:-moz-pre-wrap;word-wrap:break-word}    </style></head><body><script>    $(function() {        $('.nav_div ul li').hover(        function() {            $(this).children('.nav_con').fadeIn();            $(this).find("i").addClass('cad');        },function() {            $(this).children('.nav_con').fadeOut();            $(this).find("i").removeClass('cad');        });    });</script><div class="home_header">    <div class="top">        <ul>            <li><span>关注我们：</span>                <a href="http://wpa.qq.com/msgrd?v=3&amp;uin=995769915&amp;site=qq&amp;menu=yes" target="_blank" class="gz_wb1"></a>                <a href="https://m.weibo.cn/u/7096962212?display=0&retcode=6102" target="_blank" class="gz_wb3"></a>                <a href="javascript:;" target="_blank" class="gz_wb4"></a>                <span style=" position: absolute; top: 10px; left: 620px; display: none;"><img src="/static/index/icon/wechat_code.png" width="100"></span>            </li>            <li class="topal2">无假日医院7:30 — 19:00 &nbsp;电话：0937-2620655 </li>        </ul>    </div>    <div class="mininav">        <div class="homelogo"><a href="/"><img src="/favicon.ico" style="margin-left: 39px; margin-bottom: 5px" width="50"/></a><p style="color: white;width: 83%; font-size: 21px;">酒泉华美整形</p></div>        <div class="home_pz">            <dl>               <dd class="lc">亚洲整形<br />领创者</dd>               <dd class="aq">16项<br />安全金标准</dd>               <dd class="b">50项<br />品牌荣誉保障</dd>            </dl>        </div>        <div class="nav_t">            <ul>                <li><a href="/">首页</a></li>                <li><a href="/index/about">品牌故事</a></li>                <li><a href="/index/expertl">华美专家</a></li>                <li><a href="/index/machinel">先进设备</a></li>                <li><a href="javascript:;">真人案例</a></li>            </ul>        </div>    </div></div><div class="home_nav">    <div class="nav_div">        <ul>            <?php if(!empty($project)): if(is_array($project) || $project instanceof \think\Collection || $project instanceof \think\Paginator): $k = 0; $__LIST__ = $project;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?>            <li>                <a><i></i><span><?php echo $vo['name']; ?></span></a>                <div class="nav_con" style="display:none;">                    <div class="nav_div">                        <div class="nav_l"><img src="/static/index/pc/pctestImg/yan[1].png" /><br /><?php echo $vo['name']; ?></div>                        <div class="nav_c">                            <div class="nav_c_t">                                <?php if(!empty($vo['children'])): if(is_array($vo['children']) || $vo['children'] instanceof \think\Collection || $vo['children'] instanceof \think\Paginator): $kc = 0; $__LIST__ = $vo['children'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vc): $mod = ($kc % 2 );++$kc;?>                                <dl>                                    <dt><?php echo $vc['name']; ?></dt>                                    <dd>                                        <?php if(!empty($vc['child'])): if(is_array($vc['child']) || $vc['child'] instanceof \think\Collection || $vc['child'] instanceof \think\Paginator): $ks = 0; $__LIST__ = $vc['child'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vs): $mod = ($ks % 2 );++$ks;?>                                        <a href=""><?php echo $vs['name']; ?></a>                                        <?php endforeach; endif; else: echo "" ;endif; endif; ?>                                    </dd>                                </dl>                                <?php endforeach; endif; else: echo "" ;endif; endif; ?>                            </div>                            <div class="nav_c_b">※ 没找到自己想要的项目，请直接咨询在线医生 <a href="javascript:;" >在线咨询</a></div>                        </div>                        <div class="nav_r"><a href=""><img src="<?php echo $vo['img']; ?>"style="width: 321px;  height: 250px;"/></a></div>                    </div>                </div>            </li>            <?php endforeach; endif; else: echo "" ;endif; endif; ?>            <li><a href="/index/proall" class="qbxm">全部项目</a></li>        </ul>    </div></div><div class="list_banner banner_about"></div><script>    $(".gz_wb4").mouseover(function () {        $(this).next().show();    });    $(".gz_wb4").mouseleave(function () {        $(this).next().hide();    });</script><link rel="stylesheet" type="text/css" href="/static/index/pc/css/list_new.css" /><div id="content">    <div class="ho15"></div>    <div class="banner_slider"><img src="/static/index/pc/pctestImg/article_img_01.jpg" style="width: 996px;"></div>    <div id="images_pre" >        <a href=""><img src="http://huamei.juhuiny.com/botox.jpg"/></a>        <a href="/swt/"><img src="http://baidu.hzyestar.com/statics/images/shyestar/ss01.gif" width="313" height="86" /></a>    </div>    <div class="clear"></div>    <div style="width:1004px; background:#9a9a9a; float:left; height:3px; margin-top:10px; overflow:hidden;"></div>    <div id="left">        <div id="buff">当前位置：<a href="/">首页</a><span> > </span><a href="/Yestar/list-6-1.shtml">整形美容中心</a> > <a href="/Yestar/list-16-1.shtml">口唇</a> > <a href="/Yestar/list-62-1.shtml">嘴唇整形</a> >  列表</div>        <div id="blood-list">            <ul style="margin-bottom: 29px;">                <?php if(!empty($ask_alls)): if(is_array($ask_alls) || $ask_alls instanceof \think\Collection || $ask_alls instanceof \think\Paginator): $k = 0; $__LIST__ = $ask_alls;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?>                <li style="margin-top: 45px; height: 45px;">                    <img src="<?php echo $vo['icon']; ?>" style="float: left;width: 123px;    padding-left: 12px; height: 61px;"/>                    <div style="width: 79%;margin-left: 131px;">                        <h2><a href="<?php echo url('/index/aski', ['id' => $vo['id']]); ?>"><span style="font-weight:normal; color:#ff0000">[<?php echo $vo['cate_name']; ?>]</span></a>&nbsp;&nbsp;<a href="<?php echo url('/index/aski', ['id' => $vo['id']]); ?>" target="_blank"><?php echo $vo['name']; ?></a></h2>                        <p><a href="<?php echo url('/index/aski', ['id' => $vo['id']]); ?>" target="_blank"><?php echo utf8_sub_str(unserialize($vo['intro']), 0, 50). '...';?><span style="color:#774a00">[详细]</span></a></p>                    </div>                </li>                <?php endforeach; endif; else: echo "" ;endif; endif; ?>            </ul>            <?php if(!empty($ask_alls->render())): ?>            <nav class="nav_page" style=" margin: auto;  margin-top: 58px;margin-bottom: 42px;">                <?php echo $ask_alls->render(); ?>            </nav>            <?php endif; ?>        </div>        <div class="home_xbanner">            <div class="bd">                <ul class="picmycss pic_s536" style="margin:0;padding:0;">                    <?php if(!empty($hot_activity)): if(is_array($hot_activity) || $hot_activity instanceof \think\Collection || $hot_activity instanceof \think\Paginator): $k = 0; $__LIST__ = $hot_activity;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?>                    <li  style=" width: 88%; height: 94px;margin: auto;background: url(<?php echo $vo['img']; ?>) 50% 0 no-repeat;    background-size: 100%;" mz="">                        <a href="<?php echo $vo['out_url']; ?>" style="text-decoration:none;display:block;" target="_self">&nbsp;</a>                    </li>                    <?php endforeach; endif; else: echo "" ;endif; endif; ?>                </ul>            </div>        </div>        <script>jQuery(".home_xbanner").slide({mainCell:".bd ul",autoPlay:true, delayTime: 500});</script>        <div id="bannertic"> </div>    </div>    <div id="right">        <div id="right-one">            <!--右侧动画开始-->            <div id="focus">                <ul>                    <?php if(!empty($expert)): if(is_array($expert) || $expert instanceof \think\Collection || $expert instanceof \think\Paginator): $k = 0; $__LIST__ = $expert;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?>                    <li>                        <div style="left:3px; top:0px; width:295px; height:330px;"><a href="<?php echo url('/index/experti', ['id' => $vo['id']]); ?>" target="_blank"><img src="<?php echo $vo['img']; ?>" style="width: 295px; height: 315px;" /></a></div>                    </li>                    <?php endforeach; endif; else: echo "" ;endif; endif; ?>                </ul>            </div>            <!--热门专题-->            <div id="right_zt">                <ul>                    <li>                        <div style="left:3px; top:10px; width:295px; height:175px;"><a href="/zt/yx_bsk_longbi/" target="_blank"><img src="http://baidu.hzyestar.com/images/right_zj_zt/zt01.jpg" /></a></div>                    </li>                    <li>                        <div style="left:3px; top:10px; width:295px; height:175px;"><a href="/zt/yx_fx/" target="_blank"><img src="http://baidu.hzyestar.com/images/right_zj_zt/zt02.jpg" /></a></div>                    </li>                    <li>                        <div style="left:3px; top:10px; width:295px; height:175px;"><a href="/zt/zhmys/" target="_blank"><img src="http://baidu.hzyestar.com/images/right_zj_zt/zt03.jpg" /></a></div>                    </li>                </ul>            </div>            <!--热门专题  END-->        </div>        <div id="right-news">            <div class="news">其他人还关注</div>            <?php if(!empty($hot_asks)): if(is_array($hot_asks) || $hot_asks instanceof \think\Collection || $hot_asks instanceof \think\Paginator): $k = 0; $__LIST__ = $hot_asks;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?>            <a href="<?php echo url('/index/aski', ['id' => $vo['id']]); ?>" title="<?php echo $vo['intro']; ?>"><?php echo $vo['intro']; ?></a>            <?php endforeach; endif; else: echo "" ;endif; endif; ?>        </div>        <div id="project">            <div class="news">热门项目</div>            <div class="project-images"><a href="/zt/yx_mds_wqh/"><img src="http://baidu.hzyestar.com/images/list_img/c_1.jpg" /></a>                <p>眼部整形</p>            </div>            <div class="project-images"><a href="/zt/hszhlb/"><img src="http://baidu.hzyestar.com/images/list_img/c_2.jpg" /></a>                <p>鼻部整形</p>            </div>            <div class="project-images"><a href="/zt/hz_srdz/"><img src="http://baidu.hzyestar.com/images/list_img/c_3.jpg" /></a>                <p>面部整形</p>            </div>            <div class="project-images"><a href="/zt/hz_bsk/"><img src="http://baidu.hzyestar.com/images/list_img/c_4.jpg" /></a>                <p>胸部整形</p>            </div>            <div class="project-images"><a href="/zt/yx_bodyTite/"><img src="http://baidu.hzyestar.com/images/list_img/c_5.jpg" /></a>                <p>溶脂瘦身</p>            </div>            <div class="project-images"><a href="/zt/restylane/"><img src="http://baidu.hzyestar.com/images/list_img/c_6.jpg" /></a>                <p>注射美容</p>            </div>            <div class="project-images"><a href="/zt/yx_cgnf/"><img src="http://baidu.hzyestar.com/images/list_img/c_7.jpg" /></a>                <p>美白嫩肤</p>            </div>            <div class="project-images"><a href="/zt/yx_slsp/"><img src="http://baidu.hzyestar.com/images/list_img/c_8.jpg" /></a>                <p>紧肤除皱</p>            </div>            <div class="project-images"><a href="/zt/hzstz/"><img src="http://baidu.hzyestar.com/images/list_img/c_9.jpg" /></a>                <p>注射瘦腿</p>            </div>        </div>        <div style="clear:both;"></div>        <div style="margin:10px auto">            <p style="text-align:center; font-size:20px; font-weight:bold;">扫一扫，有惊喜</p>            <a><img style="width:258px; display:block; margin:0px auto;" src="http://huamei.jqzxyy.com/static/index/pc/icon/wechat.png" /></a>        </div>    </div>    <div class="ho15"></div></div>

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