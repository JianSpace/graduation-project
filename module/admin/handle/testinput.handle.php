<?php 
    require('../../../connect.php');
	
	if (!(isset($_POST['title'])) && !(empty($_POST['title']))) {
		echo '{"success":false,"message":"标题不能为空!"}';
		}   
	$title = $_POST['title'];
    $A = $_POST['A'];
    $B = $_POST['B'];
    $C = $_POST['C'];
    $D = $_POST['D'];
    $answer = $_POST['answer'];
    $analysis = $_POST['analysis'];
	
	$insertsql = "INSERT INTO radioquestion(title,A,B,C,D,answer,analysis) VALUES ('$title','$A','$B','$C','$D','$answer','$analysis')";

    if (mysql_query($insertsql)) {
		echo '{"success":true,"message":"录入试题成功！"}';
		return;
		}
	else {
		echo '{"success":false,"message":"录入试题失败！"}';
		return;
		}
?>