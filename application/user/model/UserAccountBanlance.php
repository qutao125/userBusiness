<?php
namespace app\user\model;
use think\Model;
class UserAccountBanlance extends Model{

    protected $table = 'user_account_banlance';
    /**
     * 根据登录用户id获取用户信息
    */
    public function getListByUid($uid){
        $re = $this->where(['uid'=>$uid])->select();
        return $re;
    }

}
?>
