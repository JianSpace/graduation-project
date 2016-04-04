<?php 
    require('../../../connect.php');

	$verify_username = $_POST['verify_username'];
    $query = mysql_query("SELECT * FROM student ORDER BY id ASC");
    if ($query && mysql_num_rows($query)) {
		while ($row = mysql_fetch_assoc($query)) {
			$data[] = $row;
			}
		}
	else {
		$data = array();
		}
	if (!empty($data)) {
		foreach($data as $value) {
			if ($value['username'] == $verify_username) {
				echo '{"success": false, "message": "✘ 该用户名已存在！"}';
				return;
			}
			else {
				echo '{"success": true, "message": "✔ 可以使用！"}';
				return;
			}
		}
	}
?>