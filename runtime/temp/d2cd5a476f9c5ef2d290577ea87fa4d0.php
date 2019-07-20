<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:86:"/www/wwwroot/huamei.jqzxyy.com/public/../application/webadmin/view/index/about_us.html";i:1557739753;s:76:"/www/wwwroot/huamei.jqzxyy.com/application/webadmin/view/include/submit.html";i:1563155974;}*/ ?>
<!-- 模板 -->
<div class="layui-fluid">
    <div class="layui-row">
        <div class="layui-card">
            <div class="layui-card-header">
            <span class="layui-breadcrumb">
              <i>当前位置：</i>
            <a href="/">首页</a>
            <a><cite>联系我们</cite></a>
          </span>
            </div>
            <form class="layui-form" action="##" onsubmit="return false">
            <div class="layui-tab layui-tab-brief" lay-filter="docDemoTabBrief">
                <ul class="layui-tab-title select-title">
                    <li class="layui-this">基本信息</li>
                    <li>SEO设置</li>
                </ul>
                <div class="layui-tab-content">
                    <div class="layui-tab-item layui-show">
                        <div class="layui-card-body" style="padding: 6px 0;">

                            <div class="layui-form-item" pane="">
                                <label class="layui-form-label">展示平台<i>*</i></label>
                                <div class="layui-input-block">
                                    <input type="radio" name="is_mobile" value="1" <?php if(!empty($row['is_mobile']) && $row['is_mobile'] == 1): ?> checked <?php endif; ?> title="移动">
                                    <input type="radio" name="is_mobile" value="2" <?php if(!empty($row['is_mobile']) && $row['is_mobile'] == 2): ?> checked <?php endif; ?> title="PC">
                                </div>
                            </div>
                            <div class="layui-form-item">
                                <label class="layui-form-label">背景图</label>
                                <div class="layui-input-block">
                                    <a href="javascript:;">
                                        <i class="layui-icon layui-icon-picture uploadActivity"></i>
                                    </a>
                                    <div class="layui-inline layui-word-aux">提示：PC端：（960*530:px）移动端：（223*124:px） 限制大小：200kb。</div>
                                    <img id="imgdemo2" src="<?php if(!empty($row['img'])): ?><?php echo $row['img']; endif; ?>" class="imgdemo2" width="100px">
                                    <a href="javascript:;" class="d del-icon2"><span>x</span></a>
                                </div>
                            </div>

                            <div class="layui-form-item layui-form-text">
                                <label class="layui-form-label">简介</label>
                                <div class="layui-input-block">
                                    <textarea placeholder="请输入内容" name="intro" class="layui-textarea"><?php if(!empty($row['intro'])): ?><?php echo $row['intro']; endif; ?></textarea>
                                </div>
                            </div>

                            <div class="layui-form-item">
                                <label class="layui-form-label">关于我们视频</label>
                                <div class="layui-input-block">
                                    <a href="javascript:;">
                                        <i class="layui-icon layui-icon-video uploadVideo"></i>
                                    </a>
                                    <div class="layui-inline layui-word-aux">提示: 限制大小：15M, 文件太大可能会导致浏览器无法播放。</div>
                                    点击预览:<a style="color: #36aaff;" class="videoDemo" href="<?php if(!empty($row['about_video'])): ?><?php echo $row['about_video']; else: ?>javascript:;<?php endif; ?>" target="_blank"><?php if(!empty($row['about_video'])): ?><?php echo $row['about_video']; endif; ?></a>
                                </div>
                            </div>


                        </div>
                    </div>
                    <div class="layui-tab-item">
                        <div class="layui-card-body">
                            <div class="layui-form-item layui-form-text">
                                <label class="layui-form-label">SEO标题
                                    <i>*</i>
                                </label>
                                <div class="layui-input-block">
                                    <textarea placeholder="SEO标题" name="seo_title" class="layui-textarea"><?php if(!empty($row['seo_title'])): ?><?php echo $row['seo_title']; endif; ?></textarea>
                                </div>
                            </div>
                            <div class="layui-form-item layui-form-text">
                                <label class="layui-form-label">SEO关键词
                                    <i>*</i>
                                </label>
                                <div class="layui-input-block">
                                    <textarea placeholder="SEO关键词" name="seo_keywords" class="layui-textarea"><?php if(!empty($row['seo_keywords'])): ?><?php echo $row['seo_keywords']; endif; ?></textarea>
                                </div>
                            </div>
                            <div class="layui-form-item layui-form-text">
                                <label class="layui-form-label">SEO描述
                                    <i>*</i>
                                </label>
                                <div class="layui-input-block">
                                    <textarea placeholder="SEO描述" name="seo_description" class="layui-textarea"><?php if(!empty($row['seo_description'])): ?><?php echo $row['seo_description']; endif; ?></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <div class="layui-input-block">
                            <input type="hidden" name="requestUrl" value="<?php echo url('about_us'); ?>">
                            <input type="hidden" name="id" value="<?php if(!empty($row['id'])): ?><?php echo $row['id']; endif; ?>">
                            <button class="layui-btn xxx" lay-submit lay-filter="formAbout">立即提交</button>
                            <button type="reset" class="layui-btn layui-btn-primary">重置</button>
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