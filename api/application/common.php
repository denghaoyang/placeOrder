<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 流年 <liu21st@gmail.com>
// +----------------------------------------------------------------------
//成功返回excel路径
function exportExcel($data=[],$name)
{
    try{
        include('../vendor/phpexcel/PHPExcel.php');
        include('../vendor/phpexcel/PHPExcel/Writer/Excel2007.php');

        $err = '';
        $objExcel = loadExcel(  '../public/static/template.xlsx', $err, FALSE);
        $sheet = $objExcel->getSheet(0);

        $i = 10;
        foreach ($data['windowArray'] as $key=>$value){
            $sheet->setCellValue("B".$i,$value['windowStyle']);
            $sheet->setCellValue("C".$i,$value['windowSize']);
            $sheet->setCellValue("E".$i,$value['windowNum']);
            $sheet->setCellValue("F".$i,$value['windowCode']);
            $i++;
        }


        $objWriter =  PHPExcel_IOFactory::createWriter($objExcel, 'Excel2007');
        $objWriter->save('../public/static/'.$name.'.xlsx');

        return '../public/static/'.$name.'.xlsx';
    }catch (Exception $exception){
        return false;
    }
}

// 加载excel文件
function loadExcel($file,&$msg='',$onlyread=true){
    // 检测文件
    if (!is_file($file)){
        $msg = '文件不存在';
        return FALSE;
    }
    // 加载文件
    $readerType = '';
    $fs = explode('.', $file);
    if (strtolower(end($fs)) === 'xls'){
        $readerType = 'Excel5';
    }elseif (strtolower(end($fs)) === 'xlsx') {
        $readerType = 'Excel2007';
    }else{
        $msg = '错误的文件格式';
        return FALSE;
    }
    $objReader = PHPExcel_IOFactory::createReader($readerType);
    $objReader->setReadDataOnly($onlyread);
    return $objReader->load($file);
}

/**
 * $list 数组转化成森林
 * $pk key
 * $pid parentId
 * */
function arrayToForest($list, $pk, $pid, $child = 'children') {
    $tree = array();

    if (!is_array($list)) {
        return $tree;
    }
    $refer = array();
    $parentNodeIdArr = [];
    foreach ($list as $key => $data) {
        $refer[$data[$pk]] = &$list[$key];
        $parentNodeIdArr[$data[$pid]] = $data[$pid];
    }

    /* 寻找根结点 */
    foreach ($list as $key => $data) {
        if (in_array($data[$pk], $parentNodeIdArr)) {
            unset($parentNodeIdArr[$data[$pk]]);
        }
    }
    foreach ($list as $key => $data) {
        $parantId = $data[$pid];
        if (in_array($parantId, $parentNodeIdArr)) {
            $tree[] = &$list[$key];
        } else {
            if (isset($refer[$parantId])) {
                $parent = &$refer[$parantId];
                $parent[$child][] = &$list[$key];
            }
        }
    }
    return $tree;
}

/**
 * $list 更新数组数据
 * $pk key
 * $pid parentId
 * */
function arrayCast(&$list) {
    foreach($list as &$value){
        if (is_array($value)){
            if(isset($value["data"])){
                arrayCast($value["data"]);
            }else{
                $value['data'] = [];
            }
        }
    }
    return $list;
}

function object_array(&$array) {
    if(is_object($array)) {
        $array = (array)$array;
    } if(is_array($array)) {
        foreach($array as $key=>$value) {
            $array[$key] = object_array($value);
        }
    }
    return $array;
}
