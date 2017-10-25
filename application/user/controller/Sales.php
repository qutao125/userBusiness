<?php
namespace app\user\controller;

use app\common\controller\BaseController;
use app\user\model\UserInfo;
use app\user\model\UserAccountBanlance;
use app\user\model\UserAccount;
use think\Controller;
use think\Session;

class Sales extends BaseController
{
    protected $nowController = 'sales';
    private $uid = '';
    public function __construct(){
        $this->checkSecondPwd();
        $this->uid = Session::get('uid');
        parent::__construct();
    }
    /**
     * 存券
    */
    public function saveList(){
        $banlance = new UserAccountBanlance();
        $list = $banlance->getListByUid($this->uid);
        $this->assign('list',$list);
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
