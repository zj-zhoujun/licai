<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>后台管理 - 系统管理 -8ye.net 八爷资源网</title>
    <link rel="stylesheet" type="text/css" href="/Public/admin/css/page.css" />
    <link rel="stylesheet" type="text/css" href="/Public/admin/css/style.css" />
    <link rel="stylesheet" href="/Public/admin/css/jquery.datetimepicker.css"/>
    <script src="/Public/admin/js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="/Public/admin/js/jquery.datetimepicker.js"></script>
    <script type="text/javascript" src="/Public/admin/js/public.js"></script>
</head>
<body>
<div class="main">
    <div class="main_left">
        <p class="pub_tit">后台管理系统</p>
        <ul>
            <li class="menu_index">
                <a href="<?php echo U('index');?>">工作台</a>
                <i></i>
            </li>
            <li class="menu_user">
                <p>会员管理</p>
                <div class="son_menu">
                    <a href="<?php echo U('user_list');?>">会员列表</a>
                    <a href="<?php echo U('user_vip');?>">等级设置</a>
                    <a href="<?php echo U('user_relation');?>">会员关联网</a>
                    <a href="<?php echo U('user_yhk_list');?>">关联银行卡管理</a>
                </div>
                <i class="four"></i>
            </li>
            <li class="menu_finance">
                <p>财务管理</p>
                <div  class="son_menu">
                    <a href="<?php echo U('finance_payment');?>">充值记录</a>
                    <a href="<?php echo U('finance_invoice');?>">提现申请</a>
                    <a href="<?php echo U('finance_stream');?>">流水记录查询</a>
                </div>
                <i class="three"></i>
            </li>
            <li class="menu_project">
                <p>项目管理</p>
                <div class="son_menu">
                    <a href="<?php echo U('project_list');?>">项目列表</a>
                    <a href="<?php echo U('project_alreay');?>">已投项目</a>
                    
                    <a href="<?php echo U('project_class');?>">项目分类</a>
                </div>
                <i class="two"></i>
            </li>
            <li class="menu_article">
                <p>文章管理</p>
                <div class="son_menu">
                    <a href="<?php echo U('article_type');?>">文章类型</a>
                    <a href="<?php echo U('article_list');?>">文章列表</a>
                </div>
                <i class="five"></i>
            </li>
            <li class="menu_system">
                <p>系统设置</p>
                <div class="son_menu">
                    <a href="<?php echo U('system_info');?>">网站信息</a>
                    <a href="<?php echo U('system_reward');?>">奖励设置</a>
                    <a href="<?php echo U('system_banner');?>">幻灯片设置</a>
                    <a href="<?php echo U('system_contract');?>">合同章设置</a>
                    <a href="<?php echo U('system_message');?>">短信设置</a>
                    <a href="<?php echo U('system_payment');?>">支付设置</a>
                    <a href="<?php echo U('system_safe');?>">安全设置</a>
                    <a href="<?php echo U('system_pwd');?>">密码设置</a>
                    <a href="<?php echo U('system_img');?>">图片设置</a>
                    <a href="<?php echo U('system_activity');?>">活动设置</a>
                </div>
                <i class="six"></i>
            </li>
			<!--<li class="menu_goods">
                <p>商城管理</p>
                <div class="son_menu">
                    <a href="<?php echo U('goods_list');?>">商品列表</a>
                    <a href="<?php echo U('classify');?>">商品分类</a>
                
                   
                </div>
                <i class="seven"></i>
            </li>
			<li class="menu_order">
                <p>订单管理</p>
                <div class="son_menu">
                    <a href="<?php echo U('order',array('state'=>'1','se'=>'259'));?>">待付款</a>
                    <a href="<?php echo U('order',array('state'=>'2','se'=>'260'));?>">待发货</a>
                    <a href="<?php echo U('order',array('state'=>'3','se'=>'261'));?>">待收货</a>
                    <a href="<?php echo U('order',array('state'=>'4','se'=>'262'));?>">已完成</a>
                
                   
                </div>
                <i class="seven"></i>
            </li>
			<li class="menu_lottery">
                <p>转盘管理</p>
                <div class="son_menu">
                    <a href="<?php echo U('lottery');?>">抽奖设置</a>
                    <a href="<?php echo U('goods_lottery');?>">抽奖名单</a>
                 
                </div>
                <i class="seven"></i>-->
            </li>
        </ul>
    </div>
    <div class="main_right">
        <div class="header">
            <!--<div class="search"><input type="text" placeholder="搜索"><i></i></div>-->
            <div class="title_right">
                <div class="act">
                    <iframe src="" height="1" width="1" frameborder="0" id="ifr"></iframe>
                    欢迎您，管理员[<?php echo ($_SESSION['isAdminUser']); ?>]<img src="/Public/admin/img/down.png">
                    <a href="<?php echo U('logout');?>" class="logout">退出</a>
                </div>
            </div>
        </div>
        <p class="curr">
            <a>系统管理</a>&gt;&gt;
            <span>支付设置</span>
        </p>
        <div class="main_tabs">
            <span class="active">线上支付</span>
            <span>线下支付</span>
        </div>
        <div class="content">
            <form action="<?php echo U('system_payment');?>" method="post" class="pay">
                <input type="hidden" name="type" value="1"/>
                <div class="line">
                    <label>码支付ID：</label>
                    <input type="text" class="short" name="bid" value="<?php echo ($online["bid"]); ?>">
                </div>
                <div class="line">
                    <label>通信秘钥：</label>
                    <input type="text" class="short" name="appkey" value="<?php echo ($online["appkey"]); ?>">
                </div>
                <!--<div class="line">-->
                <!--    <label>密钥：</label>-->
                <!--    <input type="text" class="short" name="appkey" value="<?php echo ($online["appkey"]); ?>">-->
                <!--</div>-->
                <!--<div class="line">-->
                <!--    <label>支付域名：</label>-->
                <!--    <input type="text" class="short" name="domain" value="<?php echo ($online["domain"]); ?>">-->
                <!--</div>-->
                <div class="line">
                    <label>是否开启：</label>
                    <select name="online_wechat">
                        <option value="1" <?php if(getInfo('online_wechat') == 1): ?>selected="selected"<?php endif; ?>>开启</option>
                        <option value="0" <?php if(getInfo('online_wechat') == 0): ?>selected="selected"<?php endif; ?>>关闭</option>
                    </select>
                </div>
                <div class="button">
                    <input type="submit" value="立即提交" class="submit" />
                </div>
            </form>
            
            <form action="<?php echo U('system_payment');?>" method="post" class="pay" enctype="multipart/form-data">
                <input type="hidden" name="type" value="2"/>
                <div class="line">
                    <label>一、银行入款：</label>
                </div>
                <div class="line">
                    <label>收款银行：</label>
                    <input type="text" name="pay_bank_type" value="<?php echo getInfo('pay_bank_type');?>" class="short">
                </div>
                <div class="line">
                    <label>收款人：</label>
                    <input type="text" name="pay_bank_name" value="<?php echo getInfo('pay_bank_name');?>" class="short">
                </div>
                <div class="line">
                    <label>收款账号：</label>
                    <input type="text" name="pay_bank_account" value="<?php echo getInfo('pay_bank_account');?>" class="short">
                </div>
                <div class="line">
                    <label>银行入款支付描述：</label>
                    <input type="text" name="pay_bank" value="<?php echo getInfo('pay_bank');?>">
                </div>
                <div class="line">
                    <label>是否开启银行入款：</label>
                    <select name="pay_bank_status">
                        <option value="1" <?php if(getInfo('pay_bank_status') == 1): ?>selected="selected"<?php endif; ?>>开启</option>
                        <option value="0" <?php if(getInfo('pay_bank_status') == 0): ?>selected="selected"<?php endif; ?>>关闭</option>
                    </select>
                </div>
                <br/>
                <br/>
                <div class="line">
                    <label>二、支付宝扫码：</label>
                </div>
                <div class="line">
                    <label>支付宝二维码：<br/><span style="color:#f00;font-size: 12px;">图片最大50KB，JPG格式</span></label>
                    <div class="uploads">
                        <img src="/Public/uploads/scan/<?php echo getInfo('qr_alipay_img');?>?k=<?php echo rand(1,99999);?>" id="portrait1">
                        <input type="file" class="file" name="alipay"  accept="image/*" onchange="showPreview2(this,'portrait1')">
                    </div>
                </div>
                <div class="line">
                    <label>支付宝扫码支付描述：</label>
                    <input type="text" name="qr_alipay" value="<?php echo getInfo('qr_alipay');?>">
                </div>
                <div class="line">
                    <label>是否开启支付宝扫码：</label>
                    <select name="qr_alipay_status">
                        <option value="1" <?php if(getInfo('qr_alipay_status') == 1): ?>selected="selected"<?php endif; ?>>开启</option>
                        <option value="0" <?php if(getInfo('qr_alipay_status') == 0): ?>selected="selected"<?php endif; ?>>关闭</option>
                    </select>
                </div>
                <br/>
                <br/>
                <div class="line">
                    <label>三、微信扫码：</label>
                </div>
                <div class="line">
                    <label>微信二维码：<br/><span style="color:#f00;font-size: 12px;">图片最大50KB，JPG格式</span></label>
                    <div class="uploads">
                        <img src="/Public/uploads/scan/<?php echo getInfo('qr_wechat_img');?>?k=<?php echo rand(1,99999);?>" id="portrait2">
                        <input type="file" class="file" name="wechat"  accept="image/*" onchange="showPreview2(this,'portrait2')">
                    </div>
                </div>
                <div class="line">
                    <label>微信扫码支付描述：</label>
                    <input type="text" name="qr_wechat" value="<?php echo getInfo('qr_wechat');?>">
                </div>
                <div class="line">
                    <label>是否开启微信扫码：</label>
                    <select name="qr_wechat_status">
                        <option value="1" <?php if(getInfo('qr_wechat_status') == 1): ?>selected="selected"<?php endif; ?>>开启</option>
                        <option value="0" <?php if(getInfo('qr_wechat_status') == 0): ?>selected="selected"<?php endif; ?>>关闭</option>
                    </select>
                </div>
                <div class="button">
                    <input type="submit" value="立即提交" class="submit" />
                </div>
            </form>
        </div>
    </div>
</div>
<script type="text/javascript">
    $().ready(function(){
    	$(".content .pay:eq(1)").hide();
    	$(".main_tabs span").click(function(){
    		$(this).addClass("active");
    		$(this).siblings().removeClass("active");
    		var index = $(this).index();
            $(".content .pay:eq("+index+")").show();
            $(".content .pay:eq("+index+")").siblings().hide();
    	});
    });
	
</script>

<script type="text/javascript">
    function showPreview(source) {
        var file = source.files[0];
        if(window.FileReader) {
            var fr = new FileReader();
            console.log(fr);
            var portrait = document.getElementById('portrait');
            fr.onloadend = function(e) {
                portrait.src = e.target.result;
            };
            fr.readAsDataURL(file);
            portrait.style.display = 'block';
        }
    }
    function showPreview2(source,obj) {
        var file = source.files[0];
        if(window.FileReader) {
            var fr = new FileReader();
            console.log(fr);
            var portrait = document.getElementById(obj);
            fr.onloadend = function(e) {
                portrait.src = e.target.result;
            };
            fr.readAsDataURL(file);
            portrait.style.display = 'block';
        }
    }

    var menu = "menu_system";
    var nav = "5";
    console.log(nav);
    $(function(){
        $("."+menu+" p").addClass("down");
        $("."+menu+" .son_menu").css("display","block");
        $("."+menu+" .son_menu a").eq(nav).addClass("on");
        seeNum();
    });
    function seeNum(){
        var seeNumUrl = "<?php echo U('seeNum');?>";
        var rechargeState = 1;//充值声音开关，1开/0关
        $.ajax({
            type : "POST",
            url : seeNumUrl,
            data: {rechargeState:rechargeState},
            dataType : "json",
            success : function(result){
                if(result['code']!="000"){
                    $("#ifr").attr("src",result['url']);
                    //alert(result['msg']);
                }else{
                    $("#ifr").attr("src","");
                }
            },
            error:function(){
                //alert();
            }
        });
    }
    setInterval(seeNum,15000);
</script>
</body>
</html>