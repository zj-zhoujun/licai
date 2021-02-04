<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
    <title>合同 -8ye.net 八爷资源网</title>
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
        <div class="othertop-font">合同书</div>
    </div>
    <div class="header-nbsp"></div>
    <!-- 合同 -->
	<div class="contract_box">
	    <h1 class="con_name"><?php echo getInfo('webname');?>投资合同书</h1>
	    <p class="code">合同编号：<?php echo date('ymd',strtotime($invest['time'])); echo sprintf("%05d", $invest['id']);?></p>
	    <p><label>甲方（投资方）</label>：<?php echo getUserField($uid,'name');?></p>
	    <p><label>乙方（管理方）</label>：<?php echo getInfo('company');?></p>
	    <p><label>丙方（担保方）</label>：<?php echo getItemField($invest['pid'],'guarantee');?></p>
	    <p>甲乙丙双方经友好协商，本着平等自愿、诚实信用的原则，就甲方使用乙方提供的本网站所有服务的</p>
	    <p><label>有关事项达成如下协议：</label></p>
	    <p>一、<label>理财投资明细</label></p>
	    <table class="tablec">
	        <tr>
	            <td>产品名称</td>
	            <td><?php echo ($invest["title"]); ?></td>
	        </tr>
	        <tr>
	            <td>投资人姓名</td>
	            <td><?php echo getUserField($uid,'name');?></td>
	        </tr>
	        <tr>
	            <td>投资人身份证</td>
	            <td><?php echo getUserField($uid,'idcard');?></td>
	        </tr>
	        <tr>
	            <td>投入本金数额<br>（下称"甲方投资本金"）</td>
	            <td><?php echo ($invest["money"]); ?>元</td>
	        </tr>
	        <tr>
	            <td>协议期（天）</td>
	            <td><?php echo ($invest["day"]); ?>天</td>
	        </tr>
	        <tr>
	            <td>预期收益率</td>
	            <td><?php echo ($invest["rate"]); ?>%</td>
	        </tr>
	        <tr>
	            <td>起息日</td>
	            <td><?php echo date('Y-m-d',strtotime($invest['time']));?></td>
	        </tr>
	        <tr>
	            <td>到期日</td>
	            <td><?php echo date('Y-m-d',strtotime('+'.$invest['day'].' day',strtotime($invest['time'])));?></td>
	        </tr>
	        <tr>
	            <td>应收本息（元）</td>
	            <td><?php echo getInvestMoney($invest['id'])+$invest['money'];?>元</td>
	        </tr>
	        <tr>
	            <td>还款方式</td>
	            <td><?php echo ($invest["type2"]); ?></td>
	        </tr>
	    </table>
	    <?php echo htmlspecialchars_decode(getInfo('contract'));?>
	    <div class="signature">
	        <div class="Party">
	            <p>甲方：<?php echo getUserField($uid,'name');?></p>
	            <span><?php echo date('Y年m月d日',strtotime($invest['time']));?></span>
	        </div>
	        <div class="Party">
	            <p>乙方：<?php echo getInfo('company');?></p>
	            <span><?php echo date('Y年m月d日',strtotime($invest['time']));?></span>
	        </div>
	        <img src="/Public/uploads/contract.png?k=<?php echo rand(1,99999);?>">
	    </div>
        <div class="Party" style="background:  url('/Public/uploads/wechat.png?k=<?php echo rand(1,99999);?>') no-repeat top left 36px ;background-size:100px 100px;padding:25px 0">
            <p>丙方：<?php echo getItemField($invest['pid'],'guarantee');?></p>
            <span><?php echo date('Y年m月d日',strtotime($invest['time']));?></span>
        </div>
	</div>
</div>
</body>
</html>