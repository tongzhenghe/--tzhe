<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:85:"/www/wwwroot/huamei.jqzxyy.com/public/../application/webadmin/view/index/addmenu.html";i:1557211955;s:76:"/www/wwwroot/huamei.jqzxyy.com/application/webadmin/view/include/submit.html";i:1563155974;}*/ ?>
<!-- 模板 -->
<div class="layui-fluid">
  <div class="layui-row">
      <div class="layui-card">
        <div class="layui-card-header">
            <span class="layui-breadcrumb">
              <i>当前位置：</i>
            <a href="/">首页</a>
            <a href="#/website/menu">列表</a>
            <a><cite>添加菜单</cite></a>
          </span>
        </div>
        <div class="layui-card-body">
          <form class="layui-form" action="##" onsubmit="return false" >
            <div class="layui-form-item">
              <label class="layui-form-label">名称</label>
              <div class="layui-input-block">
                <input type="text" name="name"  lay-verify="required" value="<?php if(!empty($row['name'])): ?><?php echo $row['name']; endif; ?>" placeholder="菜单名称" autocomplete="off" class="layui-input">
              </div>
            </div>

           <div class="layui-form-item">
              <label class="layui-form-label">链接</label>
              <div class="layui-input-block">
                <input type="text" name="path" value="<?php if(!empty($row['path'])): ?><?php echo $row['path']; endif; ?>" placeholder="菜单链接" autocomplete="off" class="layui-input">
                  <p class="layui-word-aux">注意： 如未填写链接则默认为：（javascript:;）。</p>
              </div>
            </div>

            <div class="layui-form-item">
              <label class="layui-form-label">-选择类别-</label>
              <div class="layui-input-block">
                <select name="pid" lay-verify="required">
                  <option value="0">顶级分类</option>
                    <?php if(!empty($menu)): if(is_array($menu) || $menu instanceof \think\Collection || $menu instanceof \think\Paginator): $k = 0; $__LIST__ = $menu;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($k % 2 );++$k;?>
                    <option value="<?php echo $v['id']; ?>" <?php if(!empty($row) && $row['pid'] == $v['id']): ?> selected <?php endif; ?>><?php if(!empty($v['html'])): ?><?php echo $v['html']; endif; ?><?php echo $v['name']; ?></option>
                    <?php endforeach; endif; else: echo "" ;endif; endif; ?>

                </select>
              </div>
            </div>
            <div class="layui-form-item">
              <div class="layui-input-block">
                  <input type="hidden" name="requestUrl"  value="<?php echo url('addmenu'); ?>">
                  <input type="hidden" name="id"  value="<?php if(!empty($row['id'])): ?><?php echo $row['id']; endif; ?>">
                <button class="layui-btn xxx" lay-submit lay-filter="formDemo">立即提交</button>
                <button type="reset" class="layui-btn layui-btn-primary">重置</button>
                <a href="#/website/menu" class="layui-btn layui-btn-primary">返回列表</a>
              </div>
            </div>
          </form>
        </div>
      </div>
  </div>
</div>
<!-- 脚本 -->
<script type="text/javascript" src="/static/admin/layui_rely.js"></script>
<script>