<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:79:"/www/wwwroot/huamei.jqzxyy.com/public/../application/index/view/index/subl.html";i:1560670604;s:59:"../application/index/view/index/include/contact_header.html";i:1560220813;s:59:"../application/index/view/index/include/contact_footer.html";i:1559719796;}*/ ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title><?php if(!empty($data['seo_title'])): ?><?php echo $data['seo_title']; endif; ?></title>
    <meta name="description" content="<?php if(!empty($data['seo_description'])): ?><?php echo $data['seo_description']; endif; ?>" />
    <meta name="keywords" content="<?php if(!empty($data['seo_keywords'])): ?><?php echo $data['seo_keywords']; endif; ?>" />
    <link href="/static/index/pc/css/All.css" rel="stylesheet" media="screen" type="text/css" />
    <link href="/static/index/pc/css/auxiliary.css" rel="stylesheet" media="screen" type="text/css" />
    <link href="/static/index/pc/css/category.css" rel="stylesheet" media="screen" type="text/css" />
    <script language="javascript" src="/static/index/pc/js/jquery.js"></script>
    <script language="javascript" src="http://js.cqddzx.com/js/swthead.js"></script>
    <script src="/static/index/pc/js/jquery.SuperSlide.2.1.1.js" type="text/javascript"></script>
    <link href="/static/index/pc/css/style.css" rel="stylesheet" type="text/css">
    <script src="/static/index/pc/js/own.js" type="text/javascript"></script>
    <style>
        .iw_poi_title {color:#CC5522;font-size:14px;font-weight:bold;overflow:hidden;padding-right:13px;white-space:nowrap}
        .iw_poi_content {font:12px arial,sans-serif;overflow:visible;padding-top:4px;white-space:-moz-pre-wrap;word-wrap:break-word}
    </style>
</head>

<body>
<script>
    $(function() {
        $('.nav_div ul li').hover(
        function() {
            $(this).children('.nav_con').fadeIn();
            $(this).find("i").addClass('cad');
        },function() {
            $(this).children('.nav_con').fadeOut();
            $(this).find("i").removeClass('cad');
        });
    });
</script>
<div class="home_header">
    <div class="top">
        <ul>
            <li><span>关注我们：</span>
                <a href="http://wpa.qq.com/msgrd?v=3&amp;uin=995769915&amp;site=qq&amp;menu=yes" target="_blank" class="gz_wb1"></a>
                <a href="https://m.weibo.cn/u/7096962212?display=0&retcode=6102" target="_blank" class="gz_wb3"></a>
                <a href="javascript:;" target="_blank" class="gz_wb4"></a>
                <span style=" position: absolute; top: 10px; left: 620px; display: none;"><img src="/static/index/icon/wechat_code.png" width="100"></span>
            </li>
            <li class="topal2">无假日医院7:30 — 19:00 &nbsp;电话：0937-2620655 </li>
        </ul>
    </div>
    <div class="mininav">
        <div class="homelogo"><a href="/"><img src="/favicon.ico" style="margin-left: 39px; margin-bottom: 5px" width="50"/></a><p style="color: white;width: 83%; font-size: 21px;">酒泉华美整形</p></div>
        <div class="home_pz">
            <dl>
               <dd class="lc">亚洲整形<br />领创者</dd>
               <dd class="aq">16项<br />安全金标准</dd>
               <dd class="b">50项<br />品牌荣誉保障</dd>
            </dl>
        </div>
        <div class="nav_t">
            <ul>
                <li><a href="/">首页</a></li>
                <li><a href="/index/about">品牌故事</a></li>
                <li><a href="/index/expertl">华美专家</a></li>
                <li><a href="/index/machinel">先进设备</a></li>
                <li><a href="javascript:;">真人案例</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="home_nav">
    <div class="nav_div">
        <ul>
            <?php if(!empty($project)): if(is_array($project) || $project instanceof \think\Collection || $project instanceof \think\Paginator): $k = 0; $__LIST__ = $project;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?>
            <li>
                <a><i></i><span><?php echo $vo['name']; ?></span></a>
                <div class="nav_con" style="display:none;">
                    <div class="nav_div">
                        <div class="nav_l"><img src="/static/index/pc/pctestImg/yan[1].png" /><br /><?php echo $vo['name']; ?></div>
                        <div class="nav_c">
                            <div class="nav_c_t">
                                <?php if(!empty($vo['children'])): if(is_array($vo['children']) || $vo['children'] instanceof \think\Collection || $vo['children'] instanceof \think\Paginator): $kc = 0; $__LIST__ = $vo['children'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vc): $mod = ($kc % 2 );++$kc;?>
                                <dl>
                                    <dt><?php echo $vc['name']; ?></dt>
                                    <dd>
                                        <?php if(!empty($vc['child'])): if(is_array($vc['child']) || $vc['child'] instanceof \think\Collection || $vc['child'] instanceof \think\Paginator): $ks = 0; $__LIST__ = $vc['child'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vs): $mod = ($ks % 2 );++$ks;?>
                                        <a href=""><?php echo $vs['name']; ?></a>
                                        <?php endforeach; endif; else: echo "" ;endif; endif; ?>
                                    </dd>
                                </dl>
                                <?php endforeach; endif; else: echo "" ;endif; endif; ?>
                            </div>
                            <div class="nav_c_b">※ 没找到自己想要的项目，请直接咨询在线医生 <a href="javascript:;" >在线咨询</a></div>
                        </div>
                        <div class="nav_r"><a href=""><img src="<?php echo $vo['img']; ?>" width="250px" height="200"/></a></div>
                    </div>
                </div>
            </li>
            <?php endforeach; endif; else: echo "" ;endif; endif; ?>
            <li><a href="/index/proall" class="qbxm">全部项目</a></li>
        </ul>
    </div>
</div>
<div class="list_banner banner_about"></div>
<script>
    $(".gz_wb4").mouseover(function () {
        $(this).next().show();

    });
    $(".gz_wb4").mouseleave(function () {
        $(this).next().hide();

    });
</script>

<style>

    #list{ width:1200px; margin:0 auto; padding:25px 0 0 0; overflow:hidden; background:#fff;}

    /*left*/
    .list_left{ width:290px; float:left; overflow:hidden; margin-bottom:12px;}

    .list_left .list_tit{ width:290px; height:149px; background:#563914; padding:12px 0; overflow:hidden;}
    .list_left .list_tit .bt{ margin-top:60px; font-size:30px; text-align:center; color:#fff}
    .list_left .list_name{ width:288px; border-left:1px solid #D5D5D5; border-right:1px solid #D5D5D5; background:#fff;}
    .list_left .list_name li{ padding-left:40px; width:248px; height:45px; line-height:45px; font-size:16px; border-bottom:1px solid #D5D5D5; background:#fff;}
    .list_left .list_name li a{ color:#666;}
    .list_left .list_name li a:hover{ color:#000;}
    .list_left .list_name li em{ display:block; float:right; padding:0 40px 0 0; font-style:normal; font-family:"宋体";}
    .list_left .list_name li.thisclass{ background:#EFEFEF;}

    .list_left .list_contact{ width:248px; padding:0 20px; margin:20px auto 12px auto; border:1px solid #D5D5D5; background:#F6F6F6; overflow:hidden;}
    .list_left .list_contact h3{ color:#000; font-size:18px; padding:20px 0 15px 15px; font-weight:normal; border-bottom:1px solid #E5E5E5; height:55px; line-height:55px;}
    .list_left .list_contact ul{ height:90px; border-bottom:1px solid #e1e1e1; overflow:hidden;}
    .list_left .list_contact ul li{ float:left; display:inline; width:70px; padding:6px; margin-top:6px; text-align:center;}
    .list_left .list_contact ul li a{ color:#000; font-size:14px;}
    .list_left .list_contact ul li a:hover{ color:#864076;}
    .list_left .list_contact ul li dd{ margin-top:4px;}
    .list_left .list_contact .list_cont{ display:block; margin:20px auto;}

    .list_left #lf_add{ width:288px; border:1px solid #D5D5D5; background:#F6F6F6; overflow:hidden;}
    .list_left #lf_add h2{ color:#000; font-size:18px; padding:10px 0 10px 15px; font-weight:normal; border-bottom:1px solid #E5E5E5;}
    .list_left #lf_add p{ padding:8px 0 8px 5px; font-size:16px;}

    /*right*/
    .list_right{ width:880px; margin-bottom:12px; float:right; overflow:hidden;}

    .list_right h1{ height:110px; line-height:110px; border-bottom:1px solid #E8E8E8; text-align:center; font-size:50px; font-weight:normal;}
    .list_right h1 span{ display:block; width:300px; margin:0 auto; border-bottom:1px solid #A64D8F;}

    .list_step{ font-size:33px; text-align:center; padding:33px 0; background:#EDEDED; color:#727272; font-family: "宋体"; font-weight:bold; overflow:hidden;}
    .list_step span{ font-size:20px; padding:10px 0; display:block; font-family:"Microsoft Yahei"; font-weight:normal;}

    .list_son{ width:880px; height:150px; background:#EDEDED; overflow:hidden;}
    .list_son li{ float:left; display:block; width:110px; text-align:center; cursor:pointer; background:#FFFFff; opacity:0.7; filter:alpha(opacity=70);}
    .menu0 li img{ width:110px; height:150px;}
    .menu0 li.hover{ opacity:1; filter:alpha(opacity=100);}

    .list_select{ font-size:30px; text-align:center; padding:20px 0 0 0; height:120px; color:#000; font-family: "宋体"; font-weight:bold; overflow:hidden;}
    .list_select span{ font-size:20px; padding:10px 0; display:block; font-family:"Microsoft Yahei"; font-weight:normal;}

    #select0 ul{ display:none; overflow:hidden;}
    #select0 ul.block{ display:block;}
    .list_scon li{ width:260px; height:345px; padding:9px; border:1px solid #E1E1E1; background:#fff; float:left; display:inline; margin:0 6.6px 12px 6.6px;}
    .list_scon .ls_con{ width:260px; height:260px; position:relative; overflow:hidden;}
    .list_scon .ls_con img{ width:260px; height:260px;}
    .list_scon .ls_hover{ width:260px; height:260px; position:absolute; top:0; left:0; opacity:0; overflow:visible; transition:all 0.4s ease-in-out 0s; background:rgba(0, 0, 0, 0.7);}
    .list_scon .ls_hover a.info{display:inline-block; width:260px; height:260px;opacity:0; transition: opacity 0.5s ease-in-out 0s; position:relative; top:0; left:0px;}
    .list_scon .ls_con:hover .ls_hover{ opacity:0.7; filter:alpha(opacity=70);}
    .list_scon .ls_con:hover a.info{ opacity:0.7; filter:alpha(opacity=70); transition-delay: 0.3s;}
    .list_scon h4 a{ text-align:left; height:40px; line-height:40px; font-size:19px; color:#fff; font-weight:normal}
    .list_scon .yongtu{ text-align:left; border-bottom:1px solid #D6D6D6; padding:0 0 12px 0; height:41px; overflow:hidden;}
    .list_scon .dianzan .zxzj{ font-size:15px; padding:10px; margin-left:22px; border-radius:7px}
    .list_scon .dianzan .lmxq{ font-size:15px; padding:10px; margin-left:0px; border-radius:7px}

    .dianzan{ height:20px; margin-top:26px;}
    .dianzan a{color:#000; font-size:16px; line-height:20px; text-indent:34px; border: 1px solid #a27b45; border-radius: 9px; padding: 9px;}
    .dianzan a:hover{ background-position:0 -24px;}
    h4 {
        text-align: center;
        background-color: #462e0f;
    }
</style>



<div id="list">

    <!-- ============list_left============ -->

    <div class="list_left">

        <div class="list_tit">

            <div class="bt">皮肤美容</div>

        </div>

        <div class="list_contact">

            <h3>在线预约</h3>

            <ul>

                <li><a href="/swt" rel="nofollow"><dl><dt><img src="http://www.hzyestar.com/statics/images/contact1.jpg"></dt><dd>在线咨询</dd></dl></a></li>

                <li><a href="/swt" rel="nofollow"><dl><dt><img src="http://www.hzyestar.com/statics/images/contact2.jpg"></dt><dd>最新活动</dd></dl></a></li>

                <li><a href="/swt" rel="nofollow"><dl><dt><img src="http://www.hzyestar.com/statics/images/contact3.jpg"></dt><dd>电话咨询</dd></dl></a></li>

            </ul>

            <img src="http://www.hzyestar.com/statics/images/contact.jpg" class="list_cont">

        </div>

        <div id="lf_add">

            <h2>医院地址</h2>

            <img src="http://huamei.juhuiny.com/%E5%BE%AE%E4%BF%A1%E6%88%AA%E5%9B%BE_20190616153326.png" alt="">

            <p>地址：杭州市下城区建国北路149号</p>

        </div>

    </div>

    <!-- ============list_right============ -->

    <div class="list_right">
        <a href="/swt"><img src="http://prtvl6maa.bkt.clouddn.com/%E4%B8%93%E9%A2%98_22.jpg" class="lson_banner" style="height: 412px;width: 100%;"></a>
        <div class="list_scon">
            <ul>
                <li>
                    <h4><a href="/mbnf/" class="info" title="美白嫩肤">美白嫩肤</a></h4>

                    <div class="ls_con">
                        <img src="http://www.hzyestar.com/uploads/allimg/000/27.jpg" alt="">

                        <div class="ls_hover"><a href="/gznf/2018103147240.html" class="info" title="光子嫩肤"></a></div></div>
                    <div class="yongtu"><p>肌肤的保养工作，总会是很重要的一项内容。但是只靠平时的护肤保...</p></div>
                </li>
                <li>
                <h4><a href="/qbmb/" class="info" title="祛斑美白">祛斑美白</a></h4>
                <div class="ls_con">
                    <img src="http://www.hzyestar.com/uploads/allimg/000/28.jpg" alt="">
                    <div class="ls_hover"><a href="/jgqb/2018111647372.html" class="info" title="激光祛斑"></a></div></div>
                <div class="yongtu"><p>一斑毁所有而你可有斑点的烦恼? 据小编知道，很多的女性朋友们都...</p></div>
            </li>
            </ul>
        </div>
    </div>

</div>




<section id="yestar_footer">
    <div class="footer_info clearfix">
        <div class="center_block">
            <div class="footer_contact">
                <img src="/favicon.ico" width="50">
                <p>400-808-0937</p>
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
            <li style="width: 24%;"><img src="/static/index/pc/icon/wechat.png" width="45">&nbsp;&nbsp;&nbsp;官网商城， 限时活动立即抢购。<span  class="le"></span></li>
            <li style="font-size: 15px; font-weight: 400;">华美热门项目<span  class="le"></span></li>
            <li style="font-size: 15px; font-weight: 400;">我院地址<span  class="le"></span></li>
            <li style="font-size: 15px; font-weight: 400;">联系美丽客服</li>
        </ul>
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
            <dd style="font-size: 12px">
                <span style="    margin-right: 46px;">现在【预约】将为您保留专家号一周</span> <a style="    background: #f70000;  padding: 4px;color: white; border-radius: 4px;" href="javascript:void(0);">
                <span> 联系官方客服</span>
            </a>
            </dd>
        </dl>
    </div>
</div>

