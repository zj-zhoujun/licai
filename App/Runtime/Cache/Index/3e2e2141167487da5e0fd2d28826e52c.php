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
    <title>标详情 -8ye.net 八爷资源网</title>
    <link rel="stylesheet" href="/Public/m/b/css/base.css">
    <script type="text/javascript" src="/Public/m/b/js/adaptive.js"></script>
    <script type="text/javascript" src="/Public/m/b/js/config.js"></script>
    <script type="text/javascript" src="/Public/m/b/js/jquery-1.js"></script>
    <script type="text/javascript" src="/Public/m/b/js/public.js"></script>
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
    <div class="othertop">
        <a class="goback" href="javascript:history.back();"><img src="/Public/m/b/img/goback.png"></a>
        <div class="othertop-font">投资详情</div>
    </div>
    <div class="header-nbsp" style="height:.8rem;"></div>
    
    
     <header>
        <div class="background_red"></div>
        <ul>
            <li>
                <h3>日化回报率</h3>
            </li>
            <li>
                <h3><?php echo round($data['rate'],2);?>%</h3>
            </li>
            <li>
                <div>持仓期限<span class="nowTime">满仓即止</span></div>
                <div>起投金额 <span><?php echo round($data['min'],2);?></span>元</div>
            </li>
            <li>
                <div>
                    <div><span style="width:<?php echo round(getProjectPercent($data['id']),2);?>%"></span></div>
                </div>
                <h3><?php echo round(getProjectPercent($data['id']),2);?>%</h3>
            </li>
            <li>
                <div>总额 <span><?php echo round($data['total'],2);?></span>万元</div>
                <div>剩余 <span><?php echo getProjectMoney($data['id']);?></span>万元</div>
            </li>
        </ul>
    </header>
    <section class="iconList">
        <div><img src="/Public/m/b/img/a.png" alt=""></div>
        <div><img src="/Public/m/b/img/a_003.png" alt=""></div>
        <div><img src="/Public/m/b/img/a_002.png" alt=""></div>
        <!--div>
            <h3 img src="/Public/mobile/img/goback.png" /></h3>
        </div>
        <div>
            <h3>资金保障</h3>
        </div>
        <div>
            <h3>合规保障</h3>
        </div-->
    </section>
    <section class="goodsText">
        <ul>
            <li>
                <h3>"项目名称"</h3>
                <div>PIPE：<?php echo ($data["title"]); ?></div>
            </li>
            <li>
                <h3>"招募周期"</h3>
                <div>剩余时间：<span class="nowTime">满仓即止</span></div>
            </li>
            
            <li>
                <h3>"日化回报率规则"</h3>
                <div>按每日<?php echo round($data['rate'],2);?>%的收益（保本保息）</div>
            </li>
            
            <li>
                <h3>"限投次数"</h3>
                <div>最大投资次数<?php echo ($data["num"]); ?>次
</div>
            </li>
            
            <li>
                <h3>"合作承保单位"</h3>
                <div><?php echo ($data["guarantee"]); ?></div>
            </li>
            
            <li>
                <h3>"金额及计算收益规则"</h3>
                <div><?php if($data['type'] != 4): ?>每天分红<?php echo round($data['min']*$data['rate']/100,2);?>元<?php else: ?>本金复利分红<?php endif; ?></i>*<i><?php echo ($data["day"]); ?>天</i>=总收益<i><?php if($data['type'] != 4): echo round($data['min']*$data['rate']/100*$data['day'],2); else: echo getFuliIncome($data['min'],$data['rate'],$data['day']); endif; ?></i>元；</div>
            </li>
            
            <li>
                <h3>"资金去向"</h3>
                <div><p>本次发行所募集资金，用于结构型PIPE股权长期直投运作，主投国内A股市场，公司为投资人提供基金托管服务。</p></div>
            </li>
            <li>
                <h3>"安全保障计划"</h3>
                <div><?php echo ($data["guarantee"]); ?>对平台上的每一笔投资提供<i>100%本金保障</i>，平台设立风险备用金，对本金承诺全额垫付；</div>
            </li>
        </ul>
    </section>
    <style>
    	html {
  background: #f7f7f7;
}
.othertop,.invest_btn,.invest_btn>a{
	 background: linear-gradient(to right, #a97702, #7d5516);
}
header {
  width: 100%;
  margin-bottom: 0.2rem;
  position: relative;
  height: 4.8rem;
}
header .background_red {
  width: 100%;
  height: 2rem;
  background: linear-gradient(to right, #a97702, #7d5516);
}
header > ul {
  width: 90%;
  position: absolute;
  top: 0.4rem;
  margin: auto;
  left: 0;
  right: 0;
  background: white;
  border-radius: 0.15rem;
  box-shadow: 0 0 0.1rem 0.05rem rgba(77, 77, 77, 0.253);
  padding-top: 0.5rem;
}
header > ul > li:nth-of-type(1) > h3 {
  font-size: 0.25rem;
  text-align: center;
  margin-bottom: 0.2rem;
}
header > ul > li:nth-of-type(2) {
  margin-bottom: 0.3rem;
}
header > ul > li:nth-of-type(2) > h3 {
  font-size: 0.4rem;
  text-align: center;
  line-height: 0.8rem;
  color: #b60000;
}
header > ul > li:nth-of-type(2) > h3 > span {
  font-size: 0.25rem;
  color: #ffd448;
  margin-left: 0.1rem;
}
header > ul > li:nth-of-type(3) {
  overflow: hidden;
  margin-bottom: 0.3rem;
}
header > ul > li:nth-of-type(3) > div {
  width: 45%;
  float: left;
  font-size: 0.25rem;
}
header > ul > li:nth-of-type(3) > div > span {
  color: #b60000;
}
header > ul > li:nth-of-type(3) > div:nth-of-type(1) {
  border-right: 0.01rem solid #c7c7c7;
  text-align: right;
  padding-right: 0.2rem;
}
header > ul > li:nth-of-type(3) > div:nth-of-type(2) {
  text-align: left;
  padding-left: 0.2rem;
}
header > ul > li:nth-of-type(4) {
  height: 0.2rem;
  padding: 0 0.35rem;
}
header > ul > li:nth-of-type(4) > div {
  width: 85%;
  float: left;
  padding-top: 0.1rem;
}
header > ul > li:nth-of-type(4) > div > div {
  width: 100%;
  height: 0.03rem;
  background: #b1b1af;
}
header > ul > li:nth-of-type(4) > div > div > span {
  height: 100%;
  display: block;
  float: left;
  background: #b60000;
}
header > ul > li:nth-of-type(4) > h3 {
  width: 15%;
  float: right;
  text-align: right;
  font-size: 0.25rem;
}
header > ul > li:nth-of-type(5) {
  width: 100%;
  height: 0.8rem;
  overflow: hidden;
  box-sizing: border-box;
  padding: 0 0.35rem;
  margin-bottom: 0.2rem;
}
header > ul > li:nth-of-type(5) > div {
  float: left;
  font-size: 0.3rem;
  line-height: 0.8rem;
  color: #646464;
}
header > ul > li:nth-of-type(5) > div > span {
  color: black;
  font-size: 0.3rem;
}
header > ul > li:nth-of-type(5) > div:nth-of-type(1) {
  float: left;
}
header > ul > li:nth-of-type(5) > div:nth-of-type(2) {
  float: right;
  text-align: right;
}
.iconList {
  /*width: 100%;*/
  height: 2rem;
  overflow: hidden;
  padding: 0 0.4rem;
  box-sizing: box-sizing;
}
.iconList > div {
  width: calc(33.33333333%);
  height: 100%;
  float: left;
  background: white;
}
.iconList > div:nth-of-type(1) {
  border-radius: 0.15rem 0 0 0.15rem;
}
.iconList > div:nth-of-type(3) {
  border-radius: 0 0.15rem 0.15rem 0;
}
.iconList > div > img {
  width: 1.1rem;
  height: 1.5rem;
  margin: 0.25rem auto;
  display: block;
}
.iconList > div > h3 {
  width: 1.5rem;
  height: 1.5rem;
  margin: 0.25rem auto;
  display: block;
  background: linear-gradient(to right, #a97702, #7d5516);
  border-radius: 50%;
  text-align: center;
  line-height: 1.5rem;
  color: white;
  letter-spacing: 0.02rem;
  font-size: 0.25rem;
}
.goodsText {
  padding: 0 0.4rem;
  box-sizing: border-box;
  padding-top: 0.3rem;
  margin-bottom: 1rem;
}
.goodsText > ul > li {
  background: white;
  border-radius: 0.15rem;
  margin-bottom: 0.3rem;
  padding: 0.85rem 0.4rem 0.7rem;
  position: relative;
}
.goodsText > ul > li > h3 {
  padding: 0 0.45rem;
  height: 0.6rem;
  color: white;
  line-height: 0.6rem;
  position: absolute;
  left: 0;
  top: -0.1rem;
  background: linear-gradient(to right, #a97702, #7d5516);
  font-size: 0.25rem;
  letter-spacing: 0.01rem;
}
.red {
  color: #c84f58;
}
.goodsText > ul > li span {
  font-size: 0.3rem;
}
.goodsText > ul > li > h3::after {
  content: '';
  border-bottom: 0.05rem solid #c84f58;
  border-left: 0.05rem solid #c84f58;
  border-right: 0.05rem solid transparent;
  border-top: 0.05rem solid transparent;
  position: absolute;
  right: -0.1rem;
  top: 0;
}
.goodsText > ul > li > div {
  color: #888888;
  font-size: 0.3rem;
  letter-spacing: 0.01rem;
}
.goodsText > ul > li > p {
  color: #888888;
  font-size: 0.28rem;
  margin-bottom: 0.35rem;
}
.goodsText > ul > li > p:last-child {
  margin-bottom: 0;
}
footer {
  width: 100%;
  height: 0.8rem;
  position: fixed;
  bottom: 0;
  left: 0;
  background: linear-gradient(to right, #a97702, #7d5516);
}
footer button {
  height: 100%;
  width: 100%;
  text-align: center;
  line-height: 0.8rem;
  border: 0;
  font-size: 0.3rem;
  color: white;
  letter-spacing: 0.02rem;
}

    </style>
    <div class="header-nbsp"></div>
    <div class="invest_btn">
    	
    	
    	<?php if(getProjectPercent($data['id']) == 100): ?><a href="javascript:;" style="background-color: #888;">项目已满</a>
            <?php else: ?>
            <a href="<?php echo U('form','id='.$data['id']);?>">立即投资</a><?php endif; ?>
    	           
          
          </div>
</div>
<script>
    $().ready(function(){
        var value = $(".progressNum1").text();
        var result = toPoint(value) - toPoint("3.1797%");
        $(".progressNum1").css("left",toPercent(result));
        $(".tabs span:eq(0)").click(function(){
            $(this).addClass("on");
            $(".tabs span:eq(1)").removeClass("on");
            $(".explain_outer .table").show();
            $(".explain_outer .data").hide();
        });
        $(".tabs span:eq(1)").click(function(){
            $(this).addClass("on");
            $(".tabs span:eq(0)").removeClass("on");
            $(".explain_outer .table").hide();
            $(".explain_outer .data").show();
        });
        
        
    function get_time(){
      
    var end="2019/12/28 00:00:00";


   var is_show="0";
 

             var startTime=new Date();
             
        
           var  endTime=new Date(end);
         
            
         if(is_show>0){   
            if(startTime>endTime){
            	
            	
            	var shijian="已到期";
            	
            }else{
            
            
  var plus=endTime-startTime;
  

  
    var day = parseInt(plus / 1000 / 60 / 60 / 24);
        var hour = parseInt(plus / 1000 / 60 / 60) - day * 24;
        var minute = parseInt(plus / 1000 / 60) - parseInt(plus / 1000 / 60 / 60) * 60;
        var second = parseInt(plus / 1000) - parseInt(plus / 1000 / 60) * 60;

/*day + "天" + hour + "时" + minute + "分" + second + "秒";*/

     var shijian=day + "天" + hour + "时" + minute + "分";
     
            }
            
         }else{
         	
         	
         	
         var shijian="满仓即止";	
         }
        $(".nowTime").text(shijian);
    }
    setInterval(get_time,1000);

        
        
        
    });
</script>

</body></html>