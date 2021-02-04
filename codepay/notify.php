<?php
//error_reporting(E_ALL & ~ E_NOTICE); //过滤脚本错误

//ini_set("display_errors", "On");  //显示脚本错误提示
//error_reporting(E_ALL | E_STRICT); //开启全部脚本错误提示
/**
 * 功能：码支付服务器异步通知页面 (建议放置外网)
 * 版本：1.0
 * 日期：2016-12-23
 * 说明：
 * 以下代码只是为了方便商户测试而提供的样例代码，商户可以根据自己网站的需要，按照技术文档编写,并非一定要使用该代码。
 * 该代码仅供学习和研究码支付接口使用，只是提供一个参考。
 *************************业务处理调试说明*************************
 * 1：该页面不建议在本机电脑测试，请到服务器上做测试。请确保外部可以访问该页面。
 * 2：您可以使用我们的软件端中【手动充值】进行调试。
 * 3：该页面调试工具请使用写文本函数logResult，该函数已被默认开启，见codepay_notify_class.php中的函数verifyNotify
 * 4：创建该页面文件时，请留心该页面文件中无任何HTML代码及空格。
 * 5：如果没有收到该页面返回的 ok或者success 信息，码支付会在24小时内按一定的时间策略重发通知
 *************************注意*****************
 *如果您在接口集成过程中遇到问题，可以按照下面的途径来解决
 *1、开发文档中心（https://codepay.fateqq.com/apiword/）
 *2、商户帮助中心（https://codepay.fateqq.com/help/）
 *3、联系客服（https://codepay.fateqq.com/msg.html）
 */
require_once("codepay_config.php"); //导入配置文件
require_once("includes/MysqliDb.class.php");//导入mysqli连接
require_once("includes/M.class.php");//导入mysqli操作类
require_once("../ptpaysdk/core/ptpay_config.php");
require_once("../ptpaysdk/core/ptpay_function.php");



$codepay_key = $ptpay_config['paykey']; //这是您的密钥
$request_data = get_notify_parameter();

$pay_id = $request_data['payId']; //需要充值的ID 或订单号 或用户名
$money = (float)$request_data['reallyPrice']; //实际付款金额
$price = (float)$request_data['price']; //订单的原价
$param = $request_data['param']; //自定义参数
$type = (int)$request_data['type']; //支付方式
$pay_no = $request_data['pay_no'];//流水号

//校验签名，计算方式 = md5(payId + param + type + price + reallyPrice + 通讯密钥)
    
  $_sign= md5($request_data['payId']
            . $request_data['param']
            . $request_data['type']
            . $request_data['price']
            . $request_data['reallyPrice']
            . $codepay_key);
    
if ($_sign == $request_data['sign']) { //不合法的数据

    $con = mysqli_connect("localhost", "ystz1123", "ystz1123", "ystz1123");
    
    mysqli_query($con, "UPDATE recharge  SET status='1',warn='1' WHERE uid= '{$pay_id}' ");//更新语法
    $sql = mysqli_query($con, "select * from reward");
    $row = mysqli_fetch_array($sql);
    $chongzhijifen = $row['chongzhijifen'];
    $price = $price * 1;//1表示比率为1:1  100则表示1元可充值100分;
    $chongzhijifen = $chongzhijifen * $price;
    $sql = "select * from user where `id`='" . $param . "'";
    $row = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($row);
    $upmoney = $row['money']+$price;
    $upjifen = $row['jifen']+$chongzhijifen;
    $sql = "update user set money ={$upmoney} ,jifen ={$upjifen}";

    mysqli_query($con, $sql);
    mysqli_close($con);
    
    exit("success");

}else {
    exit("error");
}



