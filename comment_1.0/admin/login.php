<!DOCTYPE html>
<html lang="zh">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title></title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css"/>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
	<div class="container">
		<h3>登录<small class="h6"> v0.1</small></h3>
		<form action="login_check.php" method="post" class="form-horizontal">
			<div class="form-group">
				<label class="col-sm-2 control-label">用户名</label>
				<div class="col-sm-5">
					<input type="text" name="username" class="form-control dly-input" placeholder="请输入用户名">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">密码</label>
				<div class="col-sm-5">
					<input type="password" name="password" class="form-control dly-input" placeholder="请输入密码">
				</div>
			</div>
			<input type="submit" name="submit" class="btn btn-primary btn-block dly-btn" value="登陆" >
			<div class="all-btn">
			<a class="btn btn-link dly-jz " href="reg.html">立即注册</a>
			</div>
		</form>
	</div>
</body>

<script type="text/javascript" src="../js/jquery-1.12.4.js">
	
</script>
<script type="text/javascript" src="../js/bootstrap.min.js">
	
</script>

</html>