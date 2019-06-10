<?php
namespace app\customer\model;

use think\Model;

class UserTrainModel extends Model
{
    protected $table = "cu_user_train";

    public function getMailList($trainId){
        $list = $this->where("train_id",$trainId)->column("user_id");
        return $list;
    }

    public function getTrainListByUserId($userId){
        $list = $this->alias("ut")->join("cu_train t","ut.train_id=t.id")
                                        ->field("t.name,t.lecturer,t.time,t.location")
                                        ->where("ut.user_id",$userId)
                                        ->select();
        foreach ($list as &$value){
            $value['time'] = date("Y-m-d",$value['time']);
        }
        return $list;
    }
}
