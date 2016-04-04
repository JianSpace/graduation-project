<?php
	require('../../../connect.php');

	$email = $_POST['email'];
	$emailquery = mysql_query("SELECT * FROM student ORDER BY id ASC");
    if ($emailquery && mysql_num_rows($emailquery)) {
		while ($emailrow = mysql_fetch_assoc($emailquery)) {
			$emaildata[] = $emailrow;
			}
		}
	else {
		$emaildata = array();
		}
	if (!empty($emaildata)) {
		foreach($emaildata as $emailvalue) {
			if ($emailvalue['email'] == $email) {
				echo '{"success": false, "message": "✘ 该邮箱已注册！"}';
				return;
			}
			else {
				echo '{"success": true, "message": "✔ 可以使用！"}';
				return;
			}
		}
	}
?>