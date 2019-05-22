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