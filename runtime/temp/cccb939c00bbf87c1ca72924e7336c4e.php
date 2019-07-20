<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:53:"../application/index/view/wap/wap/wap/real_showl.html";i:1560064327;s:53:"../application/index/view/wap/wap/include/header.html";i:1559527868;}*/ ?>
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
    .box {
        width: 100%;
        overflow: hidden;
        background: #fff;
        padding-top: 5px;
        background-size: 7% auto;
        background-repeat: no-repeat;
    }


    .list_wz {
        width: 98%;
        margin: 0 auto;
        margin-top: 10px;
    }
    .list_anli {
        width: 100%;
        height: auto;
        overflow: hidden;
    }
    .anli {
        width: 48.5%;
        float: left;
        height: 239px;
        margin: 0 0.5%;
        margin-bottom: 3%;
        box-sizing: border-box;
        box-shadow: 0px 1px 4px rgba(140, 131, 124, 0.71);
        margin-top: 6px;
    }
    .anli p {
        line-height: 1.7em;
        background: rgba(255,255,255,0.8);
        margin-left: 6px;
    }
    .anli_name {
        font-size: 16px;
    }
    a {
        color: #A69565;
        text-decoration: none;
    }
    .anli img {
        width: 100%;
    }
</style>

<div class="categoryMenu main">
    <ul class="Menu">
        <li class="Menu1"><a href="/wap/index">首页</a></li>
        <li class="Menu2"><a href="<?php echo url('/wap/about_us'); ?>">华美品牌</a></li>
        <li class="Menu3"><a href="<?php echo url('/wap/project'); ?>">项目</a></li>
        <li class="Menu4"><a href="<?php echo url('/wap/docl'); ?>">专家</a></li>
        <li class="Menu5"><a href="<?php echo url('/wap/real_showl'); ?>">案例</a></li>
        <li class="Menu6"><a href="<?php echo url('/wap/contact'); ?>">来院路线</a></li>
    </ul>
</div>

<div class="box">
    <div class="list_wz">
        <div class="list_anli">
            <div class="anli">
                <p class="anli_name">秦儿</p>
                <a href="anli/2016/0612/18.html"><img src=" http://wap.cqddzx.com/uploads/160822/1-160R21I430G9.jpg" border="0" width="120" height="auto" alt="时尚导医蝶变挑战超模"></a>
                <p class="anli_xm"><a href="anli/2016/0612/18.html">阿尔法美眼3.0 埃菲尔美鼻 精雕V下巴 精纯自体脂肪全面部填充</a></p>
                <p class="anli_title"><a href="anli/2016/0612/18.html"><b>时尚导医蝶变挑战超模</b></a></p>
                <p class="anli_btn">
                    <a href="javascript:swtopen('wap');void(0)"><i class="anli_btn1"></i></a>
                    <i class="anli_btn2"></i>
                </p>
            </div><div class="anli">
            <p class="anli_name">娟子</p>
            <a href="anli/2016/0612/19.html"><img src=" http://wap.cqddzx.com/uploads/160822/1-160R21I45C64.jpg" border="0" width="120" height="auto" alt="惊！7天变身性感担当"></a>
            <p class="anli_xm"><a href="anli/2016/0612/19.html">经典假体隆胸</a></p>
            <p class="anli_title"><a href="anli/2016/0612/19.html"><b>惊！7天变身性感担当</b></a></p>
            <p class="anli_btn">
                <a href="javascript:swtopen('wap');void(0)"><i class="anli_btn1"></i></a>
                <i class="anli_btn2"></i>
            </p>

        </div><div class="anli">
            <p class="anli_name">阮阮</p>
            <a href="anli/2016/0612/20.html"><img src=" http://wap.cqddzx.com/uploads/160822/1-160R21I51O61.jpg" border="0" width="120" height="auto" alt="90后小护士变身甜心教主"></a>
            <p class="anli_xm"><a href="anli/2016/0612/20.html">隆鼻 丰苹果肌 瘦脸 阿尔法美眼</a></p>
            <p class="anli_title"><a href="anli/2016/0612/20.html"><b>90后小护士变身甜心教主</b></a></p>
            <p class="anli_btn">
                <a href="javascript:swtopen('wap');void(0)"><i class="anli_btn1"></i></a>
                <i class="anli_btn2"></i>
            </p>
        </div><div class="anli">
            <p class="anli_name">芳子</p>
            <a href="anli/2016/0612/21.html"><img src=" http://wap.cqddzx.com/uploads/160822/1-160R21I53G39.jpg" border="0" width="120" height="auto" alt="平凡美疗师30天奇迹逆龄"></a>
            <p class="anli_xm"><a href="anli/2016/0612/21.html">无痕去眼袋</a></p>
            <p class="anli_title"><a href="anli/2016/0612/21.html"><b>平凡美疗师30天奇迹逆龄</b></a></p>
            <p class="anli_btn">
                <a href="javascript:swtopen('wap');void(0)"><i class="anli_btn1"></i></a>
                <i class="anli_btn2"></i>
            </p>
        </div><div class="anli">
            <p class="anli_name">紫菜</p>
            <a href="anli/2016/0822/137.html"><img src=" http://wap.cqddzx.com/uploads/allimg/160822/1-160R21130160-L.jpg" border="0" width="120" height="auto" alt="逆袭男神 全脸整形过程大曝光"></a>
            <p class="anli_xm"><a href="anli/2016/0822/137.html">埃菲尔美鼻 阿尔法美眼3.0 精雕V下巴 全面部脂肪填充  </a></p>
            <p class="anli_title"><a href="anli/2016/0822/137.html">逆袭男神 全脸整形过程大曝光</a></p>
            <p class="anli_btn">
                <a href="javascript:swtopen('wap');void(0)"><i class="anli_btn1"></i></a>
                <i class="anli_btn2"></i>
            </p>
        </div><div class="anli">
            <p class="anli_name">余艳</p>
            <a href="anli/2016/0822/139.html"><img src=" http://wap.cqddzx.com/uploads/allimg/160822/8-160R21515290-L.jpg" border="0" width="120" height="auto" alt="我是重马运动大使余艳 祛斑我信赖当代"></a>
            <p class="anli_xm"><a href="anli/2016/0822/139.html">当代签约祛黄褐斑</a></p>
            <p class="anli_title"><a href="anli/2016/0822/139.html">我是重马运动大使余艳 祛斑我信赖当代</a></p>
            <p class="anli_btn">
                <a href="javascript:swtopen('wap');void(0)"><i class="anli_btn1"></i></a>
                <i class="anli_btn2"></i>
            </p>
        </div><div class="anli">
            <p class="anli_name">丹丹</p>
            <a href="anli/2016/0822/140.html"><img src=" http://wap.cqddzx.com/uploads/allimg/160822/8-160R21522210-L.jpg" border="0" width="120" height="auto" alt="30天变身papi酱，丹丹的隆鼻日记"></a>
            <p class="anli_xm"><a href="anli/2016/0822/140.html">埃菲尔美鼻</a></p>
            <p class="anli_title"><a href="anli/2016/0822/140.html">30天变身papi酱，丹丹的隆鼻日记</a></p>
            <p class="anli_btn">
                <a href="javascript:swtopen('wap');void(0)"><i class="anli_btn1"></i></a>
                <i class="anli_btn2"></i>
            </p>
        </div><div class="anli">
            <p class="anli_name">当代BOSS</p>
            <a href="anli/2016/0822/141.html"><img src=" http://wap.cqddzx.com/uploads/160822/8-160R2152255326.jpg" border="0" width="120" height="auto" alt="霸道总裁亲上阵 年轻邀你亲鉴"></a>
            <p class="anli_xm"><a href="anli/2016/0822/141.html">BV5年轻脸 </a></p>
            <p class="anli_title"><a href="anli/2016/0822/141.html">霸道总裁亲上阵 年轻邀你亲鉴</a></p>
            <p class="anli_btn">
                <a href="javascript:swtopen('wap');void(0)"><i class="anli_btn1"></i></a>
                <i class="anli_btn2"></i>
            </p>
        </div><div class="anli">
            <p class="anli_name">演员王洁</p>
            <a href="anli/2016/0822/142.html"><img src=" http://wap.cqddzx.com/uploads/allimg/160822/8-160R21525480-L.jpg" border="0" width="120" height="auto" alt="【直播】重庆电视台签约艺人体验“美版音波拉"></a>
            <p class="anli_xm"><a href="anli/2016/0822/142.html">美国极限音波拉皮</a></p>
            <p class="anli_title"><a href="anli/2016/0822/142.html">【直播】重庆电视台签约艺人体验“美版音波拉</a></p>
            <p class="anli_btn">
                <a href="javascript:swtopen('wap');void(0)"><i class="anli_btn1"></i></a>
                <i class="anli_btn2"></i>
            </p>
        </div><div class="anli">
            <p class="anli_name">Ada</p>
            <a href="anli/2016/0822/143.html"><img src=" http://wap.cqddzx.com/uploads/160822/8-160R2152546120.jpg" border="0" width="120" height="auto" alt="44岁纹绣师秒变志玲姐姐"></a>
            <p class="anli_xm"><a href="anli/2016/0822/143.html">晶钻逆龄</a></p>
            <p class="anli_title"><a href="anli/2016/0822/143.html">44岁纹绣师秒变志玲姐姐</a></p>
            <p class="anli_btn">
                <a href="javascript:swtopen('wap');void(0)"><i class="anli_btn1"></i></a>
                <i class="anli_btn2"></i>
            </p>
        </div><div class="anli">
            <p class="anli_name">思思</p>
            <a href="anli/2016/0822/144.html"><img src=" http://wap.cqddzx.com/uploads/allimg/160822/8-160R21526050-L.jpg" border="0" width="120" height="auto" alt="思思的动态双眼皮恢复日记"></a>
            <p class="anli_xm"><a href="anli/2016/0822/144.html">阿尔法美眼3.0</a></p>
            <p class="anli_title"><a href="anli/2016/0822/144.html">思思的动态双眼皮恢复日记</a></p>
            <p class="anli_btn">
                <a href="javascript:swtopen('wap');void(0)"><i class="anli_btn1"></i></a>
                <i class="anli_btn2"></i>
            </p>

        </div><div class="anli">
            <p class="anli_name">名模吴佳丽</p>
            <a href="anli/2016/0822/145.html"><img src=" http://wap.cqddzx.com/uploads/160822/8-160R2152912246.jpg" border="0" width="120" height="auto" alt="素颜6步走，时尚名模吴佳丽亲身示范！"></a>
            <p class="anli_xm"><a href="anli/2016/0822/145.html">半永久·花沁系列</a></p>
            <p class="anli_title"><a href="anli/2016/0822/145.html">素颜6步走，时尚名模吴佳丽亲身示范！</a></p>
            <p class="anli_btn">
                <a href="javascript:swtopen('wap');void(0)"><i class="anli_btn1"></i></a>
                <i class="anli_btn2"></i>
            </p>
        </div>
        </div>
        <div id="page" class="dede_pages">
            <ul class="pagelist" style="font-size:1.2em;">
                <li class="thisclass">1</li>
                <li><a href="list_28_2.html">2</a></li>
                <li><a href="list_28_2.html">下一页</a></li>
                <li><span class="pageinfo">共 <strong>2</strong>页<strong>21</strong>条</span></li>

            </ul>
        </div>
    </div>
</div>
<script src="/static/index/js/footer.js" ></script>