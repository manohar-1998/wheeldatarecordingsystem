<?php
header('Location: //localhost\wel2\wdrs\journ\journ.php');


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



$value1 = $_POST['journdate'];
$value2 = $_POST['q4_pickWhl'];
$value3 = $_POST['q5_utNo'];
$value4 = $_POST['q6_input600'];
$value5 = $_POST['q6_input600'];
$value6 = $_POST['q7_inspectedBy'];
$value7 = $_POST['q8_result'];

$value8 = $_POST['q16_reasonFor'];







$sql = "INSERT INTO journal_inspection VALUES ('$value1','$value2','$value3','$value4', '$value5', '$value6', '$value7','$value8')";                                            

if(!mysql_query($sql)){
	die('Error: ' . mysql_error()); }
	
echo 'Connected Successfully !';

mysql_close();




?>


