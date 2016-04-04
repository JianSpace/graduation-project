<?php
    require('../../../connect.php');
	
	$dataJson = $_POST['data'];
	$dataArray = json_decode($dataJson,true);
	$username = $dataArray['username'];
	$password = $dataArray['password'];
    $email = $dataArray['email'];
    $name = $dataArray['name'];
    $student_number = $dataArray['student_number'];
    $major = $dataArray['major'];
	
	if (empty($username)) {
		echo '{"success": false, "message": "用户名不能为空！"}';
		return;
		}
	if (empty($password)) {
		echo '{"success": false, "message": "密码不能为空！"}';
		return;
		}
	if (empty($email)) {
		echo '{"success": false, "message": "电子邮件不能为空！"}';
		return;
		}
		
	$insertsql = "INSERT INTO student(username,password,name,email,student_number,major) VALUES ('$username','$password','$name','$email','$student_number','$major')";
	
	if (mysql_query($insertsql)) {
		echo '{"success": true, "message": "注册成功"}';
		return;
	    }
	else {
		echo '{"success": false, "message": "注册失败，请重新尝试注册"}';
		return;
		}
?>