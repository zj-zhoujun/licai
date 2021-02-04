<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>登录 -8ye.net 八爷资源网</title>
<link href="/Public/admin/css/style.css" type="text/css" rel="stylesheet">
<script type="text/javascript" src="/Public/admin/js/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="/Public/admin/js/code.js"></script>
</head>
<body>
    <div class="login_bg">
        <form method="post" action="<?php echo U('login');?>">
            <h2>后台管理中心</h2>
            <input type="text" class="input icon_user" name="user" placeholder="请输入用户名" required="required" />
            <input type="password" class="input icon_psw" name="pwd" placeholder="请输入密码" required="required" />
            <div class="check_code">
                <input type="text" class="input" id="code_input" name="code" value="" placeholder="填写右侧验证码" required="required" />
                <div id="code"><?php echo ($rand); ?></div>
            </div>
            <input type="submit" id="submit" value="登录" class="input sub">
        </form>
    </div>
</body>
<script type="text/javascript">
    $("#code").click(function(){
        var url = "<?php echo U('loginRand');?>";
        $.ajax({
            type : "POST",
            url : url,
            data: {phone:1},
            dataType : "json",
            success : function(result){
                $("#code").text(result);
            },
            error:function(){
                msg("错误","错误",1);
            }
        });
    });
    /*var verifyCode = new GVerify("code");
    document.getElementById("submit").onclick = function(){
        var res = verifyCode.validate(document.getElementById("code_input").value);
        if(res){
            alert("验证正确");
        }else{
            alert("验证码错误");
        }
    }*/
</script> 
</html>