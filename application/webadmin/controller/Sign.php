<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/5/8
 * Time: 17:07
 */

namespace app\webadmin\controller;

use app\webadmin\model\system\SystemAdmin;
use think\Controller;
use app\webadmin\model\Sign as SignModel;
use think\Cookie;

class Sign extends  Controller
{
    /**
     * 登陆
     * @return \think\response\View
     */
    public function  signin()
    {
        //酒泉华美医疗美容医院
        if ( true === request()->isPost()) {
            $post  = request()->post();
            if (empty( $post['username'] )) exit(iJson('', 400,  false, '用户名不能为空！'));
            if (empty( $post['password'] )) exit(iJson('', 400,  false, '密码不能为空！'));
            //$captcha = trim($user_info['captcha']);
            //if(!captcha_check($captcha)) exit(iJson('', 400,  false, '验证码输入错误'));
            $result =SignModel::check_login( $post );

            if (true === $result ) {
                //记录log
                exit(iJson( '/webadmin/#/website/index', true,  '欢迎'. $post['username']. '回来!'));

            } else {

                exit(iJson('', 400,  false, '系统错误！'));

            }

        }

        return view('', ['cuser' => Cookie::get()]);


    }



    /**
     * 退出登陆
     */
    public function sign_out()
    {
        SystemAdmin::clearLoginInfo();
        Cookie::delete('username');
        Cookie::delete('password');
        Cookie::delete('remember');
        $this->redirect('sign/signin');
    }

}