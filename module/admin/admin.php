<?php 
session_start(); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>试题管理系统</title>
	<script type="text/javascript" src="\testbank/graduation-project/js/lib/jquery-2.1.4.js"></script>
	<script type="text/javascript" src="\testbank/graduation-project/js/lib/bootstrap.js"></script>
	<link rel="stylesheet" type="text/css" href="\testbank/graduation-project/css/lib/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="\testbank/graduation-project/css/index.css">
</head>
<body>
<!-- nav -->
	<nav class="navbar navbar-default navbar-inverse navbar-fixed-top" role="navigation">
	    <div class="navbar-header">
		    <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#show">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
			</button>
	        <a class="navbar-brand" href="#">Java试题管理系统</a>
	    </div>

	    <div class="collapse navbar-collapse" id="show">
		    <ul class="nav navbar-nav">
		        <li class="active"><a href="#">首页</a></li>
		        <li class="dropdown">
		            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
		                功能
		                <b class="caret"></b>
		            </a>
		            <ul class="dropdown-menu">
			            <li class="dropdown-header">业务功能</li>
		                <li><a href="testinput.php">试题录入</a></li>
		                <li><a href="testselect.php">试题查询</a></li>
		                <li><a href="testmanage.php">试题管理</a></li>
		                <li class="divider"></li>
		                <li class="dropdown-header">系统功能</li>
					    <li><a href="#">设置</a></li>
		            </ul>
		        </li>
		        <li><a href="#">帮助</a></li>
		        <li><a data-toggle="modal" data-target="#about_system">关于</a></li>
		    </ul>
		    <li class="dropdown navbar-right userinfo">
		            Welcome! 欢迎您！
		            <a href="#" class="dropdown-toggle userinfo-username" data-toggle="dropdown">
		                <?php echo $_SESSION['username']; ?><b class="caret"></b>
		            </a>
		            <ul class="dropdown-menu">
			            <li class="dropdown-header">个人设置</li>
		                <li><a href="testinput.php">个人资料</a></li>
		                <li><a href="testselect.php">修改密码</a></li>
		                <li class="divider"></li>
					    <li><a href="../../index.php">退出</a></li>
		            </ul>
		    </li>
	    </div>
	</nav>

<!-- about_system  modal -->
	<div class="modal fade" id="about_system" aria-hidden="true" aria-labelledby="mylabelm" tabindex="-1" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button class="close" data-dismiss="modal">&times</button>
					<h3 class="modal-title" id="mylabelm">关于</h3>
				</div>
				<div class="modal-body">
					Java试题管理系统
				</div>
				<div class="modal-footer">
					<button class="btn btn-primary" data-dismiss="modal">确定</button>
				</div>
			</div>
		</div>
	</div>

<!-- 自适应布局 -->
<div class="container-fluid">
	<div class="row">
	<!-- sidebar -->
	<div class="col-sm-3 col-md-2 sidebar">
		<ul class="nav nav-sidebar">
			<li class="active"><a href="index.html">首页</a></li>
		</ul>
		<ul class="nav nav-sidebar">
			<li><a href="testinput.php">试题录入</a></li>
			<li><a href="testselect.php">试题查询</a></li>
			<li><a href="testmanage.php">试题管理</a></li>
		</ul>
		<ul class="nav nav-sidebar">
			<li><a href="adduser.php">添加用户</a></li>
			<li><a href="usermanage.php">用户管理</a></li>
		</ul>
		<ul class="nav nav-sidebar">
			<li><a href="#">设置</a></li>
			<li><a href="#">帮助</a></li>
		</ul>
	</div>

	<!-- content -->
	<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
	    <h1 class="page-header">管理控制台</h1>
	    <p>
		    <button class="btn btn-default btn-lg">讯息</button>
		    <button class="btn btn-info btn-lg">提醒</button>
		    <button class="btn btn-warning btn-lg">警告</button>
		    <button class="btn btn-success btn-lg">成功</button>
	    </p>


	    <!-- panel -->
		<div class="row">
		<!-- new notice -->
			<div class="col-md-6">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<h3 class="panel-title">最新提醒</h3>
					</div>
					<div class="panel-body">
						<div class="alert alert-success" role="alert">
							<strong>成功: </strong>Java试题20151116录入成功!
						</div>
						<div class="alert alert-danger" role="alert">
							<strong>危险: </strong>答案数据库混乱，请注意整理！
						</div>
						<div class="alert alert-warning" role="alert">
							<strong>警告: </strong>20151018简答14题缺少答案
						</div>
					</div>
				</div>
			</div>
		    <!-- my task -->
		    <div class="col-md-6">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<h3 class="panel-title">我的任务</h3>
					</div>
					<div class="panel-body">
							<ul class="nav nav-pills nav-stacked" role="tablist">
							<li role="presentation">
								<a href="#" class="alert alert-info">
									<span class="badge pull-right">42</span>
									Java试题答案录入20151116
								</a>
							</li>
							<li role="presentation">
								<a href="#" class="alert alert-info">
									<span class="badge pull-right">20</span>
									Java试题简答题录入20151116
								</a>
							</li>
							<li role="presentation">
								<a href="#" class="alert alert-info">
									<span class="badge pull-right">10</span>
									新的测试
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
	    </div>

	    <div class="row">
		<!-- new notice -->
			<div class="col-md-6">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<h3 class="panel-title">测试提交</h3>
					</div>
					<div class="panel-body">
						<table class="table">
						    <caption>最近提交的测试</caption>
						    <thead>
						        <tr>
						           <th>学号</th>
						           <th>姓名</th>
						           <th>班级</th>
						           <th>成绩</th>
						        </tr>
						    </thead>
						    <tbody>
						        <tr>
						           <td>1210660021</td>
						           <td>胡健</td>
						           <td>信息管理1201</td>
						           <td>80</td>
						        </tr>
						        <tr>
						           <td>1210660022</td>
						           <td>王鹏</td>
						           <td>信息管理1201</td>
						           <td>90</td>
						        </tr>
						        <tr>
						           <td>1210660025</td>
						           <td>John</td>
						           <td>IMIS</td>
						           <td>86</td>
						        </tr>
						   </tbody>
						</table>
					</div>
				</div>
			</div>
		    <!-- my task -->
		    <div class="col-md-6">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<h3 class="panel-title">我的任务</h3>
					</div>
					<div class="panel-body">
							<div class="alert alert-success" role="alert">
								<strong>成功: </strong>Java试题20151116录入成功!
							</div>
							<div class="alert alert-danger" role="alert">
								<strong>危险: </strong>答案数据库混乱，请注意整理！
							</div>
							<div class="alert alert-warning" role="alert">
								<strong>警告: </strong>20151018简答14题缺少答案
							</div>
					</div>
				</div>
			</div>
	    </div>

	</div>
</div>
</body>
</html>