<?php 
session_start(); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>试题查询</title>
	<script type="text/javascript" src="\testbank/js/lib/jquery-2.1.4.js"></script>
	<script type="text/javascript" src="\testbank/js/lib/bootstrap.js"></script>
	<link rel="stylesheet" type="text/css" href="\testbank/css/lib/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="\testbank/css/index.css">
	<link rel="stylesheet" type="text/css" href="css/testinput.css">
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
	        <a class="navbar-brand" href="admin.php">Java试题管理系统</a>
	    </div>

	    <div class="collapse navbar-collapse" id="show">
		    <ul class="nav navbar-nav">
		        <li><a href="admin.php">首页</a></li>
		        <li class="dropdown">
		            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
		                功能
		                <b class="caret"></b>
		            </a>
		            <ul class="dropdown-menu">
			            <li class="dropdown-header">业务功能</li>
		                <li><a href="testinput.html">试题录入</a></li>
		                <li class="active"><a href="testselect.html">试题查询</a></li>
		                <li><a href="testmanage.php">试题管理</a></li>
		                <li class="divider"></li>
		                <li class="dropdown-header">系统功能</li>
					    <li><a href="#">设置</a></li>
		            </ul>
		        </li>
		        <li><a href="#">帮助</a></li>
		        <li><a href="#">关于</a></li>
		    </ul>
		    <li class="dropdown navbar-right userinfo">
		            Welcome! 欢迎您！
		            <a href="#" class="dropdown-toggle userinfo-username" data-toggle="dropdown">
		                <?php echo $_SESSION['username']; ?><b class="caret"></b>
		            </a>
		            <ul class="dropdown-menu">
			            <li class="dropdown-header">个人资料</li>
		                <li><a href="testinput.php">个人设置</a></li>
		                <li><a href="testselect.php">修改密码</a></li>
		                <li class="divider"></li>
					    <li><a href="../../index.php">退出</a></li>
		            </ul>
		    </li>
	    </div>
	</nav>
<!-- 自适应布局 -->
<div class="container-fluid">
	<div class="row">
	<!-- sidebar -->
		<div class="col-sm-3 col-md-2 sidebar">
			<ul class="nav nav-sidebar">
				<li class="active"><a href="admin.php">首页</a></li>
			</ul>
			<ul class="nav nav-sidebar">
				<li><a href="testinput.php">试题录入</a></li>
                <li><a href="testselect.php">试题查询</a></li>
                <li><a href="testmanage.php">试题管理</a></li>
			</ul>
			<ul class="nav nav-sidebar">
				<li><a href="#">设置</a></li>
				<li><a href="#">帮助</a></li>
			</ul>
		</div>

		<!-- sidebar-right -->
		<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
		    <h1 class="page-header">试题查询</h1>

		    <form class="form-horizontal" role="form" id="form-group">

			    <div class="form-group">
			        <label for="username" class="col-sm-1 control-label pull-left">题目：</label>
			        <div class="col-sm-6 space">
			            <textarea class="form-control" rows="3" placeholder="请输入关键字或编号"></textarea>
			        </div>
			    </div>

			    <div class="form-group">
			        <div class="col-sm-offset-1 col-sm-3">
			            <button type="button" class="btn btn-primary" id="submit">查询</button>
			        </div>
			    </div>

			</form>
	    </div>
	</div>
</div>
</body>
</html>