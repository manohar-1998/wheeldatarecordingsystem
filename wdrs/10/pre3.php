<?php
error_reporting(E_ALL ^ E_DEPRECATED);

 $check=intval($_GET['WS']);
$con = mysql_connect('localhost', 'root', ''); 
if (!$con) {
    die('Could not connect: ' . mysql_error());
}


mysql_select_db("wdrs");
//$query="SELECT Disc_Type FROM disc_boring WHERE Wheel_Set_No='$check'";
$query="SELECT * FROM frm_receipt_of_wheels Where Wheel_Set_Number=$check";
$result=mysql_query($query);


echo "<select name="; echo "q7_wheelReceived7"; echo ">";
while ($row=mysql_fetch_array($result)) { 
echo "<option>"; echo $row['Wheel_Received_From']; echo "</option>";
 } 
echo"</select>";
