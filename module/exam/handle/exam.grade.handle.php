<?php

require_once('../../../connect.php');
header('Content-type:text/json');
session_start();

$student_answer = $_GET["student_answer"];

$query = mysql_query("SELECT answer FROM radioquestion");
while ($row = mysql_fetch_row($query)) {
	$dataAnswer[] = $row[0];
};

$analysis_query = mysql_query("SELECT analysis FROM radioquestion");
while ($analysis_row = mysql_fetch_row($analysis_query)) {
	$analysis[] = $analysis_row[0];
};

$error_question = array();

for ($i = 0; $i < count($dataAnswer); $i++) {
	if ($student_answer[$i] != $dataAnswer[$i]) {
		$error_question[] = $i;
	}
}

$question_array = array('error_question' => $error_question, 'analysis' => $analysis, 'student_answer' => $student_answer, 'right_answer' => $dataAnswer);

$exam_grade = '../exam_grade.json';
if (file_exists($exam_grade)) {
	file_put_contents($exam_grade,json_encode($question_array));
}

print_r(json_encode($error_question));
?>