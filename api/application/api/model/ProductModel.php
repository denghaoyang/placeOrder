<?php
namespace app\api\model;

use think\Model;

class ProductModel extends Model
{
    protected $table = "od_product";

    public function getWindowSize($windowId){
        return $this->alias("p")
            ->join("od_size s","p.size_id=s.id")
            ->join("od_product_type t","p.type_id=t.id")
            ->field("s.name as title,s.alias as value")
            ->group("s.id")
            ->where("t.id",$windowId)
            ->select();
    }

    public function getWindowAttr($windowId){
        return $this->alias("p")
            ->join("od_attribute a","p.attribute_id=a.id")
            ->join("od_product_type t","p.type_id=t.id")
            ->field("a.name as title,a.alias as value")
            ->group("a.id")
            ->where("t.id",$windowId)
            ->select();
    }

    public function getWindowBoard($windowId){
        return $this->alias("p")
            ->join("od_board a","p.board_id=a.id")
            ->join("od_product_type t","p.type_id=t.id")
            ->field("a.name as title,a.alias as value")
            ->group("a.id")
            ->where("t.id",$windowId)
            ->select();
    }

    public function getWindowCode($windowId,$size){
        return $this->alias("p")
            ->join("od_size s","p.size_id=s.id")
            ->join("od_product_type t","p.type_id=t.id")
            ->group("s.id")
            ->where(["t.id"=>$windowId,"s.alias"=>$size])
            ->find("p.code");
    }
}
