<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:83:"/www/wwwroot/huamei.jqzxyy.com/public/../application/index/view/index/machinel.html";i:1560249160;s:59:"../application/index/view/index/include/contact_header.html";i:1563182661;s:49:"../application/index/view/index/include/left.html";i:1563176392;s:51:"../application/index/view/index/include/footer.html";i:1563180444;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml"><head>    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />    <title><?php if(!empty($data['name'])): ?><?php echo $data['name']; else: if(!empty($web_setting['seo_title'])): ?><?php echo $web_setting['seo_title']; endif; endif; ?></title>    <meta name="description" content="<?php if(!empty($data['intro'])): ?><?php echo $data['intro']; else: if(!empty($web_setting['seo_description'])): ?><?php echo $web_setting['seo_description']; endif; endif; ?>">    <meta name="keywords" content="<?php if(!empty($data['seo_keywords'])): ?><?php echo $data['seo_keywords']; else: if(!empty($web_setting['seo_keywords'])): ?><?php echo $web_setting['seo_keywords']; endif; endif; ?>">    <meta name="author" content="酒泉华美医疗美容医院">    <link href="/static/index/pc/css/All.css" rel="stylesheet" media="screen" type="text/css" />    <link href="/static/index/pc/css/auxiliary.css" rel="stylesheet" media="screen" type="text/css" />    <link href="/static/index/pc/css/category.css" rel="stylesheet" media="screen" type="text/css" />    <script language="javascript" src="http://www.cqddzx.com/js/jquery.js"></script>    <script language="javascript" src="http://js.cqddzx.com/js/swthead.js"></script>    <script src="/static/index/pc/js/jquery.SuperSlide.2.1.1.js" type="text/javascript"></script>    <link href="/static/index/pc/css/style.css" rel="stylesheet" type="text/css">    <!--右侧-->    <script type="text/javascript" src="/static/index/pc/js/leftdh.js"></script>    <script type="text/javascript" src="/static/index/pc/js/rightdh_zt.js"></script>    <link rel="stylesheet" type="text/css" href="/static/index/pc/css/leftdh.css" />    <link rel="stylesheet" type="text/css" href="/static/index/pc/css/rightdh_zt.css" />    <!--右侧-->    <!--文字图标-->    <link href="//netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">    <!--文字图标-->    <style>        .iw_poi_title {color:#CC5522;font-size:14px;font-weight:bold;overflow:hidden;padding-right:13px;white-space:nowrap}        .iw_poi_content {font:12px arial,sans-serif;overflow:visible;padding-top:4px;white-space:-moz-pre-wrap;word-wrap:break-word}    </style></head><body><script>    $(function() {        $('.nav_div ul li').hover(        function() {            $(this).children('.nav_con').fadeIn();            $(this).find("i").addClass('cad');        },function() {            $(this).children('.nav_con').fadeOut();            $(this).find("i").removeClass('cad');        });    });</script><div class="home_header">    <div class="top">        <ul>            <li><span>关注我们：</span>                <a href="http://wpa.qq.com/msgrd?v=3&amp;uin=995769915&amp;site=qq&amp;menu=yes" target="_blank" class="gz_wb1"></a>                <a href="https://m.weibo.cn/u/7096962212?display=0&retcode=6102" target="_blank" class="gz_wb3"></a>                <a href="javascript:;" target="_blank" class="gz_wb4"></a>                <span style=" position: absolute; top: 10px; left: 620px; display: none;"><img src="/static/index/icon/wechat_code.png" width="100"></span>            </li>            <li class="topal2">无假日医院7:30 — 19:00 &nbsp;电话：0937-2620655 </li>        </ul>    </div>    <div class="mininav">        <div class="homelogo"><a href="/"><img src="/favicon.ico" style="margin-left: 39px; margin-bottom: 5px" width="50"/></a><p style="color: white;width: 83%; font-size: 21px;">酒泉华美整形</p></div>        <div class="home_pz">            <dl>               <dd class="lc">亚洲整形<br />领创者</dd>               <dd class="aq">16项<br />安全金标准</dd>               <dd class="b">50项<br />品牌荣誉保障</dd>            </dl>        </div>        <div class="nav_t">            <ul>                <li><a href="/">首页</a></li>                <li><a href="/index/about">品牌故事</a></li>                <li><a href="/index/expertl">华美专家</a></li>                <li><a href="/index/machinel">先进设备</a></li>                <li><a href="javascript:;">真人案例</a></li>            </ul>        </div>    </div></div><div class="home_nav">    <div class="nav_div">        <ul>            <?php if(!empty($project)): if(is_array($project) || $project instanceof \think\Collection || $project instanceof \think\Paginator): $k = 0; $__LIST__ = $project;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?>            <li>                <a><i></i><span><?php echo $vo['name']; ?></span></a>                <div class="nav_con" style="display:none;">                    <div class="nav_div">                        <div class="nav_l"><img src="/static/index/pc/pctestImg/yan[1].png" /><br /><?php echo $vo['name']; ?></div>                        <div class="nav_c">                            <div class="nav_c_t">                                <?php if(!empty($vo['children'])): if(is_array($vo['children']) || $vo['children'] instanceof \think\Collection || $vo['children'] instanceof \think\Paginator): $kc = 0; $__LIST__ = $vo['children'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vc): $mod = ($kc % 2 );++$kc;?>                                <dl>                                    <dt><?php echo $vc['name']; ?></dt>                                    <dd>                                        <?php if(!empty($vc['child'])): if(is_array($vc['child']) || $vc['child'] instanceof \think\Collection || $vc['child'] instanceof \think\Paginator): $ks = 0; $__LIST__ = $vc['child'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vs): $mod = ($ks % 2 );++$ks;?>                                        <a href=""><?php echo $vs['name']; ?></a>                                        <?php endforeach; endif; else: echo "" ;endif; endif; ?>                                    </dd>                                </dl>                                <?php endforeach; endif; else: echo "" ;endif; endif; ?>                            </div>                            <div class="nav_c_b">※ 没找到自己想要的项目，请直接咨询在线医生 <a href="javascript:;" >在线咨询</a></div>                        </div>                        <div class="nav_r"><a href=""><img src="<?php echo $vo['img']; ?>"style="width: 321px;  height: 250px;"/></a></div>                    </div>                </div>            </li>            <?php endforeach; endif; else: echo "" ;endif; endif; ?>            <li><a href="/index/proall" class="qbxm">全部项目</a></li>        </ul>    </div></div><div class="list_banner banner_about"></div><script>    $(".gz_wb4").mouseover(function () {        $(this).next().show();    });    $(".gz_wb4").mouseleave(function () {        $(this).next().hide();    });</script>
<style>
    .mod18 .picBox{width:960px; height:546px; margin:0 auto;position:relative;overflow:hidden;}
    .mod18 .picBox li{width:960px;height: 546px; background:url(/static/index/icon/sb_bg.jpg) no-repeat;}
</style>

<script src="/static/index/pc/js/slider/jssor.core.js" type="text/javascript"></script>
<div class="cate">

    <!--<script type="text/javascript" src="/static/index/pc/js/jquery.easing.js"></script><div id="fl_menu">-->    <!--<div class="label">-->        <!--<p>关于华美</p>-->        <!--<p style="font-size: 11px;line-height: 9px;letter-spacing: 3px;">About&Us</p>-->    <!--</div>-->    <!--<div class="menu">-->        <!--<a href="/index/about" <?php if(!empty($request_action)  && $request_action == 'about'): ?> style="color: #795527;;background: url(/static/index/pc/pctestImg/y_bs[1].png) 12px 24px no-repeat #dcc9ad;" <?php endif; ?> class="menu_item">华美品牌</a>-->        <!--<a href="/index/" class="menu_item" >华美事记</a>-->        <!--<a href="/index/" class="menu_item" >美例&蜕变</a>-->        <!--<a href="/index/expertl" class="menu_item" <?php if(!empty($request_action)  && $request_action == 'expertl'): ?> style="color: #795527;;background: url(/static/index/pc/pctestImg/y_bs[1].png) 12px 24px no-repeat #dcc9ad;" <?php endif; ?>>专家团队</a>-->        <!--<a href="/index/machinel" class="menu_item" <?php if(!empty($request_action)  && $request_action == 'machinel'): ?> style="color: #795527;;background: url(/static/index/pc/pctestImg/y_bs[1].png) 12px 24px no-repeat #dcc9ad;" <?php endif; ?>>先进设备</a>-->        <!--<a href="/index/contact" class="menu_item" <?php if(!empty($request_action)  && $request_action == 'contact'): ?> style="color: #795527;;background: url(/static/index/pc/pctestImg/y_bs[1].png) 12px 24px no-repeat #dcc9ad;" <?php endif; ?>>联系我们</a>-->        <!--&lt;!&ndash;<div class="side_tips">&ndash;&gt;-->            <!--&lt;!&ndash;<a href="javascript:;">&ndash;&gt;-->            <!--&lt;!&ndash;<img src="/static/index/pc/icon/zx.jpg" style="width: 100%">&ndash;&gt;-->            <!--&lt;!&ndash;</a>&ndash;&gt;-->        <!--&lt;!&ndash;</div>&ndash;&gt;-->    <!--</div>--><!--</div>--><!--<script type="text/javascript">-->    <!--/*关于我们左侧菜单的*/-->    <!--function FloatMenu(){-->        <!--var animationSpeed=1500;-->        <!--var animationEasing='easeOutQuint';-->        <!--var scrollAmount=$(document).scrollTop();-->        <!--var newPosition=menuPosition+scrollAmount;-->        <!--if (newPosition<=578) newPosition = 430;-->        <!--if (newPosition>=2460) newPosition = 2290;-->        <!--if($(window).height()<$('#fl_menu').height()+$('#fl_menu .menu').height()) {-->            <!--$('#fl_menu').css('top',menuPosition);-->        <!--} else {-->            <!--$('#fl_menu').stop().animate({top: newPosition}, animationSpeed, animationEasing);-->        <!--}-->    <!--}-->    <!--$(window).load(function(){-->        <!--menuPosition=$('#fl_menu').position().top;-->        <!--FloatMenu();-->    <!--});-->    <!--$(window).scroll(function(){-->        <!--FloatMenu();-->    <!--});--><!--</script>-->

    <div class="cate_right">
        <div class="cate_url">
            您的位置：<a href="/">首页</a>	><a href="/about/">走近华美</a> > <a href="/about/Machine/">先进设备</a>
        </div>
        <div class="mx_title">
            <img src="http://www.cqddzx.com/2014/images/sb_title.jpg" />
            <p>华美光学美肤中心同步世界的先进激光美肤平台</p>
        </div>
        <div class="mod18">
            <span id="prev" class="btn prev"></span>
            <span id="next" class="btn next"></span>
            <div class="prev_div"><span id="prevTop" class="btn prev"></span></div>
            <div class="next_div"><span id="nextTop" class="btn next"></span></div>
            <div id="picBox" class="picBox">
                <ul class="cf">
                    <li><img src="http://www.cqddzx.com/2014/images/sb_tu1.jpg" /><div class="sb_div">
                        <span class="sb_name">Vbeam 595nm染料激光系统 （美国）</span>
                        <p>治疗血管性病变的金标准、染料激光经典之作<br />
                            源自医疗美容激光产品制造商美国Candela激光公司</p>
                        <span class="sb_span">设备简介</span>
                        <p>染料激光经典之作，拥有20多年临床应用经验。源自第一台染料激光研制者，
                            ——医疗美容激光产品制造商美国Candela激光公司。拥有的DCD动态冷却系
                            统，独特的冷却方式可实现表皮麻醉保护作用</p>
                        <span class="sb_span">治疗范围</span>
                        <p>鲜红斑痣、血管瘤、瘢痕、痤疮、去皱、祛疤去痘、深层除皱</p>
                        <span class="sb_span">非凡优势</span>
                        <p>治疗血管性疾病的较佳波长，穿透更深入；<br />
                            是能够高效治疗鲜红斑痣的仪器；<br />
                            脉宽可调，有效降低紫癜的发生；<br />
                            多个光斑尺寸可选，适用不同类型的求美者</p>
                    </div></li>
                    <li><img src="http://www.cqddzx.com/2014/images/sb_tu2.jpg" /><div class="sb_div">
                        <span class="sb_name">王者之心 （美国）</span><br />
                        <span class="sb_span">设备简介</span>
                        <p>王者之心是美国科医人公司巅峰之作，是肌肤疗愈+胶原保养的激光平台， 是<br />&quot;王者风范&quot;的豪华升级版。在保留&quot;王者风范&quot;完美的opt脉冲技术的基础上，实<br />现了前沿光子技术的更广泛应用，适用于更广泛人群</p>
                        <span class="sb_span">治疗范围</span>
                        <p>淡化斑点、改善肤色、祛黄祛黑、收缩毛孔、祛除黑头和粉刺、淡化痘印、深<br />
                            层清洁、改善油脂分泌、淡化皱纹，收紧皮肤，颈部抗衰，面部嫩肤，激光治<br />
                            疗后皮肤深层补水</p>
                        <span class="sb_span">非凡优势</span>
                        <p>更高效：它保留王者风范核心OPT完美脉冲光技术，真正使发出的脉冲全程能<br />
                            量输出平稳均一，这也是光子技术历经四代的全新突破。一次OPT治疗疗效相<br />
                            当于3-5次传统激素治疗<br />
                            更舒适：蓝宝石冷却技术对表皮进行全程冷却保护 ， 进行持续、  接触式冷却<br />
                            能有效地保护正常皮肤组织提高了皮肤治疗时的安全性，提高治疗的舒适度<br />
                            更安全：王者之心能够连续发射多个脉冲，可以将OPT光的能量在发射时均匀<br />
                            的发布输出，脉冲延迟时皮肤组织冷却，多脉冲技术能够使更多的能量可以安<br />
                            全地传递治疗部位</p>
                    </div></li>
                    <li><img src="http://www.cqddzx.com/2014/images/sb_tu3.jpg" /><div class="sb_div">
                        <span class="sb_name">青春解码仪</span>
                        <p>&nbsp;</p>
                        <span class="sb_span">设备简介</span>
                        <p>青春水密码嫩肤系统是一款快速逆转皮肤衰老的高科技仪器。 晶体治疗头分别<br />
                            在皮肤2、3、4mm处，分层聚焦、分层治疗，  有效作用于真皮层和皮下脂肪<br />
                            层刺激胶原增生和脂肪代谢，补充水份和外源性营养成份，从根本上解决皮肤<br />
                            问题。</p>
                        <p>&nbsp;</p>
                        <span class="sb_span">治疗范围</span>
                        <p>淡化皱纹，收紧皮肤，颈部抗衰，面部嫩肤，激光治疗后皮肤深层补水。</p>
                        <p>&nbsp;</p>
                        <span class="sb_span">非凡优势</span>
                        <p>无创伤、无痛苦、无副作用<br />
                            治疗时感觉舒适，见效快，效果持久</p>
                    </div></li>
                    <li><img src="http://www.cqddzx.com/2014/images/sb_tu4.jpg" /><div class="sb_div">
                        <span class="sb_name">飞顿深蓝逆时空驻颜系统</span>
                        <p>是一台真正无痛无创塑身的仪器<br />配备有单极RF、双极RF、共振单极RF的立体塑形设备<br />&nbsp;</p>
                        <span class="sb_span">设备简介</span>
                        <p>是以色列飞顿激光公司开发的无痛无创塑身仪器，集紧肤、嫩肤、除皱、溶脂<br />
                            塑身五重功效为一体，对皮肤没有任何伤害，可以说是电波拉皮的换代技术。<br />
                            在美国和欧洲备受推崇，可根据不同部位、不同皮肤结构及目的，制定不同的<br />
                            复合治疗方案，达到紧致肌肤、精雕曲线的效果。<br /> &nbsp;</p>
                        <span class="sb_span">治疗范围</span>
                        <p>橘皮皮肤、吸脂溶脂后皮肤收紧、产后修复、大小腿塑形、全面部除皱提升<br />&nbsp; </p>
                        <span class="sb_span">非凡优势</span>
                        <p>可根据不同部位、不同皮肤结构及目的，制定不同的复合治疗方案；<br />
                            连续波射频，可在皮肤上持续滑动，保障加热及治疗过程安全无痛；<br />
                            无需麻醉、无痛无创、安全、疗效持久，治疗后真皮胶原可继续增生。</p>
                    </div></li>
                    <li><img src="http://www.cqddzx.com/2014/images/sb_tu5.jpg" /><div class="sb_div">
                        <span class="sb_name">飞顿二号多波长彩光工作站</span>
                        <p>功能集成化很高的皮肤美容工作站<br />
                            以色列飞顿公司的旗帜产品</p>
                        <span class="sb_span">设备简介</span>
                        <p>应用了前沿的模块转化技术，集成多种高效能量脉冲光为一体，由585nm&mdash;9<br />
                            50nm、650nm&mdash;950nm、685nm&mdash;950nm三大特效脉冲光系组成，能选择<br />
                            性作用于皮肤的水分、黑色素和血红蛋白调理微血循环，从而解决多种浅表性<br />
                            皮肤问题。<br /> &nbsp;</p>
                        <span class="sb_span">治疗范围</span>
                        <p>嫩肤，脱毛，治疗痤疮，深层去皱，治疗毛细血管扩张、色素问题皮肤，祛除<br />
                            妊娠纹<br />&nbsp; </p>
                        <span class="sb_span">非凡优势</span>
                        <p>集嫩肤、祛斑、脱毛、治疗血管性病变等四大功效于一体的设备；<br />
                            将高能彩光系统与电源冷却系统、计算机控制系统分离，形成三大独立模块；<br />
                            多个光探头协同作用，可通过不同作用原理、作用层次和作用环节达到全面美<br />
                            肤嫩肤的效果。</p>
                    </div></li>
                    <li><img src="http://www.cqddzx.com/2014/images/sb_tu6.jpg" /><div class="sb_div">
                        <span class="sb_name">飞顿冰点脱毛系统</span><br />
                        <span class="sb_span">设备简介</span>
                        <p>以色列飞顿公司研发的经典设备，集无痛脱毛、紧肤、亮白三种功效于一体。<br />
                            SHR双脉冲技术无痛脱毛、NIR收缩毛孔紧致肌肤、LOTION滋养肌肤，<br />
                            脱毛全程如华尔兹般轻松流畅，肌肤细腻白亮。<br />&nbsp; </p>
                        <span class="sb_span">治疗范围</span>
                        <p>适应于腋毛、臂毛、腿毛、唇毛、额部发际毛、胸背毛、比基尼毛等各部位脱毛<br />&nbsp; </p>
                        <span class="sb_span">非凡优势</span>
                        <p>全程无痛，冰爽舒适： 特有的NIR红外光波通过逐步升温的方式加热真皮层
                            让毛囊温度维持在45度左右，低能量密度，全程冰点冷却，保证表皮不受损
                            伤。 快速脱毛，安全无创：独创的In-motion快速滑行技术，将激光发射频
                            率提升至10Hz，效果是传统激光脱毛的5倍，而且安全无创。缩小毛孔，紧
                            致皮肤：独特的NIR红外缩毛孔，采用红外技术精选波谱范围在900-1600n
                            m的红外光波，直接加热真皮层，刺激胶原蛋白的增生，从而达到缩小毛孔
                            紧致皮肤的多重功效。</p>
                    </div></li>
                    <li><img src="http://www.cqddzx.com/2014/images/sb_tu7.jpg" /><div class="sb_div">
                        <span class="sb_name">超脉冲点阵王</span>
                        <p>是公认的祛疤金标准治疗法</p>
                        <span class="sb_span">设备简介</span>
                        <p>超脉冲点阵换肤”提出的点阵式光热分解作用理论，是传统的选择性光热分解
                            作用理论的拓展和飞跃。超脉冲点阵激光具有多种光斑和能量传输选择，已成
                            为业内具有高功效的点阵激光系统。是公认的祛疤金标准治疗法<br />&nbsp; </p>
                        <span class="sb_span">治疗范围</span>
                        <p>各种皱纹、各种瘢痕如外伤瘢痕、皮肤松弛下坠、眼睑下垂、眼袋、痤疮印记<br />&nbsp; </p>
                        <span class="sb_span">非凡优势</span>
                        <p>个性治疗：根据个人需求，定制个性化治疗方案<br />
                            效果显著：强效祛除疤痕，平复凹凸，均匀肤色<br />
                            安全祛疤：国际前沿的进口仪器，损伤皮肤健康<br />
                            改善肤质：改善皮肤质地，恢复皮肤的光泽细嫩<br />
                            恢复快速：3-6天左右痂皮脱落 ，皮肤恢复正常</p>
                    </div></li>
                    <li><img src="http://www.cqddzx.com/2014/images/sb_tu5.jpg" /><div class="sb_div">
                        <span class="sb_name">飞顿二号多波长彩光工作站</span>
                        <p>功能集成化很高的皮肤美容工作站<br />
                            以色列飞顿公司的旗帜产品</p>
                        <span class="sb_span">设备简介</span>
                        <p>应用了前沿的模块转化技术，集成多种高效能量脉冲光为一体，由585nm&mdash;9<br />
                            50nm、650nm&mdash;950nm、685nm&mdash;950nm三大特效脉冲光系组成，能选择<br />
                            性作用于皮肤的水分、黑色素和血红蛋白调理微血循环，从而解决多种浅表性<br />
                            皮肤问题。<br /> &nbsp;</p>
                        <span class="sb_span">治疗范围</span>
                        <p>嫩肤，脱毛，治疗痤疮，深层去皱，治疗毛细血管扩张、色素问题皮肤，祛除<br />
                            妊娠纹<br />&nbsp; </p>
                        <span class="sb_span">非凡优势</span>
                        <p>集嫩肤、祛斑、脱毛、治疗血管性病变等四大功效于一体的设备；<br />
                            将高能彩光系统与电源冷却系统、计算机控制系统分离，形成三大独立模块；<br />
                            多个光探头协同作用，可通过不同作用原理、作用层次和作用环节达到全面美<br />
                            肤嫩肤的效果。</p>
                    </div></li>
                </ul>

            </div>
            <div class="list_div">
                <div id="listBox" class="listBox">
                    <ul class="cf">
                        <li class="on"><i class="arr2"></i><div><img src="http://www.cqddzx.com/2014/images/sb_xtu1.jpg"></div></li>
                        <li><i class="arr2"></i><div><img src="http://www.cqddzx.com/2014/images/sb_xtu7.jpg"></div></li>
                        <li><i class="arr2"></i><div><img src="http://www.cqddzx.com/2014/images/sb_xtu4.jpg"></div></li>
                        <li><i class="arr2"></i><div><img src="http://www.cqddzx.com/2014/images/sb_xtu5.jpg"></div></li>
                        <li><i class="arr2"></i><div><img src="http://www.cqddzx.com/2014/images/sb_xtu6.jpg"></div></li>
                        <li><i class="arr2"></i><div><img src="http://www.cqddzx.com/2014/images/sb_xtu3.jpg"></div></li>
                        <li><i class="arr2"></i><div><img src="http://www.cqddzx.com/2014/images/sb_xtu2.jpg"></div></li>
                        <li><i class="arr2"></i><div><img src="http://www.cqddzx.com/2014/images/sb_xtu6.jpg"></div></li>
                    </ul>
                </div>
            </div>
            <div class="clear"></div>
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