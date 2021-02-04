<?php

require_once dirname(__FILE__) . '/core/PtSdk.php';
require_once dirname(__FILE__) . '/core/ptpay_config.php';

$request_parameter = get_notify_parameter();

//print_r($request_parameter);
//实例化SDK
$pay = new PtSdk($ptpay_config);

//创建订单需要构建的参数
$parameter = array(
    //支付方式 1.是微信，2是支付宝
    "type" => $request_parameter['type'],
    //商户订单号
    "payId" => $request_parameter['payId'],
    //自定义参数
    "param" => $request_parameter['param'],
    //金额
    "price" => $request_parameter['price'],
);

//print_r($parameter);
//创建订单,会自动跳转页面
echo $pay->createOrder($parameter);


