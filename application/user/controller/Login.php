<?php
namespace app\user\controller;

use app\common\controller\BaseController;
use app\user\model\UserInfo;
use think\Controller;
use think\Session;

class Login extends BaseController
{
    protected $nowController = 'login';

    public function index(){
        return $this->fetch();
    }

    public function login(){
        $username = input('uname');
        $pwd = input('pwd');

        $model = new UserInfo();
        $re = $model->getUserInfo($username, $pwd);
        if(!$re){
            return '用户名或密码错误';
        }
        $this->setUserInfo($re);
        echo 'ok';exit;
    }

    public function second_pwd(){
        $this->assign('reurl', input('reurl'));
        return $this->fetch();
    }

    public function second_pwd_check(){
        $reurl = input('reurl');
        if($reurl){
            $reurl = base64_decode($reurl);
        }else{
            $reurl = '/';
        }
        $spwd = input('pwd');
        $uinfo = Session::get('uinfo');
        if($uinfo && $uinfo['second_pw'] == $spwd){
            Session::set('second_pwd', 1);
        }
        echo $reurl;
    }



}
