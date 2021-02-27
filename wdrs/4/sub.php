<?php

define('DB_NAME','wdrs');
define('DB_USER','root' );
define('DB_PASSWORD','');
define('DB_HOST','localhost');
error_reporting(0);
$link = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);

if(!$link) {die('Could not connect: '.mysql_error());
}

$db_selected = mysql_select_db(DB_NAME, $link);

if(!db_selected) {
	die('Can\'t use ' . DB_NAME . ' :'  . mysql_error());
}


//$date = $_POST['q4_receivedDate[year]'] . '=' . $_POST['q4_receivedDate[month]'] . '-' . $_POST['q4_receivedDate[day]'];
$value1 = $_POST['q5_wheelSet'];
$value2 = $_POST['q23_discHeat'];
$value3 = $_POST['q24_discMfg'];
$value4 = $_POST['q8_discType'];
$value5 = $_POST['DBD'];
$value6 = $_POST['q12_discBoring'];
$value7 = $_POST['q20_discBoring20'];
$value8 = $_POST['q21_discRa'];
$value9 = $_POST['DID'];
$value10 = $_POST['q16_discInspection16'];
$value11 = $_POST['q13_discInspection'];








$sql = "INSERT INTO frm_discboring	 VALUES ('$value1','$value2','$value3','$value4', '$value5','$value6','$value7','$value8','$value9','$value10', '$value11')";                                            

if(!mysql_query($sql)){
	die('Error: ' . mysql_error()); }
	
echo 'Connected Successfully !';

mysql_close();
?>