<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>学生注册</title>
	<link rel="stylesheet" type="text/css" href="css/register.css">
	<link rel="stylesheet" type="text/css" href="../../css/lib/bootstrap.css">
	<script type="text/javascript" src="../../js/lib/jquery-2.1.4.js"></script>
	<script type="text/javascript" src="../../js/myfunction.js"></script>
	<script type="text/javascript" src="js/register.js"></script>
</head>
<body>
	<header>
		<div class="gradient">
			<span>University of Sanya</span>
		</div>
	</header>
	<section class="content">
		<h2>学生注册</h2>
		<section class="col-sm-10 register-items">
			<div class="form-group">
			    <label for="username" class="col-sm-2 control-label">用户名：<span class="formmark">*</span></label>
			    <div class="col-sm-7 space">
			            <input type="text" class="form-control" id="username" placeholder="请输入用户名（限英文、数字、下划线）">
			    </div>
			    <span class="col-sm-3 tips"></span>
		    </div>

		    <div class="form-group">
		        <label for="password" class="col-sm-2 control-label">密码：<span class="formmark">*</span></label>
		        <div class="col-sm-7 space">
		            <input type="password" class="form-control" id="password" placeholder="请输入密码（不能使用中文且长度为6-22位）">
		        </div>
		        <span class="col-sm-3 tips"></span>
		    </div>

		    <div class="form-group">
		        <label for="password" class="col-sm-2 control-label">确认密码：<span class="formmark">*</span></label>
		        <div class="col-sm-7 space">
		            <input type="password" class="form-control" id="password_again" placeholder="请重新输入密码">
		        </div>
		        <span class="col-sm-3 tips"></span>
		    </div>

		    <div class="form-group">
		        <label for="password" class="col-sm-2 control-label">电子邮件：<span class="formmark">*</span></label>
		        <div class="col-sm-7 space">
		            <input type="text" class="form-control" id="email" placeholder="请输入电子邮件">
		        </div>
		        <span class="col-sm-3 tips"></span>
		    </div>

		    <div class="form-group">
		        <label for="password" class="col-sm-2 control-label">姓名：</label>
		        <div class="col-sm-7 space">
		            <input type="text" class="form-control" id="name" placeholder="请输入您的真实姓名（限中文，长度为2-7位）">
		        </div>
		        <span class="col-sm-3 tips"></span>
		    </div>


		    <div class="form-group">
		        <label for="password" class="col-sm-2 control-label">学号：</label>
		        <div class="col-sm-7 space">
		            <input type="text" class="form-control" id="student_number" placeholder="请输入您的学号（10位数字）">
		        </div>
		        <span class="col-sm-3 tips"></span>
		    </div>

		    <div class="form-group">
		        <label for="password" class="col-sm-2 control-label">专业：</label>
		        <div class="col-sm-7 space">
		            <select id="major">
		            	<option value="信息管理与信息系统">信息管理与信息系统</option>
		            	<option value="计算机科学与技术">计算机科学与技术</option>
		            	<option value="软件工程">软件工程</option>
		            </select>
		        </div>
		        <span class="col-sm-3 tips"></span>
		    </div>

		    <span class="col-sm-12 register-prompt">注： 所有带 * 项为必填项</span>
		    <form class="col-sm-4 col-sm-offset-3 register-law">
			    <input type="checkbox" name="read" class="register-read" />
				<a href="#" class="serive-items">我已阅读并同意系统服务条款</a>
			</form>

		    <div class="form-group" id="btn-form">
		        <div class="col-sm-offset-3 col-sm-4 registerbtn-group">
			        <button type="button" class="btn btn-primary" id="register">提交</button>
		            <button type="reset" class="btn btn-default" id="reset">重置</button>
		        </div>
		    </div>

		</section>
			
	</section>
</body>
</html>