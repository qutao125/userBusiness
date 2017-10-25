<?php
namespace app\user\controller;

use app\common\controller\BaseController;
use app\user\model\UserInfo;
use think\Controller;
use think\Session;

class Order extends BaseController
{
    protected $nowController = 'order';
    /**
     * 订单列表
    */
    public function orderList(){
        return $this->fetch();
    }
    /**
     * 产品列表
    */
    public function productList(){
        return $this->fetch();
    }
}
