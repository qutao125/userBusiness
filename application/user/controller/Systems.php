<?php
namespace app\user\controller;

use app\common\controller\BaseController;
use app\user\model\UserInfo;
use think\Controller;
use think\Session;

class Systems extends BaseController
{
    protected $nowController = 'trade';
    /**
     * 公司回购
    */
    public function index(){
        return $this->fetch();
    }
}
