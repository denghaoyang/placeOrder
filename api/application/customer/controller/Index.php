<?php
namespace app\customer\controller;

use app\customer\model\DepModel;
use app\customer\model\TrainModel;
use app\customer\model\UserModel;
use app\customer\model\UserTrainModel;
use CorpAPI;
use Exception;
use think\Controller;

include_once(__DIR__."/../../../vendor/wework/api/src/CorpAPI.class.php");
include_once(__DIR__."/../../../vendor/wework/api/src/ServiceCorpAPI.class.php");
include_once(__DIR__."/../../../vendor/wework/api/src/ServiceProviderAPI.class.php");

class Index extends Controller{

    public function index(){
        $api = new CorpAPI(config("CORP_ID"),config("CONTACT_SYNC_SECRET"));

        try {
            //
            $departmentList = $api->DepartmentList();
            //对象转数组
            foreach ($departmentList as &$departmentItem){
                $departmentItem = (object_array($departmentItem));
            }
            $departmentTree = arrayToForest($departmentList,"id","parentid");
            return $departmentTree;
        } catch (Exception $e) {
            echo $e->getMessage() . "\n";
        }
    }

    public function getDepartmentList(){
        $api = new CorpAPI(config("CORP_ID"),config("CONTACT_SYNC_SECRET"));

        try {
            $depModel = new DepModel();
            //
            $departmentList = $api->DepartmentList();
            //对象转数组
            foreach ($departmentList as &$departmentItem){
                $departmentItem = (object_array($departmentItem));
            }

            $departmentTree = arrayToForest($departmentList,"id","parentid");
            return $departmentTree;
        } catch (Exception $e) {
            echo $e->getMessage() . "\n";
        }
    }

    public function getUserInfoByCode($code){
        $api = new CorpAPI(config("CORP_ID"),config("APP_SECRET"));

        try {
            $UserInfoByCode = $api->GetUserInfoByCode($code);

            $UserInfo =  $api->UserGet($UserInfoByCode->UserId);

            if ($UserInfo->department){
                $departmentId = $UserInfo->department[0];
                $departmentList = $api->DepartmentList($departmentId);
                return $departmentList[0]->name;
            }else{
                return "";
            }
        } catch (Exception $e) {
            echo $e->getMessage() . "\n";
        }
    }

    public function getTrainList(){
        try {
            $trainModel = new TrainModel();
            //
            $list = $trainModel->getList();
            foreach ($list as &$value){
                $value['time'] = date("Y-m-d",$value['time']);
            }
            return $list;
        } catch (Exception $e) {
            echo $e->getMessage() . "\n";
        }
    }

    public function getUserList($departmentId){
        $userModel = new UserModel();
        try {
            $userList = $userModel->getUserListByDepId($departmentId);
//            echo $userModel->getLastSql();
            return $userList;
        } catch (Exception $e) {
            echo $e->getMessage() . "\n";
        }
    }

    public function getUserInfo($userId){
        $userModel = new UserModel();

        try {
            return $userModel->alias("u")
                ->join("cu_department d","u.department_id=d.department_id")
                ->where("u.user_id",$userId)
                ->field("u.*,d.name as department_name")
                ->find();
        } catch (Exception $e) {
            echo $e->getMessage() . "\n";
        }
    }

    public function updateUser(){
        $userModel = new UserModel();
        $data = input("post.");

        try {
            $status = $userModel->save($data,["user_id"=>$data['user_id']]);
            return ($status !== FALSE);
        } catch (Exception $e) {
            echo $e->getMessage() . "\n";
        }
    }

    public function getMailList(){
            $depModel = new DepModel();
            $userList = $depModel->getMailList();
            $mailList = arrayToForest($userList->toArray(),"value","fid","data");
            arrayCast($mailList);

            return $mailList;
    }

    public function getTrainListByUserId($userId){
        $userTrainModel = new UserTrainModel();

        $mailList = $userTrainModel->getTrainListByUserId($userId);
        return $mailList;
    }

    public function addTrain(){
        $data = input("post.");
        $trainModel = new TrainModel();

        $status = $trainModel->addTrain($data);
//        echo $trainModel->getLastSql();
        return $status;
    }

    public function getTrain($trainId){
        $trainModel = new TrainModel();
        $userTrainModel = new UserTrainModel();
        $depModel = new DepModel();

        $train = $trainModel->getTrain($trainId);

        $trainMailList = $userTrainModel->getMailList($trainId);
        $mailList = $depModel->getMailList();

        foreach($mailList as &$mail){
            foreach($trainMailList as $trainMail){
                if ($mail["value"]==$trainMail){
                    $mail['check'] = "true";
                }
            }
        }

        $mailList = arrayToForest($mailList->toArray(),"value","fid","data");
        arrayCast($mailList);
        $train['mail'] = $mailList;
        return $train;
    }

    public function graph(){
        echo $this->fetch();
    }

    public function updateDepartmentList(){
        $api = new CorpAPI(config( "CORP_ID"),config("CONTACT_SYNC_SECRET"));

        try {
            $depModel = new DepModel();
            //
            $departmentList = $api->DepartmentList();
            //对象转数组
            foreach ($departmentList as &$departmentItem){
                $departmentItem = (object_array($departmentItem));

                //插入部门数据
                $depModel->insert(["department_id"=>$departmentItem["id"],"name"=>$departmentItem["name"],"fid"=>$departmentItem["parentid"]]);
            }
            echo "插入成功";
        } catch (Exception $e) {
            echo $e->getMessage() . "\n";
        }
    }

    public function updateUserList(){
        $api = new CorpAPI(config("CORP_ID"),config("CONTACT_SYNC_SECRET"));

        try {
            $userModel = new UserModel();
            //
            $userList = $api->userSimpleList(1, 1);
            //对象转数组
            foreach ($userList as &$userItem){
                $userItem = (object_array($userItem));
                //插入部门数据
                $userModel->insert(["user_id"=>$userItem["userid"],"department_id"=>$userItem["department"][0],"mobile"=>$userItem["mobile"],"name"=>$userItem["name"]]);
            }
            echo "插入成功";
        } catch (Exception $e) {
            echo $e->getMessage() . "\n";
        }
    }
}