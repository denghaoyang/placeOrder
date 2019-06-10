<?php
namespace app\customer\model;

use think\Model;

class DepModel extends Model
{
    protected $table = "cu_department";

    public function getMailList(){
        return $this->field("`name` as title,department_id as `value`,fid")
            ->union("select name as title,user_id as value,department_id as fid from cu_user")
            ->select();
    }
}
