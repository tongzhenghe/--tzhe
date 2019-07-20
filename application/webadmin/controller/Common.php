<?php

namespace app\webadmin\controller;

use \app\webadmin\model\Index;
use app\webadmin\model\system\SystemAdmin;
use think\Controller;
use think\Db;

class Common extends Controller
{
    protected static $adminInfo;

    public  function  _initialize()
    {
        parent::_initialize();
        self::$adminInfo  =  SystemAdmin::activeAdminInfoOrFail();
        if(!is_dir('./tmp/'))mkdir ('./tmp/', 0700);
        session_save_path('./tmp/');

        if(!SystemAdmin::hasActiveAdmin()) return $this->redirect(url('Sign/signin'));

        $where = ['state' => 1, 'is_del' => 1];
        $menu = Db::name('admin_menu')->where($where)->select();
        $menu = Index::_reSort($menu,0);
        //set-menu
        $this->assign('menu', $menu);

    }


}
