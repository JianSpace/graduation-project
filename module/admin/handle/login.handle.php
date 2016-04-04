<?php
session_start();
header("Content-Type: text/plain; charset=utf-8"); 

mysql_connect('localhost','root','1234');
mysql_select_db('testbank');


$_SESSION['username'] = $_POST["username"];

$username = strtoupper($_POST["username"]);
$password = $_POST["password"];


$query = mysql_query('SELECT * FROM user');
//$arr = mysql_fetch_array($query,MYSQL_ASSOC);


while ($row = mysql_fetch_array($query,MYSQL_ASSOC)) {
		
	for ($i = 0; $i <= count($row); $i++) {
		if ($username === strtoupper($row['username']) && $password === $row['password']) {
			echo '{"success":true,"msg":"正在登录..."}';
			return;
		}
	}
	
}

echo '{"success":false,"msg":"用户名或密码错误，请检查后重试！"}';	
return;




?>