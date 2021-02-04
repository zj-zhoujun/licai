<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html style="font-size: 55.2px;"><head>
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


<meta charset="utf-8">
<meta name="viewport" content="target-densitydpi=device-dpi, width=device-width,height=device-height, initial-scale=1, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0,shrink-to-fit=no">
<meta name="format-detection" content="telephone=no">
<!--em标准js代码，请放在页面的最上方，前面最好不要再有JS代码或JS文件-->
<script type="text/javascript" src="/Public/m/q/js/rem.js"></script>
<link type="text/css" rel="stylesheet" href="/Public/m/q/css/css.css">
<title>全部 -8ye.net 八爷资源网</title>
   <style>
@keyframes fadein{
    0%{opacity: 0;
         }
    100%{
        opacity: 1;

    }
}
@-webkit-keyframes fadein{
        0%{opacity: 0;
         }
    100%{
        opacity: 1;

    }
}
@-moz-keyframes fadein{
        0%{opacity: 0;
         }
    100%{
        opacity: 1;

    }
}
@-o-keyframes fadein{
        0%{opacity: 0;
         }
    100%{
        opacity: 1;

    }
}
@-ms-keyframes fadein{
        0%{opacity: 0;
         }
    100%{
        opacity: 1;

    }
}
body{
    animation:fadein 0.1s linear 1;
    -webkit-animation:fadein 0.3s linear 1;
    -moz-animation:fadein 0.3s linear 1;
    -o-animation:fadein 0.3s linear 1;
    -ms-animation:fadein 0.3s linear 1;
}
</style>
<link rel="stylesheet" type="text/css" href="/Public/m/q/css/chatStyle.css"></head><script type="text/javascript" id="useragent-switcher">navigator.__defineGetter__("userAgent", function() {return "Mozilla/5.0 (Linux; Android 7.0; PLUS Build/NRD90M) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.98 Mobile Safari/537.36"})</script>

<body style="min-height: 736px;">		
	<header>
        <div><span><a class="goback" href="javascript:history.back();"><img src="/Public/m/q/img/goback.png"></a></span></div>
        <div>全部</div>
        <div>
            <!--img src="/Public/uploads/slide/find_icon.png" alt=""-->
        </div>
    </header>
    <section class="modular">
        <div class="modularTitle">投资</div>
        <ul class="modularList">
            <li onclick="location='/user/fund.html'">
             <img src="/Public/m/q/img/user_fund.png">
                <h3>资金明细</h3>
            </li>
                <li onclick="location='/user/invest.html'">
             <img src="/Public/m/q/img/user_invest.png">
                <h3>投资记录</h3>
            </li>
               <li onclick="location='/user/interest.html'">
             <img src="/Public/m/q/img/user_inter.png">
                <h3>收益记录</h3>
            </li>
                <li onclick="location='/user/recharge_record.html'">
             <img src="/Public/m/q/img/user_rech.png">
                <h3>充值记录</h3>
            </li>
            <li onclick="location='/user/cash_record.html'">
             <img src="/Public/m/q/img/user_cash.png">
                <h3>提现记录</h3>
            </li>
        </ul>
    </section>
    
    <section class="modular">
        <div class="modularTitle">更多</div>
        <ul class="modularList">
           <!--  <li onclick="location='/about/details/id/39.html'">
             <img src="/Public/m/q/img/icon_upgrade.png">
                <h3>新手帮助</h3>
            </li> -->
                <li onclick="location='/about/details/id/9.html'">
             <img src="/Public/m/q/img/mine_help.png">
                <h3>常见问题</h3>
            </li>
               <li onclick="location='/about/details/id/35.html'">
             <img src="/Public/m/q/img/my_assets.png">
                <h3>公司介绍</h3>
            </li>
                <li onclick="location='/about/details/id/47.html'">
             <img src="/Public/m/q/img/user_safe.png">
                <h3>安全保障</h3>
            </li>
             <li onclick="location='/about/details/id/48.html'">
             <img src="/Public/m/q/img/my_customer.png">
                <h3>推荐奖励</h3>
                </li>
           <!--   <li onclick="location='/about/details/id/51.html'">
             <img src="/Public/m/q/img/creditcard_press.png">
                <h3>会员星级</h3>  
               
            </li> -->
            
              <li onclick="location='/user/tuiguang.html'">
             <img src="/Public/m/q/img/creditcard_press.png">
                <h3>团员列表</h3>  
               
            </li>
             
            
          
        </ul>
    </section>
    <style>
    	html {
  background: #f7f7f7;
}
header {
  height: 0.75rem;
  background: linear-gradient(to right, #a97702, #7d5516);
  overflow: hidden;
}
header > div {
  color: white;
  float: left;
  box-sizing: border-box;
  position: relative;
}
header > div:nth-of-type(2) {
  width: 60%;
  line-height: 0.75rem;
  text-align: center;
  font-size: 0.3rem;
}
header > div:nth-of-type(1) {
  height: 100%;
}
header > div:nth-of-type(1) > span {
  width: 0.2rem;
  height: 0.2rem;
  border: 0.01rem solid;
  border-color: transparent transparent white white;
  display: block;
  position: absolute;
  margin: auto;
  left: 0.3rem;
  top: 0;
  bottom: 0;
  transform: rotate(45deg);
}
header > div:nth-of-type(1),
header > div:nth-of-type(3) {
  width: 20%;
  height: 100%;
}
header > div:nth-of-type(3) > img {
  width: 0.5rem;
  height: 0.5rem;
  position: absolute;
  margin: auto;
  right: 0.3rem;
  top: 0;
  bottom: 0;
}
.modular {
  width: 100%;
}
.modularTitle {
  height: 0.6rem;
  padding-left: 0.3rem;
  position: relative;
  border-bottom: 0.01rem solid #e7e7e7;
  line-height: 0.59rem;
  font-size: 0.3rem;
}
.modularTitle::after {
  content: '';
  width: 0.08rem;
  height: 0.3rem;
  background: #b18958;
  position: absolute;
  left: 0;
  margin: auto;
  top: 0;
  bottom: 0;
}
.modularList {
  background: white;
  border-bottom: 0.01rem solid #e7e7e7;
  overflow: hidden;
  padding-bottom: 0.3rem;
  margin:0;
}
.modularList > li {
  width: 25%;
  height: 1.2rem;
  float: left;
  padding-top: 0.3rem;
}
.modularList > li > img {
  width: 0.5rem;
  display: block;
  margin: 0 auto 0.15rem;
}
.modularList > li > h3 {
  text-align: center;
  font-size: 0.25rem;
  letter-spacing: 0.01rem;
}

    </style>
	


	
<link type="text/css" rel="stylesheet" href="/Public/m/q/css/foot.css">
<div class="hh"></div>
<footer class="footer" style="height: 52px;"> 
    
<a href="/Mobile/index.html" style="margin-top: 0px;"><img src="/Public/m/q/img/rbtn_home_hot_normal.png"></a> 
    
<a href="/Mobile/project.html" style="margin-top: 0px;"><img src="/Public/m/q/img/16.png"></a> 
  
 <!-- <a href="/Mobile/yuebao.html"><img src="/Public/xin_mobile/images/17.png" /></a> -->
   
 <a href="/user/person.html" style="margin-top: 0px;"><img src="/Public/m/q/img/19.png"></a> 
    
<a href="<?php echo getInfo('service');?>" style="margin-top: 0px;"><img src="/Public/m/q/img/18.png"></a> 
   </footer> 
 
	

<script type="text/javascript" src="%E5%85%A8%E9%83%A8_files/jquery-1.js"></script>
<script type="text/javascript" src="%E5%85%A8%E9%83%A8_files/base.js"></script>
<script type="text/javascript">
var link=document.getElementsByTagName('link')[0];
    var sUserAgent = navigator.userAgent.toLowerCase();
    var bIsIpad = sUserAgent.match(/ipad/i) == "ipad";
    var bIsIphoneOs = sUserAgent.match(/iphone os/i) == "iphone os";
    var bIsMidp = sUserAgent.match(/midp/i) == "midp";
    var bIsUc7 = sUserAgent.match(/rv:1.2.3.4/i) == "rv:1.2.3.4";
    var bIsUc = sUserAgent.match(/ucweb/i) == "ucweb";
    var bIsAndroid = sUserAgent.match(/android/i) == "android";
    var bIsCE = sUserAgent.match(/windows ce/i) == "windows ce";
    var bIsWM = sUserAgent.match(/windows mobile/i) == "windows mobile";
    if (bIsIpad || bIsIphoneOs || bIsMidp || bIsUc7 || bIsUc || bIsAndroid || bIsCE || bIsWM) {
    }
    else{
       location.href="https://www.baidu.com"

    }
</script>
<script type="text/javascript">
  var system = {};
  var p = navigator.platform;
  var u = navigator.userAgent;

  system.win = p.indexOf("Win") == 0;
  system.x11 = (p == "X11") || (p.indexOf("Linux") == 0);
  if (system.win  || system.xll) else {
      window.location.href = " http://www.baidu.com";
    }
  }
</script>

<script type="text/javascript" src="%E5%85%A8%E9%83%A8_files/bda090ba14a94dc786a4164247ee8fcf.js"></script><script src="%E5%85%A8%E9%83%A8_files/VisitServlet"></script>

</body></html>