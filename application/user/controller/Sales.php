<?php
namespace app\user\controller;

use app\common\controller\BaseController;
use app\user\model\UserInfo;
use think\Controller;
use think\Session;

class Sales extends BaseController
{
    protected $nowController = 'sales';
    /**
     * 存券
    */
    public function saveList(){
        return $this->fetch();
    }
    /**
     * 换券
    */
    public function change(){
        return $this->fetch();
    }
    /**
     * 积分记录
    */
    public function scoreList(){
        return $this->fetch();
    }
    /**
     * 奖金记录
    */
    public function priceList(){
        return $this->fetch();
    }
    /**
     *转券
    */
    public function give(){
        return $this->fetch();
    }
    /**
     *兑券
    */
    public function exchange(){
        return $this->fetch();
    }
    /**
     * 购券
    */
    public function buy(){
        return $this->fetch();
    }
}
