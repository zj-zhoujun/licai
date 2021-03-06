<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>后台管理 - 项目管理 -8ye.net 八爷资源网</title>
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
    <a>项目管理</a>&gt;&gt;
    <span>已投项目</span>
</p>
<div class="content">
    <div class="list_main">
        <div class="title">
            <form action="<?php echo U('project_alreay');?>" method="get">
                <p>
                    <label>项目名称</label><input type="text" name="title" value="<?php echo ($_GET['title']); ?>" class="txt">
                    <label>投资日期</label><input type="text" name="start" value="<?php echo ($_GET['start']); ?>" class="timer">至<input type="text" name="end" value="<?php echo ($_GET['end']); ?>" class="timer txt">

                </p>
                <p>
                    <!--<label>项目期限</label><input type="text" class="txt">-->
                    <label>会员账号</label><input type="text" name="phone" value="<?php echo ($_GET['phone']); ?>" class="txt" placeholder="会员手机号码">
                    <label>还款方式</label>
                    <select name="type">
                        <option value="0">全部</option>
                        <?php $_result=setProjectType();if(is_array($_result)): $i = 0; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$t): $mod = ($i % 2 );++$i; if($_GET['type'] == $t['id']): ?><option value="<?php echo ($t["id"]); ?>" selected="selected"><?php echo ($t["name"]); ?></option>
                                <?php else: ?>
                                <option value="<?php echo ($t["id"]); ?>"><?php echo ($t["name"]); ?></option><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                    </select>
                    <input type="submit" class="sub1" value="查询">
                    <a href="<?php echo U('project_return');?>" class="two">查看返款</a>
                </p>

                <p>
                    已收益（总）：<span><?php echo sprintf("%.2f",getDataSum('invest_list','status = 1 AND pay1 > 0','pay1'));?>元</span>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;未收益（总）：<span><?php echo sprintf("%.2f",getDataSum('invest_list','status = 0 AND pay1 > 0','pay1'));?>元</span>
                </p>
            </form>

        </div>
        <table>
            <tbody>
            <tr>
                <th>编号</th>
                <th>项目名称</th>
                <th>投资人ID</th>
                <th>投资人姓名</th>
                <th>投资人手机号</th>
                <th>金额（元）</th>
                <th>费率（%）</th>
                <th>期限（天）</th>
                <th>还款类型</th>
                <th>开始时间</th>
                <th>结束时间</th>
                <th>操作</th>
            </tr>
            <?php $_result=getData('invest','all',$where,$limit,'id desc');if(is_array($_result)): $i = 0; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$i): $mod = ($i % 2 );++$i;?><tr>
                    <td><?php echo ($i["id"]); ?></td>
                    <td><?php echo ($i["title"]); ?></td>
                    <td><?php echo ($i["uid"]); ?></td>
                    <td><?php echo getUserField($i['uid'],'name');?></td>
                    <td><?php echo getUserPhone($i['uid']);?></td>
                    <td><?php echo ($i["money"]); ?></td>
                    <td><?php echo ($i["rate"]); ?></td>
                    <td><?php echo ($i["day"]); ?></td>
                    <td><?php echo ($i["type2"]); ?></td>
                    <td><?php echo ($i["time"]); ?></td>
                    <td><?php echo date("Y-m-d H:i:s",strtotime($i['time']."+".$i['day']." day"));?></td>
                    <td><a href="<?php echo U('project_detials','iid='.$i['id']);?>" class="look">查看详情</a></td>
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

    var menu = "menu_project";
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