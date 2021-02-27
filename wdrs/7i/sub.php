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
$value1 = $_POST['q23_d4iscHeat']; 
$value2 = $_POST['q23_dis1cHeat'];
$value3 = $_POST['q9_designation'];
$value4 = $_POST['q10_section'];
$value5 = $_POST['q110_section'];

 //$_POST['active'] = ($_POST['active'] == 'on') ? 1 : 0; 
$_POST['q11_input1100'] = ($_POST['q11_input1100'] == 'on' ) ? 1 : 0; //6
$_POST['q11_input1111'] = ($_POST['q11_input1111'] == 'on') ? 1 : 0; //7
$_POST['q11_input1120'] = ($_POST['q11_input1120'] == 'on') ? 1 : 0; //8
$_POST['q11_input1130'] = ($_POST['q11_input1130'] == 'on') ? 1 : 0; //9
$_POST['q11_input1140'] = ($_POST['q11_input1140'] == 'on') ? 1 : 0; //10
$_POST['q12_typeA00'] = ($_POST['q12_typeA00'] == 'on') ? 1 : 0; //11
$_POST['q12_typeA11'] = ($_POST['q12_typeA11'] == 'on') ? 1 : 0; //12
$_POST['q12_typeA22'] = ($_POST['q12_typeA22'] == 'on') ? 1 : 0; //13
$_POST['q12_typeA33'] = ($_POST['q12_typeA33'] == 'on') ? 1 : 0; //14
$_POST['q12_typeA44'] = ($_POST['q12_typeA44'] == 'on') ? 1 : 0; //15

$value6 = $_POST['q11_input1100'];
$value7 = $_POST['q11_input1111'];
$value8 = $_POST['q11_input1120'];
$value9 = $_POST['q11_input1130'];
$value10 = $_POST['q11_input1140'];
$value11 = $_POST['q12_typeA00'];
$value12 = $_POST['q12_typeA11'];
$value13 = $_POST['q12_typeA22'];
$value14= $_POST['q12_typeA33'];
$value15= $_POST['q12_typeA44'];








  if (isset($_POST['submit'])) {   //SUBMIT
  ///do save processing




	


$sql = "INSERT INTO frm_empmaster VALUES ('$value1','$value2','$value3','$value4', '$value5','$value6','$value7','$value8','$value9','$value10', '$value11', '$value12','$value13','$value14','$value15')";
	                               
if(!mysql_query($sql)){
	die('Error: ' . mysql_error()); }
	
echo 'Connected Successfully !';

mysql_close();





  }
    elseif (isset($_POST['updates']))   //UPDATE
 {
 






//mysql_query("UPDATE frm_empmaster SET Designation = 'fuuu', Section = 'poop' WHERE emp_No = '$value1'");
mysql_query("UPDATE frm_empmaster SET `Emp_No`='$value1', `Emp_Name`='$value2', `Designation`='$value3', `Section`='$value4', `Role`='$value5', `Axle_Grinding`='$value6', `Axle_Turning`='$value7', `Disc_Boring`='$value8', `DiscDe_Pressing`='$value9', `Disc_pressing`='$value10', `DPT_Roller_Bearing`='$value11', `Inspection`='$value12', `UT_Test`='$value13', `Wheel_Mounting`='$value14', `Wheel_Profile_Turning`='$value15' WHERE emp_No = '$value1'");
//`Emp_No`, `Emp_Name`, `Designation`, `Section`, `Role`, `Axle_Grinding`, `Axle_Turning`, `Disc_Boring`, `DiscDe_Pressing`, `Disc_pressing`, `DPT_Roller_Bearing`, `Inspection`, `UT_Test`, `Wheel_Mounting`, `Wheel_Profile_Turning`
//NSERT INTO `frm_empmaster` (`Emp_No`, `Emp_Name`, `Designation`, `Section`, `Role`, `Axle_Grinding`, `Axle_Turning`, `Disc_Boring`, `DiscDe_Pressing`, `Disc_pressing`, `DPT_Roller_Bearing`, `Inspection`, `UT_Test`, `Wheel_Mounting`, `Wheel_Profile_Turning`) VALUES ('1', '', '', '', '', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1');

if(!mysql_query($sql)){
	die('Error: ' . mysql_error()); }
	
echo 'Connected Successfully !';

mysql_close();




  ///do publish processing here
}


?>

