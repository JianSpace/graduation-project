<?php

require_once('../../../connect.php');
header('Content-type:text/json');
session_start();

$student_answer = $_POST["student_answer"];
echo {"success": true, "message": "连接成功"};

$selectAnswer = mysql_query("SELECT answer FROM radioquestion");
while ($answer = mysql_fetch_assoc($selectAnswer)) {
	$dataAnswer[] = $answer;
};

$selectAnalysis = mysql_query("SELECT analysis FROM radioquestion");
while ($analysis = mysql_fetch_assoc($selectAnalysis)) {
	$dataAnalysis[] = $analysis;
};




?>