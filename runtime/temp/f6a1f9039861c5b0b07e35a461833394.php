<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:85:"/www/wwwroot/huamei.jqzxyy.com/public/../application/webadmin/view/index/setting.html";i:1562584148;}*/ ?>
<div class="layui-fluid">
  <div class="layui-row">
    <div class="layui-col-xs12">
      <form class="layui-form" action="">
        <input type="radio" name="loadType" lay-filter="loadType_hash" data-id="spa_hash" value="SPA" title="单页面方式" checked>
        <input type="radio" name="loadType" lay-filter="loadType_hash" data-id="tabs_hash" value="TABS" title="选择卡方式">
      </form>
    </div>
  </div>
</div>
<br/>
<h4>主题</h4>
<br/>
<div class="layui-row">
  <div class="layui-col-xs12" style="margin-bottom:15px;">
    <div class="layui-row layui-col-space5">
      <div class="layui-col-xs3">
        <div class="setting-color">
          <label data-theme="blue-light">
        <input type="radio" name="setting-theme" checked="checked">
        <i class="layui-icon layui-icon-ok-circle"></i>
        <span class="split">
          <span class="color bg-info"></span>
          <span class="color bg-info-light"></span>
        </span>
        <span class="color bg-white"></span>
      </label>
        </div>
      </div>
      <div class="layui-col-xs3">
        <div class="setting-color">
          <label data-theme="green-light">
        <input type="radio" name="setting-theme">
        <i class="layui-icon layui-icon-ok-circle"></i>
        <span class="split">
          <span class="color bg-green"></span>
          <span class="color bg-green-light"></span>
        </span>
        <span class="color bg-white"></span>
      </label>
        </div>
      </div>
      <div class="layui-col-xs3">
        <div class="setting-color">
          <label data-theme="purple-light">
        <input type="radio" name="setting-theme">
        <i class="layui-icon layui-icon-ok-circle"></i>
        <span class="split">
          <span class="color bg-purple"></span>
          <span class="color bg-purple-light"></span>
        </span>
        <span class="color bg-white"></span>
      </label>
        </div>
      </div>
      <div class="layui-col-xs3">
        <div class="setting-color">
          <label data-theme="red-light">
        <input type="radio" name="setting-theme">
        <i class="layui-icon layui-icon-ok-circle"></i>
        <span class="split">
          <span class="color bg-danger"></span>
          <span class="color bg-danger-light"></span>
        </span>
        <span class="color bg-white"></span>
      </label>
        </div>
      </div>
    </div>
  </div>
  <div class="layui-col-xs12">
    <div class="layui-row layui-col-space5">
      <div class="layui-col-xs3">
        <div class="setting-color">
          <label data-theme="blue-dark">
          <input type="radio" name="setting-theme">
          <i class="layui-icon layui-icon-ok-circle"></i>
          <span class="split">
            <span class="color bg-info"></span>
            <span class="color bg-info-light"></span>
          </span>
          <span class="color bg-gray-dark"></span>
        </label>
        </div>
      </div>
      <div class="layui-col-xs3">
        <div class="setting-color">
          <label data-theme="green-dark">
          <input type="radio" name="setting-theme">
          <i class="layui-icon layui-icon-ok-circle"></i>
          <span class="split">
            <span class="color bg-green"></span>
            <span class="color bg-green-light"></span>
          </span>
          <span class="color bg-gray-dark"></span>
        </label>
        </div>
      </div>
      <div class="layui-col-xs3">
        <div class="setting-color">
          <label data-theme="purple-dark">
          <input type="radio" name="setting-theme">
          <i class="layui-icon layui-icon-ok-circle"></i>
          <span class="split">
            <span class="color bg-purple"></span>
            <span class="color bg-purple-light"></span>
          </span>
          <span class="color bg-gray-dark"></span>
        </label>
        </div>
      </div>
      <div class="layui-col-xs3">
        <div class="setting-color">
          <label data-theme="red-dark">
          <input type="radio" name="setting-theme">
          <i class="layui-icon layui-icon-ok-circle"></i>
          <span class="split">
            <span class="color bg-danger"></span>
            <span class="color bg-danger-light"></span>
          </span>
          <span class="color bg-gray-dark"></span>
        </label>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
  layui.use(['form', 'utils'], function() {
    var form = layui.form,
      $ = layui.jquery,
      utils = layui.utils,
      localStorage = utils.localStorage;

    form.render();
    var key = 'KITADMIN_SETTING_LOADTYPE';
    var setting = localStorage.getItem(key);
    if (setting !== null) {
      if (setting.loadType === 'SPA') {
        $('input[data-id="spa_hash"]')[0].checked = true;
      } else {
        $('input[data-id="tabs_hash"]')[0].checked = true;
      }
      form.render('radio');
    }
    form.on('radio(loadType_hash)', function(data) {
      var val = data.value;
      localStorage.setItem(key, {
        loadType: val
      });
      // 重新加载
      location.reload();
    });
    var themeKey = 'KITADMIN_SETTING_THEME';
    $('input[name="setting-theme"]').on('click', function() {

      var _that = $(this);
      var themeName = _that.parent('label').attr('data-theme');
      localStorage.setItem(themeKey, {
        theme: themeName
      });


      var str = $('#theme').attr('href'); //str.substr(0,str.lastIndexOf('/')+1)
        var _themeUrl = str.substr(0, str.lastIndexOf('/') + 1);
      console.log(_themeUrl)
      $('#theme').attr('href', _themeUrl + themeName + '.css');
      var _body = $('body');
      if (!_body.hasClass('kit-theme-' + themeName)) {
        _body.addClass('kit-theme-' + themeName);
      }
    });
  });
</script>
<style scoped>
  .setting-color {
    padding: 0 5px;
  }
  
  .setting-color>label {
    display: block;
    position: relative;
    margin: 0 10px;
    border-radius: 3px;
    overflow: hidden;
    border: 1px solid rgba(0, 0, 0, 0.1);
    cursor: pointer;
  }
  
  .setting-color>label>input[type="radio"] {
    position: absolute;
    opacity: 0;
    visibility: hidden;
    box-sizing: border-box;
    padding: 0;
    overflow: visible;
    margin: 0;
    font-family: inherit;
    font-size: inherit;
    line-height: inherit;
  }
  
  .setting-color>label .split {
    display: block;
  }
  
  .setting-color>label .split .color:first-child {
    float: left;
    width: 70%;
  }
  
  .setting-color>label .split .color {
    display: block;
    height: 37.5px;
  }
  
  .setting-color>label .split .bg-info {
    background-color: #23b7e5;
    color: #fff !important;
  }
  
  .setting-color>label .split .bg-info-light {
    background-color: #51c6ea;
    color: #fff !important;
  }
  
  .setting-color>label .split .bg-green {
    background-color: #37bc9b;
    color: #fff !important;
  }
  
  .setting-color>label .split .bg-green-light {
    background-color: #58ceb1;
    color: #fff !important;
  }
  
  .setting-color>label .split .bg-purple {
    background-color: #7266ba;
    color: #fff !important;
  }
  
  .setting-color>label .split .bg-purple-light {
    background-color: #9289ca;
    color: #fff !important;
  }
  
  .setting-color>label .split .bg-danger {
    background-color: #f05050;
    color: #fff !important;
  }
  
  .setting-color>label .split .bg-danger-light {
    background-color: #f47f7f;
    color: #fff !important;
  }
  
  .setting-color>label i.layui-icon-ok-circle {
    position: absolute;
    display: block;
    left: 50%;
    top: 50%;
    width: 20px;
    height: 20px;
    margin-top: -20px;
    margin-left: -10px;
    text-align: center;
    font-size: 1.33333333em;
    vertical-align: -15%;
    color: #fff;
    opacity: 0;
  }
  
  .setting-color>label input[type="radio"]:checked+i.layui-icon-ok-circle {
    opacity: 1 !important;
  }
  
  .setting-color>label .color {
    display: block;
    height: 18px;
  }
  
  .setting-color>label .bg-white {
    background-color: #fff;
    color: inherit !important;
  }
  
  .setting-color>label .bg-gray-dark {
    background-color: #3a3f51;
    color: #fff !important;
  }
  
  .setting-color>label:last-child {
    margin-right: 0;
  }
  
  .setting-color>label:first-child {
    margin-left: 0;
  }
</style>