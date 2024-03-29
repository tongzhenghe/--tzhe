<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:84:"/www/wwwroot/huamei.jqzxyy.com/public/../application/webadmin/view/index/table2.html";i:1533258939;}*/ ?>
<!-- 模板 -->
<div class="layui-fluid">
  <div class="layui-row">
    <div class="layui-col-xs12">
      <div class="layui-card">
        <div class="layui-card-header">表格</div>
        <div class="layui-card-body">
          <table id="demo_hash" lay-filter="test"></table>
          <script type="text/html" id="barDemo_hash">
              <a class="layui-btn layui-btn-xs" lay-event="detail">查看</a>
              <!-- <a class="layui-btn layui-btn-xs" lay-event="edit">编辑</a> -->
              <a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del">删除</a>
        
              <!-- 这里同样支持 laytpl 语法，如： -->
              {{# if(d.auth){ }}
                <a class="layui-btn layui-btn-xs" lay-event="check">审核</a> 
              {{# } }}
            </script>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- 脚本 -->
<script>
  layui.config({
    base: '/src/js/'
  }).use(['jquery', 'mockjs', 'table'], function () {
    var $ = layui.jquery,
      layer = layui.layer,
      table = layui.table;

    // 注入mock
    layui.mockjs.inject({
      'POST /demo/table/user1': {
        code: 0,
        msg: "xxx",
        count: 1000,
        'data|20': [{
          'id|+1': 1,
          username: '@name',
          sex: '@boolean',
          city: '@city',
          sign: '@csentence',
          experience: '@integer',
          score: '@integer',
          classify: '@word',
          wealth: '@integer',
          auth: '@boolean'
        }]
      }
    });

    //第一个实例
    table.render({
      method: 'post',
      limit: 20,
      elem: '#demo_hash',
      done: function () {
        $('#demo_hash').next().css('height','auto');
      },
      height: 680,
      url: '/demo/table/user1', //数据接口
      page: true, //开启分页
      cols: [
        [ //表头
          {
            field: 'id',
            title: 'ID',
            width: 80,
            sort: true,
            fixed: 'left'
          }, {
            field: 'username',
            title: '用户名',
            width: 80
          }, {
            field: 'sex',
            title: '性别',
            width: 80,
            sort: true
          }, {
            field: 'city',
            title: '城市',
            width: 80
          }, {
            field: 'sign',
            title: '签名',
            width: 177
          }, {
            field: 'experience',
            title: '积分',
            width: 80,
            sort: true
          }, {
            field: 'score',
            title: '评分',
            width: 80,
            sort: true
          }, {
            field: 'classify',
            title: '职业',
            width: 80
          }, {
            field: 'wealth',
            title: '财富',
            width: 135,
            sort: true
          }, {
            fixed: 'right',
            width: 180,
            align: 'center',
            toolbar: '#barDemo_hash'
          }
        ]
      ]
    });

  });
</script>
<!-- 样式 -->
<style scoped>
</style>