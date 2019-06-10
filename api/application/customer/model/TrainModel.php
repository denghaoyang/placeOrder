<?php
namespace app\customer\model;

use think\Model;
use think\Db;

class TrainModel extends Model
{
    protected $table = "cu_train";

    public function getList(){
        return $this->select();
    }

    public function addTrain($data){
        $userTrainModel = new UserTrainModel();
        // 启动事务
        Db::startTrans();
        try {
            $data['time'] = strtotime($data['time']);
            $data["userIds"] = substr($data["userIds"],0,-1);
            $this->allowField(true)->save($data);
            $trainId = $this->id;
            $userIds = explode(",",$data["userIds"]);
            foreach($userIds as $userId){
                $userTrainModel->insert(["user_id"=>$userId,"train_id"=>$trainId]);
            }
            // 提交事务
            Db::commit();
            return true;
        } catch (\Exception $e) {
            // 回滚事务
            Db::rollback();
            echo $e->getMessage();
            return false;
        }
    }

    public function getTrain($trainId){

        $train = $this->find($trainId);
        $train['time'] = date("Y-m-d",$train['time']);
        return $train;
    }
}
