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
$value1 = $_POST['RD'];
$value2 = $_POST['q5_wheelSet'];
$value3 = $_POST['q14_wheelReceived14'];
$value4 = $_POST['q6_wheelReceived'];
$value5 = $_POST['DPD'];
$value6 = $_POST['q8_dePressed8'];
$value7 = $_POST['q13_inspectionResult'];
$value8 = $_POST['q16_reasonFor'];









$sql = "INSERT INTO frm_discpressing VALUES ('$value1','$value2','$value3','$value4', '$value5','$value6','$value7','$value8')";                                            

if(!mysql_query($sql)){
	die('Error: ' . mysql_error()); }
	
echo 'Connected Successfully !';

mysql_close();
?>