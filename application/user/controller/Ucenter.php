<?php
namespace app\user\controller;

use app\common\controller\BaseController;
use app\user\model\UserInfo;
use think\Request;
use think\Session;

class Ucenter extends BaseController
{

    public function __construct(Request $request = null) {
        parent::__construct($request);
    }

    public function myinfo()
    {
        $this->checkSecondPwd();
        return $this->fetch();
    }


    public function reg_user(){
        $this->checkSecondPwd();
        return $this->fetch();
    }

    public function userlist(){
        $this->checkSecondPwd();
        $uid = Session::get('uid');
        $model = new UserInfo();
        $userList = $model->getMyUserList($uid);
        var_dump($userList);exit;
    }

    public function useradd(){
        $uinfo = [];
        $uinfo['user_name'] = input('userid');
        $uinfo['real_name'] = input('truename');
        $parentName = input('tuname');
        $uinfo['first_pw'] = input('rgpwd1');
        $uinfo['second_pw'] = input('rgpwd2');
        $uinfo['addr'] = input('rgaddress');
        $uinfo['bank_name'] = input('bankname');
        $uinfo['bank_no'] = input('bankcard');
        $uinfo['bank_addr'] = input('bankaddress');
        $model = new UserInfo();

        $haveReg = $model->getHaveUserByUserName($uinfo['user_name']);
        if($haveReg){
            return $this->error('已存在的用户名');
        }

        $uinfo['parent_id'] = $model->getUserIdByUname($parentName);
        $newUserId = $model->addUser($uinfo);
        //if(0){
        if($newUserId){
            return $this->success('注册成功', '/user/ucenter/userlist');
        }else{
            return $this->error('注册失败');
        }

    }

}
