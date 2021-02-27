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


$value1 = $_POST['D'];
$value2 = $_POST['q5_catsfagoryOf'];
$value3 = $_POST['q5_catagoryOf'];
$value4 = $_POST['q6_axleCapacity'];
$value5 = $_POST['q11_wheelReceived'];
$value6 = $_POST['q12_housingFront'];
$value7 = $_POST['q12_hoausingF5ont'];
$value8 = $_POST['q12_housiangF5ont'];
$value9 = $_POST['q9_input900'];
$value10 = $_POST['q9_input901'];
$value11= $_POST['q9_input910'];
$value12 = $_POST['q9_input911'];
$value13 = $_POST['q9_input920'];
$value14 = $_POST['q9_input921'];
$value15 = $_POST['q9_input930'];
$value16 = $_POST['q9_input931'];
$value17 = $_POST['q9_input940'];
$value18 = $_POST['q9_input941'];
$value19 = $_POST['q20_insapectionBy'];
$value20 = $_POST['q20_inspectionBy'];
$value21 = $_POST['q12_housicangF5ont'];
$value22 = $_POST['q16_reasonFor'];





$sql = "INSERT INTO frm_preinspection (`Date`, `Wheel_Set_Number`, `Catagory_of_Wheel`, `Axle_Capacity`, `Wheel_Received_From`, `Housing Front Cover`, `Wheel_Distance`, `Flange_Thickness`, `Disc_No_S1`, `Disc_No_S2`, `Bearing_No_S1`, `Bearing_No_S2`, `BTT_DIA_S1`, `BTT_DIA_S2`, `Make_S1`, `Make_S2`, `Last_Mounting_S1`, `Last_Mounting_S2`, `Emp_No`, `emp_name`, `Result`, `RFR`) VALUES ('$value1','$value2','$value3','$value4', '$value5', '$value6','$value7','$value8','$value9','$value10','$value11','$value12','$value13','$value14','$value15','$value16','$value17','$value18','$value19','$value20','$value21','$value22')";                                            



if(!mysql_query($sql)){
	die('Error: ' . mysql_error()); }
	

header('Location: //localhost\wel2\wdrs\PreInsp\preinsp.php');
mysql_close();
?>