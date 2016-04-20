<?php
    require('../../../connect.php');
    
    $id = $_POST['id'];
	$username = $_POST['username'];
	$password = $_POST['password'];
    $name = $_POST['name'];
    $academy = $_POST['academy'];
    $subject = $_POST['subject'];
	$updatesql = "UPDATE user SET username='$username',password='$password',name='$name',academy='$academy',subject='$subject' WHERE id='$id'";
	
	if (mysql_query($updatesql)) {
		echo '{"success":true,"message":"用户修改成功！"}';
		return;
		}
	else {
		echo '{"success":false,"message":"用户修改失败！"}';
		return;
		}
	
?>