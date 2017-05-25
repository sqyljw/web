<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>订单-订单详情</title>
	<link rel="stylesheet" type="text/css" href="Css/header.css">
	<link rel="stylesheet" type="text/css" href="Css/footer.css">
	<style type="text/css">
	* {padding:0;margin:0;}
	/* main */
	.main {
		width:990px;/*
		border:1px solid red;*/
		margin:50px auto;
		font-size: 13px;
	}

	/*收货地址*/
	.title {
		height:40px;
		line-height: 40px;
		/*border-bottom: 3px solid #ff4400;*/
		border-bottom: 3px solid #ccc;
		font-size: 15px;
		text-shadow: 0 0 1px #ccc;
	}

	/*订单状态*/
	.order {

	}
	.order-state {
		padding:10px;
		height:70px;
		margin:10px 0;
		position: relative;
	}

	.circle {
		width:30px;
		height:30px;
		background: #ccc;
		border-radius: 50%;
		float:left;
		position: relative;
		top:30px;
		left:-2px;
	}
	.circle span:nth-of-type(1) {
		width:100px;
		height:30px;
		text-align: center;
		line-height: 30px;
		display: inline-block;
		position: relative;
		top:-30px;
		left:-35px;
		font-weight: bold;
	}
	.circle span:nth-of-type(2) {
		width:150px;
		height:30px;
		text-align: center;
		line-height: 30px;
		display: inline-block;
		position: relative;
		top:0px;
		left:-60px;
		font-size:13px; 
		color:#888;
	}

	.line {
		height:8px;
		width:150px;
		background: #ccc;
		float:left;
		position: relative;
		top:41px;
		left:-2px;
		margin-left: -1px;
		margin-right: -1px;
	}

	.bg {
		background: #00974C;
		box-shadow: 0 0 5px 0px #00974C;
	}
	
	
	.order-state-nav {
		height:70px;
		width:800px;
		margin:0 auto;
	}

	/*订单详情*/
	.order-detail {
		padding:20px 10px;
		border:1px solid #ccc;
		border-radius: 5px;
		margin:10px 0;
	}
	.order-detail:hover {
		box-shadow:0 0 5px 0 #f6f6f6;
	}
	/*总订单*/
	.order-main {
		float: left;
		border-collapse: collapse;
	}
	.order-main tr th {
		width:80px;
		height:25px;
		text-align: right;
		padding:5px 10px;
		color:#666;
	}
	.order-main tr td {
		width:250px;
		padding:5px 10px;
		padding-right:30px;
		color:#888;
	}
	/*详细订单*/
	.order-main-detail {
		float: left;
		margin-left:20px;
		border-collapse: collapse;
		border:1px solid #F6F6F6;
		border-radius: 5px;
	}
	.order-main-detail:hover {
		box-shadow:0 0 5px 0 #f6f6f6;
	}
	.order-main-detail tr th {
		background: #F6F6F6;
		height:30px;
		color:#666;
	}
	.order-main-detail tr td {
		height:40px;
		padding:5px;
		color:#777;
	}
	.order-main-detail tr td img {
		width:40px;
	}
	.order-main-detail tbody tr:hover td {
		color:#555;
	}

	/*订单总结说明*/
	.order-sum-info {
		padding:10px;
		border:1px solid #f6f6f6;
		margin:10px 0;
		border-radius: 5px;
		background: #f6f6f6;
	}
	.order-sum-info:hover {
		box-shadow:0 0 5px 0 #f6f6f6;
	}
	.order-sum-info table {
		float: right;
		font-size: 14px;
	}
	.order-sum-info table tr td:nth-of-type(1){
		text-align: right;
		width:100px;
		height:30px;
	}
	.order-sum-info table tr td:nth-of-type(2){
		text-align: right;
		width:150px;
	}
	.order-sum-info table tr td b {
		font-size: 15px;
	}
	.payprice {
		color:#DD2727;
	}
	.order-sum-info button {
		width:150px;
		height:40px;
		background: #DD2727;
		color:#fff;
		font-size: 15px;
		float: right;
		border:0;
		border-radius: 5px;
		cursor: pointer;
	}
	.order-sum-info button:hover {
		box-shadow: 0 0 5px 0 #DD2727;
	}
	.red-border {
		border-color:#DD2727;
	}
	</style>
</head>
<body>
<!-- navication -->
<?php include "header.php";?>

<!-- 主区块 -->
<div class="main">
	<!-- 订单状态 -->
	<div class="order">
		<p class="title"><b>订单状态</b></p>
		<div class="order-state">
			<div class="order-state-nav">
				<div class="circle bg">
					<span>创建订单</span>
					<span>2016-10-09 12:02:50</span>
				</div>
				<div class="line bg"></div>
				<div class="circle bg">
					<span>订单已付款</span>
					<span>2016-10-09 12:02:50</span>
				</div>
				<div class="line bg"></div>
				<div class="circle bg box">
					<span>订单已发货</span>
					<span>2016-10-09 12:02:50</span>
				</div>
				<div class="line"></div>
				<div class="circle">
					<span>订单已签收</span>
				</div>
				<div class="line"></div>
				<div class="circle">
					<span>订单完成</span>
					<span></span>
				</div>
			</div>
		</div>
	</div>
	
	<!-- 订单详情 -->
	<p class="title"><b>订单详情</b></p>
	<div class="order-detail">
		<!-- 总订单 -->
		<table class="order-main">
			<tr>
				<th>订单编号:</th>
				<td>2655866841291932</td>
			</tr>
			<tr>
				<th>收货人:</th>
				<td>张三</td>
			</tr>
			<tr>
				<th>联系电话:</th>
				<td>18356568585</td>
			</tr>
			<tr>
				<th>收货地址:</th>
				<td>安徽省 合肥市 蜀山区 锦绣社区管理委员会</td>
			</tr>
			<tr>
				<th>订单数量:</th>
				<td>2</td>
			</tr>
			<tr>
				<th>订单总价:</th>
				<td>3500.00</td>
			</tr>
			<tr>
				<th>订单状态:</th>
				<td>已发货</td>
			</tr>
			<tr>
				<th>创建时间:</th>
				<td>2016-10-09 12:02:10</td>
			</tr>
		</table>
		<!-- 详情 -->
		<table  class="order-main-detail">
			<tr>
				<th  width="40px"></th>
				<th  width="220px">商品</th>
				<th width="150px">属性</th>
				<th width="80px">单价</th>
				<th width="50px">数量</th>
			</tr>
			<tbody>
				<tr>
					<td><img src="Images/TB1Xpe_NXXXXXXRXFXXGTq09XXX_035318.jpg_b.jpg"></td>
					<td>秋冬季休闲西装领风衣男韩版男</td>
					<td>颜色：A1606黑色尺码：170/L</td>
					<td align="center">328.00</td>
					<td align="center">9</td>
				</tr>
				<tr>
					<td><img src="Images/TB1Xpe_NXXXXXXRXFXXGTq09XXX_035318.jpg_b.jpg"></td>
					<td>秋冬季休闲西装领风衣男韩版男</td>
					<td>颜色：A1606黑色尺码：170/L</td>
					<td align="center">328.00</td>
					<td align="center">9</td>
				</tr>
			</tbody>
		</table>

		<div style="clear: both;"></div>
	</div>

	<!-- 订单说明总结 -->
	<div class="order-sum-info red-border">
		<table>
			<tr>
				<td width="150px">商品总价：</td>
				<td>￥49.50</td>
			</tr>
			<tr>
				<td>运费(快递)：</td>
				<td>￥0.00</td>
			</tr>
			<tr>
				<td><b>订单总价：</b></td>
				<td><b>￥49.50</b></td>
			</tr>
			<tr>
				<td><b>实付款：</b></td>
				<td><b class="payprice">￥49.50</b></td>
			</tr>
		</table>
		<div style="clear: both;"></div>
		<button>重新支付</button>
		<div style="clear: both;"></div>
	</div>
</div>
<!-- 底部 -->
<?php include "footer.php";?>
</body>
</html>