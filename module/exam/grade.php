<?php 
require_once('../../connect.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>成绩与解析</title>
	<link rel="stylesheet" type="text/css" href="../../css/lib/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<script type="text/javascript" src="../../js/lib/jquery-2.1.4.js"></script>
	<script type="text/javascript" src="../..//js/lib/bootstrap.js"></script>
	<script type="text/javascript" src="../../js/myfunction.js"></script>
</head>
<body>
	<header>
		<div class="gradient">
			<span>University of Sanya</span>
		</div>
	</header>
	<section class="content">
		<h2>成绩统计</h2>
		<div class="content-login">
			<div class="start_exam">
				<div class="clearfix">
					<i class="exam_ico"></i>
					<div class="exam_info">
						<p>题目类型： 选择题</p>
						<p>完成时间： 60分钟</p>
						<p>题目数量： 20道</p>
						<p>总分： 100分</p>
					</div>
				</div>
				<div class="exam_notice">
					<p>1、请在规定时间完成试卷内全部题目，考试时间结束，系统将自动交卷。</p>
					<p>2、所有题目可通过答题卡返回修改，点击提前交卷后试卷提交，将无法继续答案，请谨慎提交。</p>
					<p>3、请诚信答题，独立完成。</p>
					<p>4、祝你好运。</p>
				</div>
				<div class="form-group" id="btn-form">
			        <div class="start_button">
			            <button type="button" class="btn btn-primary" id="start_button">开始答题</button>
			        </div>
			    </div>
			</div>
			<div class="info_control">
				<li class="dropdown">
		            欢迎您！
		            <a href="#" class="dropdown-toggle userinfo-username" data-toggle="dropdown">
		                <?php echo $_SESSION['username']; ?><b class="caret"></b>
		            </a>
		            <ul class="dropdown-menu pull-left">
			            <li class="dropdown-header">个人设置</li>
		                <li><a href="#">更改资料</a></li>
		                <li><a href="#">修改密码</a></li>
		                <li class="divider"></li>
					    <li><a href="../../index.php">退出</a></li>
		            </ul>
			    </li>
			    <p class="student_info_notice">您的个人信息如下:</p>
			    <br/ >
			    <p>用户名：<?php echo $_SESSION['username']; ?></p>
			    <p>姓名：<?php echo $data['name']; ?></p>
			    <p>学号：<?php echo $data['student_number']; ?></p>
			    <p>专业：<?php echo $data['major']; ?></p>
			    <p>电子邮件：<?php echo $data['email']; ?></p>
			    <p>照片：</p>
			   <img class="userphoto" src="../../resource/img/userphoto/dog.jpg" />
			</div>
		</div>
	</section>
</body>
</html>