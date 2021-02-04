<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
    <title>立即投标</title>
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
        <a class="goback" href="javascript:history.back();"><img src="/Public/mobile/img/goback.png" /></a>
        <div class="othertop-font">立即投标</div>
    </div>
    
    <div class="form_outer">
    	<div class="form_top">
    		<p>
    			<span class="span_tit">账户可用余额（元）</span>
    			<span class="span_num">￥ <?php echo ($user['money']); ?>元</span>
    		</p>
    		<p>
    			<span class="span_tit">项目可投金额（元）</span>
    			<span class="span_num">￥ <strong id = "maxNum"><?php echo getProjectSurplus($data['id']);?> </strong>元</span>
    		</p>
    	</div>
    	<form action="<?php echo U('form');?>" method="post" id="ifr">
            <input type="hidden" value="<?php echo ($data["id"]); ?>" name="id"/>
            <input type="hidden" value="<?php echo round($data['max'],2);?>" id="maxNum2"/>
            <input type="hidden" value="<?php echo round($user['money']/100)*100;?>" id="userMoney"/>
            <input type="hidden" value="<?php echo round($user['money'],2);?>" id="userMoney2"/>
    		<ul>
    			<li>
    				<label>起投金额</label><span>￥ <em class="start"><?php echo round($data['min'],2);?></em> 元</span>
    			</li>
    			<li>
    				<label>结息时间</label><span>满 <em class="time">24小时</em> 自动结息</span>
    			</li>
    			<li>
    				<label>投资金额</label><br/>
    				<div class="caculate">
    					<i class="btn_reduce">&minus;</i>
    					<input type="text" name="money" id="money" value="<?php echo round($data['min'],2);?>">
    					<i class="btn_add">+</i>
    				</div>
    			</li>
    			<li>
    				<label></label><span class="add">最低起投 <em class="time" id="minNum"><?php echo round($data['min'],2);?></em> 元，加一次为  <em class="time" id="addNum">100</em> 元</span>
    			</li>
    			<li>
    				<label>支付密码</label>
    				<input type="password" placeholder="默认为登录密码" name="pwd" id="pwd" class="pwd">
    			</li>
    		</ul>
    		<input type="submit" value="立即投资" class="input_btn">
    	</form>
    </div>
</div>
<script>
    $().ready(function(){
    	var minNum = Number($("#minNum").text());
        var maxNum = Number($("#maxNum").text());
        var maxNum2 = Number($("#maxNum2").val());
        var userMoney = Number($("#userMoney").val());
    	var addNum = Number($("#addNum").text());
        $(".caculate .btn_reduce").click(function(){
            var number = Number($(this).next().val());
            if(number > minNum){
                number = number - addNum;
                $(this).next().val(number);
            }
        });
        $(".caculate .btn_add").click(function(){
            var number = Number($(this).prev().val());
            if(number < maxNum && number < maxNum2 && userMoney > number){
            	number = number + addNum;
                $(this).prev().val(number);
            }
        });
        $("#ifr").submit(function(){
            var money = $("#money").val();
            if(money > maxNum){
                msg("错误","投资金额不能大于项目剩余投资额度！",1);
                return false;
            }
            if(money < minNum){
                msg("错误","投资金额不能小于项目最小投资额度！",1);
                return false;
            }
            if(money > maxNum2){
                msg("错误","投资金额不能大于项目最大投资额度！",1);
                return false;
            }
            var userMoney2 = Number($("#userMoney2").val());
            if(money > userMoney2){
                msg("错误","投资金额不能大于您的余额！",1);
                return false;
            }
            var pwd = $("#pwd").val();
            if(pwd.length < 6 || pwd.length > 16){
                msg("错误","请输入正确的交易密码！",1);
                return false;
            }
        });
    });
</script>
</body>
</html>