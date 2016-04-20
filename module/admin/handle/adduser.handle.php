<?php 
    require('../../../connect.php');
	
	if (!(isset($_POST['username'])) && !(empty($_POST['password']))) {
		echo '{"success":false,"message":"用户名和密码不能为空!"}';
		}   
	$username = $_POST['username'];
    $password = $_POST['password'];
    $name = $_POST['name'];
    $academy = $_POST['academy'];
    $subject = $_POST['subject'];
	
	$insertsql = "INSERT INTO user(username,password,name,academy,subject) VALUES ('$username','$password','$name','$academy','$subject')";

    if (mysql_query($insertsql)) {
		echo '{"success":true,"message":"添加用户成功！"}';
		return;
		}
	else {
		echo '{"success":false,"message":"添加用户失败！"}';
		return;
		}
?>