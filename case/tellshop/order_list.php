<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>订单-订单列表</title>
	<link rel="stylesheet" type="text/css" href="Css/header.css">
	<link rel="stylesheet" type="text/css" href="Css/footer.css">
	<style type="text/css">
	* {padding:0;margin:0;}
	/* main */
	.main {
		width:990px;
		margin:50px auto;
		font-size: 13px;
	}
	.title {
		height:40px;
		line-height: 40px;
		/*border-bottom: 3px solid #ff4400;*/
		border-bottom: 3px solid #FF4400;
		font-size: 15px;
		text-shadow: 0 0 1px #ccc;
	}
	.title b {
		width:150px;
		display: inline-block;
		background: #eee;
		text-align: center;
		color:#555;
		float:left;
	}
	.title  .now {
		background: #FF4400;
		color:#fff;
	}

	.orders_list {
		width:100%;
		border-collapse: collapse;
		border:1px solid #ccc;
		margin-top: 20px;
	}
	.orders_list th {
		background: #ccc;
		height:30px;
	}
	.orders_list tbody tr {
		border:1px solid #ccc;

	}
	.orders_list tbody tr:hover {
		background: #f6f6f6;
	}
	.orders_list tbody tr td {
		/*border:1px solid #ccc;*/

		min-height:100px;
		vertical-align: top;
		padding:10px;
	}
	.orders_list tbody tr td label input {
		margin-right: 10px;
		position: relative;
		top:2px;
	}
	.orders_list tbody tr td p {
		margin: 10px 0;
	}
	.orders_list tbody tr td p span {
		padding:3px 5px;
		background: #ccc;
		border-radius: 3px;
	}
	.orders_list tbody tr td p a {
		padding:3px 5px;
		border-radius: 3px;
		background:#6CD277;
		color:#fff;
		text-decoration:none;
	}
	.orders_list tbody tr td p a:hover {
		background:#FF4400;
	}

	.more {
		height:30px;
		line-height: 30px;
		letter-spacing: 10px;
		text-align: center;
		background: #eee;
		margin:20px 0;
		border-radius: 5px;
		cursor: pointer;
		color:#888;
	}
	.more:hover {
		background: #6CD277;
		color:#fff;
	}
	
	</style>
</head>
<body>
<!-- navication -->
<?php include "header.php";?>

<!-- 主区块 -->
<div class="main">
	<p class="title">
		<b class="now">未完成订单(3)</b>
		<b>全部订单状态</b>
	</p>
	<!-- 订单列表 -->
	<table class="orders_list">
		<thead>
			<tr>
				<th width="140px">订单号</th>
				<th width="80px">收件人</th>
				<th width="200px">收货方式</th>
				<th width="60px">数量</th>
				<th width="100px">总价格</th>
				<th>支付信息</th>
				<th>创建时间</th>
				<th>操作</th>
			</tr>
		</thead>
		<tbody>
		<?php
		for($i=0;$i<3;$i++){
		?>
			<tr>
				<td><label><input type="checkbox" value="1100">201610010001</label></td>
				<td>张三</td>
				<td>
					<p><span>18356568585</span></p>
					<p>安徽省 合肥市 蜀山区 锦绣社区管理委员会</p>
				</td>
				<td align="center">3</td>
				<td align="center">￥ 2600.00</td>
				<td>
					<b>支付方式:</b>
					<p style="text-align: right;"><span>网银</span></p>
					<b>支付金额:</b>
					<p style="text-align: right;">￥ <span>2600.00</span></p>
				</td>
				<td>
					<p>2016-10-10 12:05:23</p>
				</td>
				<td>
					<p><a href="order_detail.php">订单详情</a></p>
					<p><a href="">删除</a></p>
				</td>
			</tr>
			<?php
			}
			?>
		</tbody>
	</table>
	<!-- 更多 -->
	<p class="more"><<< 更多订单 >>></p>
</div>
<!-- 底部 -->
<?php include "footer.php";?>
</body>
</html>