<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:83:"/www/wwwroot/huamei.jqzxyy.com/public/../application/webadmin/view/index/index.html";i:1556697823;s:76:"/www/wwwroot/huamei.jqzxyy.com/application/webadmin/view/include/header.html";i:1562921670;s:74:"/www/wwwroot/huamei.jqzxyy.com/application/webadmin/view/include/left.html";i:1556794456;s:76:"/www/wwwroot/huamei.jqzxyy.com/application/webadmin/view/include/footer.html";i:1557568895;}*/ ?>

<!DOCTYPE html>
<html>
<head>
    <!--E:\webSite\huamei\public\static\admin\layui\css\layui.css-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>酒泉华美医疗美容医院</title>
    <link rel="stylesheet" type="text/css" href="/static/admin/layui/css/layui.css" />
    <link rel="stylesheet" type="text/css" href="/static/admin/layui/css/theme/default.css" />
    <link rel="stylesheet" type="text/css" href="/static/admin/css/css.css" />

</head>
<body class="layui-layout-body kit-theme-default">
<div class="layui-layout layui-layout-admin">
    <div class="layui-header">
        <div class="layui-logo">
            <div class="layui-logo-toggle" kit-toggle="side" data-toggle="on">
                <i class="layui-icon">&#xe65a;</i>
            </div>
            <div class="layui-logo-brand">
                <a href="#/">酒泉华美医疗美容医院</a>
            </div>
        </div>
        <div class="layui-layout-left">
        </div>
        <div class="layui-layout-right">
            <ul class="kit-nav" lay-filter="header_right">
                <li class="kit-item" kit-target="">
                    <a href="#/website/menu">
                        <i class="layui-icon">&#xe60f;</i>
                        <span>菜单管理</span>
                    </a>
                </li>
                <li class="kit-item" kit-target="help">
                    <a href="javascript:;">
                        <i class="layui-icon">&#xe607;</i>
                        <span>帮助</span>
                    </a>
                </li>
                <li class="kit-item" id="ccleft">
                    <a href="javascript:;">
                        <i class="layui-icon">&#xe60e;</i>
                    </a>
                </li>
                <li class="kit-item" id="cc">
                    <a href="javascript:;">
                        <i class="layui-icon">&#xe64c;</i>
                    </a>
                </li>
                <li class="kit-item">
                    <a href="javascript:;">
                        <span>
                        <img src="/favicon.ico" class="layui-nav-img">酒泉华美医疗美容医院
                        </span>
                    </a>
                    <ul class="kit-nav-child kit-nav-right">
                        <li class="kit-item">
                            <a href="#/website/user/user_my">
                                <i class="layui-icon">&#xe612;</i>
                                <span>个人中心</span>
                            </a>
                        </li>
                        <li class="kit-item" kit-target="setting">
                            <a href="javascript:;">
                                <i class="layui-icon">&#xe614;</i>
                                <span>设置</span>
                            </a>
                        </li>
                        <li class="kit-nav-line"></li>
                        <li class="kit-item">
                            <a href="temp/login.html">
                                <i class="layui-icon">&#x1006;</i>
                                <span>注销</span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>


<div class="layui-side" kit-side="true">
    <div class="layui-side-scroll">
        <div id="menu-box"><!--layui-show-->
            <ul class="kit-menu">

                <?php if(!empty($menu)): if(is_array($menu) || $menu instanceof \think\Collection || $menu instanceof \think\Paginator): $k = 0; $__LIST__ = $menu;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($k % 2 );++$k;?>
                <li class="kit-menu-item">
                    <a href="<?php echo $v['path']; ?>">
                        <i class="layui-icon"></i>
                        <span><?php echo $v['name']; ?></span>
                    </a>
                    <?php if(!empty($v['children'])): ?>
                    <ul class="kit-menu-child layui-anim layui-anim-upbit">
                        <?php if(is_array($v['children']) || $v['children'] instanceof \think\Collection || $v['children'] instanceof \think\Paginator): $kc = 0; $__LIST__ = $v['children'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vc): $mod = ($kc % 2 );++$kc;?>
                        <li class="kit-menu-item">
                            <a href="<?php echo $vc['path']; ?>">
                                <i class="layui-icon"></i>
                                <span><?php echo $vc['name']; ?></span>
                            </a>
                            <?php if(!empty($vc['children'])): ?>
                            <ul class="kit-menu-child layui-anim layui-anim-upbit">
                                <?php if(is_array($vc['children']) || $vc['children'] instanceof \think\Collection || $vc['children'] instanceof \think\Paginator): $ks = 0; $__LIST__ = $vc['children'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vs): $mod = ($ks % 2 );++$ks;?>
                                <li class="kit-menu-item">
                                    <a href="<?php echo $vs['path']; ?>">
                                        <i class="layui-icon">&#xe62e;</i>
                                        <span><?php echo $vs['name']; ?></span>
                                    </a>
                                </li>
                                <?php endforeach; endif; else: echo "" ;endif; ?>
                            </ul>
                            <?php endif; ?>
                        </li>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </ul>
                    <?php endif; ?>
                </li>
                <?php endforeach; endif; else: echo "" ;endif; endif; ?>
            </ul>
        </div>
    </div>
</div>
  <div class="layui-body" kit-body="true">
    <router-view></router-view>
  </div>
<div class="layui-footer" kit-footer="true">
  酒泉华美医疗美容医院
    <div style="width:400px; height:400px;" class="load-container load1">
        <div class="loader">Loading...</div>
    </div>
</div>
</div>
<script type="text/javascript" src="/static/admin/js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="/static/admin/layui/polyfill.min.js"></script>
<script type="text/javascript" src="/static/admin/layui/layui.js"></script>
<script type="text/javascript" src="/static/admin/layui/kitadmin.js"></script>
<script type="text/javascript" src="/static/admin/layui/mockjs-config.js"></script>
<link rel="stylesheet" type="text/css" href="/static/admin/layui/css/theme/default.css" />
<script type="text/javascript" src="https://cdn.bootcss.com/echarts/4.1.0.rc2/echarts.min.js"></script>

<!--uedior-->
<script type="text/javascript" charset="utf-8" src="/static/admin/ueditor/ueditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="/static/admin/ueditor/ueditor.all.min.js"> </script>
<!--建议手动加在语言，避免在ie下有时因为加载语言失败导致编辑器加载失败-->
<!--这里加载的语言文件会覆盖你在配置项目里添加的语言类型，比如你在配置项目里配置的是英文，这里加载的中文，那最后就是中文-->
<script type="text/javascript" charset="utf-8" src="/static/admin/ueditor/lang/zh-cn/zh-cn.js"></script>
<!--uedior-->

<script>layui.use("admin");</script>
<script type="text/javascript" src="/static/admin/js/ownjs.js"></script>
<!--<script type="text/javascript" src="http://www.jq22.com/demo/BeginnerAdmin201701192304/lay/modules/jquery.js"></script>-->
</body>
</html>
