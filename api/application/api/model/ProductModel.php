<?php
namespace app\api\model;

use think\Model;

class ProductModel extends Model
{
    protected $table = "od_product";

    public function getWindowSize($windowName){
        return $this->alias("p")
            ->join("od_size s","p.size_id=s.id")
            ->join("od_product_type t","p.type_id=t.id")
            ->field("s.name as title,s.alias as value")
            ->group("s.id")
            ->where("t.name",$windowName)
            ->select();
    }

    public function getWindowCode($name,$size){
        return $this->alias("p")
            ->join("od_size s","p.size_id=s.id")
            ->join("od_product_type t","p.type_id=t.id")
            ->group("s.id")
            ->where(["t.alias"=>$name,"s.alias"=>$size])
            ->find("p.code");
    }
}
