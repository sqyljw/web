<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>支付成功</title>
	<style type="text/css">
	* {padding:0;margin:0;}
	/* main */
	.main {
		width:700px;
		border:1px solid #ccc;
		margin:100px auto;
		font-size: 13px;
		padding:100px 0;
		border-radius: 5px;
	}

	.pay {
		width: 120px;
		height:120px;
		border-radius: 50%;
		background: #BEE68D;
		font-size: 70px;
		line-height: 100px;
		text-align: center;
		color:#fff;
		font-weight: bold;
	}
	.pay span {
		/*background: red;*/
	}
	.pay-state {
		font-size: 35px;
	}
	table {
		margin:0 auto;
	}

	table td {
		
		padding:0px 10px;
	}
	table td p {
		height:30px;
		line-height: 30px;
		color:#999;
	}
	table td button {
		height:40px;
		line-height: 40px;
		width:150px;
		text-align: center;
		background: #EC6223;
		color:#fff;
		border:0;
		border-radius: 5px;
	}
	</style>
</head>
<body>
<!-- 主区块 -->
<div class="main">
	<table>
		<tr>
			<td rowspan="3">
				<div class="pay">
					<!-- √×✔✘ -->
					<span>✔</span>
				</div>
			</td>
			<td class="pay-state">支付成功!</td>
		</tr>
		<tr>
			<td>
				<p>订单支付成功,订单号为:2255669988</p>
				<p>订单将在2个工作日发货，预计3天左右到达，请保持手机畅通...</p>
			</td>
		</tr>
		<tr>
			<td><button>返回订单列表页</button></td>
		</tr>
	</table>
</div>
</body>
</html>