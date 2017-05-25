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
		
		
	
		
	}
	.main form {
		margin-top: 40px;
	}
	.main form p {
		height:30px;
		line-height: 30px;
		margin:15px;
		font-size: 13px;
	}
	.main form p span {
		float:left;
		width:80px;
		text-align: right;
		padding-right: 10px;
		color:#555;
	}
	.main form p input {
		float:left;
		width:200px;
		height:30px;
		padding:0 10px;
		border:1px solid #ccc;
		border-radius: 3px;
		margin-right: 10px;
	}
	.main form p label {
		float:left;
		width:300px;
		color:#aaa;
	}
	.title {
		height:40px;
		font-size: 16px;
		line-height: 40px;
		
		border-bottom:3px solid  #ccc;
	}
	.title b {
		width:150px;
		display: inline-block;
		background: #ccc;
		text-align: center;
		color:#555;
	}

	.main form p input[type=submit] {
		border:1px solid  #FF4400;
		background:  #FF4400;
		color: #fff;
		cursor: pointer;
	}
	.main form p input[type=submit]:hover {
		box-shadow: 0 0 5px 0 #FF4400; 
	}
	
	</style>
</head>
<body>
<!-- navication -->
<?php include "header.php";?>

<!-- 主体 -->
<div class="main">
	<p class="title"><b>新用户注册</b></p>
	<form>
		<p>
			<span>用户名:</span>
			<input type="text" name="uname" required>
			<label>用户名为4-20位字符、数字组成</label>
		</p>
		<p>
			<span>邮箱:</span>
			<input type="email" name="email" >
			<label>请填写本人邮箱</label>
		</p>
		<p>
			<span>手机:</span>
			<input type="text" name="phone" required>
			<label>请填写本人手机号</label>
		</p>
		<p>
			<span>设置密码:</span>
			<input type="password" name="upwd" required>
			<label>请填写6-18位字符、数字、下划线</label>
		</p>
		<p>
			<span>重复密码:</span>
			<input type="text" name="reupwd" required>
			<label>请再次填写密码，注意保持两次输入一致</label>
		</p>
		<p>
			<span>验证码:</span>
			<input type="text" name="verify" required>
			<input type="button" value="获取邮箱验证码" >
		</p>
		<p>
			<span>&nbsp;</span>
			<input style="width:30px;" type="checkbox" name="accept" value="1" checked required>同意使用协议《<a href="">xxx使用协议</a>》
		</p>
		<p>
			<span>&nbsp;</span>
			<input type="submit" value="注 册" >
		</p>
	</form>
</div>

<!-- 底部 -->
<?php include "footer.php";?>
</body>
</html>