<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:81:"/www/wwwroot/huamei.jqzxyy.com/public/../application/index/view/index/proall.html";i:1561519771;s:59:"../application/index/view/index/include/contact_header.html";i:1563182661;s:49:"../application/index/view/index/include/left.html";i:1563176392;s:59:"../application/index/view/index/include/contact_footer.html";i:1563182804;}*/ ?>

<div class="cate">
    <!--<script type="text/javascript" src="/static/index/pc/js/jquery.easing.js"></script><div id="fl_menu">-->


    <div class="cate_right">
        <div class="cate_url">
            您的位置：<a href="/">首页</a>	><a href="/qbxm/">全部项目</a>
        </div>
        <div class="cate_banner"><a href="/topics/dwfcqb/"><img src="http://www.cqddzx.com/2014/images/cate_qb.jpg" /></a></div>
        <div class="cate_div">

            <?php if(!empty($project_all)): if(is_array($project_all) || $project_all instanceof \think\Collection || $project_all instanceof \think\Paginator): $k = 0; $__LIST__ = $project_all;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?>

            <div class="cate_bt2"><span><?php echo $vo['name']; ?></span> / PROJECT</div>
            <div class="cate_con">
                <?php if(!empty($vo['children'])): if(is_array($vo['children']) || $vo['children'] instanceof \think\Collection || $vo['children'] instanceof \think\Paginator): $kc = 0; $__LIST__ = $vo['children'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vc): $mod = ($kc % 2 );++$kc;?>
                <dl>
                    <dt><?php echo $vc['name']; ?></dt>
                    <dd>
                        <?php if(!empty($vc['child'])): if(is_array($vc['child']) || $vc['child'] instanceof \think\Collection || $vc['child'] instanceof \think\Paginator): $ks = 0; $__LIST__ = $vc['child'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vs): $mod = ($ks % 2 );++$ks;?>
                        <a href="<?php echo url('/index/proi',['id' => $vc['id']]); ?>" <?php if($vs['is_hot'] === 1): ?>class="hot" <?php endif; ?>><?php echo $vs['name']; ?></a>
                        <?php endforeach; endif; else: echo "" ;endif; endif; ?>
                    </dd>
                </dl>
                <?php endforeach; endif; else: echo "" ;endif; endif; ?>
            </div>
            <?php endforeach; endif; else: echo "" ;endif; endif; ?>

        </div>
    </div>
</div>
