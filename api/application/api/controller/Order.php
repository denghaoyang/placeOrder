<?php
namespace app\api\controller;

use app\api\model\ProductModel;
use app\api\model\WindowModel;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


class Order
{
    public function getWindowList()
    {
        $windowModel = new WindowModel();
        $list = $windowModel->getWindowList();
        return $list;
    }

    public function getWindowSize($windowId){
        $productModel = new ProductModel();
        return $productModel->getWindowSize($windowId);
    }

    public function getWindowAttr($windowId){
        $productModel = new ProductModel();
        return $productModel->getWindowAttr($windowId);
    }

    public function getWindowBoard($windowId){
        $productModel = new ProductModel();
        return $productModel->getWindowBoard($windowId);
    }

    public function getWindowCode($windowId,$size){
        $productModel = new ProductModel();
        return $productModel->getWindowCode($windowId,$size);
    }

    public function placeOrder(){
        $data = input("post.");
        //生成Excel
        $attachPath = exportExcel($data,time());
        //发送邮件
        $this->sendMail($attachPath);
    }

    function sendMail($attachPath){
        include("../vendor/PHPMailer/src/PHPMailer.php");
        include("../vendor/PHPMailer/src/SMTP.php");
        include("../vendor/PHPMailer/src/Exception.php");

// 实例化PHPMailer核心类
        $mail = new PHPMailer();
// 是否启用smtp的debug进行调试 开发环境建议开启 生产环境注释掉即可 默认关闭debug调试模式
        $mail->SMTPDebug = 1;
// 使用smtp鉴权方式发送邮件
        $mail->isSMTP();
// smtp需要鉴权 这个必须是true
        $mail->SMTPAuth = true;
// 链接qq域名邮箱的服务器地址
        $mail->Host = 'smtp.qq.com';
// 设置使用ssl加密方式登录鉴权
        $mail->SMTPSecure = 'ssl';
// 设置ssl连接smtp服务器的远程服务器端口号
        $mail->Port = 465;
// 设置发送的邮件的编码
        $mail->CharSet = 'UTF-8';
// 设置发件人昵称 显示在收件人邮件的发件人邮箱地址前的发件人姓名
        $mail->FromName = '订单中心下单';
// smtp登录的账号 QQ邮箱即可
        $mail->Username = '275111108@qq.com';
// smtp登录的密码 使用生成的授权码
        $mail->Password = "pvatiqtboiyxcbbe";
// 设置发件人邮箱地址 同登录账号
        $mail->From = '275111108@qq.com';
// 邮件正文是否为html编码 注意此处是一个方法
//        $mail->isHTML(true);
// 设置收件人邮箱地址
        $mail->addAddress('haoyang.deng@Velux.com');
// 添加该邮件的主题
        $mail->Subject = '下单测试';
// 添加邮件正文
        $mail->Body = '万科下单';
// 为该邮件添加附件
        $mail->addAttachment($attachPath);
// 发送邮件 返回状态
        $mail->send();
    }
}
