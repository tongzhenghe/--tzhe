<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:82:"/www/wwwroot/huamei.jqzxyy.com/public/../application/index/view/index/contact.html";i:1562725543;s:59:"../application/index/view/index/include/contact_header.html";i:1563182661;s:49:"../application/index/view/index/include/left.html";i:1563176392;s:48:"../application/index/view/index/include/map.html";i:1560670476;s:51:"../application/index/view/index/include/footer.html";i:1563180444;}*/ ?>


<div class="cate">
    <!--<script type="text/javascript" src="/static/index/pc/js/jquery.easing.js"></script><div id="fl_menu">-->
    <div class="cate_right">
        <div class="cate_url">您的位置：<a href="/">首页</a>> <a href="<?php echo url('/index/contact'); ?>">联系我们</a></div>
        <div class="mx_title"><img src="/static/index/pc/icon/contact_icon.jpg" /></div>
        <div class="lx_div">
            <a class="lx_a1">
                <img src="/static/index/pc/icon/tel_icon.png" />
                <h4>拨打电话</h4>
                <?php if(!empty($contact['tel'])): ?>
                <p>咨询：
                    <?php if(is_array($contact['tel']) || $contact['tel'] instanceof \think\Collection || $contact['tel'] instanceof \think\Paginator): $k = 0; $__LIST__ = $contact['tel'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?>
                    <?php echo $vo; endforeach; endif; else: echo "" ;endif; ?>
                </p>
                <?php endif; ?>
            </a>
            <a class="lx_a2">
                <img src="/static/index/pc/icon/email_icon.png" />
                <h4>应聘</h4>
                <p>招聘邮箱：<?php echo $contact['recruit']->recruit_email; ?><br />
                    联系方式：<?php echo $contact['recruit']->recruit_phone; ?> <br />
                    面试地址：<?php echo $contact['recruit']->recruit_address; ?><br />
                </p>
            </a>
            <a class="lx_a3">
                <img src="/static/index/pc/icon/add_icon.png" />
                <h4>地址</h4>
                <p><?php echo $contact['address']; ?></p>
            </a>

            <a class="lx_a4">
                <img src="/static/index/pc/icon/bus_icon.png" />
                <h4>自驾</h4>
                <p><br />
                    酒泉鼓楼向东行驶至东关十字公交站<br />
                    中国银行对面</p>
            </a>
            <a class="lx_a5">
                <img src="/static/index/pc/icon/bus2_icon.png" />
                <h4>公交</h4>
                    <?php if(!empty($contact['bus'])): if(is_array($contact['bus']) || $contact['bus'] instanceof \think\Collection || $contact['bus'] instanceof \think\Paginator): $k = 0; $__LIST__ = $contact['bus'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?>
                      <p><?php echo $vo; ?></p>
                    <?php endforeach; endif; else: echo "" ;endif; endif; ?>
            </a>
        </div>

        <script type="text/javascript" src="http://api.map.baidu.com/api?key=&v=1.1&services=true"></script>


        <div class="map_div">
            <p class="ab_one_title">在线地图<span> /Online Map</span></p>

            <div class="lx_map_div" id="dituContent" >
                <!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <style type="text/css">
        body, html{width: 100%;height: 100%;margin:0;font-family:"微软雅黑";}
        #allmap {height: 500px;width:100%;overflow: hidden;}
        #result {width:100%;font-size:12px;}
        dl,dt,dd,ul,li{
            margin:0;
            padding:0;
            list-style:none;
        }
        dt{
            font-size:14px;
            font-family:"微软雅黑";
            font-weight:bold;
            border-bottom:1px dotted #000;
            padding:5px 0 5px 5px;
            margin:5px 0;
        }
        dd{
            padding:5px 0 0 5px;
        }
        li{
            line-height:28px;
        }
    </style>
    <script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=xAPZt5bLlso1HUOgtZxoKo4Y4SGZeiix"></script>
    <script type="text/javascript" src="http://api.map.baidu.com/library/SearchInfoWindow/1.5/src/SearchInfoWindow_min.js"></script>
    <link rel="stylesheet" href="http://api.map.baidu.com/library/SearchInfoWindow/1.5/src/SearchInfoWindow_min.css" />
    <title>带检索功能的信息窗口</title>
</head>
<body>
<div id="allmap">
</div>
<!--<div id="result">-->
    <!--<input type="button" value="默认样式" onclick="searchInfoWindow.open(marker);"/>-->
    <!--<input type="button" value="样式1" onclick="openInfoWindow1()"/>-->
    <!--<input type="button" value="样式2" onclick="openInfoWindow2()"/>-->
    <!--<input type="button" value="样式3" onclick="openInfoWindow3()"/>-->
<!--</div>-->
<script type="text/javascript">
    // 百度地图API功能
    var map = new BMap.Map('allmap');
    var poi = new BMap.Point(98.525093,39.750313);
    map.centerAndZoom(poi, 16);
    map.enableScrollWheelZoom();

    var content = '<div style="margin:0;line-height:20px;padding:2px;">' +
        '<img src="../img/baidu.jpg" alt="" style="float:right;zoom:1;overflow:hidden;width:100px;height:100px;margin-left:3px;"/>' +
        '地址：甘肃省酒泉市肃州区东大街90号(中国银行旁)。<br/><p style=\'font-size: 12px\'>联系我们：<a href=\'tel://0937-2620655\' style=\'color: #a70000;\'>0937-2620655</p>' +
        '</div>';

    //创建检索信息窗口对象
    var searchInfoWindow = null;
    searchInfoWindow = new BMapLib.SearchInfoWindow(map, content, {
        title  : "酒泉华美医疗美容医院",      //标题
        width  : 350,             //宽度
        height : 80,              //高度
        panel  : "panel",         //检索结果面板
        enableAutoPan : true,     //自动平移
        searchTypes   :[
            BMAPLIB_TAB_SEARCH,   //周边检索
            BMAPLIB_TAB_TO_HERE,  //到这里去
            BMAPLIB_TAB_FROM_HERE //从这里出发
        ]
    });
    var marker = new BMap.Marker(poi); //创建marker对象
    marker.enableDragging(); //marker可拖拽
    // marker.addEventListener("click", function(e){
        searchInfoWindow.open(marker);
    // });
    map.addOverlay(marker); //在地图中添加marker

    // //样式1
    // var searchInfoWindow1 = new BMapLib.SearchInfoWindow(map, "tst ", {
    //     title: "信息框1", //标题
    //     panel : "panel", //检索结果面板
    //     enableAutoPan : true, //自动平移
    //     searchTypes :[
    //         BMAPLIB_TAB_FROM_HERE, //从这里出发
    //         BMAPLIB_TAB_SEARCH   //周边检索
    //     ]
    // });
    // function openInfoWindow1() {
    //     searchInfoWindow1.open(new BMap.Point(116.319852,40.057031));
    // }
    // //样式2
    // var searchInfoWindow2 = new BMapLib.SearchInfoWindow(map, "信息框2内容", {
    //     title: "信息框2", //标题
    //     panel : "panel", //检索结果面板
    //     enableAutoPan : true, //自动平移
    //     searchTypes :[
    //         BMAPLIB_TAB_SEARCH   //周边检索
    //     ]
    // });
    // function openInfoWindow2() {
    //     searchInfoWindow2.open(new BMap.Point(116.324852,40.057031));
    // }
    // // //样式3
    // var searchInfoWindow3 = new BMapLib.SearchInfoWindow(map, "信息框3内容", {
    //     title: "信息框3", //标题
    //     width: 290, //宽度
    //     height: 40, //高度
    //     panel : "panel", //检索结果面板
    //     enableAutoPan : true, //自动平移
    //     searchTypes :[
    //     ]
    // // });
    // function openInfoWindow3() {
    //     searchInfoWindow3.open(new BMap.Point(116.328852,40.057031));
    // }
</script>
</body>
</html>

            </div>
            <a href="javascript:;" class="lxwm_a">更多路线问题 点击在线咨询</a>
        </div>
    </div>
</div>


<!--<script type="text/javascript"src="http://cbjs.baidu.com/js/m.js"></script>-->


<!--<div id="TC" class="talkhome"  style="display:none; _position:absolute; _right:0; _top: expression(documentElement.scrollTop + documentElement.clientHeight/3)">-->
    <!--<div  style="display:block; width:660px;height:450px;position: relative;"><script>wpup("71")</script></div>-->
    <!--<span><a id="closehome" class="close" href="Javascript:void(0);" onclick="closewin();return false;" target="_self">关闭</a></span>-->
    <!--<a class="right"  target="_blank" href="javascript:void(0)" onclick="swtopen(this.title)" onmousedown="this.target='_self';" title="center"   rel="nofollow" >打开</a>-->
<!--</div>-->

<!--<script charset="utf-8" src="http://lxbjs.baidu.com/api/asset/api.js?t=' + new Date().getTime() + '" data-lxb-gid="42403" data-lxb-uid="2360068" type="text/javascript"></script>-->
<!--<div class="swt-right" id="swt-right">-->
    <!--<ul>-->
        <!--<li class="swt-right1"><a href="javascript:void(0)" onclick="swtopen(this.title)" target="_self" title=""></a></li>-->
        <!--<li class="swt-right2"><a href="javascript:void(0)" onclick="swtopen(this.title)" target="_self" title=""></a></li>-->
        <!--<li class="swt-right3"><a href="javascript:void(0)" onclick="swtopen(this.title)" target="_self" title=""></a></li>-->
        <!--<li class="swt-right4"><a href="#" target="_blank" id="swt-right4a"></a></li>-->
        <!--<li class="swt-right6" style="top:235px"><a href="javascript:scroll(0,0);"></a></li>-->
    <!--</ul>-->
<!--</div>-->
<!--<div class="weixin_ewmzx" id="weixin_ewmzx" style=" width:200px; height:200px; position:fixed; top:177px; right:50px; display:none; z-index:100;"><img src="/static/index/pc/pctestImg/wxewm_zx1[1].jpg" /></div>-->
<!--<script>-->
    <!--document.getElementById("swt-right4a").onmouseover=function(){-->
        <!--document.getElementById("weixin_ewmzx").style.display="block";-->
    <!--};-->
    <!--document.getElementById("swt-right4a").onmouseout=function(){-->
        <!--document.getElementById("weixin_ewmzx").style.display="none";-->
    <!--};-->
    <!--document.getElementById("callBtn").onclick = function () {-->
        <!--lxb.call(document.getElementById("telInput"));-->
    <!--};-->
<!--</script>-->



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