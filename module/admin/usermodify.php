<?php
        session_start(); 
        require_once('../../connect.php');
        
        $id = $_GET['id'];
        $selectsql = mysql_query("SELECT * FROM user WHERE id='$id'");
        $data = mysql_fetch_assoc($selectsql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" id="viewport" content="width=device-width, initial-scale=1"> 
	<title>修改用户信息</title>
	<script type="text/javascript" src="\testbank/graduation-project/js/lib/jquery-2.1.4.js"></script>
	<script type="text/javascript" src="\testbank/graduation-project/js/lib/bootstrap.js"></script>
	<link rel="stylesheet" type="text/css" href="\testbank/graduation-project/css/lib/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="\testbank/graduation-project/css/index.css">
	<link rel="stylesheet" type="text/css" href="css/testinput.css">
	<script type="text/javascript" src="js/usermodify.js"></script>
</head>
<body>
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
				<li><a href="testinput.php">试题录入</a></li>
                <li><a href="testselect.php">试题查询</a></li>
                <li><a href="testmanage.php">试题管理</a></li>
                <li><a href="#">试题组卷</a></li>
			</ul>
			<ul class="nav nav-sidebar">
				<li class="active"><a href="adduser.php">添加用户</a></li>
				<li><a href="usermanage.php">用户管理</a></li>
			</ul>
			<ul class="nav nav-sidebar">
				<li><a href="#">设置</a></li>
				<li><a href="#">帮助</a></li>
			</ul>
		</div>

		<!-- sidebar-right -->
		<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 col-xs-offset-4 main">
		    <h1 class="page-header">修改用户信息</h1>

		    <form class="form-horizontal" role="form" id="form-group">

			    <input id="js-sendid" type="hidden" value="<?php echo $data['id'] ?>" />
			    <div class="form-group">
			        <label for="username" class="col-md-1 col-sm-2 col-xs-2 control-label pull-left">用户名：</label>
			        <div class="col-md-6 col-sm-10 col-xs-10 space">
			            <input id="username" value="<?php echo $data['username']; ?>" class="form-control" rows="3" placeholder="请输入用户名">
			        </div>
			    </div>

			    <div class="form-group">
			        <label for="password" class="col-md-1 col-sm-2 col-xs-2 control-label pull-left">密码：</label>
			        <div class="col-md-6 col-sm-10 col-xs-10 space">
			            <input id="password" value="<?php echo $data['password']; ?>" type="text" class="form-control" id="text" placeholder="请输入密码">
			        </div>
			    </div>

			    <div class="form-group">
			        <label for="name" class="col-md-1 col-sm-2 col-xs-2 control-label pull-left">姓名：</label>
			        <div class="col-md-6 col-sm-10 col-xs-10 space">
			            <input id="name" value="<?php echo $data['name']; ?>" type="text" class="form-control" id="text" placeholder="请输入姓名">
			        </div>
			    </div>

			    <div class="form-group">
			        <label for="academy" class="col-md-1 col-sm-2 col-xs-2 control-label pull-left">学院：</label>
			        <div class="col-md-6 col-sm-10 col-xs-10 space">
			            <input id="academy" value="<?php echo $data['academy']; ?>" type="text" class="form-control" id="text" placeholder="请输入学院">
			        </div>
			    </div>

			    <div class="form-group">
			        <label for="subject" class="col-md-1 col-sm-2 col-xs-2 control-label pull-left">学科：</label>
			        <div class="col-md-6 col-sm-10 col-xs-10 space">
			            <input id="subject" value="<?php echo $data['subject']; ?>" type="text" class="form-control" id="text" placeholder="请输入学科">
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