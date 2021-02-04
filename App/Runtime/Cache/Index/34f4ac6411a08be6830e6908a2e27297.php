<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
    <title>银行入款 -8ye.net 八爷资源网</title>
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
<script type="text/javascript" src="/Public/mobile/js/clipboard.min.js"></script>
<style type="text/css">
    ul{margin:.5rem auto 0;padding-bottom: .3rem;border-top: 1px solid #ccc;}
    ul:nth-child(1){padding-bottom: 0;}
    li{line-height: .8rem;height: .8rem;background-color: #fff;border-bottom: 1px solid #ccc;clear: both;width: 6.5rem;padding:0 .5rem;}
    li span{display: block;float:left;width: 1.5rem;font-size: .28rem;}
    li input[type='text']{display: block;float: left;width: 3.8rem;height: .8rem;border: none;font-size: .28rem;}
    li input[type='button']{display: block;float: right;width: 1rem;height: .6rem;border: none;margin: .1rem 0;font-size: .28rem;}
    input[type='submit']{width: 90%;margin:0 auto .5rem;border: none;height: .8rem;display: block;background-color: #4f79bc;color:#fff;font-size: .28rem;}
</style>
<div class="mobile" style="background-color: #efefee;">
    <div class="othertop">
        <a class="goback" href="<?php echo U('person');?>"><img src="/Public/mobile/img/goback.png" /></a>
        <div class="othertop-font">银行入款充值</div>
    </div>
    <div class="header-nbsp"></div>
    <div style="color:#666;text-align: center;font-size: .4rem;padding-top: 20px;">
        银行入款 <?php echo ($money); ?> 元
    </div>
    <div style="width: 100%;margin: auto;">
        <ul>
            <li>
                <span>收款银行：</span>
                <input type="text" value="<?php echo getInfo('pay_bank_type');?>" readonly/>
            </li>
            <li>
                <span>收款人：</span>
                <input type="button" value="复制" class="btn"/>
                <input type="text" value="<?php echo getInfo('pay_bank_name');?>" id="cname" readonly/>
            </li>
            <li>
                <span>收款账号：</span>
                <input type="button" value="复制" class="btn2"/>
                <input type="text" value="<?php echo getInfo('pay_bank_account');?>" id="caccount" readonly/>
            </li>
        </ul>
        <form method="post" action="<?php echo U('bank');?>" id="ifr">
            <input type="hidden" value="<?php echo ($orderid); ?>" name="orderid"/>
            <ul>
                <li>
                    <span>付款人：</span>
                    <input type="text" name="name" id="name" value="" placeholder="请输入转账人姓名"/>
                </li>
                <li>
                    <span>转账附言：</span>
                    <input type="text" name="reason" id="reason" value="" placeholder="请输入转账附言"/>
                </li>
            </ul>
            <input type="submit" value="提交"/>
        </form>
    </div>
    <div style="padding: 0 .4rem .4rem;font-size: .32rem;color:#666;line-height: .5rem;background-color: #efefee;">
        <?php echo getInfo('pay_bank');?>
    </div>
</div>
<script type="text/javascript">
    $("#ifr").submit(function(){
        var name = $("#name").val();
        var reason = $("#reason").val();
        if(name.length < 2){
            msg("错误","请输入付款人姓名！",1);
            return false;
        }
    });
    var content = $("#cname").val();
    var content2 = $("#caccount").val();
    var clipboard = new Clipboard('.btn', {
        text: function() {
            return content;
        }
    });
    clipboard.on('success', function(e) {
        msg("成功","付款人姓名复制成功！",1);
    });

    clipboard.on('error', function(e) {
        console.log(e);
    });
    var clipboard2 = new Clipboard('.btn2', {
        text: function() {
            return content2;
        }
    });
    clipboard2.on('success', function(e) {
        msg("成功","收款账号复制成功！",1);
    });

    clipboard2.on('error', function(e) {
        console.log(e);
    });
</script>
</body>
</html>