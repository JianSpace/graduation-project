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
	<style type="text/css">
		.right_number {
			color: #337AB7;
		} 
	</style>
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
						<p>完成时间： 120分钟</p>
						<p>题目数量： 20道</p>
						<p>总分： 100分</p>
					</div>
				</div>
				<div class="exam_notice">
					<p>您的成绩如下：</p>
					<p>正确题数：<span class="right_number"></span>/20</p>
					<p class="grade"></p>
					<p class="time"></p>
				</div>
				<div class="form-group" id="btn-form">
			        <div class="start_button">
			            <button type="button" class="btn btn-primary" id="start_button">查看答案与解析</button>
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
			    <p class="student_info_notice">该套试卷的成绩排名如下:</p>
			    <br/ >
			    <p>1:HuJian</p>
			</div>
		</div>
	</section>
	<script type="text/javascript">
	$.ajax({
		type: 'get',
		dataType: 'json',
		url: 'exam_grade.json',
		success: function (data) {
			// console.log(JSON.stringify(data));
			console.log(data.error_question.length);
			var error_number = data.error_question.length;
			var grade = 100 - (error_number * 5);
			$('.right_number').html(20 - error_number);
			$('.grade').html('得分：' + grade);
		},
		error: function () {
			console.log('连接失败');
		}
	});
	</script>
</body>
</html>