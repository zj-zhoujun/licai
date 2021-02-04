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
 <script type="text/javascript" src="%E9%A1%B9%E7%9B%AE_files/rem.js"></script>
<link type="text/css" rel="stylesheet" href="/Public/m/p/css/css.css">
<title>项目 -8ye.net 八爷资源网</title>



    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
    <title>散标任投 -8ye.net 八爷资源网</title>
    <link rel="stylesheet" href="/Public/m/p/css/base.css">
    <script type="text/javascript" src="/Public/m/p/js/adaptive.js"></script>
    <script type="text/javascript" src="/Public/m/p/js/config.js"></script>
    <script type="text/javascript" src="/Public/m/p/js/jquery-1.js"></script>
    <script type="text/javascript" src="/Public/m/p/js/public.js"></script>
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
<link rel="stylesheet" href="/Public/m/p/css/x.css">  

  <link type="text/css" rel="stylesheet" href="/Public/m/p/css/swiper.css"> 
  <script type="text/javascript" src="/Public/m/p/js/swiper.js"></script> 
<div class="mobile">
	  <div class="hm_lc"> 

<style>
	.btnSwiper{
		width: 100%;
		margin-top: 1rem;
		height: 1rem;
		position: fixed;
		left: 0;
		/*top: 0;*/
		/*top: .7rem;*/
		background: #f5f5f5;
		z-index: 2;
		/*padding-top: .05rem;*/
	}
	.btnSwiper>ul{
		width: 100%;
		height: 1rem;
		box-sizing: box-sizing;
	}
	.btnSwiper>ul>li{
		width: calc(100% / 6);
		height: 1rem;
		float: left;
		line-height: .9rem;
		text-align: center;
		box-sizing: box-sizing;
	}
	.btnSwiper>ul>li>div{
		width: calc(100% - .1rem);
		height: .9rem;
		border:.01rem solid #424242;
		background: white;
	}
	.btnSwiper .show>div{
		background: #b1afaf;
	}
	.showSwiper{
		margin-top: 1rem;
	}
	 * { touch-action: pan-y; } 
	     </style>

  <script>
   $('body').bind('touchstart',function(e){
        startX = e.originalEvent.changedTouches[0].pageX;
        startY = e.originalEvent.changedTouches[0].pageY;
    });
    $("body").bind("touchmove",function(e){
        //获取滑动屏幕时的X,Y
        endX = e.originalEvent.changedTouches[0].pageX;
        endY = e.originalEvent.changedTouches[0].pageY;
        //获取滑动距离
        distanceX = endX-startX;
        distanceY = endY-startY;
        //判断滑动方向
        if(Math.abs(distanceX)>Math.abs(distanceY) && distanceX>0){
          var jh=$(".hongse").prev().attr("href");
          
         
        if(jh==undefined){
        	
           return false;
        	
        }
          
       
    location.href=jh;
        }else if(Math.abs(distanceX)>Math.abs(distanceY) && distanceX<0){
                
                    var jh=$(".hongse").next().attr("href");
           if(jh==undefined){
        	
           return false;
        	
        }
        location.href=jh;
        }
})

  </script>
  
  
  
<div class="max">
	<div class="nav-scroller btnSwiper" style="">
	  <nav class="nav d-flex justify-content-between">
	  <a class="hongse" href="http://www.allian88.com/mobile/project.html"> 全部项目   </a>
		<a href="http://www.allian88.com/mobile/project/id/3.html">  新手专享     </a><a href="http://www.allian88.com/mobile/project/id/8.html">  稳健投资     </a><a href="http://www.allian88.com/mobile/project/id/5.html">  高端领投     </a><a href="http://www.allian88.com/mobile/project/id/11.html">  热门推荐     </a><a href="http://www.allian88.com/mobile/project/id/12.html">  长期定投     </a>		
	  </nav>
	</div>




 <script type="text/javascript" src="/Public/m/p/js/rem_002.js"></script> 
   <link type="text/css" rel="stylesheet" href="/Public/m/p/css/foot.css"> 
   <!--<div class="hh"></div> -->
  <div style="height:1rem;"></div>
   <footer class="footer"> 
    <a href="http://www.allian88.com/mobile/index.html"><img src="/Public/m/p/img/rbtn_home_hot_normal.png"></a> 
    <a href="http://www.allian88.com/mobile/project.html"><img src="/Public/m/p/img/288.png"></a> 
    <a href="http://www.allian88.com/user/person.html"><img src="/Public/m/p/img/19.png"></a> 
     <a href="https://plus.bluebie.com/talk/chatClient/chatbox.jsp?companyID=631044130&amp;configID=1194&amp;jid=4605710765&amp;s=1"><img src="/Public/m/p/img/18.png"></a> 
   </footer> 
   

   
</div>

  
  
  <section class="goodsList">
        <div class="goodsListTitle">
            <h3>基金名称</h3>
            <h3>持仓期限</h3>
            <h3>日化回报率</h3>
        </div>
        <ul class="goodsListGoods">
        	
        	 <?php if(is_array($item)): $i = 0; $__LIST__ = $item;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$i): $mod = ($i % 2 );++$i;?>111<?php endforeach; endif; else: echo "" ;endif; ?>
        	
        	 <li href="/mobile/details/id/67.html" link="dianji">
            	
                <div>
                    <h3>PIPE：前海开源健...</h3>
                    <h3>1个持仓日</h3>
                    <h3>0.68%</h3>
                </div>
                <div>
                    <div>
                        <h3>150220</h3>
                        <div>
                            <div style="    width: 80%; margin-left:20%">
                                <span style="width: 41.99%;"></span>
                            </div>
                        </div>

                    </div>
                    <div>满仓即止</div>
                    <div>起投:<span>280</span></div>
                </div>
                
               
            </li><li href="/mobile/details/id/68.html" link="dianji">
            	
                <div>
                    <h3>PIPE：长盛上证5...</h3>
                    <h3>3个持仓日</h3>
                    <h3>0.73%</h3>
                </div>
                <div>
                    <div>
                        <h3>502042</h3>
                        <div>
                            <div style="    width: 80%; margin-left:20%">
                                <span style="width: 46.06%;"></span>
                            </div>
                        </div>

                    </div>
                    <div>满仓即止</div>
                    <div>起投:<span>1200</span></div>
                </div>
                
               
            </li><li href="/mobile/details/id/69.html" link="dianji">
            	
                <div>
                    <h3>PIPE：鹏华互联网...</h3>
                    <h3>5个持仓日</h3>
                    <h3>0.81%</h3>
                </div>
                <div>
                    <div>
                        <h3>150180</h3>
                        <div>
                            <div style="    width: 80%; margin-left:20%">
                                <span style="width: 48.9%;"></span>
                            </div>
                        </div>

                    </div>
                    <div>满仓即止</div>
                    <div>起投:<span>6300</span></div>
                </div>
                
               
            </li><li href="/mobile/details/id/70.html" link="dianji">
            	
                <div>
                    <h3>PIPE：广发医疗指...</h3>
                    <h3>9个持仓日</h3>
                    <h3>0.92%</h3>
                </div>
                <div>
                    <div>
                        <h3>502058</h3>
                        <div>
                            <div style="    width: 80%; margin-left:20%">
                                <span style="width: 57%;"></span>
                            </div>
                        </div>

                    </div>
                    <div>满仓即止</div>
                    <div>起投:<span>10200</span></div>
                </div>
                
               
            </li><li href="/mobile/details/id/83.html" link="dianji">
            	
                <div>
                    <h3>主板IPO：泰和科技...</h3>
                    <h3>43个持仓日</h3>
                    <h3>1.17%</h3>
                </div>
                <div>
                    <div>
                        <h3>300801</h3>
                        <div>
                            <div style="    width: 80%; margin-left:20%">
                                <span style="width: 14.35%;"></span>
                            </div>
                        </div>

                    </div>
                    <div>37天1时37分</div>
                    <div>起投:<span>79000</span></div>
                </div>
                
               
            </li><li href="/mobile/details/id/81.html" link="dianji">
            	
                <div>
                    <h3>主板IPO：广电计量...</h3>
                    <h3>17个持仓日</h3>
                    <h3>0.98%</h3>
                </div>
                <div>
                    <div>
                        <h3>002967</h3>
                        <div>
                            <div style="    width: 80%; margin-left:20%">
                                <span style="width: 4.49%;"></span>
                            </div>
                        </div>

                    </div>
                    <div>11天1时37分</div>
                    <div>起投:<span>16000</span></div>
                </div>
                
               
            </li><li href="/mobile/details/id/82.html" link="dianji">
            	
                <div>
                    <h3>PIPE：鹏华信息分...</h3>
                    <h3>7个持仓日</h3>
                    <h3>0.86%</h3>
                </div>
                <div>
                    <div>
                        <h3>150180</h3>
                        <div>
                            <div style="    width: 80%; margin-left:20%">
                                <span style="width: 2.61%;"></span>
                            </div>
                        </div>

                    </div>
                    <div>满仓即止</div>
                    <div>起投:<span>8500</span></div>
                </div>
                
               
            </li><li href="/mobile/details/id/80.html" link="dianji">
            	
                <div>
                    <h3>PIPE：大成中证互...</h3>
                    <h3>65个持仓日</h3>
                    <h3>0.72%</h3>
                </div>
                <div>
                    <div>
                        <h3>502038</h3>
                        <div>
                            <div style="    width: 80%; margin-left:20%">
                                <span style="width: 17.03%;"></span>
                            </div>
                        </div>

                    </div>
                    <div>59天1时37分</div>
                    <div>起投:<span>260000</span></div>
                </div>
                
               
            </li><li href="/mobile/details/id/71.html" link="dianji">
            	
                <div>
                    <h3>PIPE：结构型混合...</h3>
                    <h3>60个持仓日</h3>
                    <h3>0.29%</h3>
                </div>
                <div>
                    <div>
                        <h3>混合</h3>
                        <div>
                            <div style="    width: 80%; margin-left:20%">
                                <span style="width: 3.18%;"></span>
                            </div>
                        </div>

                    </div>
                    <div>满仓即止</div>
                    <div>起投:<span>10000</span></div>
                </div>
                
               
            </li><li href="/mobile/details/id/74.html" link="dianji">
            	
                <div>
                    <h3>PIPE：结构型混合...</h3>
                    <h3>90个持仓日</h3>
                    <h3>0.31%</h3>
                </div>
                <div>
                    <div>
                        <h3>混合</h3>
                        <div>
                            <div style="    width: 80%; margin-left:20%">
                                <span style="width: 2.87%;"></span>
                            </div>
                        </div>

                    </div>
                    <div>满仓即止</div>
                    <div>起投:<span>20000</span></div>
                </div>
                
               
            </li><li href="/mobile/details/id/73.html" link="dianji">
            	
                <div>
                    <h3>PIPE：结构型混合...</h3>
                    <h3>120个持仓日</h3>
                    <h3>0.32%</h3>
                </div>
                <div>
                    <div>
                        <h3>混合</h3>
                        <div>
                            <div style="    width: 80%; margin-left:20%">
                                <span style="width: 2.85%;"></span>
                            </div>
                        </div>

                    </div>
                    <div>满仓即止</div>
                    <div>起投:<span>10000</span></div>
                </div>
                
               
            </li><li href="/mobile/details/id/75.html" link="dianji">
            	
                <div>
                    <h3>PIPE：结构型混合...</h3>
                    <h3>180个持仓日</h3>
                    <h3>0.33%</h3>
                </div>
                <div>
                    <div>
                        <h3>混合</h3>
                        <div>
                            <div style="    width: 80%; margin-left:20%">
                                <span style="width: 2.66%;"></span>
                            </div>
                        </div>

                    </div>
                    <div>满仓即止</div>
                    <div>起投:<span>20000</span></div>
                </div>
                
               
            </li><li href="/mobile/details/id/76.html" link="dianji">
            	
                <div>
                    <h3>PIPE：结构型混合...</h3>
                    <h3>270个持仓日</h3>
                    <h3>0.35%</h3>
                </div>
                <div>
                    <div>
                        <h3>混合</h3>
                        <div>
                            <div style="    width: 80%; margin-left:20%">
                                <span style="width: 2.88%;"></span>
                            </div>
                        </div>

                    </div>
                    <div>满仓即止</div>
                    <div>起投:<span>20000</span></div>
                </div>
                
               
            </li><li href="/mobile/details/id/77.html" link="dianji">
            	
                <div>
                    <h3>PIPE：结构型混合...</h3>
                    <h3>365个持仓日</h3>
                    <h3>0.59%</h3>
                </div>
                <div>
                    <div>
                        <h3>混合</h3>
                        <div>
                            <div style="    width: 80%; margin-left:20%">
                                <span style="width: 2.96%;"></span>
                            </div>
                        </div>

                    </div>
                    <div>满仓即止</div>
                    <div>起投:<span>10000</span></div>
                </div>
                
               
            </li><li href="/mobile/details/id/78.html" link="dianji">
            	
                <div>
                    <h3>PIPE：结构型混合...</h3>
                    <h3>730个持仓日</h3>
                    <h3>0.38%</h3>
                </div>
                <div>
                    <div>
                        <h3>混合</h3>
                        <div>
                            <div style="    width: 80%; margin-left:20%">
                                <span style="width: 3.18%;"></span>
                            </div>
                        </div>

                    </div>
                    <div>满仓即止</div>
                    <div>起投:<span>10000</span></div>
                </div>
                
               
            </li><li href="/mobile/details/id/79.html" link="dianji">
            	
                <div>
                    <h3>PIPE：结构型混合...</h3>
                    <h3>1095个持仓日</h3>
                    <h3>0.4%</h3>
                </div>
                <div>
                    <div>
                        <h3>混合</h3>
                        <div>
                            <div style="    width: 80%; margin-left:20%">
                                <span style="width: 2.98%;"></span>
                            </div>
                        </div>

                    </div>
                    <div>满仓即止</div>
                    <div>起投:<span>10000</span></div>
                </div>
                
               
            </li>      
        </ul>
    </section>
    <style>
    	
.goodsList {
  background: white;
}
.goodsListTitle {
	width: 100%;
  height: 0.95rem;
  border-bottom: 0.01rem solid #dedede;
  box-sizing: border-box;
}
.goodsListTitle > h3 {
  line-height: 0.95rem;
  float: left;
  color: #595959;
  font-size: 0.28rem;
}
.goodsListTitle > h3:nth-of-type(1) {
  width: 50%;
  padding-left: 0.2rem;
  box-sizing: border-box;
}
.goodsListTitle > h3:nth-of-type(2),
.goodsListTitle > h3:nth-of-type(3) {
  width: 25%;
  text-align: center;
}
.goodsListGoods > li {
  background: white;
	width: 100%;
  height: 2rem;
  border-bottom: 0.01rem solid #dedede;
  padding: 0.4rem 0;
  color: #595959;
  box-sizing: border-box;
}
.goodsListGoods > li > div:nth-of-type(1) {
  height: 0.6rem;
  width: 100%;
  
  box-sizing: border-box;
}
.goodsListGoods > li > div:nth-of-type(1) > h3 {
  line-height: 0.6rem;
  float: left;
  font-size: 0.28rem;
}
.goodsListGoods > li > div:nth-of-type(1) > h3:nth-of-type(1) {
  width: 50%;
  padding-left: 0.2rem;
  color: black;
  font-size: 0.3rem;
  box-sizing: border-box;
}
.goodsListGoods > li > div:nth-of-type(1) > h3:nth-of-type(2),
.goodsListGoods > li > div:nth-of-type(1) > h3:nth-of-type(3) {
  width: 25%;
  text-align: center;
}
.goodsListGoods > li > div:nth-of-type(1) > h3:nth-of-type(3) {
  color: #ed2e40;
}
.goodsListGoods > li > div:nth-of-type(2) > div {
  line-height: 0.6rem;
  float: left;
  font-size: 0.28rem;
}
.goodsListGoods > li > div:nth-of-type(2) > div:nth-of-type(1) {
  width: 50%;
  padding-left: 0.2rem;
  box-sizing: border-box;
}
.goodsListGoods > li > div:nth-of-type(2) > div:nth-of-type(2),
.goodsListGoods > li > div:nth-of-type(2) > div:nth-of-type(3) {
  width: 25%;
  text-align: center;
}
.goodsListGoods > li > div:nth-of-type(2) > div:nth-of-type(3) > span {
  color: #ed2e40;
  font-size: 0.28rem;
}
.goodsListGoods > li > div:nth-of-type(2) > div:nth-of-type(1) > div,
.goodsListGoods > li > div:nth-of-type(2) > div:nth-of-type(1) > h3 {
  float: left;
}
.goodsListGoods > li > div:nth-of-type(2) > div:nth-of-type(1) > h3 {
  width: 20%;
}
.goodsListGoods > li > div:nth-of-type(2) > div:nth-of-type(1) > div {
  width: 80%;
  padding-top: 0.18rem;
}
.goodsListGoods > li > div:nth-of-type(2) > div:nth-of-type(1) > div > div {
  width: 90%;
  height: 0.3rem;
  background: #cecece;
  border-radius: 0.1rem;
}
.goodsListGoods > li > div:nth-of-type(2) > div:nth-of-type(1) > div > div > span {
  height: 100%;
  display: block;
  background: linear-gradient(to right, #ff0000, #821009);
  border-radius: 0.1rem;
}
.goodsListGoods > li.over {
  background-image: url(/Public/xin_mobile/images/over.png);
  background-repeat: no-repeat;
  background-size: auto 80%;
  background-position: 85% center;
}

    </style>


<style>
html, body {
  margin: 0;
  font: 16px/2 'Trebuchet MS';
}
 
.d-flex {
  display: flex;
}
 
.justify-content-between {
  justify-content: space-between;
}
 
.p-2 {
  padding: 0.5rem;
}
 
.text-muted {
  color: #8a8a8a;
}
 
.nav a {
text-decoration: none;
    width: 100%;
    text-align: center;
    line-height: 1rem;
    /*border: 0.1px solid #ffffff;*/
    margin: 1px;
  color: white;
  position: relative;
}
 
.nav a:hover {
  color: #333;
}
 
.nav-scroller {
    max-width: 480px;
    margin: 0 auto;
    height: 1rem;
    overflow-y: hidden;
    margin-top: 0px;
}
 
.nav {
    background: linear-gradient(to right, #a97702, #7d5516);
    height: 1rem;
  overflow-x: auto;
 
}
.hongse {
    /*background: #f9f7c4;*/
}
.hongse::after{
	content: '';
	position: absolute;
	margin: auto;
	top: .7rem;
	left: 0;
	right: 0;
	width: 1rem;
	border-radius: .025rem;
	height: .05rem;
	background: white;
}




</style>



<script>   
$("[link=dianji]").click(function(){
	
	
var url=$(this).attr("href");


location.href=url;
	
})
  </script></div></div></body></html>