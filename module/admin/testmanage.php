<?php
    session_start(); 
    require_once('../../connect.php');
	$query = mysql_query("SELECT * FROM radioquestion ORDER BY id DESC");
	
	if ($query && mysql_num_rows($query)) {
		while ($row = mysql_fetch_assoc($query)) {
			$data[] = $row;
			}
		}
	else {
		$data = array();
		}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>试题管理</title>
	<script type="text/javascript" src="\testbank/graduation-project/js/lib/jquery-2.1.4.js"></script>
	<script type="text/javascript" src="\testbank/graduation-project/js/lib/bootstrap.js"></script>
	<link rel="stylesheet" type="text/css" href="\testbank/graduation-project/css/lib/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="\testbank/graduation-project/css/index.css">
    <script type="text/javascript" src="js/testmanage.js"></script>
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
		                <li><a href="testinput.php">试题录入</a></li>
		                <li><a href="testselect.php">试题查询</a></li>
		                <li class="active"><a href="testmanage.php">试题管理</a></li>
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
                <li  class="active"><a href="testmanage.php">试题管理</a></li>
				<li><a href="#">试题组卷</a></li>
			</ul>
			<ul class="nav nav-sidebar">
				<li><a href="#">用户管理</a></li>
			</ul>
			<ul class="nav nav-sidebar">
				<li><a href="#">设置</a></li>
				<li><a href="#">帮助</a></li>
			</ul>
		</div>

		<!-- sidebar-right -->
		<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
		    <h1 class="page-header">试题管理</h1>

		    <form class="form-horizontal" role="form" id="form-group">

			    <div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">最近录入的试题</h3>
					</div>
					<div class="panel-body">
						<table class="table table-hover">
						    <!-- <caption>最近录入的试题</caption> -->
						    <thead>
						        <tr>
						           <th class="col-sm-1">编号</th>
						           <th class="col-sm-9">题目</th>
						           <th class="col-sm-2">操作</th>
						        </tr>
						    </thead>
                            <tbody>
                            <?php 
							    if (!empty($data)) {
									foreach($data as $value) {
							?>
                                    <tr>
                                        <td><?php echo $value['id'] ?></td>
                                        <td><?php echo $value['title'] ?></td>
                                        <td>
                                            <input type="button" class="btn btn-primary js-modify" value="修改">
                                            <input type="button" class="btn btn-danger js-delete" value="删除">
                                        </td>
                                    </tr>
                            <?php
							
                                }
                            }
							
							?>
						    
						        
						   </tbody>
						</table>
					</div>
					<div class="panel-footer">
						<!-- <input type="button" class="btn btn-default" value="首页">
						<input type="button" class="btn btn-default" value="上一页"> -->
						<ul class="pagination">
							<li><a href="#">首页</a></li>
							<li><a href="#">上一页</a></li>
							<li><a href="#">01</a></li>
							<li><a href="#">02</a></li>
							<li><a href="#">03</a></li>
							<li><a href="#">04</a></li>
							<li><a href="#">05</a></li>
							<li><a href="#">06</a></li>
							<li><a href="#">07</a></li>
							<li><a href="#">08</a></li>
							<li><a href="#">09</a></li>
							<li><a href="#">10</a></li>
							<li><a href="#">11</a></li>
							<li><a href="#">12</a></li>
							<li><a href="#">13</a></li>
							<li><a href="#">...</a></li>
							<li><a href="#">...</a></li>
							<li><a href="#">...</a></li>
							<li><a href="#">...</a></li>
							<li><a href="#">...</a></li>
							<li><a href="#">38</a></li>
							<li><a href="#">39</a></li>
							<li><a href="#">下一页</a></li>
							<li><a href="#">尾页</a></li>
						</ul>
						<!-- <input type="button" class="btn btn-default" value="下一页">
						<input type="button" class="btn btn-default" value="尾页"> -->
					</div>
				</div>

			</form>
	    </div>
	</div>
</div>
</body>
</html>