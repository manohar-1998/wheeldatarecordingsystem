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
$value1 = $_POST['q55_wheelSet'];
$value2 = $_POST['q3_searchWheel'];
$value3 = $_POST['q6_wheelReceived'];
$value4 = $_POST['q7_wheelReceived7'];
$value5 = $_POST['q8_profileTurning'];
$value6 = $_POST['pro'];
$value7 = $_POST['q12_profileGuage'];
$value8 = $_POST['q14_profileSize'];
$value9 = $_POST['q17_wheelAssign'];
$value10 = $_POST['q18_profileThread'];
$value11 = $_POST['q19_profileThread19'];
$value12 = $_POST['ID'];
$value13 = $_POST['q11_inspectionEmployee'];
$value14= $_POST['q13_inspectionResult'];
$value15= $_POST['q15_axleJournal'];
$value16= $_POST['q19_profileThread19'];







$sql = "INSERT INTO frm_wheelprofileturning VALUES ('$value1','$value2','$value3','$value4', '$value5','$value6','$value7','$value8','$value9','$value10', '$value11', '$value12','$value13','$value14','$value15','$value16')";                                            

if(!mysql_query($sql)){
	die('Error: ' . mysql_error()); }
	
echo 'Connected Successfully !';

mysql_close();
?>