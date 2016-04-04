<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>欢迎使用Java试题管理系统</title>
	<script type="text/javascript" src="js/lib/jquery-2.1.4.js"></script>
    <script type="text/javascript" src="js/login.js"></script>
	<link rel="stylesheet" type="text/css" href="css/lib/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>
	<div>
		<div class="gradient">
			<span>University of Sanya</span>
		</div>
		<div class="content">
			<h2>Java试题系统</h2>
			<div class="content-login">
				<img src="resource/img/login_pic.png" alt="login_pic">
				<div class="login-form">
					<div class="login-text"><span>用户登录 / LOGIN</span></div>

					<form class="form-horizontal" role="form" id="form-group">

					    <div class="form-group">
					        <label for="username" class="col-sm-4 control-label">用户名：</label>
					        <div class="col-sm-8 space">
					            <input type="text" class="form-control" id="username" placeholder="请输入用户名">
					        </div>
					    </div>

					    <div class="form-group">
					        <label for="password" class="col-sm-4 control-label">密&nbsp;&nbsp;&nbsp;码：</label>
					        <div class="col-sm-8 space">
					            <input type="password" class="form-control" id="password" placeholder="请输入密码">
					        </div>
					    </div>

					    <div class="form-group" id="user">
					        <div>
							    <label class="checkbox-inline">
							        <input type="radio" checked="checked" name="optionsRadiosinline" id="student" value="student"> 学生
							    </label>
					            <label class="checkbox-inline">
							        <input type="radio" name="optionsRadiosinline" id="teacher" value="teacher"> 管理员
							    </label>
					        </div>
					    </div>

					    <div class="form-group" id="btn-form">
					        <div class="col-sm-offset-1 col-sm-6">
						        <button type="button" class="btn btn-default" id="register">注册</button>
					            <button type="button" class="btn btn-primary" id="submit">登录</button>
					        </div>
					    </div>

					</form>
				</div>
			</div>
		</div>
		<div class="footer">
			<span>©2015 Jian 版权所有</span>
		</div>
	</div>
</body>
</html>