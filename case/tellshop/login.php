<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>登录</title>
	<script type="text/javascript" src="http://cdn.bootcss.com/jquery/1.8.1/jquery.js"></script>
	<link rel="stylesheet" type="text/css" href="Css/header.css">
	<link rel="stylesheet" type="text/css" href="Css/footer.css">
	<style type="text/css">
	* {padding:0;margin:0;}
	/*body {
		background: #E71D3D;
	}*/
	.main {
		width:900px;
		padding:30px;
		margin:70px auto;
		border:1px solid red;
		background: url(Images/TB1vxzEOXXXXXcVXFXXXXXXXXXX-1190-600.png);
		border-radius: 5px;
		box-shadow: 0 0 500px 0 #ccc;
	}
	.main img {
		float:left;
	}
	.main form {
		float:right;
		width:250px;
		margin:100px;
		background: #fff;
		border:1px solid #ddd;
		padding:20px;
		border-radius: 5px;
		
	}
	.main form p {
		margin:10px;
	}

	.login1 {
		background:url(Images/login1.png) no-repeat;
		background-position:left;
		text-indent: 35px;
	}
	.login2 {
		background: url(Images/login2.png) no-repeat;
		background-position:left;
		text-indent: 35px;
		
	}
	.main form p input {
		width:100%;
		height:30px;
		border-radius: 3px;
		border:1px solid #DDDDDD;
	}
	.main form p b {
		font-size: 14px;
	}
	.main form p input[type=submit]{
		background: #FF4400;
		color:#fff;
		border:1px solid #FF4400;
		border-radius: 3px;
		cursor: pointer;
	}
	.main form p input[type=submit]:hover {
		box-shadow: 0 0 5px 0 #FF4400;
	}
	.main form p label {
		cursor: pointer;
	}
	.main form p .checkbox {
		width:15px;
		height:15px;
		margin-right: 0px;
		position: relative;
		top:3px;
		cursor: pointer;
	}
	.main form p a {color:#888;text-decoration: none;}
	.main form p a:hover {color:#555;text-decoration: underline;}
	</style>
</head>
<body>
<!-- navication -->
<?php include "header.php";?>

<!-- 主体 -->
<div class="main">
	<img src="">
	<form>
		<p><b>用户登录:</b></p>
		<p><input class="login1" type="text" name="uname" value="" placeholder="邮箱/手机号" />
		</p>
		
		<p><input class="login2" type="password" name="upwd"  value="" placeholder="密码" />
		</p>
		<p>
			<input type="submit" value="登&nbsp;&nbsp;录" style="" />
		</p>
		<p style="font-size: 13px;">
			<span>&nbsp;</span>
			<label><input type='checkbox' class="checkbox" value="1" />保存一周</label> <a href="" style="float:right;margin-right:10px;">忘记密码?</a>
		</p>
		<p style="font-size: 13px;">
			<span>&nbsp;</span>
			<a href="" style="float:right;margin-right:10px;">注册</a>
		</p>
	</form>

	<div style="clear:both;"></div>
</div>

<!-- 底部 -->
<?php include "footer.php";?>
</body>
</html>