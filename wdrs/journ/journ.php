
<?php 
error_reporting(E_ALL ^ E_DEPRECATED);
error_reporting(0);
$con = mysql_connect('localhost', 'root', ''); 
if (!$con) {
    die('Could not connect: ' . mysql_error());
}
mysql_select_db("wdrs");
$query="SELECT * FROM frm_preinspection";
$result=mysql_query($query);



$query2="SELECT * FROM frm_empmaster";
$result2=mysql_query($query2);






?>


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html class="supernova"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="alternate" type="application/json+oembed" href="https://www.jotform.com/oembed/?format=json&amp;url=http%3A%2F%2Fwww.jotform.com%2Fform%2F81768902445465" title="oEmbed Form"><link rel="alternate" type="text/xml+oembed" href="https://www.jotform.com/oembed/?format=xml&amp;url=http%3A%2F%2Fwww.jotform.com%2Fform%2F81768902445465" title="oEmbed Form">
<meta property="og:title" content="Journal Inspection" >
<meta property="og:url" content="https://form.jotform.me/81768902445465" >
<meta property="og:description" content="Please click the link to complete this form.">
<link rel="shortcut icon" href="https://cdn.jotfor.ms/favicon.ico">
<link rel="canonical" href="https://form.jotform.me/81768902445465" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<meta name="HandheldFriendly" content="true" />
<title>Journal Inspection</title>
<link href="https://cdn.jotfor.ms/static/formCss.css?3.3.6619" rel="stylesheet" type="text/css" />
<link type="text/css" rel="stylesheet" href="https://cdn.jotfor.ms/css/styles/nova.css?3.3.6619" />
<link type="text/css" media="print" rel="stylesheet" href="https://cdn.jotfor.ms/css/printForm.css?3.3.6619" />
<link type="text/css" rel="stylesheet" href="https://cdn.jotfor.ms/themes/CSS/566a91c2977cdfcd478b4567.css?"/>
<style type="text/css">
    .form-label-left{
        width:150px;
    }
    .form-line{
        padding-top:12px;
        padding-bottom:12px;
    }
    .form-label-right{
        width:150px;
    }
    body, html{
        margin:0;
        padding:0;
        background:#fff;
    }

    .form-all{
        margin:0px auto;
        padding-top:0px;
        width:1450px;
        color:#555 !important;
        font-family:"Lucida Grande", "Lucida Sans Unicode", "Lucida Sans", Verdana, sans-serif;
        font-size:14px;
    }
</style>

<style type="text/css" id="form-designer-style">
    /* Injected CSS Code */
.form-label.form-label-auto { display: block; float: none; text-align: left; width: inherit; } /*PREFERENCES STYLE*/
    .form-all {
      font-family: Lucida Grande, sans-serif;
    }
    .form-all .qq-upload-button,
    .form-all .form-submit-button,
    .form-all .form-submit-reset,
    .form-all .form-submit-print {
      font-family: Lucida Grande, sans-serif;
    }
    .form-all .form-pagebreak-back-container,
    .form-all .form-pagebreak-next-container {
      font-family: Lucida Grande, sans-serif;
    }
    .form-header-group {
      font-family: Lucida Grande, sans-serif;
    }
    .form-label {
      font-family: Lucida Grande, sans-serif;
    }
  
    .form-label.form-label-auto {
      
    display: block;
    float: none;
    text-align: left;
    width: 100%;
  
    }
  
    .form-line {
      margin-top: 12px;
      margin-bottom: 12px;
    }
  
    .form-all {
      width: 1450px;
    }
  
    .form-label-left,
    .form-label-right,
    .form-label-left.form-label-auto,
    .form-label-right.form-label-auto {
      width: 150px;
    }
  
    .form-all {
      font-size: 14px
    }
    .form-all .qq-upload-button,
    .form-all .qq-upload-button,
    .form-all .form-submit-button,
    .form-all .form-submit-reset,
    .form-all .form-submit-print {
      font-size: 14px
    }
    .form-all .form-pagebreak-back-container,
    .form-all .form-pagebreak-next-container {
      font-size: 14px
    }
  
    .supernova .form-all, .form-all {
      background-color: #fff;
      border: 1px solid transparent;
    }
  
    .form-all {
      color: #555;
    }
    .form-header-group .form-header {
      color: #555;
    }
    .form-header-group .form-subHeader {
      color: #555;
    }
    .form-label-top,
    .form-label-left,
    .form-label-right,
    .form-html,
    .form-checkbox-item label,
    .form-radio-item label {
      color: #555;
    }
    .form-sub-label {
      color: #6f6f6f;
    }
  
    .supernova {
      background-color: #f5f5f5;
    }
    .supernova body {
      background: transparent;
    }
  
    .form-textbox,
    .form-textarea,
    .form-radio-other-input,
    .form-checkbox-other-input,
    .form-captcha input,
    .form-spinner input {
      background-color: #fff;
    }
  
    .supernova {
      background-image: none;
    }
    #stage {
      background-image: none;
    }
  
    .form-all {
      background-image: none;
    }
  
  .ie-8 .form-all:before { display: none; }
  .ie-8 {
    margin-top: auto;
    margin-top: initial;
  }
  
  /*PREFERENCES STYLE*//*__INSPECT_SEPERATOR__*/
    /* Injected CSS Code */
</style>








<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color:  #58dd1f;
  color: black;
}

.topnav a.active {
  background-color: #4CAF50;
  color: white;
}
</style>

<div class="topnav">
  <a href="//localhost\wel2\wdrs\recpt\frm_Receipt_of_wheels.php">Receipt of Wheels</a>
  <a href="//localhost\wel2\wdrs\PreInsp\preinsp.php">Pre Inspection of Wheel</a>
  <a href="//localhost\wel2\wdrs\WhlProfT\Whlproft.php">Wheel Profile Turning</a>
 <a href="//localhost\wel2\wdrs\UT\UT_of_WheelSet.php">UT of Wheel Set</a>
    <a href="//localhost\wel2\wdrs\journ\journ.php">Journal Inspection</a>
  <a href="//localhost\wel2\wdrs\whl_assembly\whl_assembly.php">Wheel assembly</a>


</div>


<script src="https://cdn.jotfor.ms/static/prototype.forms.js" type="text/javascript"></script>
<script src="https://cdn.jotfor.ms/static/jotform.forms.js?3.3.6619" type="text/javascript"></script>
<script type="text/javascript">
   JotForm.init(function(){

 JotForm.calendarMonths = ["January","February","March","April","May","June","July","August","September","October","November","December"];
 JotForm.calendarDays = ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"];
 JotForm.calendarOther = {"today":"Today"};
 var languageOptions = document.querySelectorAll('#langList li'); 
 for(var langIndex = 0; langIndex < languageOptions.length; langIndex++) { 
   languageOptions[langIndex].on('click', function(e) { setTimeout(function(){ JotForm.setCalendar("3", false, {"days":{"monday":true,"tuesday":true,"wednesday":true,"thursday":true,"friday":true,"saturday":true,"sunday":true},"future":true,"past":true,"custom":false,"ranges":false,"start":"","end":""}); }, 0); });
 } 
 JotForm.setCalendar("3", false, {"days":{"monday":true,"tuesday":true,"wednesday":true,"thursday":true,"friday":true,"saturday":true,"sunday":true},"future":true,"past":true,"custom":false,"ranges":false,"start":"","end":""});
      JotForm.alterTexts(undefined);
	JotForm.clearFieldOnHide="disable";
	JotForm.submitError="jumpToFirstError";
    /*INIT-END*/
});

   JotForm.prepareCalculationsOnTheFly([null,{"name":"heading","qid":"1","text":"Journal Inspection","type":"control_head"},{"name":"save","qid":"2","text":"Save","type":"control_button"},{"description":"","name":"date","qid":"3","text":"Date","type":"control_datetime"},{"description":"","name":"pickWhl","qid":"4","subLabel":"","text":"Pick WHL Set No","type":"control_dropdown"},{"description":"","name":"utNo","qid":"5","subLabel":"","text":"UT No","type":"control_textbox"},{"description":"","name":"input6","qid":"6","text":"","type":"control_matrix"},{"description":"","name":"inspectedBy","qid":"7","subLabel":"","text":"Inspected By","type":"control_dropdown"},{"description":"","name":"result","qid":"8","subLabel":"","text":"Result","type":"control_dropdown"}]);
   setTimeout(function() {
JotForm.paymentExtrasOnTheFly([null,{"name":"heading","qid":"1","text":"Journal Inspection","type":"control_head"},{"name":"save","qid":"2","text":"Save","type":"control_button"},{"description":"","name":"date","qid":"3","text":"Date","type":"control_datetime"},{"description":"","name":"pickWhl","qid":"4","subLabel":"","text":"Pick WHL Set No","type":"control_dropdown"},{"description":"","name":"utNo","qid":"5","subLabel":"","text":"UT No","type":"control_textbox"},{"description":"","name":"input6","qid":"6","text":"","type":"control_matrix"},{"description":"","name":"inspectedBy","qid":"7","subLabel":"","text":"Inspected By","type":"control_dropdown"},{"description":"","name":"result","qid":"8","subLabel":"","text":"Result","type":"control_dropdown"}]);}, 20); 
</script>
</head>
<body>
<form class="jotform-form" action="sub.php" method="post" name="form_81768902445465" id="81768902445465" accept-charset="utf-8">
  <input type="hidden" name="formID" value="81768902445465" />
  <div class="form-all">
    <ul class="form-section page-section">
      <li id="cid_1" class="form-input-wide" data-type="control_head">
        <div class="form-header-group ">
          <div class="header-text httal htvam">
            <h2 id="header_1" class="form-header" data-component="header">
              Journal Inspection
            </h2>
          </div>
        </div>
      </li>
      <li class="form-line form-line-column form-col-1" data-type="control_datetime" id="id_3">
        <label class="form-label form-label-top" id="label_3" for="lite_mode_3"> Date* </label>
       
    <input type="date" name="journdate" id="jd">

      </li>
      <li class="form-line form-line-column form-col-2" data-type="control_dropdown" id="id_4">
        <label class="form-label form-label-top" id="label_4" for="input_4"> Pick WHL Set No* </label>
        <div id="cid_4" class="form-input-wide">
          <select class="form-dropdown" id="input_4" name="q4_pickWhl" style="width:150px" data-component="dropdown">

  <option value="">Select Wheel No</option>
  <?php while ($row=mysql_fetch_array($result)) { ?>
  <option value=<?php echo $row['Wheel_Set_Number']?>><?php echo $row['Wheel_Set_Number']?></option>
  <?php } ?>


          </select>
        </div>
      </li>
      <li class="form-line form-line-column form-col-3" data-type="control_textbox" id="id_5">
        <label class="form-label form-label-top" id="label_5" for="input_5"> Journal No* </label>
        <div id="cid_5" class="form-input-wide">
          <input type="text" id="input_5" name="q5_utNo" data-type="input-textbox" class="form-textbox" size="20" value="" data-component="textbox" />
        </div>
      </li>
      <li class="form-line form-line-column form-col-4" data-type="control_matrix" id="id_6">
        <label class="form-label form-label-top" id="label_6" for="input_6">  </label>
        <div id="cid_6" class="form-input-wide">
          <table summary="" cellPadding="4" cellSpacing="0" class="form-matrix-table" data-component="matrix">
            <tbody>
              <tr>
                <th style="border:none">
                   
                </th>
                <th class="form-matrix-column-headers form-matrix-column_0">
                  Side1
                </th>
                <th class="form-matrix-column-headers form-matrix-column_1">
                  Side2
                </th>
              </tr>
              <tr>
                <th style="text-align:left" class="form-matrix-row-headers">
                  Journal Dia
                </th>
                <td style="text-align:center" class="form-matrix-values">
                  <input type="text" id="input_6_0_0" class="form-textbox" size="5" name="q6_input600" value="" />
                </td>
                <td style="text-align:center" class="form-matrix-values">
                  <input type="text" id="input_6_0_1" class="form-textbox" size="5" name="q6_input601" value="" />
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </li>
      <li class="form-line form-line-column form-col-5" data-type="control_dropdown" id="id_7">
        <label class="form-label form-label-top" id="label_7" for="input_7"> Inspected By Employee ID*</label>
        <div id="cid_7" class="form-input-wide">
          <select onChange="getID(this.value);" class="form-dropdown" id="input_7" name="q7_inspectedBy" style="width:150px" data-component="dropdown">
 
                     <option value="">Select Employee</option>
  <?php while ($row2=mysql_fetch_array($result2)) { ?>
  <option value=<?php echo $row2['Emp_No']?>><?php echo $row2['Emp_No'] ?></option>
  <?php } ?>



          </select>
        </div>
      </li>


            </li>
      <li class="form-line form-line-column form-col-5" data-type="control_dropdown" id="ida_7">
        <label class="form-label form-label-top" id="labeal_7" for="input_7"> Emp Name </label>
        <div id="cidf_7" class="form-input-wide">
          <select   class="form-dropdown" id="input_7" name="q7_insaaectedBy" style="width:150px" data-component="dropdown">



          </select>
        </div>
      </li>

      <li class="form-line" data-type="control_dropdown" id="id_8">
        <label class="form-label form-label-top form-label-auto" id="label_8" for="input_8"> Result* </label>
        <div id="cid_8" class="form-input-wide">
          <select class="form-dropdown" id="getFname" name="q8_result" style="width:150px" data-component="dropdown">
            <option value=" ">Select  </option>
            <option value="OK"> OK </option>
            <option value="NOTOK"> NOT OK </option>
          </select>
        </div>
      </li>





         <li class="form-line" data-type="control_textarea" id="id_16">
             <div   id="NOTOK"  style="display : none" class="RFR NOTOK">
        <label class="form-label form-label-left form-label-auto"   id="labfel_16" for="input_16"> Reason For Rejection (Max : 250 chars.) </label>
    
          <textarea id="input_16" class="form-textarea1" name="q16_reasonFor" cols="40" rows="6" data-component="textarea"></textarea>
        </div>
      </li>




      <li class="form-line" data-type="control_button" id="id_2">
        <div id="cid_2" class="form-input-wide">
          <div style="margin-left:156px" class="form-buttons-wrapper">
            <button id="input_2" type="submit" class="form-submit-button" data-component="button">
              Save
            </button>
          </div>
        </div>
      </li>
      <li style="display:none">
        Should be Empty:
        <input type="text" name="website" value="" />
      </li>
    </ul>
  </div>
</form>
</body>
</html>
<script type="text/javascript">JotForm.ownerView=true;</script>





<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script language="javascript" type="text/javascript">

$(function() {
  $('#getFname').change(function(){
    $('.RFR').hide();
    $('#' + $(this).val()).show();
  });
});







  

function admSelectCheck(nameSelect)
{
    console.log(nameSelect);
    if(nameSelect){
        admOptionValue = document.getElementById("OK").value;
        if(admOptionValue == nameSelect.value){
            document.getElementById("admDivCheck").style.display = "block";
        }
        else{
            document.getElementById("admDivCheck").style.display = "none";
        }
    }
    else{
        document.getElementById("admDivCheck").style.display = "none";
    }
}




document.getElementById('81651655084460').q12_housicangF5ont.onchange = function() {
    var newaction = this.value;
    document.getElementById('81651655084460').action = newaction;
};

function getXMLHTTP() { //fuction to return the xml http object
    var xmlhttp=false;  
    try{
      xmlhttp=new XMLHttpRequest();
    }
    catch(e)  {   
      try{      
        xmlhttp= new ActiveXObject("Microsoft.XMLHTTP");
      }
      catch(e){
        try{
        xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
        }
        catch(e1){
          xmlhttp=false;
        }
      }
    }
      
    return xmlhttp;
    }
  


   function getID(WSNO) {    
    
    var strURL="ID.php?WS="+WSNO;
    var req = getXMLHTTP();
    
    if (req) {
      
      req.onreadystatechange = function() {
        if (req.readyState == 4) {
          // only if "OK"
          if (req.status == 200) {            
            document.getElementById('cidf_7').innerHTML=req.responseText;

           
          } else {
            alert("Problem while using XMLHTTP:\n" + req.statusText);
          }          
        }       
      }     
      req.open("GET", strURL, true);
      req.send(null);
    }   
  }



 </script>

