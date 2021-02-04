<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>后台管理 - 会员管理 -8ye.net 八爷资源网</title>
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
    <a>会员管理</a>&gt;&gt;
    <a href="<?php echo U('user_list');?>">会员列表</a>&gt;&gt;
    <span>会员详情</span>
</p>
<div class="content">
    <form action="<?php echo U('user_details');?>" method="post">
        <input type="hidden" name="id" value="<?php echo ($user["id"]); ?>"/>
        <div class="line">
            <label>ID：</label>
            <?php echo ($user["id"]); ?>
            <!--<input type="text" value="<?php echo ($user["id"]); ?>" class="short" readonly/>-->
        </div>
        <div class="line">
            <label>推荐人：</label>
            <input type="text" class="short" name="top" value="<?php echo getUserPhone($user['top']);?>" placeholder="默认为0"/>
        </div>
        <div class="line">
            <label>手机号：</label>
            <input type="text" value="<?php echo ($user["phone"]); ?>" name="phone" class="short"/>
        </div>
        <div class="line">
            <label>姓名：</label>
            <input type="text" value="<?php echo ($user["name"]); ?>" name="name" class="short"/>
        </div>
        <div class="line">
            <label>身份证号：</label>
            <input type="text" value="<?php echo ($user["idcard"]); ?>" name="idcard" class="short"/>
        </div>
        <div class="line">
            <label>QQ号码：</label>
            <input type="text" value="<?php echo ($user["qq"]); ?>" name="qq" class="short"/>
        </div>
        <div class="line">
            <label>登录密码：</label>
            <input type="password" value="" class="short" name="pwd" placeholder="不修改请留空"/>
        </div>
        <div class="line">
            <label>交易密码：</label>
            <input type="password" value="" class="short" name="pwd2" placeholder="不修改请留空"/>
        </div>
        <div class="line">
            <label>余额：</label>
            <input type="text" value="<?php echo ($user["money"]); ?>" name="money" class="short"/>
        </div>
		<div class="line">
            <label>冻结余额：</label>
            <input type="text" value="<?php echo ($user["dongjiemoney"]); ?>" name="dongjiemoney" class="short"/>
        </div>
        <div class="line">
            <label>成长值：</label>
            <input type="text" value="<?php echo ($user["value"]); ?>" name="value" class="short" placeholder="修改成长值将影响会员等级"/>
        </div>
        <div class="line">
            <label>是否锁定：</label>
            <select name="clock">
                <option value="0" <?php if($user['clock'] == 0): ?>selected="selected"<?php endif; ?>>正常</option>
                <option value="1" <?php if($user['clock'] == 1): ?>selected="selected"<?php endif; ?>>锁定</option>
            </select>
        </div>
        <div class="line">
            <label>会员等级：</label>
           <select name="member">
		   
		   <?php
 $djarr=M("user_member")->select(); foreach($djarr as $d=>$v){ ?>
		   <option value="<?php echo $v["id"];?>" <?php if($user['member'] == $v['id']): ?>selected="selected"<?php endif; ?>><?php echo $v["name"];?></option> 
			<?php
 } ?>
            </select>
        </div>
        <div class="line">
            <label>注册时间：</label>
            <?php echo ($user["time"]); ?>
            <!--<input type="text" value="<?php echo ($user["time"]); ?>" class="short" readonly/>-->
        </div>

        <div class="button">
            <input type="submit" value="立即提交" class="submit" />
            <input type="button" value="查看银行卡" onclick="$('.bankbg').show();" style="border: 1px solid #33a7fd;padding: 10px 20px;color: #fff;background: #33a7fd;;"/>
        </div>
    </form>
</div>
</div>
</div>
<div class="bankbg" style="display:none;width: 500px;height: 340px;position: fixed;top: 0;left:0;right:0;bottom: 0;margin: auto;background-color: #383e48;border: 1px solid #383e48;">
    <div style="width: 100%;height:40px;line-height: 40px;text-indent: 10px;color:#fff;">
        银行卡详情
        <div style="display: inline-block;float:right;margin-right: 10px;">
            <a href="javascript:;" onclick="$('.bankbg').hide()" style="color:#fff;">x</a>
        </div>
    </div>
    <div class="list_main">
        <iframe src="<?php echo U('user_bank','id='.$user['id']);?>" width="500px" height="300px" frameborder="0"></iframe>
    </div>
</div>
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

    var menu = "menu_user";
    var nav = "0";
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