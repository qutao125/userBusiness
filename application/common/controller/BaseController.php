<?php
namespace app\common\controller;

use think\Controller;
use think\Request;
use think\Session;

class BaseController extends Controller
{

    public $unCheckController = ['login'];
    protected $nowController = '';

    public function __construct(Request $request = null) {
        parent::__construct($request);
        $this->checkLogin();
    }

    public function checkLogin(){
        if(in_array($this->nowController, $this->unCheckController)){
            return true;
        }
        if(!Session::get('uid')){
            header('Location:/user/login/index');
            exit;
        }
        return true;
    }

    public function checkSecondPwd(){
        if(!Session::get('second_pwd')){
            header('Location:/user/login/second_pwd?reurl=' . base64_encode($_SERVER['REDIRECT_URL']));
            exit;
        }
        return true;
    }



    public function setUserInfo($uinfo){
        Session::set('uid', $uinfo['id']);
        Session::set('uname', $uinfo['user_name']);
        Session::set('uinfo', $uinfo);
    }

}
