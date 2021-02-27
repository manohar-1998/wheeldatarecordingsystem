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
$value2 = $_POST['q21_wheelSet'];
$value3 = $_POST['q18_wheelReceived'];
$value4 = $_POST['q19_wheelReceived19'];
$value5 = $_POST['q8_input800'];
$value6 = $_POST['q8_input810'];
$value7 = $_POST['q8_input820'];
$value8 = $_POST['q8_input830'];
$value9 = $_POST['q8_input801'];
$value10 = $_POST['q8_input811'];
$value11 = $_POST['q8_input821'];
$value12 = $_POST['q8_input831'];
$value13 = $_POST['ID'];
$value14= $_POST['q25_inspectionEmployee25'];
$value15= $_POST['q11_wheelGuage'];
$value16= $_POST['q12_inspectionResult'];
$value17= $_POST['PD'];
$value18= $_POST['q24_pressingEmployee24'];
$value19= $_POST['q15_sidePressure'];
$value20= $_POST['q16_sidePressure16'];








$sql = "INSERT INTO frm_discpressing VALUES ('$value1','$value2','$value3','$value4', '$value5','$value6','$value7','$value8','$value9','$value10', '$value11', '$value12','$value13','$value14','$value15','$value16','$value17','$value18','$value19', '$value20')";                                            

if(!mysql_query($sql)){
	die('Error: ' . mysql_error()); }
	
echo 'Connected Successfully !';

mysql_close();
?>