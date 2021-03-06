<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
    <title>找回密码 -8ye.net 八爷资源网</title>
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
<div class="mobile">
    <div class="othertop">
        <a class="goback" href="<?php echo U('login');?>"><img src="/Public/mobile/img/goback.png" /></a>
        <div class="othertop-font">修改密码</div>
    </div>

    <div class="container_page">
        <div style="text-align: center;">
            <img src="/Public/uploads/mlogo2.png" width="50%">
        </div>
        <div class="reg_bg">
            <form action="<?php echo U('forget');?>" method="post" id="ifr">
                <div class="input_text">
                    <i><img src="/Public/mobile/img/icon_tel.png"></i>
                    <input type="text" name="phone" id="phone" placeholder="请输入手机号">
                </div>
                <div class="input_text">
                    <i><img src="/Public/mobile/img/icon_code.png"></i>
                    <input type="text" id="code" name="code" placeholder="请输入图形验证码">
                    <button id="imgcode" type="button" style="font-style: italic;">1234</button>
                </div>
                <div class="input_text">
                    <i><img src="/Public/mobile/img/icon_code.png"></i>
                    <input type="text" name="smscode" id="smscode" placeholder="请输入短信验证码">
                    <button id="getcode" type="button" onclick="forgetcode(60)">发送</button>
                </div>
                <div class="input_text">
                    <i><img src="/Public/mobile/img/icon_pwd.png"></i>
                    <input type="password" name="pwd" placeholder="新密码" id="pwd">
                    <i class="pwd_show"><img src="/Public/mobile/img/see.png" id="pwd_show"></i>
                </div>
                <div class="input_text">
                    <i><img src="/Public/mobile/img/icon_ppwd.png"></i>
                    <input type="password" name="pwd2" placeholder="确认密码" id="pwd2">
                    <i class="pwd_show"><img src="/Public/mobile/img/see.png" id="pwd2_show"></i>
                </div>
                <div class="error_tips"></div>
                <input type="submit" class="input_btn" value="确定" />
            </form>
        </div>
    </div>
</div>
<script>
    var imgCode = "";
    var chars = ['0','1','2','3','4','5','6','7','8','9'];
    $(function(){
        generateMixed();
    });
    //创建验证码
    function generateMixed(n) {
        var url = "/handle/smsRand.html";
        $.ajax({
            type : "POST",
            url : url,
            data: {key:n},
            dataType : "json",
            success : function(result){
                imgCode = result;
                $("#imgcode").html(result);
            },
            error:function(){
                $("#imgcode").html('8888');
            }
        });
    }
    //变换验证码
    $("#imgcode").click(function(){
        generateMixed();
    });
    checkPwd("pwd","pwd_show");
    checkPwd("pwd2","pwd2_show");
    $("#ifr").submit(function(){
        var phone = $("#phone").val();
        var smscode = $("#smscode").val();
        var pwd = $("#pwd").val();
        var pwd2 = $("#pwd2").val();
        var code = $("#code").val();
        if(phone.length != 11){
            msg("错误","请输入11位手机号码！",1);
            return false;
        }
        var myreg=/^[1][3,4,5,6,7,8,9][0-9]{9}$/;
        if (!myreg.test(phone)) {
            msg("错误","手机格式不正确！",1);
            return false;
        }
        if(code.length != 4){
            msg("错误","请输入4位图形验证码！",1);
            return false;
        }
        if(code != imgCode){
            msg("错误","图形验证码不正确！",1);
            generateMixed();
            return false;
        }
        if(smscode.length != 4){
            msg("错误","请输入4位短信验证码！",1);
            return false;
        }
        if(pwd.length < 6 || pwd.length > 16){
            msg("错误","请输入6-16个字符的密码！",1);
            return false;
        }
        if(pwd2.length < 6 || pwd2.length > 16){
            msg("错误","请再次输入6-16个字符的密码！",1);
            return false;
        }
        if(pwd != pwd2){
            msg("错误","两次密码不一致！",1);
            return false;
        }
    });
    function forgetcode(time) {
        var btn = $("#getcode");
        var url = "/handle/zhaohui.html";
        var phone = $("#phone").val();
        var code = $("#code").val();
        if(phone.length != 11){
            msg("错误","请输入11位手机号码！",1);
            return false;
        }
        var myreg=/^[1][3,4,5,6,7,8,9][0-9]{9}$/;
        if (!myreg.test(phone)) {
            msg("错误","手机格式不正确！",1);
            return false;
        }
        if(code.length != 4){
            msg("错误","请输入4位图形验证码！",1);
            return false;
        }
        if(code != imgCode){
            msg("错误","图形验证码不正确！",1);
            generateMixed();
            return false;
        }
        $.ajax({
            type : "POST",
            url : url,
            data: {phone:phone,code:imgCode},
            dataType : "json",
            success : function(result){
                if(result[0]==1){
                    msg("提示","发送成功！",1);
                    btn.addClass("on");
                    btn.attr("disabled", true);  //按钮禁止点击
                    btn.text(time <= 0 ? "发送" : ("" + (time--) + "s"));
                    var hander = setInterval(function() {
                        if (time <= 0) {
                            generateMixed();
                            clearInterval(hander); //清除倒计时
                            btn.text("发送");
                            btn.removeClass("on");
                            btn.attr("disabled", false);
                            return false;
                        }else {
                            btn.text("" + (time--) + "s");
                        }
                    }, 1000);
                }else{
                    generateMixed();
                    msg("错误",result[1],1);
                    //alert(result[1]);//result[0]不等于等于1代表错误，result[1]代表错误理由
                }
            },
            error:function(){
                generateMixed();
                msg("错误","网络繁忙，发送失败！",1);
            }
        });
    }
</script>
</body>
</html>