<?php
error_reporting(E_ALL ^ E_DEPRECATED);

 $check=intval($_GET['WS']);
$con = mysql_connect('localhost', 'root', ''); 
if (!$con) {
    die('Could not connect: ' . mysql_error());
}


mysql_select_db("wdrs");
//$query="SELECT Disc_Type FROM disc_boring WHERE Wheel_Set_No='$check'";
$query="SELECT emp_no FROM frm_empmaster Where emp_no=$check";
$result=mysql_query($query);




//echo"<input"; echo "type="; echo"text"; echo"name="; echo"q99_designation"; echo"value="; echo$row['emp_no']  echo"size="; echo"20"; echo"/>";


echo "<select name="; echo "q99_designation"; echo ">";
while ($row=mysql_fetch_array($result)) { 
echo "<option>"; echo $row['emp_no']; echo "</option>";

 } 
echo"</select>";


//______________________WRF_______________________________


?>