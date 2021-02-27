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
$value5 = $_POST['ATD'];
$value6 = $_POST['q8_axleTurning8'];
$value7 = $_POST['q9_input900'];
$value8 = $_POST['q9_input901'];
$value9 = $_POST['q9_input910'];
$value10 = $_POST['q9_input911'];
$value11 = $_POST['q9_input920'];
$value12 = $_POST['q9_input921'];
$value13 = $_POST['q9_input930'];
$value14= $_POST['q9_input931'];
$value15= $_POST['q9_input940'];
$value16= $_POST['q9_input941'];
$value17= $_POST['q9_input950'];
$value18= $_POST['q9_input951'];
$value19= $_POST['ID'];
$value20= $_POST['q12_inspectionEmployee'];
$value21= $_POST['q16_axleCapacity'];
$value22= $_POST['q18_axleBarrel'];
$value23= $_POST['q13_inspectionResult'];








$sql = "INSERT INTO frm_axleturning VALUES ('$value1','$value2','$value3','$value4', '$value5',
	                                         '$value6','$value7','$value8','$value9','$value10', 
	                                         '$value11', '$value12','$value13','$value14','$value15'
	                                         ,'$value16','$value17','$value18','$value19',
	                                         '$value20','$value21','$value22','$value23')";                                            

if(!mysql_query($sql)){
	die('Error: ' . mysql_error()); }
	
echo 'Connected Successfully !';

mysql_close();
?>