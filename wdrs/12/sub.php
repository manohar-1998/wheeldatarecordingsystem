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
$value1 = $_POST['q3_pickWheel'];
$value2 = $_POST['UTD'];
$value3 = $_POST['q5_utBy'];
$value4 = $_POST['q6_discutBy'];
$value5 = $_POST['q7_utResult'];








$sql = "INSERT INTO frm_UTofwheelset VALUES ('$value1','$value2','$value3','$value4', '$value5')";                                            

if(!mysql_query($sql)){
	die('Error: ' . mysql_error()); }
	
echo 'Connected Successfully !';

mysql_close();
?>