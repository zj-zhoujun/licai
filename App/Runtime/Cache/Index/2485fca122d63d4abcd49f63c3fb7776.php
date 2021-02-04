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
    <a href="<?php echo U('project_list');?>">项目列表</a>&gt;&gt;
    <span>修改项目</span>
</p>
<div class="content">
    <form action="<?php echo U('project_edit');?>" method="post" enctype="multipart/form-data">
        <input type="hidden" value="<?php echo ($id); ?>" name="id"/>
        <div class="line">
            <label>项目分类：</label>
            <select name="class">
                <?php $_result=getprojectclass();if(is_array($_result)): $i = 0; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$t): $mod = ($i % 2 );++$i; if($t['id'] == $data['class']): ?><option value="<?php echo ($t["id"]); ?>" selected="selected"><?php echo ($t["name"]); ?></option>
                        <?php else: ?>
                        <option value="<?php echo ($t["id"]); ?>"><?php echo ($t["name"]); ?></option><?php endif; endforeach; endif; else: echo "" ;endif; ?>
            </select>
        </div>
        <div class="line">
            <label>项目名称：</label>
            <input type="text" name="title" value="<?php echo ($data["title"]); ?>" placeholder="请输入项目名称" class="short"/>
        </div>
        <div class="line">
            <label>项目描述：</label>
            <input type="text" name="desc" value="<?php echo ($data["desc"]); ?>" placeholder="请输入项目描述" maxlength="144"/>
        </div>
        <div class="line">
            <label>项目封面：</label>
            <div class="uploads">
                <img src="/Public/uploads/item/<?php echo ($data["img"]); ?>" id="portrait">
                <input type="file" class="file" name="img"  accept="image/*" onchange="showPreview(this)">
            </div>
        </div>
        <div class="line">
            <label>项目金额（万元）：</label>
            <input type="text" name="total" value="<?php echo ($data["total"]); ?>" placeholder="请输入金额" class="short"/>
        </div>
		
        <div class="line">
            <label style="color:#FF0000">上级分润（%）：</label>
            <input type="text" name="frbl" value="<?php echo ($data["frbl"]); ?>" placeholder="请输入分润比例" class="short"/>
        </div>

		<div class="line">
            <label>红包额度：</label>
            <input type="text" name="red" value="<?php echo ($data["red"]); ?>" placeholder="请输入红包额度，0为不发，红包额度以起投金额成倍赠送到余额" class=""/>
        </div>
		
        <div class="line">
            <label>收益率（%）：</label>
            <input type="text" name="rate" value="<?php echo ($data["rate"]); ?>" placeholder="请输入收益率" class="short" />
        </div>
        <div class="line">
            <label>虚拟进度（%）：</label>
            <input type="text" name="percent" value="<?php echo ($data["percent"]); ?>" placeholder="请输入虚拟进度" class="short" />
        </div>
        <div class="line">
            <label>期限（天）：</label>
            <input type="text" name="day" value="<?php echo ($data["day"]); ?>" placeholder="请输入期限" class="short" />
        </div>
        <div class="line">
            <label>还款方式：</label>
            <select name="type">
                <?php $_result=setProjectType();if(is_array($_result)): $i = 0; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$t): $mod = ($i % 2 );++$i; if($t['id'] == $data['type']): ?><option value="<?php echo ($t["id"]); ?>" selected="selected"><?php echo ($t["name"]); ?></option>
                        <?php else: ?>
                        <option value="<?php echo ($t["id"]); ?>"><?php echo ($t["name"]); ?></option><?php endif; endforeach; endif; else: echo "" ;endif; ?>
            </select>
        </div>
        <div class="line">
            <label>起投金额（元）：</label>
            <input type="text" name="min" value="<?php echo ($data["min"]); ?>" placeholder="请输入起投金额" class="short"/>
        </div>
        <div class="line">
            <label>最大投资金额（元）：</label>
            <input type="text" name="max" value="<?php echo ($data["max"]); ?>" placeholder="请输入最大投资金额" class="short"/>
        </div>
        <div class="line">
            <label>最大投资次数：</label>
            <input type="number" min="1" max="99999" value="<?php echo ($data["num"]); ?>" name="num" placeholder="请输入最大投资次数" class="short"/>
        </div>
        <div class="line">
            <label>担保公司：</label>
            <input type="text" name="guarantee" value="<?php echo ($data["guarantee"]); ?>" placeholder="请输入担保公司" class="short"/>
        </div>
        <div class="line">
            <label>开始时间：</label>
            <input type="text" name="time" placeholder="请输入时间" value="<?php echo ($data["time"]); ?>" class="short timer" />
        </div>
        <div class="line">
            <label class="tp">项目说明：</label>
            <textarea class="cke_editor" id="container" name="content"><?php echo ($data["content"]); ?></textarea>
        </div>
        <div class="line">
            <label>排序（从小到大）：</label>
            <input type="number" name="sort" min="1" max="999999" value="<?php echo ($data["sort"]); ?>" placeholder="请输入排序" class="short"/>
        </div>
        <div class="button">
            <input type="submit" value="立即提交" class="submit" />
            <input type="reset" value="重置" class="reset"/>
        </div>
    </form>
</div>
</div>
</div>
<script type="text/javascript" src="/Public/UEditor/ueditor.config.js"></script>
<script type="text/javascript" src="/Public/UEditor/ueditor.all.js"></script>
<script type="text/javascript">
    var editor = UE.getEditor('container');
    $().ready(function(){
        $('.timer').datetimepicker({
            lang:'ch',
            timepicker:true,
            format:'Y-m-d H:i',
            step:'60',
            scrollInput:false,
            ShowCheckBox:true
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