<?php
namespace app\user\model;
use think\Model;
class UserInfo extends Model{

    protected $table = 'user_info';

    public function getUserInfo($uname, $pwd){
        $re = $this->where(['user_name' => $uname, 'first_pw' => $pwd])->find();
        if(!$re){
            return false;
        }
        return $re->toArray();
    }

    public function getHaveUserByUserName($uname){
        return $this->where(['user_name' => $uname])->count();
    }

    public function getUserIdByUname($uname){
        $re = $this->where(['user_name' => $uname])->find();
        if(!$re){
            return 0;
        }
        $uinfo = $re->toArray();
        return $uinfo['id'];
    }

    public function getMyUserList($uid){
        $level1 = $this->where(['parent_id' => $uid])->select();
        $list1 = [];
        foreach($level1 as $v){
            $arr = $v->toArray();
            $arr['level'] = 1;
            $list1[] = $arr;
        }
        $where = [
            'parent_id' => ['in', array_column($list1, 'id')],
        ];
        $level2 = $this->where($where)->select();
        $list2 = [];
        foreach($level2 as $v){
            $arr = $v->toArray();
            $arr['level'] = 2;
            $list2[] = $arr;
        }

        $where = [
            'parent_id' => ['in', array_column($list2, 'id')],
        ];
        $level3 = $this->where($where)->select();
        $list3 = [];
        foreach($level3 as $v){
            $arr = $v->toArray();
            $arr['level'] = 3;
            $list3[] = $arr;
        }

        return ['level1' => $list1, 'level2' => $list2, 'level3' => $list3];


    }

    public function addUser($uinfo){
        $uinfo['create_time'] = time();
        $uinfo['update_time'] = time();
        $re = $this->insert($uinfo);
        return $re;
    }

}
?>