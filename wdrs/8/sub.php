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

$date=$_POST['ID'];
//$date = $_POST['q4_receivedDate[year]'] . '=' . $_POST['q4_receivedDate[month]'] . '-' . $_POST['q4_receivedDate[day]'];
$value1 = $_POST['q3_searchWheel'];
$value2 = $_POST['q13_lhEnd'];
$value3 = $_POST['q14_rhEnd'];
$value4 = $_POST['q18_wheelDistance18'];
$value5 = $_POST['q11_wheelSet11'];
$value6 = $_POST['q16_inspectedBy'];
$value7 = $_POST['q33_result'];





$sql = "INSERT INTO frm_preinspectionofwheelset (Wheel_Set_Number, Inspection_Date, LH_End, RH_End, Wheel_Distance, Inspection_Result, Wheel_Set_Designated_for, Axle_Number)
  VALUES ('$value1','$date','$value2','$value3','$value4', '$value7', '$value5','$value6')";                                            
if(!mysql_query($sql)){
	die('Error: ' . mysql_error()); }
	
echo 'Connected Successfully !';

mysql_close();
?>