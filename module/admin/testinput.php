﻿<?php 
session_start(); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" id="viewport" content="width=device-width, initial-scale=1"> 
	<title>试题录入</title>
	<script type="text/javascript" src="\testbank/graduation-project/js/lib/jquery-2.1.4.js"></script>
	<script type="text/javascript" src="\testbank/graduation-project/js/lib/bootstrap.js"></script>
	<link rel="stylesheet" type="text/css" href="\testbank/graduation-project/css/lib/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="\testbank/graduation-project/css/index.css">
	<link rel="stylesheet" type="text/css" href="css/testinput.css">
	<script type="text/javascript" src="js/testinput.js"></script>
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
		                <li class="active"><a href="testinput.html">试题录入</a></li>
		                <li><a href="testselect.html">试题查询</a></li>
		                <li><a href="testmanage.php">试题管理</a></li>
		                <li><a href="#">试题组卷</a></li>
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
				<li><a href="admin.php">首页</a></li>
			</ul>
			<ul class="nav nav-sidebar">
				<li class="active"><a href="testinput.php">试题录入</a></li>
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

		<!-- sidebar-right -->
		<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 col-xs-offset-4 main">
		    <h1 class="page-header">试题录入</h1>

		    <form class="form-horizontal" role="form" id="form-group">

			    <div class="form-group">
			        <label for="username" class="col-md-1 col-sm-2 col-xs-2 control-label pull-left">题目：</label>
			        <div class="col-md-6 col-sm-10 col-xs-10 space">
			            <textarea id="js-input_title" class="form-control" rows="3" placeholder="请输入试题题目"></textarea>
			        </div>
			    </div>

			    <div class="form-group">
			        <label for="password" class="col-md-1 col-sm-2 col-xs-2 control-label pull-left">A：</label>
			        <div class="col-md-6 col-sm-10 col-xs-10 space">
			            <input id="js-input_a" type="text" class="form-control" id="text" placeholder="请输入选项A">
			        </div>
			    </div>

			    <div class="form-group">
			        <label for="password" class="col-md-1 col-sm-2 col-xs-2 control-label pull-left">B：</label>
			        <div class="col-md-6 col-sm-10 col-xs-10 space">
			            <input id="js-input_b" type="text" class="form-control" id="text" placeholder="请输入选项B">
			        </div>
			    </div>

			    <div class="form-group">
			        <label for="password" class="col-md-1 col-sm-2 col-xs-2 control-label pull-left">C：</label>
			        <div class="col-md-6 col-sm-10 col-xs-10 space">
			            <input id="js-input_c" type="text" class="form-control" id="text" placeholder="请输入选项C">
			        </div>
			    </div>

			    <div class="form-group">
			        <label for="password" class="col-md-1 col-sm-2 col-xs-2 control-label pull-left">D：</label>
			        <div class="col-md-6 col-sm-10 col-xs-10 space">
			            <input id="js-input_d" type="text" class="form-control" id="text" placeholder="请输入选项D">
			        </div>
			    </div>

			    <div class="form-group">
			        <label for="password" class="col-md-1 col-sm-2 col-xs-2 control-label pull-left">答案：</label>
			        <div class="col-md-6 col-sm-10 col-xs-10 space">
			            <input id="js-input_answer" type="text" class="form-control" id="text" placeholder="请输入答案">
			        </div>
			    </div>

			    <div class="form-group">
			        <label for="username" class="col-md-1 col-sm-2 col-xs-2 control-label pull-left">解析：</label>
			        <div class="col-md-6 col-sm-10 col-xs-10 space">
			            <textarea id="js-input_analysis" class="form-control" rows="3" placeholder="请输入试题解析"></textarea>
			        </div>
			    </div>

			    <div class="form-group">
			        <div class="col-md-offset-1 col-sm-offset-2 col-md-6 col-sm-10 col-xs-offset-2">
			            <button type="button" class="btn btn-primary" id="btn_submit">提交</button>
			            <button type="button" class="btn btn-primary" id="btn_reset">重置</button>
                        <span class="pull-right" id="info"></span>
			        </div>
			    </div>

			</form>
	    </div>
	</div>
</div>
</body>
</html>