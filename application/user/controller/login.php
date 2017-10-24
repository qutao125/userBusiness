<?php
namespace app\user\controller;

use app\common\controller\BaseController;
use think\Controller;

class Login extends BaseController
{
    public function index(){
        return $this->fetch();
    }
}
