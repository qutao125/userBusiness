<?php
namespace app\user\model;
use think\Model;
class UserAccount extends Model{

    protected $table = 'user_account';
    /**
     * 根据登录用户id获取用户信息
    */
    public function getUserAccount($uid){
        $re = $this->where(['uid'=>$uid])->find()->toArray();
        return $re;
    }

}
?>
