<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
    <title>扫码充值 -8ye.net 八爷资源网</title>
    <link rel="stylesheet" href="/Public/mobile/css/base.css?k=<?php echo rand(1,99999);?>"/>
    <script type="text/javascript" src="/Public/mobile/js/adaptive.js"></script>
    <script type="text/javascript" src="/Public/mobile/js/config.js"></script>
    <script type="text/javascript" src="/Public/mobile/js/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="/Public/mobile/js/public.js"></script>
    <script type="text/javascript">
        function msg(title,content,type,url){
            $("#msgTitle").html(title);
            $("#msgContent").html(content);
            if(type==1){
                var btn = '<input type="button" value="确定" onclick="$(\'#msgBox\').hide();" style="background-color: #4f79bc;color:#fff;border: none;padding:5px 10px;"/>';
            }
            else{
                var btn = '<input type="button" value="确定" onclick="window.location.href=\''+url+'\'" style="background-color: #4f79bc;color:#fff;border: none;padding:5px 10px;"/>';
            }
            $("#msgBtn").html(btn);
            $("#msgBox").show();
        }
    </script>
</head>
<body>
<div id="msgBox" style="width: 100%;background-color: rgba(0,0,0,0.25);height: 1000px;position: fixed;top: 0;left: 0;z-index: 9999;font-size:.28rem;display: none;">
    <div style="width: 80%;margin-top: 40%;margin-left: 10%;background-color: #fff;border-radius: 5px;overflow: hidden;">
        <div id="msgTitle" style="padding:10px 20px;background-color: #4f79bc;color:#fff;">
            提示
        </div>
        <div id="msgContent" style="padding:20px;line-height: 25px;">
            内容
        </div>
        <div id="msgBtn" style="padding: 10px 20px;text-align: right;border-top: 1px solid #eee;">
            <input type="button" value="确定" style="background-color: #4f79bc;color:#fff;border: none;padding:5px 10px;"/>
            <input type="button" value="取消" style="background-color: #4f79bc;color:#fff;border: none;padding:5px 10px;"/>
        </div>
    </div>
</div>
<?php if($_GET['type'] == 'wechat'): ?><div class="mobile" style="background-color: #00C800;">
        <div class="othertop">
            <a class="goback" href="<?php echo U('person');?>"><img src="/Public/mobile/img/goback.png" /></a>
            <div class="othertop-font">微信扫码充值</div>
        </div>
        <div class="header-nbsp"></div>
        <div style="color:#fff;text-align: center;font-size: .4rem;padding: 20px 0;">
            微信充值 <?php echo ($money); ?> 元
        </div>
        <div style="width: 96%;padding: 0 2%;">
            <img src="/Public/uploads/scan/<?php echo getInfo('qr_wechat_img');?>?k=<?php echo rand(1,99999);?>" width="100%"/>
        </div>
        <div style="padding: .2rem .4rem .4rem;font-size: .32rem;color:#fff;line-height: .5rem;background-color: #00C800;">
            <?php echo getInfo('qr_wechat');?>
        </div>
    </div>
    <?php else: ?>
    <div class="mobile" style="background-color: #00A0E9;">
        <div class="othertop">
            <a class="goback" href="<?php echo U('person');?>"><img src="/Public/mobile/img/goback.png" /></a>
            <div class="othertop-font">支付宝扫码充值</div>
        </div>
        <div class="header-nbsp"></div>
        <div style="color:#fff;text-align: center;font-size: .4rem;padding: 20px 0;">
            支付宝充值 <?php echo ($money); ?> 元
        </div>
        <div style="width: 96%;padding: 0 2%;">
            <img src="/Public/uploads/scan/<?php echo getInfo('qr_alipay_img');?>?k=<?php echo rand(1,99999);?>" width="100%"/>
        </div>
        <div style="padding:.2rem .4rem .4rem;font-size: .32rem;color:#fff;line-height: .5rem;background-color: #00A0E9;">
            <?php echo getInfo('qr_alipay');?>
        </div>
    </div><?php endif; ?>
</body>
</html>