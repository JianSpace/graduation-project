<?php
	require_once('../../../connect.php');
	header('Content-type:text/json');
	session_start();

	$selectTitle = mysql_query("SELECT title FROM radioquestion");
	while ($title = mysql_fetch_assoc($selectTitle)) {
		$dataTitle[] = $title;
	};

	$selectA = mysql_query("SELECT A FROM radioquestion");
	while ($A = mysql_fetch_assoc($selectA)) {
		$dataA[] = $A;
	};

	$selectB = mysql_query("SELECT B FROM radioquestion");
	while ($B = mysql_fetch_assoc($selectB)) {
		$dataB[] = $B;
	};

	$selectC = mysql_query("SELECT C FROM radioquestion");
	while ($C = mysql_fetch_assoc($selectC)) {
		$dataC[] = $C;
	};

	$selectD = mysql_query("SELECT D FROM radioquestion");
	while ($D = mysql_fetch_assoc($selectD)) {
		$dataD[] = $D;
	};

	// $selectAnswer = mysql_query("SELECT answer FROM radioquestion");
	// while ($answer = mysql_fetch_assoc($selectAnswer)) {
	// 	$dataAnswer[] = $answer;
	// };

	// $selectAnalysis = mysql_query("SELECT analysis FROM radioquestion");
	// while ($analysis = mysql_fetch_assoc($selectAnalysis)) {
	// 	$dataAnalysis[] = $analysis;
	// };

	$exam_data = array('titles' => $dataTitle, 'A' => $dataA, 'B' => $dataB, 'C' => $dataC, 'D' => $dataD);
	echo {"success": true, "message": "请求成功"};

	$filename = '../exam_question.json';
	if (file_exists($filename)) {
		$data = json_encode($exam_data);
		file_put_contents($filename,$data);
	}


?>