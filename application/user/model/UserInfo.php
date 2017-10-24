<?php
namespace app\user\model;
use think\Model;
class UserInfo extends Model{

    protected $table = 'user_info';

    public function getUserInfo($uname, $pwd){
        $re = $this->where(['user_name' => $uname, 'first_pw' => $pwd])->find()->toArray();
        return $re;
    }

}
?>