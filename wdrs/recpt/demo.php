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


$value1 = $_POST['seldate'];
$value2 = $_POST['q5_wheelSet'];
$value3 = $_POST['q10_wheelReceived10'];
$value4 = $_POST['q12_whegelReceived'];
$value5 = $_POST['q5_cataghgoryOf'];
$value6 = $_POST['q6_axleCapacity'];
$value7 = $_POST['q9_housingFront'];



//$sql = "INSERT INTO receipt_of_wheels (Received_Date, Wheel_Set_No, Wheel_Received_For, Wheel_Received_From, Axle_Capacity, Housing_Front_Cover, Catagory_of_Wheels) VALUES (NULL,'$value1','$value2','$value3','$value4','$value5','$value6')";
$sql = "INSERT INTO frm_receipt_of_wheels (Received_Date,Wheel_Received_For,Wheel_Received_From,Catagory_of_Wheel,Axle_Capacity,Housing_Front_Cover,Check_Insp) VALUES ('$value1','$value3','$value4','$value5','$value6','$value7','0')";                                             
//$sql = "INSERT INTO receipt_of_wheels (Received_Date,Wheel_Set_No,Wheel_Received_For)VALUES ('NULL','$value1','$value2')";

if(!mysql_query($sql)){
	die('Error: ' . mysql_error()); }
	

header('Location: //localhost\wel2\wdrs\recpt\frm_Receipt_of_wheels.php');
mysql_close();
?>