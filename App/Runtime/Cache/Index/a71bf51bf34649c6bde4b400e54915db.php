<?php if (!defined('THINK_PATH')) exit();?><html style="font-size: 55.2px;" data-dpr="1"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"><script>
    if(('standalone' in window.navigator)&&window.navigator.standalone){  
var noddy,remotes=false; 
document.addEventListener('click',function(event){ 
noddy=event.target; 
while(noddy.nodeName!=='A'&&noddy.nodeName!=='HTML') noddy=noddy.parentNode; 
if('href' in noddy&&noddy.href.indexOf('http')!==-1&&(noddy.href.indexOf(document.location.host)!==-1||remotes)){ 
event.preventDefault(); 
document.location.href=noddy.href; 
} 
},false); 
} 
</script>



    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
    <title>个人中心</title>
    <link rel="stylesheet" href="/Public/m/u/css/base.css">
    <script type="text/javascript" src="/Public/m/u/js/adaptive.js"></script>
    <script type="text/javascript" src="/Public/m/u/js/config.js"></script>
    <script type="text/javascript" src="/Public/m/u/js/jquery-1.js"></script>
    <script type="text/javascript" src="/Public/m/u/js/public.js"></script>
    <script type="text/javascript">
        function msg(title,content,type,url){
            $("#msgTitle").html(title);
            $("#msgContent").html(content);
            if(type==1){
                var btn = '<input type="button" value="确定" onclick="$(\'#msgBox\').hide();" style="background-color: #845e26;color:#fff;border: none;padding:5px 10px;"/>';
            }
            else{
                var btn = '<input type="button" value="确定" onclick="window.location.href=\''+url+'\'" style="background-color: #845e26;color:#fff;border: none;padding:5px 10px;"/>';
            }
            $("#msgBtn").html(btn);
            $("#msgBox").show();
        }
      
        
     
        
    </script>
    
    
    
    <script>
	
	
	  
          function seeNum(){
          	
          	
          	
          
        var seeNumUrl = "/mobile/seenum.html";
        var rechargeState = 1;//充值声音开关，1开/0关
        $.ajax({
            type : "POST",
            url : seeNumUrl,
            data: {rechargeState:rechargeState},
            dataType : "json",
            success : function(result){
                if(result['code']!="000"){
              
                    
                      var borswer = window.navigator.userAgent.toLowerCase();
                      
                      
                      
                  
      if ( borswer.indexOf( "ie" ) >= 0 )
      {
        //IE内核浏览器
        var strEmbed = '<embed name="embedPlay" src="'+result['url']+'" autostart="true" hidden="true" loop="false"></embed>';
        if ( $( "body" ).find( "embed" ).length <= 0 )
          $( "body" ).append( strEmbed );
        var embed = document.embedPlay;

        //浏览器不支持 audion，则使用 embed 播放
        embed.volume = 100;
        //embed.play();这个不需要
      } else
      {
        //非IE内核浏览器
        var strAudio = "<audio id='audioPlay' src='"+result['url']+"' hidden='true'>";
        if ( $( "body" ).find( "audio" ).length <= 0 )
          $( "body" ).append( strAudio );
        var audio = document.getElementById( "audioPlay" );

        //浏览器支持 audion
        audio.play();
      }
                    
                    
                }else{
                     
                }
            },
            error:function(){
                //alert();
            }
        });
    }
   
    
    
    setInterval(seeNum,3000);
</script>
    
    
</head><script type="text/javascript" id="useragent-switcher">navigator.__defineGetter__("userAgent", function() {return "Mozilla/5.0 (Linux; Android 7.0; PLUS Build/NRD90M) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.98 Mobile Safari/537.36"})</script>
<body style="font-size: 0.18rem;">
<div id="msgBox" style="width: 100%;background-color: rgba(0,0,0,0.25);height: 1000px;position: fixed;top: 0;left: 0;z-index: 9999;font-size:.28rem;display: none;">
    <div style="width: 80%;margin-top: 40%;margin-left: 10%;background-color: #fff;border-radius: 5px;overflow: hidden;">
        <div id="msgTitle" style="padding:10px 20px;background-color: #845e26;color:#fff;">
            提示
        </div>
        <div id="msgContent" style="padding:20px;line-height: 25px;">
            内容
        </div>
        <div id="msgBtn" style="padding: 10px 20px;text-align: right;border-top: 1px solid #eee;">
            <input type="button" value="确定" style="background-color: #845e26;color:#fff;border: none;padding:5px 10px;">
            <input type="button" value="取消" style="background-color: #845e26;color:#fff;border: none;padding:5px 10px;">
        </div>
    </div>
</div>
<div class="mobile">
    <div class="my_total">
        <div class="user">
            <span>我的账户：<?php echo ($user["phone"]); ?></span>
            <span>会员星级：<?php echo getUserMember($user['member']);?></span>
        </div>
        <p class="bal"><?php echo ($user["money"]); ?></p>
         
		
		
     
    </div>
    <div class="user_btn">
        <a href="<?php echo U('recharge');?>" style="    color: #ffffff;background: #ad7c34;">充值</a>
        <a href="<?php echo U('cash');?>" style="    color: #ffffff;background: #ad7c34;">提现</a>
    </div>
    <ul class="user_list">
        <!--li><a href="/mobile/kefu.html"><img src="/Public/mobile/img/notice.png">在线客服</a></li-->
        <li><a href="<?php echo U('zhannei');?>"><img src="/Public/m/u/img/notice.png">站内消息</a></li>
        <!--li><a href="/gs/get_commodity.html"><img src="/Public/mobile/img/user_fund.png">积分商城</a></li-->
        <li><a href="javascript:;" onclick="qiandao()"><img src="/Public/m/u/img/nav4.png">每日签到</a></li>
        <li><a href="<?php echo U('fund');?>"><img src="/Public/m/u/img/user_fund.png">资金明细</a></li>
        <li><a href="<?php echo U('invest');?>"><img src="/Public/m/u/img/user_invest.png">投资记录</a></li>
        <li><a href="<?php echo U('interest');?>"><img src="/Public/m/u/img/user_inter.png">收益记录</a></li>
        <!--li><a href="/user/tuiguang.html"><img src="/Public/mobile/img/user_inter.png">收支记录</a></li-->
        <li><a href="<?php echo U('recharge_record');?>"><img src="/Public/m/u/img/user_rech.png">充值记录</a></li>
        <li><a href="<?php echo U('cash_record');?>"><img src="/Public/m/u/img/user_cash.png">提现记录</a></li>
        <!--li><a href="/lottery/index.html"><img src="/Public/mobile/img/user_cash.png">大转盘</a></li-->
    <!--</ul>-->
    <!--<ul class="user_list">-->
        <li><a href="<?php echo U('set_account');?>"><img src="/Public/m/u/img/user_safe.png">账户安全</a></li>
        <li><a href="<?php echo U('add_card');?>"><img src="/Public/m/u/img/user_card.png">银行卡绑定</a></li>
        <li><a href="<?php echo U('certification');?>"><img src="/Public/m/u/img/user_cert.png">实名认证</a></li>
        <!--li><a href="javascript:alert('登陆成功')"><img src="/Public/mobile/img/user_cert.png">微信登陆</a></li-->
    <!--</ul>-->
    <!--<ul class="user_list">-->
        <li><a href="<?php echo U('recommend');?>"><img src="/Public/m/u/img/user_invite.png">邀请好友</a></li>
        <!--<a href="/user/logout.html" class="input_btn">安全退出</a>	-->
    </ul>
    
        <a href="<?php echo U('logout');?>" class="input_btn">安全退出</a>	
        
        
         <a href="" class="input_btn" style="background-color: #ffffff;border: 1px solid #ffffff;"></a>	
   
   
    <script type="text/javascript" src="/Public/m/u/js/rem.js"></script>

<link type="text/css" rel="stylesheet" href="/Public/m/u/css/foot.css">

<footer class="footer" style="height: 52px;">
<a href="/Mobile/index/index.html" style="margin-top: 0px;"><img src="/Public/m/u/img/rbtn_home_hot_normal.png"></a>
<a href="/mobile/lists.html" style="margin-top: 0px;"><img src="/Public/m/u/img/16.png"></a>
<a href="/user/person.html" style="margin-top: 0px;"><img src="/Public/m/u/img/rbtn_home_my_normal.png"></a>
<a href="<?php echo getInfo('service');?>" style="margin-top: 0px;"><img src="/Public/m/u/img/18.png"></a></footer>

</div>

</body></html>