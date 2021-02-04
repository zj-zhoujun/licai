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
            <span>幻灯片设置</span>
        </p>
        <div class="content">
            <div class="list_main">
                <div class="title">
                    <form action="<?php echo U('system_banner');?>" method="get">
                        <p>
                           <label>幻灯片类型</label>
                           <select name="type">
                               <option value="0" <?php if($_GET['type'] == 0): ?>selected="selected"<?php endif; ?>>全部</option>
                               <option value="1" <?php if($_GET['type'] == 1): ?>selected="selected"<?php endif; ?>>电脑幻灯片</option>
                               <option value="2" <?php if($_GET['type'] == 2): ?>selected="selected"<?php endif; ?>>手机幻灯片</option>
							   <option value="3" <?php if($_GET['type'] == 3): ?>selected="selected"<?php endif; ?>>合作伙伴图片</option>
                           </select>
                           <input type="submit" class="sub1" value="查询">
                           <a href="<?php echo U('system_banner_add');?>" class="two">添加幻灯片</a>
                            <a href="javascript:;" onclick="delCheck()" class="four">批量删除</a>
                        </p>
                    </form>
                </div>
                <table>
                    <tbody>
                        <tr>
                            <th><input type="checkbox" id="selectAll"></th>
                            <th>图片</th>
                            <th>图片路径</th>
                            <th>链接地址</th>
                            <th>类型</th>
                            <th>排序</th>
                            <th>状态</th>
                            <th>操作</th>
                        </tr>
                        <?php $_result=getData('slide','all',$where,$limit,'id,sort asc');if(is_array($_result)): $i = 0; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$s): $mod = ($i % 2 );++$i;?><tr>
                                <td><input type="checkbox" name="ck[]" value="<?php echo ($s["id"]); ?>"></td>
                                <td><img src="/Public/uploads/slide/<?php echo ($s["path"]); ?>"></td>
                                <td><span title="其他地方请直接调用">/Public/uploads/slide/<?php echo ($s["path"]); ?></span></td>
                                <td><?php echo ($s["url"]); ?></td>
                                <td>
                                    <?php if($s['type'] == 1): ?>电脑幻灯片<?php endif; ?>
                                        <?php if($s['type'] == 2): ?>手机幻灯片<?php endif; ?>
										 <?php if($s['type'] == 3): ?>合作伙伴图片<?php endif; ?>
                                </td>
                                <td><?php echo ($s["sort"]); ?></td>
                                <td>
                                    <?php if($s['show'] == 1): ?>显示
                                        <?php else: ?>
                                        隐藏<?php endif; ?>
                                </td>
                                <td>
                                    <a href="<?php echo U('system_banner_edit','id='.$s['id']);?>" class="update">编辑</a>
                                    <a href="javascript:;" onclick="delList(<?php echo ($s["id"]); ?>)" class="del">删除</a>
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
<script type="text/javascript">
    function delList(obj){
        if(confirm("确认删除这条记录吗？")){
//            window.location.href = "/admin/dellist/data/slide/list/"+obj+".html?re=<?php echo U('system_banner');?>";
            window.location.href = "<?php echo U('dellist');?>?data=slide&list="+obj+"&re=<?php echo U('system_banner');?>";
        }
    }
    function delCheck(){
        var arr = new Array();
        $("input[name='ck[]']:checked").each(function(i){
            arr[i] = $(this).val();
        });
        var vals = arr.join(",");
        if(vals != ""){
            delList(vals);
        }
        else{
            alert("请选择需要删除的内容！");
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

    var menu = "menu_system";
    var nav = "2";
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