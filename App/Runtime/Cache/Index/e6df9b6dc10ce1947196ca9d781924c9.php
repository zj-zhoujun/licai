<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>后台管理 - 财务管理 -8ye.net 八爷资源网</title>
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
            <a>财务管理</a>&gt;&gt;
            <span>提现申请</span>
        </p>
        <div class="content">
            <div class="list_main">
                <div class="title">
                    <form action="<?php echo U('finance_invoice');?>" method="get">
                        <p>
                           <label>提现账户</label><input type="text" name="phone" value="<?php echo ($_GET['phone']); ?>" class="txt" placeholder="会员手机号码">
                           <label>申请日期</label><input type="text" name="start" value="<?php echo ($_GET['start']); ?>" class="timer">至<input type="text" name="end" value="<?php echo ($_GET['end']); ?>" class="timer">
                        </p>
                        <p>
                           <label>处理进度</label>
                           <select name="status">
                               <option value="0" <?php if($_GET['status'] == 0): ?>selected="selected"<?php endif; ?>>全部</option>
                               <option value="1" <?php if($_GET['status'] == 1): ?>selected="selected"<?php endif; ?>>处理中</option>
                               <option value="2" <?php if($_GET['status'] == 2): ?>selected="selected"<?php endif; ?>>到账成功</option>
                               <option value="3" <?php if($_GET['status'] == 3): ?>selected="selected"<?php endif; ?>>交易失败</option>
                           </select>
                           <input type="submit" class="sub1" value="查询">
                        </p>
                        <p>
                            提现成功：<span><?php echo sprintf("%.2f",getDataSum('cash',$where.' AND status = 1','money'));?>元</span>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;提现失败：<span><?php echo sprintf("%.2f",getDataSum('cash',$where.' AND status = 2','money'));?>元</span>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;未处理：<span><?php echo sprintf("%.2f",getDataSum('cash',$where.' AND status = 0','money'));?>元</span>
                        </p>
                    </form>
                </div>
                <table>
                    <tbody>
                        <tr>
                            <th>订单号</th>
                            <th>账户</th>
                            <th>提现金额(元)</th>
                            <th>开户银行</th>
                            <th>处理进度</th>
                            <th>申请时间</th>
                            <th>操作</th>
                        </tr>
                        <?php $_result=getData('cash','all',$where,$limit,'id desc');if(is_array($_result)): $i = 0; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$c): $mod = ($i % 2 );++$i;?><tr>
                                <td><?php echo ($c["id"]); ?></td>
                                <td><?php echo getUserPhone($c['uid']);?></td>
                                <td><?php echo ($c["money"]); ?></td>
                                <td class="le">账户名称：<?php echo ($c["name"]); ?>
                                    <br>开户银行：<?php echo ($c["bank"]); ?>
                                    <br>银行账号：<?php echo ($c["account"]); ?>
                                </td>
                                <td>
                                    <?php if($c['status'] == 0): ?>待提现<?php endif; ?>
                                    <?php if($c['status'] == 1): ?>提现成功<?php endif; ?>
                                    <?php if($c['status'] == 2): ?>提现失败<?php endif; ?>
                                </td>
                                <td><?php echo ($c["time"]); ?></td>
                                <td>
                                    <?php if($c['status'] == 0): ?><a href="<?php echo U('finance_invoice','type=1&id='.$c['id']);?>" class="status_one">同意</a>
                                        <a href="<?php echo U('finance_invoice','type=2&id='.$c['id']);?>" class="status_four">拒绝</a><?php endif; ?>
                                </td>
                            </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                    </tbody>
                </table>
                <ul class="page">
                    <?php echo ($page); ?>
                </ul>
            </div>
        </div>
    </div>
</div>
<script>
    $().ready(function(){
        $('.timer').datetimepicker({
            lang:'ch',
            timepicker:false,
            format:'Y-m-d'
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

    var menu = "menu_finance";
    var nav = "1";
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