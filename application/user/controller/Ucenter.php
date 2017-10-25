<?php
namespace app\user\controller;

use app\common\controller\BaseController;
use app\user\model\UserInfo;
use think\Request;
use think\Session;

class Ucenter extends BaseController
{

    protected $perPage = 2;

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
        $level = intval(input('level'));
        $page = intval(input('page'));
        $page = $page ? $page : 1;
        $perPage = $this->perPage;
        $model = new UserInfo();
        $userList = $model->getMyUserList($uid, $level);
        $dataCount = count($userList);
        $pageCount = ceil($dataCount / $perPage);
        $start = ($page - 1) * $perPage;
        $datas = array_slice($userList, $start, $perPage);
        $textArr = [1 => '一级分销', 2 => '二级分销', 3 => '三级分销'];
        foreach($datas as $k=>$v){
            $datas[$k]['levelinfo'] = $textArr[$v['level']];
            $datas[$k]['create_time'] = date('Y-m-d', strtotime($v['create_time']));
            $datas[$k]['money_count'] = mt_rand(10000,99999); //TODO...到时候重新计算
        }
        $this->assign('level', $level);
        $this->assign('datas', $datas);
        $this->assign('page_count', $pageCount);
        $this->assign('current_page', $page);
        $this->assign('prev_page', $page == 1 ? 1 : $page);
        $this->assign('next_page', $page >= $pageCount ? $pageCount : $page + 1);
        $this->assign('row_count', $dataCount);
        //$reDatas = ['datas' => $datas, 'page_count' => $pageCount, 'curent_page' => $page, 'row_count' => $dataCount];
        return $this->fetch();
    }

    public function myuserlist(){
        $this->checkSecondPwd();
        $uid = Session::get('uid');
        $page = intval(input('page'));
        $page = $page ? $page : 1;
        $model = new UserInfo();
        $userList = $model->getulist($uid, $page, $this->perPage);
        $textArr = [1 => '一级分销', 2 => '二级分销', 3 => '三级分销'];
        $datas = $userList['datas'];
        foreach($datas as $k=>$v){
            $datas[$k]['levelinfo'] = $textArr[1];
            $datas[$k]['create_time'] = date('Y-m-d', strtotime($v['create_time']));
            $datas[$k]['money_count'] = mt_rand(10000,99999); //TODO...到时候重新计算
        }
        $this->assign('datas', $datas);
        $this->assign('level', 1);
        $this->assign('page_count', $userList['page_count']);
        $this->assign('row_count', $userList['row_count']);
        $this->assign('current_page', $userList['page']);
        $this->assign('prev_page', $userList['page'] == 1 ? 1 : $userList['page'] - 1);
        $this->assign('next_page', $userList['page'] >= $userList['page_count'] ? $userList['page_count'] : $userList['page'] + 1);
        return $this->fetch();
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
