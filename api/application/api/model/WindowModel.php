<?php
namespace app\api\model;

use think\Model;

class WindowModel extends Model
{
    protected $table = "od_product_type";

    public function getWindowList(){
        return $this->field("name as title,alias as value")->select();
    }


}
