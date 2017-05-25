<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>订单-提交</title>
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
		border-bottom: 3px solid #ff4400;
		font-size: 15px;
		
	}
	.title b {
		width:150px;
		display: block;
		text-align: center;
		background: #eee;
		float:left;
	}
	

	.address table {
		width:100%;
		border-collapse: collapse;
		text-align: center;
		border:1px solid #ccc;
		margin-top: 10px;

	}
	.address table th {
		height:30px;
		background: #ff4400;
		border:1px solid #ff4400;
		color:#fff;
	}
	.address table td {
		height:40px;
		/*background: #F6F6F6;*/
	}
	
	
	.address table tbody tr:hover {
		background: #F6F6F6;
	}

	/*订单列表*/
	.order {
		margin-top:40px;
	}
	.order .title {
		height:40px;
		line-height: 40px;
		border:0;
		font-size: 15px;
		background: #F6F6F6;
		border-radius: 5px;
	}
	.order .title b {
		width:150px;
		display: block;
		text-align: center;
		/*background: #ff4400;*/
		float:left;
		border-radius: 5px;

	}

	.order table {
		width:100%;
		border-collapse: collapse;
		text-align: center;
		border:1px solid #B2D1FF;
		margin-top: 10px;
	}

	.order table th {
		height:30px;
		
		background: #ff4400;
		color:#fff;
		border:1px solid #ff4400;
	}
	.order table td {
		height:80px;
		
	}
	.order table td img {
		width:50px;
		height:50px;
	}
	
	.order table tbody tr td:nth-of-type(6) {
		color:#ff4400;
		font-weight: bold;
	}

	/*留言备注*/
	.leave-word {
		margin-top:10px;
		padding:10px;
		background: #F2F7FF;
		border-radius: 5px;
	}
	.leave-word textarea {
		width:400px;
		height:40px;
		padding:10px;
		font-size: 13px;
		margin-top: 10px;
		border:1px solid #eee;
		resize: none;
		border-radius: 5px;
	}
	.leave-word span {
		float:right;
		width:250px;
		height:50px;
		line-height: 50px;
		text-align: center;
		background: #eee;
		border:0;
		font-size: 20px;
		
	}
	.leave-word span b {
		color:#DD2727;
	}

	/*提交订单*/
	.method {
		height:50px;
		background: #f6f6f6;
		margin-top: 10px;
		border-radius: 5px;
	}
	.method button {
		width:100px;
		height:50px;
		float: right;
		background: #DD2727;
		border:0;
		border-radius: 5px;
		font-size: 16px;
		color: #fff;
		cursor: pointer;
	}
	.method button:hover {
		box-shadow: 0 0 5px 0  #DD2727;
	}
	.method span {
		display: inline-block;
		width:450px;
		height:50px;
		line-height: 50px;
		border:0;
		font-size: 0;
		
	}
	.method span b {
		color:#fff;
		font-size: 15px;
		padding:0 20px;
		display: inline-block;
		margin-right: 10px;
		color:#DD2727;
	}
	.method span label {
		display: inline-block;
		/*background: #F6F6F6;*/
		padding:0 20px;
		font-size: 15px;
		border-radius: 5px;
	}
	/*.method span .now {
		background: #DD2727;
		color:#fff;
	}
	.method span label:hover {
		background: #DD2727;
		color:#fff;
	}*/
	.method span label input {
		margin-right: 10px;
	}
	.method span img {height:50px;}
	</style>
</head>
<body>
<!-- navication -->
<?php include "header.php";?>
<!-- 主区块 -->
<div class="main">
	<!-- 选择收货地址 -->
	<div class="address">
		<p class="title"><b>选择收货地址</b></p>
		<table>
			<tr>
				<th width="50px"></th>
				<th>地址</th>
				<th width="150px">联系方式</th>
				<th width="150px">收件人</th>
				<th width="150px">操作</th>
			</tr>
			<tbody>
				<tr>
					<td><input type="radio" value="1" name="address" checked/></td>
					<td>安徽省合肥市</td>
					<td>18356568585</td>
					<td>张三</td>
					<td>设置默认地址</td>
				</tr>
				<tr>
					<td><input type="radio" value="1" name="address"/></td>
					<td>安徽省合肥市</td>
					<td>18356568585</td>
					<td>张三</td>
					<td>设置默认地址</td>
				</tr>
				<tr>
					<td><input type="radio" value="1" name="address"/></td>
					<td>安徽省合肥市</td>
					<td>18356568585</td>
					<td>张三</td>
					<td>设置默认地址</td>
				</tr>
			</tbody>
		</table>
	</div>
	

	<!-- 确认订单信息 -->
	<div class="order">
		<p class="title"><b>确认订单信息</b></p>
		<table>
			<tr>
				<th width="80px">图片</th>
				<th>商品</th>
				<th width="150px">属性</th>
				<th width="100px">单价</th>
				<th width="100px">数量</th>
				<th width="100px">小计</th>
			</tr>
			<tbody>
				<?php
				for($i=0;$i<2;$i++){
				?>
				<tr>
					<td><img src="Images/TB1Xpe_NXXXXXXRXFXXGTq09XXX_035318.jpg_b.jpg"></td>
					<td>秋冬季休闲西装领风衣男韩版男</td>
					<td>颜色：A1606黑色<br/>尺码：170/L</td>
					<td>328.00</td>
					<td>9</td>
					<td>1602.00</td>
				</tr>
				<?php
				}
				?>
			</tbody>
		</table>
	</div>
	
	<!-- 留言备注 -->
	<div class="leave-word">
		<b>备注:</b><br/>
		<textarea placeholder="备注信息"></textarea>
		<span>实付款：￥<b>1602.00</b></span>
	</div>

	<!-- 提交订单 -->
	<div class="method">
		<span>
		<b>支付方式:</b>
		<label class="now"><input type="radio" name="paytype" value="0" checked />网银在线</label>
		<label><input type="radio" name="paytype" value="1"/>支付宝</label>
		</span>
		<button>提交订单</button>
	</div>
</div>
<!-- 底部 -->
<?php include "footer.php";?>
</body>
</html>