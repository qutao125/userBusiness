<?php
namespace app\user\controller;

use app\common\controller\BaseController;
use app\user\model\UserInfo;
use think\Controller;
use think\Session;

class Trade extends BaseController
{
    protected $nowController = 'trade';
    /**
     * 购入股权
    */
    public function buy(){
        return $this->fetch();
    }
    /**
     * 公司回购
    */
    public function sell(){
        return $this->fetch();
    }
}
