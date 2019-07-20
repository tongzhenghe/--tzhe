<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:86:"/www/wwwroot/huamei.jqzxyy.com/public/../application/webadmin/view/index/addgoods.html";i:1557653284;s:76:"/www/wwwroot/huamei.jqzxyy.com/application/webadmin/view/include/submit.html";i:1563155974;}*/ ?>
<!-- 模板 -->
<div class="layui-fluid">
    <div class="layui-row">
        <div class="layui-card">
            <div class="layui-card-header">
            <span class="layui-breadcrumb">
              <i>当前位置：</i>
            <a href="/">首页</a>
            <a href="#/website/goods">列表</a>
            <a><cite>添加商品</cite></a>
          </span>
            </div>
            <form class="layui-form" action="##" onsubmit="return false">
            <div class="layui-tab layui-tab-brief" lay-filter="docDemoTabBrief">
                <div class="layui-tab-content">
                    <div class="layui-tab-item layui-show">
                        <div class="layui-card-body">
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
                                <div class="layui-inline">
                                    <label class="layui-form-label">展示价格<i>*</i></label>
                                    <div class="layui-input-inline" style="width: 100px;">
                                        <input type="text"  name="price"  value="<?php if(!empty($row['price'])): ?><?php echo $row['price']; endif; ?>"  placeholder="￥" autocomplete="off" class="layui-input">
                                    </div>
                                    <div class="layui-form-mid">元</div>
                                </div>
                            </div>

                            <div class="layui-form-item layui-form-text">
                                <label class="layui-form-label">简介</label>
                                <div class="layui-input-block">
                                    <textarea placeholder="请输入内容" name="intro" class="layui-textarea"><?php if(!empty($row['intro'])): ?><?php echo $row['intro']; endif; ?></textarea>
                                </div>
                            </div>

                            <div class="layui-form-item layui-form-text">
                                <label class="layui-form-label">是否推荐</label>
                                <div class="layui-input-block">
                                    <input type="checkbox"  <?php if((!empty($row['is_tj'])) && $row['is_tj'] == 1): ?> checked <?php endif; ?> name="is_tj" title="设置推荐">
                                </div>
                                <p class="layui-word-aux">提示：如未设置， 默认为（否）。</p>
                            </div>
                             <div class="layui-form-item layui-form-text">
                                <label class="layui-form-label">是否特惠</label>
                                <div class="layui-input-block">
                                    <input type="checkbox"  <?php if((!empty($row['discount'])) && $row['discount'] == 1): ?> checked <?php endif; ?> name="discount" title="设置特惠">
                                </div>
                                <p class="layui-word-aux">提示：如未设置， 默认为（否）。</p>
                            </div>


                            <div class="layui-form-item">
                                <label class="layui-form-label">商品图</label>
                                <div class="layui-input-block">
                                    <a href="javascript:;">
                                        <i class="layui-icon layui-icon-picture upload1"></i>
                                    </a>
                                    <div class="layui-inline layui-word-aux">
                                        提示：请上传（105*90大小图标），  限制大小：10kb。
                                    </div>
                                    <img id="imgdemo1" src="<?php if(!empty($row['icon'])): ?><?php echo $row['icon']; endif; ?>" onclick="$.fn.preview(this)"  class="imgdemo1" width="50px">
                                    <a href="javascript:;" class="d del-icon1"><span>x</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <div class="layui-input-block">
                            <input type="hidden" name="requestUrl" value="<?php echo url('addgoods'); ?>">
                            <input type="hidden" name="id" value="<?php if(!empty($row['id'])): ?><?php echo $row['id']; endif; ?>">
                            <button class="layui-btn xxx" lay-submit lay-filter="formGoods">立即提交</button>
                            <button type="reset" class="layui-btn layui-btn-primary">重置</button>
                            <a href="#/website/goods" class="layui-btn layui-btn-primary">返回列表</a>
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