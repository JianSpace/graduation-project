<?php
    require('../../../connect.php');
	
	$id = $_GET['id'];
	$deletesql = "DELETE FROM user WHERE id='$id'";
	
	if (mysql_query($deletesql)) {
		echo '{"success":true,"message":"删除成功！"}';
		return;
		}
	else {
		echo '{"success":false,"message":"删除失败！"}';
		return;
		}
?>