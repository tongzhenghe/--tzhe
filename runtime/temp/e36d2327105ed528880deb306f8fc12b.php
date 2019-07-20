<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:85:"/www/wwwroot/huamei.jqzxyy.com/public/../application/webadmin/view/index/contact.html";i:1557313188;s:76:"/www/wwwroot/huamei.jqzxyy.com/application/webadmin/view/include/submit.html";i:1563155974;}*/ ?>
<!-- 模板 -->
<div class="layui-fluid">
    <div class="layui-row">
        <div class="layui-card">
            <div class="layui-card-header">
            <span class="layui-breadcrumb">
              <i>当前位置：</i>
            <a href="/">首页</a>
            <a><cite>品牌故事</cite></a>
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
                            <div class="layui-form-item">
                                <div class="layui-inline">
                                    <label class="layui-form-label">客服电话</label>
                                    <div class="layui-input-inline">
                                        <input autocomplete="off" name="tel" class="layui-input">
                                    </div>
                                </div>
                                <div class="layui-inline">
                                    <button class="layui-btn layui-btn-xs layui-btn-self" id="addTel">添加客服</button>
                                </div>
                                <div class="layui-inline">
                                    <div class="layui-inline layui-word-aux">提示：支持添加多个客服。</div>
                                </div>
                                <div class="layui-inline">
                                    <div class="layui-form-mid layui-word-aux"></div>
                                </div>
                                <div class="layui-form-item">
                                    <div class="layui-inline beDemo-tel">
                                        <label class="layui-form-label"></label>
                                        <?php if(!empty($row['tel'])): if(is_array($row['tel']) || $row['tel'] instanceof \think\Collection || $row['tel'] instanceof \think\Paginator): $i = 0; $__LIST__ = $row['tel'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
                                        <span class="layui-self"><?php echo $v; ?></span><a href="javascript:;"><i class="is">x</i></a>
                                        <?php endforeach; endif; else: echo "" ;endif; endif; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="layui-form-item">
                                <label class="layui-form-label">应聘信息<i>*</i></label>
                                <div class="layui-inline">
                                    <label class="layui-form-label" style="color: #818181; font-size: 12px;">联系邮箱</label>
                                    <div class="layui-input-inline">
                                        <input type="tel" name="recruit_email" value="<?php if(!empty($row['recruit']->recruit_email)): ?><?php echo $row['recruit']->recruit_email; endif; ?>" style="height: 27px; margin-top:4px;" autocomplete="off" class="layui-input">
                                        <div class="layui-inline layui-word-aux">提示：此项必填。</div>
                                    </div>
                                    <i class="layui-icon layui-icon-senior"></i>
                                </div>
                                <div class="layui-inline">
                                    <label class="layui-form-label" style="color: #c6c6c6; font-size: 12px;">联系方式</label>
                                    <div class="layui-input-inline">
                                        <input type="text" name="recruit_phone"  value="<?php if(!empty($row['recruit']->recruit_phone)): ?><?php echo $row['recruit']->recruit_phone; endif; ?>" style="height: 27px; margin-top:4px;" autocomplete="off" class="layui-input">
                                        <div class="layui-inline layui-word-aux">提示：此项必填。</div>
                                    </div>
                                    <i class="layui-icon layui-icon-senior"></i>
                                </div>
                                <div class="layui-inline">
                                    <label class="layui-form-label" style="color: #c6c6c6; font-size: 12px;">应聘地址</label>
                                    <div class="layui-input-inline" style="width: 289px;">
                                        <input type="text" name="recruit_address" value="<?php if(!empty($row['recruit']->recruit_address)): ?><?php echo $row['recruit']->recruit_address; endif; ?>" style="height: 27px; margin-top:4px;" autocomplete="off" class="layui-input">
                                        <div class="layui-inline layui-word-aux">提示：此项必填。</div>
                                    </div>
                                </div>
                            </div>

                            <div class="layui-form-item">
                                <div class="layui-inline">
                                    <label class="layui-form-label">公交路线</label>
                                    <div class="layui-input-inline">
                                        <input autocomplete="off" name="bus" class="layui-input">
                                    </div>
                                </div>
                                <div class="layui-inline">
                                    <button class="layui-btn layui-btn-xs layui-btn-self" id="addBus">添加路线</button>
                                </div> <div class="layui-inline">
                                <div class="layui-inline layui-word-aux">提示：可添加多路线。</div>
                            </div>
                                <div class="layui-inline">
                                    <div class="layui-form-mid layui-word-aux"></div>
                                </div>
                                <div class="layui-form-item">
                                    <div class="layui-inline beDemo-bus">
                                        <label class="layui-form-label"></label>
                                        <?php if(!empty($row['bus'])): if(is_array($row['bus']) || $row['bus'] instanceof \think\Collection || $row['bus'] instanceof \think\Paginator): $i = 0; $__LIST__ = $row['bus'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
                                        <span class="layui-self"><?php echo $v; ?></span><a href="javascript:;"><i class="is">x</i></a>
                                        <?php endforeach; endif; else: echo "" ;endif; endif; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="layui-form-item">
                                <label class="layui-form-label">我院地址<i>*</i></label>
                                <div class="layui-input-block">
                                    <input type="text" name="address"  value="<?php if(!empty($row['address'])): ?><?php echo $row['address']; endif; ?>" placeholder="医院地址" autocomplete="off" class="layui-input">
                                    <div class="layui-inline layui-word-aux">提示：此项必填。</div>
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
                            <input type="hidden" name="requestUrl" value="<?php echo url('contact'); ?>">
                            <input type="hidden" name="id" value="<?php if(!empty($row['id'])): ?><?php echo $row['id']; endif; ?>">
                            <button class="layui-btn xxx" lay-submit lay-filter="formContact">立即提交</button>
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