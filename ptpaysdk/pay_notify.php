<?php

require_once dirname(__FILE__).'/core/PtSdk.php';
require_once dirname(__FILE__).'/core/ptpay_config.php';

$pay = new PtSdk($ptpay_config);
//验证签名
if($pay->isSign())
{
    //再次判断订单状态,如过服务器有这个订单就处理业务
    if($pay->isCheckOrder() || $pay->checkOrderState())
    {
        //签名验证成功,订单验证成功
        //---------开始业务逻辑----------------
        $request_data =get_notify_parameter();

        //----------业务逻辑结束---------------
        //告诉服务器已经收到通知
        echo 'success';
    }
    else
    {
        exit('fail');
    }
}
else
{
    exit('fail');
}
