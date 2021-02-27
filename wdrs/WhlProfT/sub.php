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



$value1 = $_POST['q3_searchWheel'];
$value2 = $_POST['q5_whefelSfet'];
$value3 = $_POST['q55_wheelSet'];
$value4 = $_POST['q5_wheelSet'];
$value5 = $_POST['q5_wheaasdelSet'];
$value6 = $_POST['q5_wheaasdfelSet'];
$value7 = $_POST['q5_wheaasdfelSet'];
$value8 = $_POST['q5_whefaasdfelSet'];
$value9 = $_POST['q5_wheaasdelSet'];
$value10 = $_POST['ssSet'];
$value11 = $_POST['q9_input910'];
$value12 = $_POST['q9_input911'];
$value13 = $_POST['q12_hoausingF5ont'];
$value14 = $_POST['q12_housiangF5ont'];
$value15= $_POST['q12_housicangF5ont'];
$value16 = $_POST['q20_insapectionBy'];
$value1 = $_POST['q8_profileTurning'];









$sql = "INSERT INTO frm_wheelprofileturning VALUES ('$value1','$value2','$value3','$value4','$value5','$value6','$value7','$value8','$value9','$value10','$value11','$value12','$value13','$value14','$value15','$value16','$value17')";                                            

if(!mysql_query($sql)){
	die('Error: ' . mysql_error()); }
header('Location: //localhost\wel2\wdrs\WhlProfT\Whlproft.php');
mysql_close();




?>


