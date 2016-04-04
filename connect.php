<?php 
    require_once('config.php');
    mysql_connect(HOST,USERNAME,PASSWORD);
    mysql_select_db('testbank');
    mysql_query('SET NAMES utf8');
?>