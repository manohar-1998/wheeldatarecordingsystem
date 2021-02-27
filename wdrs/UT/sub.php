<?php

define('DB_NAME','wdrs');
define('DB_USER','root' );
define('DB_PASSWORD','');
define('DB_HOST','localhost');
error_reporting(0);
$link = mysql_connect("localhost", "root", "");

if(!$link) {die('Could not connect: '.mysql_error());
}

$db_selected = mysql_select_db(DB_NAME, $link);

if(!db_selected) {
	die('Can\'t use ' . DB_NAME . ' :'  . mysql_error());
}



$value1 = $_POST['q3_pickWheel'];
$value2 = $_POST['utdate'];
$value3 = $_POST['q3_pickghWheel'];
$value4 = $_POST['axlenum'];
$valuex = $_POST['q5_axleUt'];
$valuey = $_POST['q6_discutBy'];
$value5 = $_POST['q3_pDickWheel'];
$value6 = $_POST['q3_pDicekWheel'];
$value7 = $_POST['q7_utResult'];
$value8 = $_POST['q16_reasonFor'];










$sql = "INSERT INTO ut_of_wheelset VALUES ('$value1','$value2','$value3','$value4','$valuex','$valuey', '$value5','$value6','$value7','$value8')";                                            

if(!mysql_query($sql)){
	die('Error: ' . mysql_error()); }

header('Location: //localhost\wel2\wdrs\UT\UT_of_WheelSet.php');
mysql_close();




?>


