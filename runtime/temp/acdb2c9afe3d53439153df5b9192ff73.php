<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:82:"/www/wwwroot/huamei.jqzxyy.com/public/../application/webadmin/view/index/user.html";i:1557306303;s:80:"/www/wwwroot/huamei.jqzxyy.com/application/webadmin/view/include/laytablejs.html";i:1557130084;s:76:"/www/wwwroot/huamei.jqzxyy.com/application/webadmin/view/include/submit.html";i:1563155974;}*/ ?>
<style>
    .layui-table-view{
        height: 100%!important;
    }
    .layui-table-main{
        height: 100%!important;
    }
    .layui-table{    height: 100%!important;}
</style>
<div class="layui-fluid">
  <div class="layui-row">
    <div class="layui-col-xs12">
      <div class="layui-card">
          <blockquote class="layui-elem-quote">
              <span class="layui-breadcrumb">
                    <a href="/">首页</a>
                    <a><cite>用户列表</cite></a>
              </span>
          </blockquote>

        <div class="layui-card-header">
          <div class="layui-tab layui-tab-brief" lay-filter="docDemoTabBrief">
            <ul class="layui-tab-title">
                <li>用户管理</li>
                <li class="layui-this">回收站</li>
            </ul>
            <div class="layui-tab-content">
              <div class="layui-tab-item layui-show">

                  <div class="layui-card-body">
                      <div class="layui-card-header">
                      <a href="#/website/adduser" class="layui-btn layui-btn-xs">
                          <i class="layui-icon">&#xe654;</i>
                          <span>新增管理员</span>
                      </a>
                      <a href="#/website/collection" class="layui-btn layui-btn-xs">
                      <i class="layui-icon">&#xe640;</i>
                      <span>回收站</span>
                      </a>
                      <a href="javascript:;" class="layui-btn layui-btn-xs layui-btn-primary" id="search_hash">
                          <i class="layui-icon">&#xe615;</i>
                      </a>
                      </div>
                      <div class="layui-card-body" style="top: 10px;">
                          <table lay-filter="demo"  lay-data="{height:315, page:true, id:'test'}" >
                              <thead>
                              <tr>
                                  <th lay-data="{field:'id', width:100, sort:true}">(编号id)</th>
                                  <th lay-data="{field:'pername', width:100}">用户姓名</th>
                                  <th lay-data="{field:'username', width:100}">登陆用户名</th>
                                  <th lay-data="{field:'time', width:100}">创建时间</th>
                                  <th lay-data="{field:'state', width:100}">状态</th>
                                  <th lay-data="{field:'操作', width:80}">操作</th>
                              </tr>
                              </thead>
                              <tbody>
                              <?php if(!empty($user)): if(is_array($user) || $user instanceof \think\Collection || $user instanceof \think\Paginator): $k = 0; $__LIST__ = $user;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($k % 2 );++$k;?>
                              <tr>
                                  <td><?php echo $v['id']; ?></td>
                                  <td><span><?php echo $v['pername']; ?></span></td>
                                  <td><span><?php echo $v['username']; ?></span></td>
                                  <td><?php echo $v['time']; ?></td>
                                  <td>
                                      <?php if($v['state'] == 1): ?>
                                      <a href="javascript:;">
                                          <div class="layui-input-block" style="margin-left:unset;">
                                              <input type="checkbox" checked="" data-do="_state"   name="open" lay-skin="switch" data-field="state" data-ids="<?php echo $v['id']; ?>" data-url="<?php echo url('index/user'); ?>"  lay-filter="switchTest_hash"  lay-text="正常|禁用">
                                          </div>
                                      </a>
                                      <?php else: ?>
                                      <a href="javascript:;">
                                          <div class="layui-input-block"  style="margin-left:unset;">
                                              <input type="checkbox"  data-do="_state" data-field="state" data-ids="<?php echo $v['id']; ?>"  data-url="<?php echo url('index/user'); ?>"  lay-filter="switchTest_hash"  name="close" lay-skin="switch"  lay-text="正常|禁用">
                                          </div>
                                      </a>
                                      <?php endif; ?>
                                  </td>
                                  <td>
                                      <a href="javascript:;" data-ids="<?php echo $v['id']; ?>" data-url="<?php echo url('index/user'); ?>" id="delUser"><i  class="layui-icon" title="删除数据">&#xe640;</i></a>
                                  </td>
                              </tr>
                              <?php endforeach; endif; else: echo "" ;endif; endif; ?>
                              </tbody>
                          </table>
                          <script type="text/html" id="barDemo_hash">
                              <a class="layui-btn layui-btn-xs" lay-event="detail">查看</a>
                              <a class="layui-btn layui-btn-xs" lay-event="edit">编辑</a>
                              <a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del">删除</a>
                          </script>
                      </div>
                  </div>

              </div>
              <div class="layui-tab-item">
                  ssss
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>

<!--索引表单-->
<script type="text/html" id="search_tpl_hash">
  <form class="layui-form" action="">
    <div class="layui-form-item">
      <label class="layui-form-label">管理员名称/id/</label>
      <div class="layui-input-block">
        <input type="text" name="title" placeholder="请输入用户名.." autocomplete="off" class="layui-input">
      </div>
    </div>
    <div class="layui-form-item">
      <label class="layui-form-label">城市</label>
      <div class="layui-input-block">
        <select name="city">
          <option value=""></option>
          <option value="0">北京</option>
          <option value="1">上海</option>
          <option value="2">广州</option>
          <option value="3">深圳</option>
          <option value="4">杭州</option>
        </select>
      </div>
    </div>
    <div class="layui-form-item">
      <label class="layui-form-label">是否禁用</label>
      <div class="layui-input-block">
        <input type="checkbox" name="switch" lay-skin="switch">
      </div>
    </div>
    <div class="layui-form-item">
      <label class="layui-form-label">性别</label>
      <div class="layui-input-block">
        <input type="radio" name="sex" value="男" title="男">
        <input type="radio" name="sex" value="女" title="女" checked>
      </div>
    </div>
    <div class="layui-form-item">
      <div class="layui-input-block">
        <button class="layui-btn" lay-submit lay-filter="formDemo_hash"><i class="layui-icon">&#xe615;</i> 搜索</button>
        <button type="reset" class="layui-btn layui-btn-primary">重置</button>
      </div>
    </div>
  </form>
</script>

<!--依赖-->
<script type="text/javascript" src="/static/admin/layui_rely.js"></script>
<script>

    layui.config({
        base: '/src/js/'
    }).use(['jquery', 'mockjs', 'table', 'sidebar', 'form'], function () {
        var $ = layui.jquery,
            sidebar = layui.sidebar,
            form = layui.form;
        var table = layui.table;
        //转换静态表格
        table.init('demo', {
            size: 'sm'
            ,height: 500 //设置高度
            ,limit: 10 //注意：请务必确保 limit 参数（默认：10）是与你服务端限定的数据条数一致
            //支持所有基础参数
        });

        $('#search_hash').on('click', function () {
            var that = this;
            // console.log($('#search_tpl_hash').html());
            sidebar.render({
                elem: that,
                content: $('#search_tpl_hash').html(),
                title: '搜索',
                shade: true,
                // shadeClose:false,
                // direction: 'left'
                // dynamicRender: false,
                // url: 'views/member/all/search.html',
                width: '500px', //可以设置百分比和px
                done: function () {
                    console.log('ccc');
                    form.render();

                    //监听提交
                    form.on('submit(formDemo_hash)', function (data) {
                        // layer.msg(JSON.stringify(data.field));
                        table.reload('demo_hash', {
                            where: data.field
                        });
                        return false;
                    });
                }
            });
        });
    });

</script>

<script>
    $(".layui-tab-title li").click(function(){
        var picTabNum = $(this).index();
        // console.log("当前图片标题下标是："+picTabNum);
        sessionStorage.setItem("picTabNum",picTabNum);
    });
    $(function(){
        var getPicTabNum = sessionStorage.getItem("picTabNum");
        $(".layui-tab-title li").eq(getPicTabNum).addClass("layui-this").siblings().removeClass("layui-this");
        $(".layui-tab-content>div").eq(getPicTabNum).addClass("layui-show").siblings().removeClass("layui-show");
    })
</script>
<script>