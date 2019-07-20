<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:89:"/www/wwwroot/huamei.jqzxyy.com/public/../application/webadmin/view/index/web_setting.html";i:1557546470;s:76:"/www/wwwroot/huamei.jqzxyy.com/application/webadmin/view/include/submit.html";i:1562921599;}*/ ?>
<!-- 模板 -->
<div class="layui-fluid">
    <div class="layui-row">
        <div class="layui-card">
            <div class="layui-card-header">
            <span class="layui-breadcrumb">
              <i>当前位置：</i>
            <a href="/">首页</a>
            <a><cite>网站设置</cite></a>
          </span>
            </div>
            <form class="layui-form" action="##" onsubmit="return false">
            <div class="layui-tab layui-tab-brief" lay-filter="docDemoTabBrief">
                <ul class="layui-tab-title select-title">
                    <li class="layui-this">基本信息</li>
                    <li>SEO全局设置</li>
                </ul>
                <div class="layui-tab-content">
                    <div class="layui-tab-item layui-show">
                        <div class="layui-card-body" style="padding: 6px 0;">
                            <div class="layui-form-item">
                                <label class="layui-form-label">商务通接入链接<i>*</i></label>
                                <div class="layui-input-block">
                                    <input type="text" name="bscnym_path"  value="<?php if(!empty($row['bscnym_path'])): ?><?php echo $row['bscnym_path']; endif; ?>" placeholder="商务通接入链接" autocomplete="off" class="layui-input">
                                    <div class="layui-inline layui-word-aux">提示：请务必填写正确！</div>
                                </div>
                            </div>
                            <div class="layui-form-item">
                                <label class="layui-form-label">左侧广告图</label>
                                <div class="layui-input-block img-left">
                                    <a href="javascript:;">
                                        <i class="layui-icon layui-icon-picture uploadLeftPoster"></i>
                                    </a>
                                    <div class="layui-inline layui-word-aux">提示：（162*440:px） 限制大小：100kb。</div>
                                    <img src="<?php if(!empty($row['left_poster'])): ?><?php echo $row['left_poster']; endif; ?>"  onclick="$.fn.preview(this)" class="imgLeft" width="100px">
                                </div>
                            </div>

                            <div class="layui-form-item">
                                <label class="layui-form-label">中间弹框广告</label>
                                <div class="layui-input-block img-center">
                                    <a href="javascript:;">
                                        <i class="layui-icon layui-icon-picture uploadCenterPoster"></i>
                                    </a>
                                    <div class="layui-inline layui-word-aux">提示：（620*358:px  限制大小：200kb。</div>
                                    <img src="<?php if(!empty($row['center_poster'])): ?><?php echo $row['center_poster']; endif; ?>" onclick="$.fn.preview(this)" class="imgCenter" width="100px">
                                </div>
                            </div>

                              <div class="layui-form-item">
                                <label class="layui-form-label">手机端中间弹框广告</label>
                                <div class="layui-input-block img-center_mo">
                                    <a href="javascript:;">
                                        <i class="layui-icon layui-icon-picture uploadCenterPosterMobile"></i>
                                    </a>
                                    <div class="layui-inline layui-word-aux">提示：（278*265:px）  限制大小：200kb。</div>
                                    <img id="imgdemo-mobile" src="<?php if(!empty($row['mobile_poster'])): ?><?php echo $row['mobile_poster']; endif; ?>" onclick="$.fn.preview(this)" class="imgCenterMo" width="100px">
                                </div>
                            </div>

                            <div class="layui-form-item">
                                <label class="layui-form-label">是否开启虚拟对话框</label>
                                <div class="layui-inline">
                                    <label class="layui-form-label">PC端</label>
                                    <div class="layui-input-inline">
                                            <input type="radio" name="is_open_dialog_pc" <?php if($row['is_open_dialog']->is_open_dialog_pc == 1): ?> checked<?php endif; ?> value="1" title="开启">
                                            <input type="radio" name="is_open_dialog_pc" value="2" <?php if($row['is_open_dialog']->is_open_dialog_pc == 2): ?> checked<?php endif; ?> title="关闭" >
                                        <div class="layui-inline layui-word-aux">注意： 默认未开启。</div>
                                    </div>
                                </div>
                                <div class="layui-inline">
                                    <label class="layui-form-label">移动端</label>
                                    <div class="layui-input-inline">
                                            <input type="radio" name="is_open_dialog_mobile" <?php if($row['is_open_dialog']->is_open_dialog_mobile == 1): ?> checked <?php endif; ?> value="1" title="开启">
                                            <input type="radio" name="is_open_dialog_mobile" <?php if($row['is_open_dialog']->is_open_dialog_mobile == 2): ?>  checked <?php endif; ?>  value="2" title="关闭">
                                        <div class="layui-inline layui-word-aux">注意： 默认未开启。</div>
                                    </div>
                                </div>
                            </div>
                            <div class="layui-form-item layui-form-text">
                                <label class="layui-form-label">第三方安装代码
                                    <i>*</i>
                                </label>
                                <div class="layui-input-block">
                                    <textarea placeholder="三方安装代码" style="width: 60%;height: 300px;" name="other_code" class="layui-textarea"><?php if(!empty($row['other_code'])): ?><?php echo $row['other_code']; endif; ?></textarea>
                                    <div class="layui-inline layui-word-aux">提示：避免填写有误， 请复制第三方代码。</div>
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
                            <input type="hidden" name="requestUrl" value="<?php echo url('web_setting'); ?>">
                            <input type="hidden" name="id" value="<?php if(!empty($row['id'])): ?><?php echo $row['id']; endif; ?>">
                            <button class="layui-btn xxx" lay-submit lay-filter="formWebSetting">立即提交</button>
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

    layui.use(['form', 'layedit', 'laydate'], function() {
        var form = layui.form,
            $ = layui.jquery;
            laydate = layui.laydate;
        form.render();
        //日期
        laydate.render({
            elem: '#date_hash'
        });

        form.on('submit(formKeywords_link)', function(data) {
            var arr_re_keywords = [];
            $(".beDemo-k").children(".layui-self");
            $.each($(".beDemo-k").children(".layui-self"), function (k, v ) {
                arr_re_keywords.push($(v).text())
            });

            data.field.arr_re_keywords = arr_re_keywords;
            $.fn.repost( data.field.requestUrl, data.field);
        });


        //menu
        form.on('submit(formDemo)', function(data) {
            $.fn.repost( data.field.requestUrl, data.field);
        });



        form.on('switch(switchContent)', function(data) {

            if (this.checked) {
                //链接框
                $(".content-url").show();
                $(".content-custom").hide();
                //UE.getEditor('container').setContent('', false);
            } else {
                $(".content-url").hide();
                $(".content-custom").show();
                //$("input[name='out_url']").val('');
            }
        });

        //profile_cate
        form.on('submit(formDemoPro)', function(data) {
            data.field.icon = $(".imgdemo1").attr('src');
            data.field.img = $(".imgdemo2").attr('src');
            data.field.is_tj = ( data.field.is_tj === 'on') ? 1 : 2;
            data.field.is_hot = ( data.field.is_hot === 'on') ? 1 : 2;
            data.field.is_new = ( data.field.is_new === 'on') ? 1 : 2;
            $.fn.repost( data.field.requestUrl, data.field);
        });


          //profile
        form.on('submit(formDemoProject)', function(data) {
            data.field.content =  ue.getContent();
            data.field.icon = $(".imgdemo1").attr('src');
            data.field.img = $(".imgdemo2").attr('src');
            data.field.is_tj = ( data.field.is_tj === 'on') ? 1 : 2;
            data.field.is_hot = ( data.field.is_hot === 'on') ? 1 : 2;
            data.field.is_new = ( data.field.is_new === 'on') ? 1 : 2;
            $.fn.repost( data.field.requestUrl, data.field);
        });



        //profile
        form.on('submit(formBanner)', function(data) {
            data.field.img = $(".imgdemo2").attr('src');
            data.field.is_tj = ( data.field.is_tj === 'on') ? 1 : 2;
            $.fn.repost( data.field.requestUrl, data.field);
        });


         //active_cate:
        form.on('submit(formActivity_cate)', function(data) {
            data.field.icon = $(".imgdemo1").attr('src');
            data.field.is_tj = ( data.field.is_tj === 'on') ? 1 : 2;
            data.field.is_hot = ( data.field.is_hot === 'on') ? 1 : 2;
            data.field.is_new = ( data.field.is_new === 'on') ? 1 : 2;
            $.fn.repost( data.field.requestUrl, data.field);
        });


        form.on('submit(formSubject)', function(data) {
            data.field.img = $(".imgdemo2").attr('src');
            data.field.is_tj = ( data.field.is_tj === 'on') ? 1 : 2;
            data.field.is_hot = ( data.field.is_hot === 'on') ? 1 : 2;
            data.field.is_new = ( data.field.is_new === 'on') ? 1 : 2;
            $.fn.repost( data.field.requestUrl, data.field);
        });


      //sub_cate:
        form.on('submit(formSubject_cate)', function(data) {
            data.field.icon = $(".imgdemo1").attr('src');
            data.field.is_tj = ( data.field.is_tj === 'on') ? 1 : 2;
            data.field.is_hot = ( data.field.is_hot === 'on') ? 1 : 2;
            data.field.is_new = ( data.field.is_new === 'on') ? 1 : 2;
            $.fn.repost( data.field.requestUrl, data.field);
        });


         //active_cate:
        form.on('submit(formNews_cate)', function(data) {
            data.field.icon = $(".imgdemo1").attr('src');
            data.field.is_tj = ( data.field.is_tj === 'on') ? 1 : 2;
            data.field.is_hot = ( data.field.is_hot === 'on') ? 1 : 2;
            data.field.is_new = ( data.field.is_new === 'on') ? 1 : 2;
            $.fn.repost( data.field.requestUrl, data.field);
        });

     //news:
        form.on('submit(formNews)', function(data) {
            data.field.icon = $(".imgdemo2").attr('src');
            data.field.is_tj = ( data.field.is_tj === 'on') ? 1 : 2;
            data.field.is_hot = ( data.field.is_hot === 'on') ? 1 : 2;
            data.field.is_new = ( data.field.is_new === 'on') ? 1 : 2;
            $.fn.repost( data.field.requestUrl, data.field);
        });



        //active:
        form.on('submit(formActivity)', function(data) {
            data.field.img = $(".imgdemo2").attr('src');
            data.field.is_tj = ( data.field.is_tj === 'on') ? 1 : 2;
            data.field.is_hot = ( data.field.is_hot === 'on') ? 1 : 2;
            data.field.is_new = ( data.field.is_new === 'on') ? 1 : 2;
            $.fn.repost( data.field.requestUrl, data.field);
        });


      //active:
        form.on('submit(formReal_show)', function(data) {
            data.field.icon = $(".imgdemo1").attr('src');
            data.field.img = $(".imgdemo2").attr('src');
            data.field.icon_title = $(".icon_title").attr('src');
            $.fn.repost( data.field.requestUrl, data.field);
        });


        //ask-cate:
        form.on('submit(formAsk_cate)', function(data) {
            data.field.icon = $(".imgdemo1").attr('src');
            data.field.is_tj = ( data.field.is_tj === 'on') ? 1 : 2;
            data.field.is_hot = ( data.field.is_hot === 'on') ? 1 : 2;
            data.field.is_new = ( data.field.is_new === 'on') ? 1 : 2;
            console.log(data.field)
            $.fn.repost( data.field.requestUrl, data.field);
        });

        //ask-cate:
        form.on('submit(formRealShowCate)', function(data) {
            data.field.icon = $(".imgdemo1").attr('src');
            data.field.is_tj = ( data.field.is_tj === 'on') ? 1 : 2;
            data.field.is_hot = ( data.field.is_hot === 'on') ? 1 : 2;
            data.field.is_new = ( data.field.is_new === 'on') ? 1 : 2;
            console.log(data.field)
            $.fn.repost( data.field.requestUrl, data.field);
        });

        //news:
        form.on('submit(formAsk)', function(data) {
            data.field.icon = $(".imgdemo2").attr('src');
            data.field.is_tj = ( data.field.is_tj === 'on') ? 1 : 2;
            data.field.is_hot = ( data.field.is_hot === 'on') ? 1 : 2;
            data.field.is_new = ( data.field.is_new === 'on') ? 1 : 2;
            $.fn.repost( data.field.requestUrl, data.field);
        });

        //notes
        form.on('submit(formNotes)', function(data) {
            var img = [];

            $.each($("#imgdemo2").children("img"), function (key, val ) {
                img.push($(val).attr("src"))
            });

            data.field.img = img;
            data.field.icon = $(".imgdemo1").attr('src');

            $.fn.repost( data.field.requestUrl, data.field);

        });

        //formGy
        form.on('submit(formGy)', function(data) {
            data.field.img = $(".imgdemo2").attr('src');

            console.log()
            $.fn.repost( data.field.requestUrl, data.field);
        });

       //notes
        form.on('submit(formVideo)', function(data) {
            data.field.requestUrl = '/webadmin/index/addVideo';
            data.field.is_tj = ( data.field.is_tj === 'on') ? 1 : 2;
            data.field.path =  $(".videoDemo").attr('href');
            $.fn.repost( data.field.requestUrl, data.field);
        });

         //notes
        form.on('submit(formMachine)', function(data) {
            data.field.img = $(".imgdemo2").attr('src');
            data.field.icon = $(".imgdemo1").attr('src');
            // console.log( data.field);
            $.fn.repost( data.field.requestUrl, data.field);
        });

        //notes
        form.on('submit(formExpert)', function(data) {
            data.field.is_tj = ( data.field.is_tj === 'on') ? 1 : 2;
            data.field.img = $(".imgdemo2").attr('src');
            var arr = [];
             $.each($(".layui-badge"), function (k, v ) {
                 arr.push($(v).text())
             });
             data.field.be_expert_in = arr;
            $.fn.repost( data.field.requestUrl, data.field);
        });



        //contact
        form.on('submit(formContact)', function(data) {
            var arr_tel = [];
            var arr_bus = [];

            console.log($(".beDemo-tel").children(".layui-self"));
            $.each($(".beDemo-tel").children(".layui-self"), function (k, v ) {
                arr_tel.push($(v).text())
            });
            data.field.tel = arr_tel;

           $.each($(".beDemo-bus").children(".layui-self"), function (k, v ) {
               arr_bus.push($(v).text())
            });
            data.field.bus = arr_bus;

            $.fn.repost( data.field.requestUrl, data.field);

        });

        form.on('submit(formAbout)', function(data) {
            data.field.img = $(".imgdemo2").attr('src');
            data.field.about_video = $(".videoDemo").attr("href");
            console.log( data.field);
            $.fn.repost( data.field.requestUrl, data.field);
        });

       form.on('submit(formUser)', function(data) {

            $.fn.repost( data.field.requestUrl, data.field);
        });

       form.on('submit(formUser)', function(data) {

            $.fn.repost( data.field.requestUrl, data.field);

        });


      form.on('submit(formWebSetting)', function(data) {
          data.field.left_poster = $(".imgLeft").attr('src');
          data.field.center_poster = $(".imgCenter").attr('src');
          data.field.mobile_poster = $(".imgCenterMo").attr('src');
          $.fn.repost( data.field.requestUrl, data.field);
        });

      form.on('submit(formGoods)', function(data) {
          data.field.is_tj = ( data.field.is_tj === 'on') ? 1 : 2;
          data.field.discount = ( data.field.discount === 'on') ? 1 : 2;
          data.field.icon = $("#imgdemo1").attr('src');
          $.fn.repost( data.field.requestUrl, data.field);
        });

       //权限模块选择






        //swetch监听指定开关
        form.on('switch(switchTest_hash)', function(data) {
            //id， 字段， url
            var id = $(this).attr('data-ids')
                ,field = $(this).attr('data-field')
                ,value  = this.checked ? 1: 2;
            if (!id) {alert('数据不存在！'); return false;}
            data = {id:id, field:field, value:value,do:$(this).attr('data-do')};
            $.fn.repost($(this).attr('data-url'), data);
            // layer.msg((this.checked ? '已开启' : '已禁用'), {
            //     offset: '6px'
            // });
            //layer.tips('温馨提示：请注意开关状态的文字可以随意定义，而不仅仅是ON|OFF', data.othis)
        });

    });


    $(document).on('click', '#delMenu', function() {
        $.fn.deleteFind( $(this).attr('data-url'),{ do: 'delFind', id: $(this).attr('data-ids')});
    });

    $(document).on('click', '#delSubject_cate', function() {
        $.fn.deleteFind( $(this).attr('data-url'),{ do: 'delFind', id: $(this).attr('data-ids')});
    });

    $(document).on('click', '#delPro', function() {
        $.fn.deleteFind( $(this).attr('data-url'),{ do: 'delFind', id: $(this).attr('data-ids')});
    });
    $(document).on('click', '#delPro_cate', function() {
        $.fn.deleteFind( $(this).attr('data-url'),{ do: 'delFind', id: $(this).attr('data-ids')});
    });

    $(document).on('click', '#delBanner', function() {
        $.fn.deleteFind( $(this).attr('data-url'),{ do: 'delFind', id: $(this).attr('data-ids')});
    });

    $(document).on('click', '#delActivity_cate', function() {
        $.fn.deleteFind( $(this).attr('data-url'),{ do: 'delFind', id: $(this).attr('data-ids')});
    });

    $(document).on('click', '#delActivity_cate', function() {
        $.fn.deleteFind( $(this).attr('data-url'),{ do: 'delFind', id: $(this).attr('data-ids')});
    });

    $(document).on('click', '#delActivity', function() {
        $.fn.deleteFind( $(this).attr('data-url'),{ do: 'delFind', id: $(this).attr('data-ids')});
    });

    $(document).on('click', '#delNews_cate', function() {
        $.fn.deleteFind( $(this).attr('data-url'),{ do: 'delFind', id: $(this).attr('data-ids')});
    });

    $(document).on('click', '#delNews', function() {
        $.fn.deleteFind( $(this).attr('data-url'),{ do: 'delFind', id: $(this).attr('data-ids')});
    });

   $(document).on('click', '#delReal_show', function() {
        $.fn.deleteFind( $(this).attr('data-url'),{ do: 'delFind', id: $(this).attr('data-ids')});
    });


   $(document).on('click', '#delAsk', function() {
        $.fn.deleteFind( $(this).attr('data-url'),{ do: 'delFind', id: $(this).attr('data-ids')});
    });

    $(document).on('click', '#delNotes', function() {
        $.fn.deleteFind( $(this).attr('data-url'),{ do: 'delFind', id: $(this).attr('data-ids')});
    });

    $(document).on('click', '#delVideo', function() {
        $.fn.deleteFind( $(this).attr('data-url'),{ do: 'delFind', id: $(this).attr('data-ids')});
    });

   $(document).on('click', '#delMachine', function() {
        $.fn.deleteFind( $(this).attr('data-url'),{ do: 'delFind', id: $(this).attr('data-ids')});
    });

   $(document).on('click', '#delUser', function() {
        $.fn.deleteFind( $(this).attr('data-url'),{ do: 'delFind', id: $(this).attr('data-ids')});
    });

    //delete
    $(document).on('click', '#for-del', function() {
        $.fn.repost( '/webadmin/index/for_del', {id: $(this).attr('data-ids'), table: $(this).attr("data-table")});
    });



    //restore
    $(document).on('click', '#restore-data', function() {
        $.fn.repost( '/webadmin/index/restore', {id: $(this).attr('data-ids'), table: $(this).attr("data-table")});
    });

     //addBe_expert
    $(document).on('click', '#addBe_expert', function() {
        if (!$("input[name='addBe_expert']").val()) {
            layer.msg('内容为空！');
            return false;
        }
        $('.beDemo').append( '<span class="layui-badge">'+$("input[name='addBe_expert']").val()+'</span><a href="javascript:;"><i class="is">x</i></a>');
        $("input[name='addBe_expert']").val('');
    });


    $(document).on('click', '#addTel', function() {
        if (!$("input[name='tel']").val()) {
            layer.msg('内容为空！');
            return false;
        }
        $('.beDemo-tel').append( '<span class="layui-self">'+$("input[name='tel']").val()+'</span><a href="javascript:;"><i class="is">x</i></a>');
        $("input[name='tel']").val('');
    });


    $(document).on('click', '#addBus', function() {
        if (!$("input[name='bus']").val()) {
            layer.msg('内容为空！');
            return false;
        }
        $('.beDemo-bus').append( '<span class="layui-self">'+$("input[name='bus']").val()+'</span><a href="javascript:;"><i class="is">x</i></a>');
        $("input[name='bus']").val('');
    });

     //addBe_expert-del
    $(document).on('click', '.is', function() {
        $(this).parent().prev().remove();
        $(this).parent().remove();
    });




    /*上传组件*/
    layui.use('upload', function () {
        var upload = layui.upload
            ,url =  "/webadmin/index/upload";


        upload.render({
            elem: '.upload_file'
            ,size: 300
            ,url: url
            , before: function (obj) {
                layer.load();
            }
            , done: function (res, index, upload) {
                // //预览1
                $(".icon_title").attr('src', res.file);
                $(".icon_title").parent().append(' <a href="javascript:;" class="delete-img"><span>x</span></a>');
                layer.closeAll('loading'); //关闭loading
            }
            , error: function (index, upload) {
                layer.closeAll('loading'); //关闭loading
            }
        });









        //图标
        upload.render({
            elem: '.upload1'
            ,size: 300
            ,url: url
            , before: function (obj) {
                layer.load();
            }
            , done: function (res, index, upload) {
                // //预览1
                $("#imgdemo1").attr('src', res.file);
                $("#imgdemo1").attr('src', res.file);
                $(".del-icon1").show();
                layer.closeAll('loading'); //关闭loading
            }
            , error: function (index, upload) {
                layer.closeAll('loading'); //关闭loading
            }
        });

           //图标
        upload.render({
            elem: '.uploadMachine-icon'
            ,size: 100
            ,url: url
            , before: function (obj) {
                layer.load();
            }
            , done: function (res, index, upload) {
                // //预览1
                $("#imgdemo1").attr('src', res.file);
                $("#imgdemo1").attr('src', res.file);
                $(".del-icon1").show();
                layer.closeAll('loading'); //关闭loading
            }
            , error: function (index, upload) {
                layer.closeAll('loading'); //关闭loading
            }
        });


        upload.render({
            elem: '.upload2'
            ,size: 300
            ,url: url
            , before: function (obj) {
                layer.load();
            }
            , done: function (res, index, upload) {
                // //预览
                $("#imgdemo2").attr('src', res.file);
                $(".del-icon2").show();
                layer.closeAll('loading'); //关闭loading
            }
            , error: function (index, upload) {
                layer.closeAll('loading'); //关闭loading
            }
        });



        //banner
        upload.render({
            elem: '.uploadBanner'
            ,size: 500
            ,url: url
            , before: function (obj) {
                layer.load();
            }
            , done: function (res, index, upload) {
                // //预览
                $("#imgdemo2").attr('src', res.file);
                $(".del-icon2").show();
                layer.closeAll('loading'); //关闭loading
            }
            , error: function (index, upload) {
                layer.closeAll('loading'); //关闭loading
            }
        });


        //uploadActivity
        upload.render({
            elem: '.uploadActivity'
            ,size: 250
            ,url: url
            , before: function (obj) {
                layer.load();
            }
            , done: function (res, index, upload) {
                // //预览
                $("#imgdemo2").attr('src', res.file);
                $(".del-icon2").show();
                layer.closeAll('loading'); //关闭loading
            }
            , error: function (index, upload) {
                layer.closeAll('loading'); //关闭loading
            }
        });


        upload.render({
            elem: '.uploadNotes'
            ,size: 250
            , multiple: true//多图
            ,url: url
            , before: function (obj) {
                layer.load();
            }
            , done: function (res, index, upload) {
                // //预览
                $("#imgdemo2").append(' <img src="'+res.file+'"/><i class="i3" style="    background: #000000cc;\n' +
                    '    padding: 4px;\n' +
                    '    padding-bottom: unset;\n' +
                    '    padding-top: unset;\n' +
                    '    color: white;\n' +
                    '    border-radius: 50%;margin-right: 20px;">x</i>');
                $(".del-icon2").show();
                layer.closeAll('loading'); //关闭loading
            }
            , error: function (index, upload) {
                layer.closeAll('loading'); //关闭loading
            }
        });


        $("#imgdemo2").on("click", ".i3", function () {
            $(this).prev().remove();
            $(this).remove();
        });




         upload.render({
            elem: '.uploadLeftPoster'
            ,size: 100
            ,url: url
            , before: function (obj) {
                layer.load();
            }
            , done: function (res, index, upload) {
                // //预览
                $(".imgLeft").attr('src', res.file);

                $(".img-left").append(' <a href="javascript:;" class="del-img"><span>x</span></a>');

                layer.closeAll('loading'); //关闭loading
            }
            , error: function (index, upload) {
                layer.closeAll('loading'); //关闭loading
            }
        });



        upload.render({
            elem: '.uploadCenterPoster'
            ,size: 200
            ,url: url
            , before: function (obj) {
                layer.load();
            }
            , done: function (res, index, upload) {
                // //预览
                $(".imgCenter").attr('src', res.file);
                $(".img-center").append(' <a href="javascript:;" class="del-img"><span>x</span></a>');
                layer.closeAll('loading'); //关闭loading
            }
            , error: function (index, upload) {
                layer.closeAll('loading'); //关闭loading
            }
        });


        upload.render({
            elem: '.uploadCenterPosterMobile'
            ,size: 200
            ,url: url
            , before: function (obj) {
                layer.load();
            }
            , done: function (res, index, upload) {
                // //预览
                $(".imgCenterMo").attr('src', res.file);
                $(".img-center_mo").append(' <a href="javascript:;" class="del-img"><span>x</span></a>');
                layer.closeAll('loading'); //关闭loading
            }
            , error: function (index, upload) {
                layer.closeAll('loading'); //关闭loading
            }
        });


        //视频
        upload.render({
            elem: '.uploadVideo'
            ,size: 1000*20
            , accept: 'video'
            ,url: url
            , before: function (obj) {
                layer.load();
            }
            , done: function (res, index, upload) {
                $(".videoDemo").attr('href', res.file);
                $(".videoDemo").text(res.file);
                $(".videoDemo").children();
                layer.closeAll('loading'); //关闭loading
            }
            , error: function (index, upload) {
                layer.closeAll('loading'); //关闭loading
            }
        });




    });

    //删除图片
    $(document).on('click', '.del-icon1', function() {
        //删除图片
       $(this).prev().removeAttr("src");
       $(this).hide();
        
    });

  $(document).on('click', '.del-icon2', function() {
        //删除图片
       $(this).prev().removeAttr("src");
       $(this).hide();

    });


  $(document).on('click', '.del-img', function() {
        //删除图片
       $(this).prev().removeAttr("src");
       $(this).hide();

    });


  $(document).on('click', '.delete-img', function() {
        //删除图片
       $(this).prev().removeAttr("src");
       $(this).hide();

    });


  $(document).on('click', '.clone', function() {
     var clone_id = $(this).attr('data-ids')
         , clone_t = $(this).attr('data-data');
          layer.open({
              title:'提示！',
              content: '确定克隆此条数据？'
              ,btn: ['确定','取消']
              ,yes: function(index, layero) {
                  //回调
                  d  = {id: clone_id, t:clone_t};
                  $.fn.repost( '/webadmin/index/clone_field', d);
              }
          });
  });


  $(document).on('click', '#delKeywords_link', function() {
     var id = $(this).attr('data-ids');
          layer.open({
              title:'提示！',
              content: '确定删除此条数据， 删除将无法恢复？'
              ,btn: ['确定','取消']
              ,yes: function(index, layero) {
                  //回调
                  d  = {id: id, do:'delFind'};
                  $.fn.repost( '/webadmin/index/keywords_link', d);
              }
          });
  });


    $(document).on('click', '#addKeywords', function() {
        if (!$("input[name='re_keywords']").val()) {
            layer.msg('内容为空！');
            return false;
        }
        $('.beDemo-k').append( '<span class="layui-self">'+$("input[name='re_keywords']").val()+'</span><a href="javascript:;"><i class="is">x</i></a>');
        $("input[name='re_keywords']").val('');
    });




</script>
