<?php

define('DB_NAME','wdrs');
define('DB_USER','root' );
define('DB_PASSWORD','');
define('DB_HOST','localhost');
error_reporting(0);
$link = mysql_connect("localhost", "root", "");

if(!$link) {die('Could not connect: '.mysql_error());
}

$db_selected = mysql_select_db(wdrs, $link);

if(!db_selected) {
	die('Can\'t use ' . wdrs . ' :'  . mysql_error());
}



$value1 = $_POST['q3_pickWfheel'];
$value2 = $_POST['WD'];
$value3 = $_POST['q4_pnumber'];
$value4 = $_POST['q5_whlDistance'];
$valuex = $_POST['q5_whlDghistance'];

$value5 = $_POST['q6_flangeThickness'];
$value6 = $_POST['q8_mountedPosition'];
$value7 = $_POST['q9_input900'];
$value8 = $_POST['q9_input901'];
$value9 = $_POST['q9_input910'];
$value10 = $_POST['q9_input911'];
$value11 = $_POST['q9_input920'];
$value12 = $_POST['q9_input921'];
$value13 = $_POST['q9_input930'];
$value14 = $_POST['q9_input931'];
$value15 = $_POST['q9_input940'];
$value16 = $_POST['q9_input941'];
$value17 = $_POST['q13_input1300'];
$value18 = $_POST['q13_input1301'];
$value19 = $_POST['q13_input1310'];
$value20 = $_POST['q13_input1311'];
$value21 = $_POST['q13_input1320'];
$value22= $_POST['q13_input1321'];
$value23 = $_POST['q13_input1330'];
$value24 = $_POST['q13_input1331'];
$value25 = $_POST['q13_input1340'];
$value26 = $_POST['q13_input1341'];
$value27 = $_POST['q10_axleCapacity'];
$value28 = $_POST['q11_axleNo'];
$value29 = $_POST['q12_utNo'];
$value30 = $_POST['EID'];
$value31 = $_POST['q12_housicangF5ont'];
$value32 = $_POST['q16_reasonFor'];














$sql = "INSERT INTO wheel_assembly VALUES ('$value1','$value2','$value3','$value4', '$valuex',  '$value5', '$value6', '$value7', '$value8', '$value9', '$value10', '$value11', '$value12', '$value13', '$value14', '$value15', '$value16', '$value17', '$value18', '$value19', '$value20', '$value21', '$value22', '$value23', '$value24', '$value25', '$value26', '$value27', '$value28', '$value29', '$value30', '$value31', '$value32')";                                            

if(!mysql_query($sql)){
	die('Error: ' . mysql_error()); }
	
echo 'Connected Successfully !';
header('Location: //localhost\wel2\wdrs\whl_assembly\WHL_Assembly.php');
mysql_close();




?>


