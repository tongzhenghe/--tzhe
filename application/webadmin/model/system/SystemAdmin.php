<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/5/2
 * Time: 17:14
 */

namespace app\webadmin\model\system;


use think\Model;
use think\Session;
use traits\controller\Jump;

class SystemAdmin extends  Model
{
    use Jump;

    /**

     *  保存当前登陆用户信息

     */

    public static function setUserInfo($user)
    {

        Session::set('userid',$user['id']);

        Session::set('user',$user);

    }

    public static function is_md5($password) {
        return preg_match("/^[a-z0-9]{32}$/", $password);
    }


    /**

     * 清空当前登陆用户信息

     */

    public static function clearLoginInfo()

    {

        if(!is_dir('./tmp/'))mkdir ('./tmp/', 0700);

        session_save_path('./tmp/');

        Session::delete('user');

        Session::delete('userid');

        Session::clear();

    }



    /**

     * 检查用户登陆状态

     * @return bool

     */

    public static function hasActiveAdmin()
    {

        return  Session::has('user') && Session::has('userid');

    }





    /**

     * 获得登陆用户信息

     * @return mixed

     */
    public static function activeAdminInfoOrFail()
    {
        if(!is_dir('./tmp/'))mkdir ('./tmp/', 0700);
        session_save_path('./tmp/');
        $user = Session::get('user');
        $SystemAdmin = new SystemAdmin();
        if(empty($user)) $SystemAdmin->redirect(url('sign/signin'));
        if (!empty($user)) {
            if( $user['state'] === 2) $SystemAdmin->redirect(url('sign/signin'));
        }

        return $user;

    }


}