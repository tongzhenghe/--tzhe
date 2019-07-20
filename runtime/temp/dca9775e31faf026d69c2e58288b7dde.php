<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:90:"/www/wwwroot/huamei.jqzxyy.com/public/../application/webadmin/view/index/addreal_show.html";i:1559350111;s:76:"/www/wwwroot/huamei.jqzxyy.com/application/webadmin/view/include/submit.html";i:1563155974;}*/ ?>
<!-- 模板 -->
<div class="layui-fluid">
    <div class="layui-row">
        <div class="layui-card">
            <div class="layui-card-header">
            <span class="layui-breadcrumb">
              <i>当前位置：</i>
            <a href="/">首页</a>
            <a href="#/website/real_show">列表</a>
            <a><cite>添加数据</cite></a>
          </span>
            </div>
            <form class="layui-form" action="##" onsubmit="return false">
            <div class="layui-tab layui-tab-brief" lay-filter="docDemoTabBrief">
                <div class="layui-tab-content">
                    <div class="layui-tab-item layui-show">
                        <div class="layui-card-body">
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
                                    <input type="text" name="name"  value="<?php if(!empty($row['name'])): ?><?php echo $row['name']; endif; ?>" placeholder="名称" autocomplete="off" class="layui-input">
                                </div>
                            </div>

                            <div class="layui-form-item">
                                <label class="layui-form-label">封面图</label>
                                <div class="layui-input-block">
                                    <a href="javascript:;">
                                        <i class="layui-icon layui-icon-picture upload_file"></i>
                                    </a>
                                    <div class="layui-inline layui-word-aux">
                                        提示：(移动端 178*133大小，  限制大小：100kb)。
                                    </div>
                                    <img src="<?php if(!empty($row['icon_title'])): ?><?php echo $row['icon_title']; endif; ?>" onclick="$.fn.preview(this)"  data-size="100" class="icon_title" width="50px">

                                </div>
                            </div>

                            <div class="layui-form-item layui-form-text">
                                <label class="layui-form-label">简介</label>
                                <div class="layui-input-block">
                                    <textarea placeholder="请输入内容" name="intro" class="layui-textarea"><?php if(!empty($row['intro'])): ?><?php echo $row['intro']; endif; ?></textarea>
                                </div>
                            </div>

                            <div class="layui-form-item layui-form-text">
                                <label class="layui-form-label">自定义内容</label>
                                <div class="layui-input-block">
                                    <textarea id="container"  name="content" type="text"><?php if(!empty($row['content'])): ?><?php echo $row['content']; endif; ?></textarea>
                                </div>
                            </div>

                            <div class="layui-form-item">
                                <label class="layui-form-label">视频<i>*</i></label>
                                <div class="layui-input-block">
                                    <input type="text" name="video_path"  value="<?php if(!empty($row['video_path'])): ?><?php echo $row['video_path']; endif; ?>" placeholder="视频" autocomplete="off" class="layui-input">
                                </div>
                            </div>

                            <div class="layui-form-item">
                                <label class="layui-form-label">术前</label>
                                <div class="layui-input-block">
                                    <a href="javascript:;">
                                        <i class="layui-icon layui-icon-picture upload1"></i>
                                    </a>
                                    <div class="layui-inline layui-word-aux">
                                        提示：(移动端请上传164*135大小，  限制大小：100kb)。
                                    </div>
                                    <img id="imgdemo1" src="<?php if(!empty($row['icon'])): ?><?php echo $row['icon']; endif; ?>" onclick="$.fn.preview(this)"  class="imgdemo1" width="50px">
                                    <a href="javascript:;" class="d del-icon1"><span>x</span></a>
                                </div>
                            </div>

                            <div class="layui-form-item">
                                <label class="layui-form-label">术后</label>
                                <div class="layui-input-block">
                                    <a href="javascript:;">
                                        <i class="layui-icon layui-icon-picture upload2"></i>
                                    </a>
                                    <div class="layui-inline layui-word-aux">   提示：(移动端请上传164*135大小，  限制大小：100kb)。</div>
                                    <img id="imgdemo2" src="<?php if(!empty($row['img'])): ?><?php echo $row['img']; endif; ?>" onclick="$.fn.preview(this)"   class="imgdemo2" width="100px">
                                    <a href="javascript:;" class="d del-icon2"><span>x</span></a>
                                </div>
                            </div>

                            <div class="layui-form-item">
                                <label class="layui-form-label">选择类别</label>
                                <div class="layui-input-block">
                                    <select name="cateid" lay-verify="required">
                                        <?php if(!empty($cate)): if(is_array($cate) || $cate instanceof \think\Collection || $cate instanceof \think\Paginator): $k = 0; $__LIST__ = $cate;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($k % 2 );++$k;?>
                                        <option value="<?php echo $v['id']; ?>" <?php if(!empty($row) && $row['cateid'] == $v['id']): ?> selected <?php endif; ?>><?php echo $v['name']; ?></option>
                                        <?php endforeach; endif; else: echo "" ;endif; endif; ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <div class="layui-input-block">
                            <input type="hidden" name="requestUrl" value="<?php echo url('addreal_show'); ?>">
                            <input type="hidden" name="id" value="<?php if(!empty($row['id'])): ?><?php echo $row['id']; endif; ?>">
                            <button class="layui-btn xxx" lay-submit lay-filter="formReal_show">立即提交</button>
                            <button type="reset" class="layui-btn layui-btn-primary">重置</button>
                            <a href="#/website/real_show" class="layui-btn layui-btn-primary">返回列表</a>
                        </div>
                    </div>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>
<!-- 脚本 -->
<script type="text/javascript" src="/static/admin/layui_rely.js"></script>
<script>
<script type="text/javascript">
    var ue = UE.getEditor('container', {
        initialFrameHeight : 500
        ,initialFrameWidth : 1000
    });
</script>