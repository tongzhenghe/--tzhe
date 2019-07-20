<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:50:"../application/index/view/wap/wap/wap/project.html";i:1558924751;s:57:"../application/index/view/wap/wap/include/act_header.html";i:1558924952;}*/ ?>
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0;" name="viewport" />
    <title><?php if(!empty($data['seo_title'])): ?><?php echo $data['seo_title']; else: if(!empty($web_setting['seo_title'])): ?><?php echo $web_setting['seo_title']; endif; endif; ?></title>
    <meta name="description" content="<?php if(!empty($data['seo_description'])): ?><?php echo $data['seo_description']; else: if(!empty($web_setting['seo_description'])): ?><?php echo $web_setting['seo_description']; endif; endif; ?>" />
    <meta name="keywords" content="<?php if(!empty($data['seo_keywords'])): ?><?php echo $data['seo_keywords']; else: if(!empty($web_setting['seo_keywords'])): ?><?php echo $web_setting['seo_keywords']; endif; endif; ?>" />
</head>
<link rel="stylesheet" type="text/css" href="/static/index/css/act.css">
<link rel="stylesheet" type="text/css" href="/static/index/css/project.css">
<link rel="stylesheet" type="text/css" href="/static/index/css/11swiper.min.css" />
<link rel="stylesheet" type="text/css" href="/static/index/css/style_test.css" />
<link rel="stylesheet" type="text/css" href="http://huamei.jqzxyy.com/static/index/css/headerFooter.css" />
<script src="/static/index/js/jquery-1.11.2.min.js" type="text/javascript"></script>
<script src="/static/index/js/swiper.min.js" type="text/javascript" charset="utf-8"></script>
<div class="news-ct main">
    <ul class="top">
        <li class="top1" >
            <a href="javascript:window.history.go(-1);"><返回</a>
        </li>
        <li class="top2">酒泉华美整形</li>
        <li class="top3">
            <a href="tel:0937-2620655"><img src="/static/index/icon/cenlink3.png" width="50px"></a>
        </li>
    </ul>
</div>

<div id="index_broadcast">
    <div id="index_broadcast_title"></div>
    <div id="index_broadcast_msg" style="width: 100%;background: #7b0101;">
        <div class="index_broadcast_msg lunb" id="index_broadcast_msg_1" style="width: 80%;">
            <img class="data_s" d_src="/static/index/icon/laba.png" src="/static/index/icon/laba.png">
            <div class="index_broadcast_msg" id="index_broadcast_msg_1 index_broadcast_msg_2" style="width: 100%;">
                <div class="swiper-container swiper-containerhot" style="width: 80%;  margin-top: 15px;    margin-left: 67px;">
                    <div class="swiper-wrapper">
                        <?php if(!empty($ask)): if(is_array($ask) || $ask instanceof \think\Collection || $ask instanceof \think\Paginator): $k = 0; $__LIST__ = $ask;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?>
                        <div class="swiper-slide"><a href="<?php echo url('/wap/aski', ['id' => $vo['id']]); ?>"><li><?php echo $vo['name']; ?></li></a></div>
                        <?php endforeach; endif; else: echo "" ;endif; endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="more" style="color: #5d4443;"> <a href="<?php echo url('/wap/askl'); ?>">更多</a></div>
</div>

<script>
    var swiper222 = new Swiper('.swiper-containerhot', {
        direction: 'vertical',
        loop: true,
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },
        pagination: {
            el: '.swiper-paginationhot',
            clickable: true,
        },
    });
</script>
<body>
    <div class="box">
        <div class="box_xm">
            <h2 class="category-title left-icon hot">
                <span class="category-name">热门</span>
            </h2>
            <ul class="sub-category-list">
                <?php if(!empty($cate)): if(is_array($cate) || $cate instanceof \think\Collection || $cate instanceof \think\Paginator): $k = 0; $__LIST__ = $cate;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;if(!empty($vo['children'])): if(is_array($vo['children']) || $vo['children'] instanceof \think\Collection || $vo['children'] instanceof \think\Paginator): $kc = 0; $__LIST__ = $vo['children'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vc): $mod = ($kc % 2 );++$kc;if($vc['is_hot'] == 1): ?>
                <li class="sub-category">
                    <a class="content-wrap" href="<?php echo url('/wap/prol', ['cateid' => $vc['id']]); ?>">
                       <?php echo $vc['name']; ?>
                    </a>
                </li>
                <?php endif; endforeach; endif; else: echo "" ;endif; endif; endforeach; endif; else: echo "" ;endif; endif; ?>
            </ul>
        </div>

        <?php if(!empty($cate)): if(is_array($cate) || $cate instanceof \think\Collection || $cate instanceof \think\Paginator): $k = 0; $__LIST__ = $cate;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?>
        <h2 class="category-title left-icon yan" <?php if(!empty($vo['icon'])): ?> style=" display: block; background-image: url('<?php echo $vo['icon']; ?>'); background-position-y: 3px;"<?php endif; ?>>
            <span class="category-name"><?php echo $vo['name']; ?></span>
        </h2>
        <ul class="sub-category-list">
            <?php if(!empty($vo['children'])): if(is_array($vo['children']) || $vo['children'] instanceof \think\Collection || $vo['children'] instanceof \think\Paginator): $kc = 0; $__LIST__ = $vo['children'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vc): $mod = ($kc % 2 );++$kc;?>
            <li class="sub-category">
                <a class="content-wrap" href="<?php echo url('/wap/prol', ['cateid' => $vc['id']]); ?>" >
                    <?php echo $vc['name']; if($vc['is_hot'] ==1): ?><img src="/static/index/icon/hott.gif" class="hot_gif"><?php endif; ?>
                </a>
            </li>
            <?php endforeach; endif; else: echo "" ;endif; endif; ?>
        </ul>
        <?php endforeach; endif; else: echo "" ;endif; endif; ?>
    </div>
<script src="/static/index/js/footer.js" ></script>