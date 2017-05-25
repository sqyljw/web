<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>电商-产品列表页</title>
	<script type="text/javascript" src="http://cdn.bootcss.com/jquery/1.8.1/jquery.js"></script>
	<link rel="stylesheet" type="text/css" href="Css/index.css">
	<link rel="stylesheet" type="text/css" href="Css/header.css">
	<link rel="stylesheet" type="text/css" href="Css/search.css">
	<link rel="stylesheet" type="text/css" href="Css/footer.css">
	<style type="text/css">
	.page {

	}
	.page a {
		display: inline-block;
		width:30px;
		height:30px;
		line-height: 30px;
		text-align: center;
		background: #ccc;
		font-size: 13px;
		text-decoration: none;
		color: #555;
		border:1px solid #ccc;
	}
	.page .first {
		width:50px;
	}
	.page .end {
		width:50px;
	}
	.page .prev {
		width:70px;
	}
	.page .next {
		width:70px;
	}
	.page .cur {
		background: #ff4000;
		color:#fff;
		display: inline-block;
		width:30px;
		height:30px;
		line-height: 30px;
		text-align: center;
		font-size: 13px;
		border:1px solid #ff4000;
	}
	.page .info {
		color:#555;
		font-size: 13px;
		padding-left: 10px;
	}
	.page a:hover {
		border-color:#ff4000;
		color: #ff4000; 
	}
	</style>
</head>
<body>
<!-- navication -->
<?php include "header.php";?>

<!-- 搜索 -->
<div class="search-main">
	<!-- logo -->
	<img src="Images/logo.jpg" class="logo">
	<form name="search" method="post" accept="">
		<input type="text" name="search" placeholder="请输入搜索信息..." />
		<input type="submit" value="搜 索" />
	</form>
</div>
<!-- main -->
<div class="main">
	<?php
	for($i=0;$i<10;$i++){
	?>
	<div class="product">
		<div class="product-iwrap">
			<img src="Images/TB1Xpe_NXXXXXXRXFXXGTq09XXX_035318.jpg_b.jpg">
			<p name="detail"><a href="">iphone7 iphone7 iphone7 iphone7</a></p>
			<p name="price">￥ <b>52199.00</b></p>
			<p name="button"><button>加入购物车</button></p>
		</div>
	</div>
	<?php
	}
	?>
	<div style="clear:both;"></div>
	<div class="page">
		<a class="first" href="">首页</a>
		<a class="prev" href="">上一页</a>
		<a href="">1</a>
		<span class="cur">2</span>
		<a href="">3</a>
		<a href="">4</a>
		<a>...</a>
		<a class="next" href="">下一页</a>
		<a class="end" href="">末页</a>
		<span class="info">当前第2页,共9页</span>
	</div>
</div>

<!-- 底部 -->
<?php include "footer.php";?>
</body>
</html>