<?php
namespace app\customer\model;

use think\Model;

class UserModel extends Model
{
    protected $table = "cu_user";

    public function getUserListByDepId($departmentId){
        return $this->where("department_id",$departmentId)
                    ->field("user_id as userid,name,(CASE WHEN type = 0 THEN ':销售&拓展' ELSE (CASE WHEN type = 1 THEN '设计' ELSE '技术&安装' END) END) type,ceiling((brand_promotion+ah_promotion+office_lecture+customer_develop+
                    product_knowledge+scheme_match+offer_price+project_manage+cad+design_sketch+daylight_analysis)/
                    ((CASE WHEN type = 0 THEN 8 ELSE 0 END) + (CASE WHEN type = 1 THEN 6 ELSE 0 END) + (CASE WHEN type = 2 THEN 1 ELSE 0 END))) ability")
                    ->select();
    }
}
