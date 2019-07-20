<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:80:"/www/wwwroot/huamei.jqzxyy.com/public/../application/index/view/index/index.html";i:1562740714;s:51:"../application/index/view/index/include/header.html";i:1563183557;s:51:"../application/index/view/index/include/footer.html";i:1563180444;}*/ ?>

<html xmlns="http://www.w3.org/1999/xhtml"><head>    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">    <meta name="baidu-site-verification" content="rxRzIGHzS0"/>    <title><?php if(!empty($data['seo_title'])): ?><?php echo $data['seo_title']; else: if(!empty($web_setting['seo_title'])): ?><?php echo $web_setting['seo_title']; endif; endif; ?></title>    <meta name="description" content="<?php if(!empty($data['seo_description'])): ?><?php echo $data['seo_description']; else: if(!empty($web_setting['seo_description'])): ?><?php echo $web_setting['seo_description']; endif; endif; ?>">    <meta name="keywords" content="<?php if(!empty($data['seo_keywords'])): ?><?php echo $data['seo_keywords']; else: if(!empty($web_setting['seo_keywords'])): ?><?php echo $web_setting['seo_keywords']; endif; endif; ?>">    <meta name="author" content="酒泉华美医疗美容医院">    <base target="_blank">    <link href="/static/index/pc/css/main.css?12" rel="stylesheet" type="text/css">    <link href="/static/index/pc/css/style.css" rel="stylesheet" type="text/css">    <link href="/static/index/pc/css/auxiliary.css" rel="stylesheet" media="screen" type="text/css">    <script language="javascript" src="/static/index/pc/js/jquery.js"></script>    <script src="/static/index/pc/js/jquery.SuperSlide.2.1.1.js" type="text/javascript"></script>    <script src="/static/index/pc/js/own.js" type="text/javascript"></script></head><body><div class="site_head" style="background:#FFF; font-size:14px; color:#000;">    <div class="wid1200">        <div class="head_top">            <a href="/" style="color:#000;"><span>酒泉华美医疗美容医院</span></a>            <span>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;</span>            <a href="javascript:hm_swt();void(0)" style="color:#000;"><span>联系我们</span></a>            <span>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;</span>            <a href="/index/askl" style="color:#000;"><span>问答专栏</span></a>            <span style="float:right;">全国咨询电话：0937-2620655</span>        </div>        <div><img src="http://huamei.juhuiny.com/%E5%BE%AE%E4%BF%A1%E5%9B%BE%E7%89%87_20190616180100.png" alt="logo" style="margin-left: 408px; width: 26%; margin-bottom: 20px;"></div>    </div></div><style>    .xm_t dl dd a:after {    }</style><div class="site_nav">    <div class="site_nav_cen">        <div class="site_nav_xm">            <a class="site_fwxm">诊疗项目<i class="i"></i></a>            <div class="Z_MenuList">                <ul>                    <?php if(!empty($project)): if(is_array($project) || $project instanceof \think\Collection || $project instanceof \think\Paginator): $k = 0; $__LIST__ = $project;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?>                    <li>                        <a class="nav_icon1"><?php echo $vo['name']; ?></a>                        <div class="Z_SubList">                            <div class="Z_SubList_xm">                                <div class="xm_t">                                    <?php if(!empty($vo['children'])): if(is_array($vo['children']) || $vo['children'] instanceof \think\Collection || $vo['children'] instanceof \think\Paginator): $kc = 0; $__LIST__ = $vo['children'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vc): $mod = ($kc % 2 );++$kc;?>                                    <dl>                                        <dt><a href="<?php echo url('/index/proi', ['id' => $vc['id']]); ?>"><?php echo $vc['name']; ?></a></dt>                                        <dd>                                            <?php if(!empty($vc['child'])): if(is_array($vc['child']) || $vc['child'] instanceof \think\Collection || $vc['child'] instanceof \think\Paginator): $ks = 0; $__LIST__ = $vc['child'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vs): $mod = ($ks % 2 );++$ks;?>                                            <a href="" class="hot" <?php if($vs['is_hot'] == 1): ?> style="background: red" <?php endif; ?>><?php echo $vs['name']; ?></a>                                            <?php endforeach; endif; else: echo "" ;endif; endif; ?>                                        </dd>                                    </dl>                                    <?php endforeach; endif; else: echo "" ;endif; endif; ?>                                </div>                                <link href="//netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">                                <p class="Z_SubList_p"><a href="<?php if(!empty($web_setting['bscnym_path'])): ?><?php echo $web_setting['bscnym_path']; endif; ?>">※ 没找到自己想要的项目，请直接咨询在线医生<i class="fa fa-long-arrow-right" aria-hidden="true" style="font-size: 20px; font-weight:500;margin-left: 10px;"></i></a></p></div>                            <div class="Z_SubList_r">                                <a href="javascript:;">                                    <img src="<?php echo $vo['img']; ?>" style="width: 400px; height: 360px;"></a>                            </div>                        </div>                    </li>                    <?php endforeach; endif; else: echo "" ;endif; endif; ?>                </ul>            </div>        </div>        <ul>            <li><a href="/">首页</a><i></i></li>            <li><a href="javascript:;" onclick="hm_swt()" >最新活动</a><i></i></li>            <li><a href="<?php echo url('/index/contact'); ?>">联系我们</a><i></i></li>            <li><a href="<?php echo url('/index/askl'); ?>">问答专栏</a><i></i></li>            <li><a href="/index/expertl" style="color: #efd987; font-size: 22px;">医师团队</a><i></i></li>            <li><a href="/index/about/" style="color: #efd987; font-size: 22px;">华美品牌</a><i></i></li>        </ul>    </div></div>
<!--banner-->
<div id="slideBox" class="site_banner" style="display: block; width: 100%; height: 500px; position: relative;">
    <div class="hd">
        <ul>
            <?php if(!empty($banner)): if(is_array($banner) || $banner instanceof \think\Collection || $banner instanceof \think\Paginator): $k = 0; $__LIST__ = $banner;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?>
            <li><span></span></li>
            <?php endforeach; endif; else: echo "" ;endif; endif; ?>
        </ul>
    </div>
    <div class="bd banner">
        <ul>
            <?php if(!empty($banner)): if(is_array($banner) || $banner instanceof \think\Collection || $banner instanceof \think\Paginator): $k = 0; $__LIST__ = $banner;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?>
            <li style="background: url('<?php echo $vo['img']; ?>')50% 0 no-repeat; "><a href="<?php echo $vo['out_url']; ?>" target="_blank"></a></li>
            <?php endforeach; endif; else: echo "" ;endif; endif; ?>
        </ul>
    </div>
    <a class="prev" href="javascript:void(0)"></a><a class="next" href="javascript:void(0)"></a>
</div>

<script>
    jQuery(".site_banner").slide({mainCell:".bd ul",autoPlay:true, delayTime: 500});
</script>
<div class="main_bg">
    <div class="main">
        <!--动态-->
        <div class="box">
            <div class="box_title">
                <span>最新专题</span>
            </div>
            <div class="box_con">
                <div class="hd">
                    <ul>
                        <?php if(!empty($new_jt)): if(is_array($new_jt) || $new_jt instanceof \think\Collection || $new_jt instanceof \think\Paginator): $k = 0; $__LIST__ = $new_jt;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?>
                        <li><span></span></li>
                        <?php endforeach; endif; else: echo "" ;endif; endif; ?>
                    </ul>
                </div>
                <div class="imgAuto"> <!--style="margin:0;padding:0;"-->
                    <ul>
                        <?php if(!empty($new_jt)): if(is_array($new_jt) || $new_jt instanceof \think\Collection || $new_jt instanceof \think\Paginator): $k = 0; $__LIST__ = $new_jt;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?>
                        <li style="position: absolute; left: 0px; right: 0px; margin: auto; background: url(<?php echo $vo['img']; ?>) 50% 0% no-repeat; width: 100%; background-size:100% 100%; height: 383px;" mz="<?php echo $vo['img']; ?>" >
                            <a href="<?php if(!empty($vo['out_url'])): ?><?php echo $vo['out_url']; else: ?><?php echo url('/index/subi', ['id' => $vo['id']]); endif; ?>" style="text-decoration:none;display:block;width:100%;height:396px;" target="_self">&nbsp;</a>
                        </li>
                        <?php endforeach; endif; else: echo "" ;endif; endif; ?>
                    </ul>
                </div>
                <script>jQuery(".box_con").slide({mainCell:".imgAuto ul",autoPlay:true, delayTime: 500});</script>


                <!--新闻动态-->
                <div class="dongtai">
                    <div class="bd">
                        <div class="ulWrap">
                            <ul>
                                <?php if(!empty($new_news)): if(is_array($new_news) || $new_news instanceof \think\Collection || $new_news instanceof \think\Paginator): $k = 0; $__LIST__ = $new_news;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?>
                                <li>
                                    <a href="<?php echo url('/index/newsi', ['id'=> $vo['id']]); ?>">
                                        <img src="<?php echo $vo['icon']; ?>" alt="<?php echo $vo['name']; ?>" width="223" height="124">
                                        <p class="dt_title"><?php echo $vo['name']; ?></p>
                                    </a>
                                </li>
                                <?php endforeach; endif; else: echo "" ;endif; endif; ?>

                            </ul>
                        </div>
                    </div>
                </div>
                <!--新闻动态End-->
            </div>
        </div>
        <!--动态结束-->

        <!--活动-->
        <?php if(!empty($tj_activity)): ?>

        <div class="home_xbanner">
            <div class="hd">
                <ul>
                    <?php if(is_array($tj_activity) || $tj_activity instanceof \think\Collection || $tj_activity instanceof \think\Paginator): $k = 0; $__LIST__ = $tj_activity;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?>
                    <li><span></span></li>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
            </div>
            <div class="bd">
                <ul class="picmycss pic_s536" style="margin:0;padding:0;">
                    <?php if(is_array($tj_activity) || $tj_activity instanceof \think\Collection || $tj_activity instanceof \think\Paginator): $k = 0; $__LIST__ = $tj_activity;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?>
                    <li  style="position: absolute; left: 0px; right: 0px;margin: auto; background: url(<?php echo $vo['img']; ?>) 50% 0 no-repeat; background-size: 100% 100%;" mz="<?php echo $vo['name']; ?>"><a href="javascript:;" style="text-decoration:none;display:block;width:100%;height:100px;" target="_self">&nbsp;</a></li>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
            </div>
        </div>
        <script>jQuery(".home_xbanner").slide({mainCell:".bd ul",autoPlay:true, delayTime: 500});</script>
        <?php endif; ?>
        <!--活动-END-->

        <!--真人案例-->
        <div class="box">
          <div class="case">
            <div id="slideBox" class="slideBox">
              <div class="bd">
                <ul>
                    <li style="float: left; width: 1139px;">
                        <img src="/static/index/pc/pctestImg/anli1.jpg" style="width: 100%; display: block;">
                        <div class="anli_video" style="position: absolute; bottom: 59px;  width: 14%; margin: auto; left: 35%;">
                            <video src="http://huamei.juhuiny.com/003rz0qflx07tpK0ERG00104120017QK0E010.mp4" poster="/static/index/pc/pctestImg/video1.jpg" width="420" height="326" controls=""></video>
                        </div>
                        <a href="/swt/" target="_blank"></a>
                    </li>
                </ul>
              </div>
              <div class="cate_btn">
                <a class="prev" href="javascript:void(0)"></a>
                <a class="next" href="javascript:void(0)"></a>
              </div>
            </div>
            <script>jQuery(".slideBox").slide({mainCell: ".bd ul", effect: "leftLoop", trigger: "click", delayTime: 500});</script>
          </div>
        </div>
        <!--真人案例结束-->

        <!--本院专家-->
        <div class="box">

            <div class="doctor">
                <section class="zjBoxs wPub">
                    <div class="zjTit clearfix"><h3 class="fl">华美专家&&安全保障</h3></div>

                    <div class="zjContent relative">

                        <div class="zjlists">

                            <div class="zjlist relative"> <img src="http://huamei.juhuiny.com/%E9%99%A2%E9%95%BF.jpg" />
                                <div class="zjTxt absolute">
                                    <h3>杨艳</h3>
                                    <div class="zjzc">
                                        <h4>酒泉华美医疗美容医院 -- 院长</h4>
                                    </div>
                                    <div class="zjbm">
                                        <h5>杨艳，酒泉华美医疗整形美容医院院长，酒泉市杨艳整形爱心基金会会长。国内知名整形美容医师、中国中华医学会会员。她从事外科美容工作多年，经验丰富，技术精湛。</h5>
                                        <h5>擅长项目：擅长多部位医美塑型， 精通仿真卧蚕祛眼袋、全面部微雕塑形、自体细胞抗衰老手术失败修复等整形手术。</h5>
                                    </div>
                                    <a href="javascript:;" class="iBlock boxIndex">查看更多</a> </div>
                            </div>

                           <div class="zjlist relative"> <img src="http://huamei.juhuiny.com/%E7%94%B3%E5%BF%97%E5%8B%87big.jpg" />
                                <div class="zjTxt absolute">
                                    <h3>申智勇</h3>
                                    <div class="zjzc">
                                        <h4>酒泉华美医疗美容医院 -- 外科医师主任</h4>
                                    </div>
                                    <div class="zjbm">
                                        <h5>申志勇医生毕业于南华大学临床医学专业，从事医疗美容工作十余年，擅长各种美容整形手术，尤其在面部五官精雕方面造诣突出。他的手术以自然个性美著称，注重形质、气韵、精细化雕琢，将艺术审美与医疗技术精致融合，打造精致动人的面部轮廓。</h5>
                                        <h5>擅长项目：无痕双眼皮、韩式去眼袋、眼部综合整形、鼻综合隆鼻、自体脂肪隆胸、注射美容、吸脂及面部轮廓精雕等。</h5>
                                    </div>
                                    <a href="javascript:;" class="iBlock boxIndex">查看更多</a> </div>
                            </div>

                            <div class="zjlist relative">
                                <img src="http://huamei.juhuiny.com/%E5%BE%AE%E4%BF%A1%E5%9B%BE%E7%89%87_20190616155809.jpg" />
                                <div class="zjTxt absolute">
                                    <h3>王任平</h3>
                                    <div class="zjzc">
                                        <h4>酒泉华美医疗美容医院 -- 皮肤科医师主任</h4>
                                    </div>
                                    <div class="zjbm">
                                        <h5>王任平皮肤科主治医师，师从北京皮研所沈教授，湖南省人民医院皮肤科及湖南省皮肤病研究所进修学习</h5>
                                        <h5>擅长项目：皮肤诊疗、疤痕修复、妊娠纹修复。</h5>
                                    </div>
                                    <a href="/" class="iBlock boxIndex">查看更多</a> </div>
                            </div>


                           <div class="zjlist relative">
                                <img src="http://huamei.juhuiny.com/毛林1.jpg" />
                                <div class="zjTxt absolute">
                                    <h3>毛林</h3>
                                    <div class="zjzc">
                                        <h4>酒泉华美医疗美容医院 -- 名誉院长</h4>
                                    </div>

                                    毛林，酒泉华美整形医院名誉院长，副主任医师，武汉绎君整形美容医院整形外科主任。



                                    <div class="zjbm">
                                        <h5>从事医疗美容工作20多年，据酒泉华美整形官网数据显示，毛院长自从业以来，共完场各种整形美容案例上万例，且无一失败案例， 他精湛的技艺和高尚的医德，被业界誉为“美容圣手、中国少壮派整形医生”！。</h5>
                                        <h5> 面部整形：韩式双眼皮、开眼角、隆鼻、耳鼻再造、改脸型、面部年轻化手术。</h5>
                                    </div>
                                    <a href="/" class="iBlock boxIndex">查看更多</a> </div>
                            </div>

                              <div class="zjlist relative">
                                <img src="http://huamei.juhuiny.com/黄江泊.jpg" />
                                <div class="zjTxt absolute">
                                    <h3>黄江泊</h3>
                                    <div class="zjzc">
                                        <h4>酒泉华美医疗美容医院 -- 外科主任医师</h4>
                                    </div>
                                    <div class="zjbm">
                                        <h5>从事外科整形工作十余年，经验丰富，技术精湛、审美理念时尚新颖。师从龙道筹、罗定安等知名美容医生，曾在省人民医院进修，并同国内外多名整形美容大师同台手术，分享学术研究。</h5>
                                        <h5>擅长项目：假体丰胸、吸脂术、无痕重睑术、自体脂肪隆胸、五官塑形、华美纯臻美鼻、蒂凡尼欧式美鼻、3D内窥镜丰胸、抗衰除皱等。</h5>
                                    </div>
                                    <a href="/" class="iBlock boxIndex">查看更多</a> </div>
                            </div>

                        </div>


                        <div class="zjhd absolute">

                            <div class="zjtabBd">

                                <li class="zjcicle relative"> <img src="http://huamei.juhuiny.com/yangyan1.jpg" /></li>
                                <li class="zjcicle relative"> <img src="http://huamei.juhuiny.com/%E7%94%B3%E6%99%BA%E5%8B%87small.jpg" /></li>
                                <li class="zjcicle relative"> <img src="http://huamei.juhuiny.com/%E6%9C%AA%E6%A0%87%E9%A2%98-1jsm.jpg" /></li>
                                <li class="zjcicle relative"> <img src="http://huamei.juhuiny.com/1.jpg" /></li>
                                <li class="zjcicle relative"> <img src="http://huamei.juhuiny.com/黄江波1.jpg" /></li>
                            </div>
                        </div>

                    </div>

                </section>

            </div>

        </div>
        <!--本院专家结束-->
        <!--大事记-->
        <div class="box">
            <div class="dsj_Box">
                <div class="hd">
                    <ul>
                        <li class="on">
                            关注华美<br/>
                            <span>Following us</span>
                        </li>
                        <?php if(!empty($note)): if(is_array($note) || $note instanceof \think\Collection || $note instanceof \think\Paginator): $k = 0; $__LIST__ = $note;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?>
                        <li><?php echo $vo['name']; ?>
                            <br>
                            <span><?php echo $vo['alias_name']; ?></span></li>
                        <?php endforeach; endif; else: echo "" ;endif; endif; ?>
                    </ul>
                </div>

                <div class="tempWrap" style="overflow:hidden; position:relative; width:100%">
                    <div class="bd" style="width: 7200px; left: 0px; position: relative; overflow: hidden; padding: 0px; margin: 0px;">

                        <ul style="float: left; width: 1232px;">
                            <li style="    height: 438px;width: 379px;">
                                <img src="http://huamei.juhuiny.com/%E5%BE%AE%E4%BF%A1%E5%9B%BE%E7%89%87_20190707183417.jpg">
                                <!--<p>简介</p>-->
                            </li>
                            <li style="      height: 438px;  width: 379px;">
                                <iframe width="366" height="467" class="share_self"  src="https://m.weibo.cn/p/1005057096962212/home?from=page_100505_profile&from=page_100505_profile&wvr=6&wvr=6&mod=data&mod=data&is_hot=1&is_hot=1&jumpfrom=weibocom#_loginLayer_1562483127177&language=&amp;width=366&amp;height=467&amp;fansRow=1&amp;ptype=1&amp;speed=0&amp;skin=1&amp;isTitle=1&amp;noborder=1&amp;isWeibo=1&amp;isFans=1&amp;uid=6011666172&amp;verifier=0e02ff6c&amp;dpc=1"></iframe>
                            </li>
                            <li style="       height: 438px; width: 379px;">
                                <img src="http://huamei.juhuiny.com/wechat80057.jpg">
                            </li>
                        </ul>

                        <?php if(!empty($note)): if(is_array($note) || $note instanceof \think\Collection || $note instanceof \think\Paginator): $k = 0; $__LIST__ = $note;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?>

                        <ul style="float: left; width: 1232px;">
                            <?php if(!empty($vo['img'])): if(is_array($vo['img']) || $vo['img'] instanceof \think\Collection || $vo['img'] instanceof \think\Paginator): $k = 0; $__LIST__ = $vo['img'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vd): $mod = ($k % 2 );++$k;?>
                              <li>
                                <img src="<?php echo $vd; ?>">
                                  <!--<p>简介</p>-->
                                  <div></div>
                              </li>
                            <?php endforeach; endif; else: echo "" ;endif; endif; ?>
                        </ul>

                        <?php endforeach; endif; else: echo "" ;endif; endif; ?>
                    </div>
                </div>
            </div>
            <script>
                jQuery(".dsj_Box").slide({
                effect: "left",
                easing: "easeOutCirc",
                delayTime: 700
            });
            </script>
        </div>
    </div>
</div>
    <div class="bg-banner">
        <div class="g_w">
            <p><img src="/favicon.ico"></p>

            <h1>华于形 . 美于心</h1>
            <h2>酒泉华美医疗美容医院</h2>
            <a href="/index/about" class="learn_more">关于我们</a>
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
