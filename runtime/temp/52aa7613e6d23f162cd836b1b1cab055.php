<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:86:"/www/wwwroot/huamei.jqzxyy.com/public/../application/webadmin/view/index/addvideo.html";i:1559348839;s:76:"/www/wwwroot/huamei.jqzxyy.com/application/webadmin/view/include/submit.html";i:1563155974;}*/ ?>
<!-- 模板 -->
<div class="layui-fluid">
  <div class="layui-row">
      <div class="layui-card">
        <div class="layui-card-header">
            <span class="layui-breadcrumb">
              <i>当前位置：</i>
            <a href="/">首页</a>
            <a href="#/website/video">列表</a>
            <a><cite>添加视频</cite></a>
          </span>
        </div>
        <div class="layui-card-body">
          <form class="layui-form" action="##" onsubmit="return false" >
              <div class="layui-form-item" pane="">
                  <label class="layui-form-label">展示平台<i>*</i></label>
                  <div class="layui-input-block">
                      <input type="radio" name="is_mobile" value="1" <?php if(!empty($row['is_mobile']) && $row['is_mobile'] == 1): ?> checked <?php endif; ?> title="移动">
                      <input type="radio" name="is_mobile" value="2" <?php if(!empty($row['is_mobile']) && $row['is_mobile'] == 2): ?> checked <?php endif; ?> title="PC">
                  </div>
              </div>
            <div class="layui-form-item">
              <label class="layui-form-label">顺序</label>
              <div class="layui-input-block">
                <input type="number" name="sort"  value="<?php if(!empty($row['sort'])): ?><?php echo $row['sort']; endif; ?>" placeholder="顺序" autocomplete="off" class="layui-input">
              </div>
            </div>
           <div class="layui-form-item">
               <label class="layui-form-label">名称<i>*</i></label>
              <div class="layui-input-block">
                <input type="text" name="name"  value="<?php if(!empty($row['name'])): ?><?php echo $row['name']; endif; ?>" placeholder="视频名称" autocomplete="off" class="layui-input">
              </div>
            </div>

              <div class="layui-form-item">
                  <label class="layui-form-label">宣传视频</label>
                  <div class="layui-input-block">
                      <a href="javascript:;">
                          <i class="layui-icon layui-icon-video uploadVideo"></i>
                      </a>
                      <div class="layui-inline layui-word-aux">提示: 限制大小：15M, 文件太大可能会导致浏览器无法播放。</div>
                      点击预览:<a style="color: #36aaff;" class="videoDemo" href="<?php if(!empty($row['path'])): ?><?php echo $row['path']; else: ?>javascript:;<?php endif; ?>" target="_blank"><?php if(!empty($row['path'])): ?><?php echo $row['path']; endif; ?></a>
                  </div>
              </div>

              <div class="layui-form-item">
              <label class="layui-form-label">是否推荐</label>
              <div class="layui-input-block">
                  <input type="checkbox"  <?php if((!empty($row['is_tj'])) &&  $row['is_tj'] == 1): ?> checked <?php endif; ?> name="is_tj" title="推荐">
              </div>
              </div>

            <div class="layui-form-item">
              <div class="layui-input-block">
                  <input type="hidden" name="id"  value="<?php if(!empty($row['id'])): ?><?php echo $row['id']; endif; ?>">
                <button class="layui-btn xxx" lay-submit lay-filter="formVideo">立即提交</button>
                <button type="reset" class="layui-btn layui-btn-primary">重置</button>
                <a href="#/website/video" class="layui-btn layui-btn-primary">返回列表</a>
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