<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>购物车-列表</title>
	<link rel="stylesheet" type="text/css" href="Css/header.css">
	<link rel="stylesheet" type="text/css" href="Css/footer.css">
	<style type="text/css">
	* {padding:0;margin:0;}
	/* main */
	.main {
		width:990px;/*
		border:1px solid red;*/
		margin:50px auto;
	}

	/* cart */
	.cart {
		
	}
	.cart-title {
		height:40px;
		font-size: 16px;
		line-height: 40px;
		
		border-bottom:3px solid  #FF4400;
	}
	.cart-title b {
		width:150px;
		display: inline-block;
		background: #FF4400;
		text-align: center;
		color:#fff;
	}
	.cart-cols {
		height:40px;
		line-height:40px;
		font-size: 0;
		background: #F6F6F6;
	}
	.cart-cols span {
		display: inline-block;
		text-align: center;
		padding:0 10px;
		font-size: 14px;
	}
	.cart-cols span:nth-of-type(1) {
		width:70px;
	}
	.cart-cols span:nth-of-type(2) {
		width:400px;
	}
	.cart-cols span:nth-of-type(3),span:nth-of-type(4),span:nth-of-type(5),span:nth-of-type(6) {
		width:100px;
	}
	.cart-cols span input {
		margin-right:5px;
		position: relative;
		top:2px;
	}

	/* 购物车列表 */
	.cart-list {
		
	}
	.cart-item {
		border:1px solid #ccc;
		margin-top:10px;
		height:100px;
		padding:10px 0;
		border-radius: 3px;
	}
	.cart-item:hover{
		border-color: #FF4400;
	}
	
	
	.cart-item-body-img {
		width:100px;
		height:100px;
		display:inline-block;
		margin-right: 10px
	}
	.cart-item div {
		height:100px;
		display:inline-block;
		float:left;
		margin-right: 1px;
	}
	
	.id {
		width:50px;
		text-align: center;
		position:relative;
		top:40px;
	}
	.price,.count,.sum_price,.opt {
		width:110px;
		text-align: center;
		line-height: 100px;
		font-size: 14px;
	}
	.info {
		width:450px;
		padding-right:10px;
		font-size: 13px;
	}
	.count {
		/*font-size: 5px;*/
	}
	.count button {
		width:25px;
		height:32px;
		background: #ccc;
		border:1px solid #ccc;
		color:#555;
		font-size: 15px;
		font-weight: bold;
		cursor: pointer;
	}
	.count button:hover {
		color: #f52b00;
		border:1px solid #f52b00;
	}
	
	.count input {
		width:35px;
		height:30px;
	
		text-align: center;
		padding:0 5px;
		font-size: 15px;
		border:1px solid #ccc;
		
	}

	/* 结算 */
	.account {
		margin-top:10px;
		height:40px;
		line-height: 40px;
		background: #eee;
		padding-left:10px;
		font-size: 13px;
	}
	.account input {
		margin-right: 10px;
	}
	.account span {
		padding:0 20px;
	}
	.account span b {
		color:#f52b00;
	}

	.do-account {
		display: inline-block;
		width:100px;
		height:40px;
		background: #ccc;
		color:#555;
		float: right;
		font-size: 20px;
		text-align: center;
		cursor: pointer;
	}
	.do-account:hover {
		background: #f52b00;
		color:#fff;
	}
	</style>
</head>
<body>
<!-- navication -->
<?php include "header.php";?>
<!-- 主区块 -->
<div class="main">
	<!-- 购物车列表 -->
	<div class="cart">
		<p class="cart-title"><b>购 物 车 列 表</b></p>
		<p class="cart-cols">
			<span><input type="checkbox"/>全选</span>
			<span>商品信息</span>
			<span>单价</span>
			<span>数量</span>
			<span>金额</span>
			<span>操作</span>
		</p>
		<!-- 购物车商品列表 -->
		<div class="cart-list">
			
			<?php
			for($i=0;$i<3;$i++){
			?>
			<div class="cart-item">
				<div class="id"><input type="checkbox" value="1"></div>
				<div class="info">
					<img  class="cart-item-body-img"  src="Images/TB1Xpe_NXXXXXXRXFXXGTq09XXX_035318.jpg_b.jpg" align="left" />
					<p>
						秋冬季休闲西装领风衣男韩版男士中长款外套男修身大衣男上衣男潮
					</p>
				</div>
				<!-- 单价 -->
				<div class="price">
					￥ 5900
				</div>
				<!-- 数量 -->
				<div class="count">
					<button>-</button>
					<input type='text' name="">
					<button>+</button>
				</div>
				<!-- 金额 -->
				<div class="sum_price">
					5900
				</div>
				<!-- 操作 -->
				<div class="opt">
					删除
				</div>
			</div>

			<?php
			}
			?>

		</div>

		<!-- 结算 -->
		<div class="account">
			<label><input type="checkbox" value="1" />全选</label>
			<span>清空</span>
			<span>合计：<b>6322</b></span>
			<div onclick="window.location.href='order.php';" class="do-account">结 算</div>
		</div>
	</div>
</div>
<!-- 底部 -->
<?php include "footer.php";?>
</body>
</html>