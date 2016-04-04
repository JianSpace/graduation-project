<?php
    require('../../../connect.php');
    
    $id = $_POST['id'];
	$title = $_POST['title'];
	$A = $_POST['A'];
    $B = $_POST['B'];
    $C = $_POST['C'];
    $D = $_POST['D'];
    $answer = $_POST['answer'];
    $analysis = $_POST['analysis'];
	
	$updatesql = "UPDATE radioquestion SET title='$title',A='$A',B='$B',C='$C',D='$D',answer='$answer',analysis='$analysis' WHERE id='$id'";
	
	if (mysql_query($updatesql)) {
		echo '{"success":true,"message":"试题修改成功！"}';
		return;
		}
	else {
		echo '{"success":false,"message":"试题修改失败！"}';
		return;
		}
	
?>