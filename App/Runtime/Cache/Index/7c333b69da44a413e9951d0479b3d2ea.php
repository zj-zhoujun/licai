<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
    <title>投资详情 -8ye.net 八爷资源网</title>
    <link rel="stylesheet" href="/Public/mobile/css/base.css?k=<?php echo rand(1,99999);?>"/>
    <script type="text/javascript" src="/Public/mobile/js/adaptive.js"></script>
    <script type="text/javascript" src="/Public/mobile/js/config.js"></script>
    <script type="text/javascript" src="/Public/mobile/js/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="/Public/mobile/js/public.js"></script>
    <script type="text/javascript">
        function msg(title,content,type,url){
            $("#msgTitle").html(title);
            $("#msgContent").html(content);
            if(type==1){
                var btn = '<input type="button" value="确定" onclick="$(\'#msgBox\').hide();" style="background-color: #4f79bc;color:#fff;border: none;padding:5px 10px;"/>';
            }
            else{
                var btn = '<input type="button" value="确定" onclick="window.location.href=\''+url+'\'" style="background-color: #4f79bc;color:#fff;border: none;padding:5px 10px;"/>';
            }
            $("#msgBtn").html(btn);
            $("#msgBox").show();
        }
    </script>
</head>
<body>
<div id="msgBox" style="width: 100%;background-color: rgba(0,0,0,0.25);height: 1000px;position: fixed;top: 0;left: 0;z-index: 9999;font-size:.28rem;display: none;">
    <div style="width: 80%;margin-top: 40%;margin-left: 10%;background-color: #fff;border-radius: 5px;overflow: hidden;">
        <div id="msgTitle" style="padding:10px 20px;background-color: #4f79bc;color:#fff;">
            提示
        </div>
        <div id="msgContent" style="padding:20px;line-height: 25px;">
            内容
        </div>
        <div id="msgBtn" style="padding: 10px 20px;text-align: right;border-top: 1px solid #eee;">
            <input type="button" value="确定" style="background-color: #4f79bc;color:#fff;border: none;padding:5px 10px;"/>
            <input type="button" value="取消" style="background-color: #4f79bc;color:#fff;border: none;padding:5px 10px;"/>
        </div>
    </div>
</div>
<div class="mobile">
	<div class="othertop">
        <a class="goback" href="javascript:history.back();"><img src="/Public/mobile/img/goback.png" /></a>
        <div class="othertop-font">投资详情</div>
    </div>
    <div class="header-nbsp"></div>
	<div class="contract_box deta">
	    <div class="data_name">
	        <span style="display: inline-block;width: 3rem;">投资金额：<?php echo ($invest["money"]); ?>元</span>
	        <span style="display: inline-block;width: 3rem;">预期效益：<?php echo getInvestMoney($invest['id']);?>元</span><br/>
	        <span style="display: inline-block;width: 3rem;">投资时间：<?php echo date('Y-m-d',strtotime($invest['time']));?></span>
	        <span style="display: inline-block;width: 3rem;">到期时间：<?php echo date('Y-m-d',strtotime('+'.$invest['day'].' day',strtotime($invest['time'])));?></span><br/>
	        <span>收益方式：<?php echo ($invest["type2"]); ?></span>
	    </div>
	    <div class="table_auto">
		    <table class="tablec">
		        <tr>
		            <th>期号</th>
		            <th>应收本金</th>
		            <th>应收利息</th>
		            <th>应收时间</th>
		            <th>收益时间</th>
		            <th>应收总额</th>
		            <th>已支付</th>
		            <th>状态</th>
		        </tr>
                <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$l): $mod = ($i % 2 );++$i;?><tr>
                        <td>第<?php echo ($l["num"]); ?>期</td>
                        <td><?php echo ($l["money2"]); ?></td>
                        <td><?php echo ($l["money1"]); ?></td>
                        <td><?php echo ($l["time1"]); ?></td>
                        <td>
                            <?php if($l['time2'] != '0000-00-00 00:00:00'): echo ($l["time1"]); ?>
                                <?php else: ?>
                                未完成<?php endif; ?>
                        </td>
                        <td><?php echo ($l["pay1"]); ?></td>
                        <td><?php echo ($l["pay2"]); ?></td>
                        <td>
                            <?php if($l['status'] == 1): ?>已完成
                                <?php else: ?>
                                未完成<?php endif; ?>
                        </td>
                    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
		    </table>
	    </div>
	</div>
	
</div>
</body>
</html>