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



$query3="SELECT * FROM frm_empmaster";
$result3=mysql_query($query3);






?>



<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html class="supernova"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="alternate" type="application/json+oembed" href="https://www.jotform.com/oembed/?format=json&amp;url=http%3A%2F%2Fwww.jotform.com%2Fform%2F81581460992464" title="oEmbed Form"><link rel="alternate" type="text/xml+oembed" href="https://www.jotform.com/oembed/?format=xml&amp;url=http%3A%2F%2Fwww.jotform.com%2Fform%2F81581460992464" title="oEmbed Form">
<meta property="og:title" content="UT of WheelSet" >
<meta property="og:url" content="https://form.jotform.me/81581460992464" >
<meta property="og:description" content="Please click the link to complete this form.">
<link rel="shortcut icon" href="https://cdn.jotfor.ms/favicon.ico">
<link rel="canonical" href="https://form.jotform.me/81581460992464" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<meta name="HandheldFriendly" content="true" />
<title>UT of WheelSet</title>
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

<meta meta name="viewport" content="width=device-width, initial-scale=1">

<div class="topnav">
  <a href="//localhost\wel2\wdrs\recpt\frm_Receipt_of_wheels.php">Receipt of Wheels</a>
  <a href="//localhost\wel2\wdrs\PreInsp\preinsp.php">Pre Inspection of Wheel</a>
  <a href="//localhost\wel2\wdrs\WhlProfT\Whlproft.php">Wheel Profile Turning</a>
 <a href="//localhost\wel2\wdrs\UT\UT_of_WheelSet.php">UT of Wheel Set</a>
    <a href="//localhost\wel2\wdrs\journ\journ.php">Journal Inspection</a>
  <a href="//localhost\wel2\wdrs\whl_assembly\whl_assembly.php">Wheel assembly</a>


</div>

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


























<script src="https://cdn.jotfor.ms/static/prototype.forms.js" type="text/javascript"></script>
<script src="https://cdn.jotfor.ms/static/jotform.forms.js?3.3.6619" type="text/javascript"></script>
<script type="text/javascript">
   JotForm.init(function(){

 JotForm.calendarMonths = ["January","February","March","April","May","June","July","August","September","October","November","December"];
 JotForm.calendarDays = ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"];
 JotForm.calendarOther = {"today":"Today"};
 var languageOptions = document.querySelectorAll('#langList li'); 
 for(var langIndex = 0; langIndex < languageOptions.length; langIndex++) { 
   languageOptions[langIndex].on('click', function(e) { setTimeout(function(){ JotForm.setCalendar("4", false, {"days":{"monday":true,"tuesday":true,"wednesday":true,"thursday":true,"friday":true,"saturday":true,"sunday":true},"future":true,"past":true,"custom":false,"ranges":false,"start":"","end":""}); }, 0); });
 } 
 JotForm.setCalendar("4", false, {"days":{"monday":true,"tuesday":true,"wednesday":true,"thursday":true,"friday":true,"saturday":true,"sunday":true},"future":true,"past":true,"custom":false,"ranges":false,"start":"","end":""});
      JotForm.alterTexts(undefined);
	JotForm.clearFieldOnHide="disable";
	JotForm.submitError="jumpToFirstError";
    /*INIT-END*/
});

   JotForm.prepareCalculationsOnTheFly([null,{"name":"utOf","qid":"1","text":"UT of WheelSet","type":"control_head"},{"name":"save","qid":"2","text":"save","type":"control_button"},{"description":"","name":"pickWheel","qid":"3","subLabel":"","text":"Pick Wheel Set Number","type":"control_dropdown"},{"description":"","name":"utDate","qid":"4","text":"UT Date","type":"control_datetime"},{"description":"","name":"axleUt","qid":"5","subLabel":"","text":"Axle UT by Empl","type":"control_dropdown"},{"description":"","name":"discutBy","qid":"6","subLabel":"","text":"DiscUT by Empl","type":"control_dropdown"},{"description":"","name":"utResult","qid":"7","subLabel":"","text":"UT Result","type":"control_dropdown"}]);
   setTimeout(function() {
JotForm.paymentExtrasOnTheFly([null,{"name":"utOf","qid":"1","text":"UT of WheelSet","type":"control_head"},{"name":"save","qid":"2","text":"save","type":"control_button"},{"description":"","name":"pickWheel","qid":"3","subLabel":"","text":"Pick Wheel Set Number","type":"control_dropdown"},{"description":"","name":"utDate","qid":"4","text":"UT Date","type":"control_datetime"},{"description":"","name":"axleUt","qid":"5","subLabel":"","text":"Axle UT by Empl","type":"control_dropdown"},{"description":"","name":"discutBy","qid":"6","subLabel":"","text":"DiscUT by Empl","type":"control_dropdown"},{"description":"","name":"utResult","qid":"7","subLabel":"","text":"UT Result","type":"control_dropdown"}]);}, 20); 
</script>
</head>
<body>
<form class="jotform-form" action="sub.php" method="post" name="form_81581460992464" id="81581460992464" accept-charset="utf-8">
  <input type="hidden" name="formID" value="81581460992464" />
  <div class="form-all">
    <ul class="form-section page-section">
      <li id="cid_1" class="form-input-wide" data-type="control_head">
        <div class="form-header-group ">
          <div class="header-text httal htvam">
            <h2 id="header_1" class="form-header" data-component="header">
              UT of WheelSet
            </h2>
          </div>
        </div>
      </li>
      <li class="form-line form-line-column form-col-1" data-type="control_dropdown" id="id_3">
        <label class="form-label form-label-top" id="label_3" for="input_3"> Pick Wheel Set Number* </label>
        <div id="cid_3" class="form-input-wide">
          <select onChange="getD1(this.value); " class="form-dropdown" id="input_3" name="q3_pickWheel" style="width:150px" data-component="dropdown">

              <option value="">Select Wheel No</option>
  <?php while ($row=mysql_fetch_array($result)) { ?>
  <option value=<?php echo $row['Wheel_Set_Number']?>><?php echo $row['Wheel_Set_Number']?></option>
  <?php } ?>

          </select>
        </div>
      </li>
      <li class="form-line form-line-column form-col-2" data-type="control_datetime" id="id_4">
        <label class="form-label form-label-top" id="label_4" for="lite_mode_4"> UT Date* </label>
<input type="date" name="utdate">
      </li>


            <li class="form-line form-line-column form-col-1" data-type="control_dropdown" id="id_3">
        <label class="form-label form-label-top" id="lagbel_3" for="inpuht_3"> UT Number* </label>
        <div id="cifgd_3" class="form-input-wide">
          <input id="inpugt_3" name="q3_pickghWheel" style="width:150px" ></div>


          </select>
        </div>
      </li>




            <li class="form-line form-line-column form-col-1" data-type="control_dropdown" id="id_3">
        <label class="form-label form-label-top" id="lagbel_3" for="inpuht_3"> Axle Number* </label>
        <div id="cifgghd_3" class="form-input-wide">
        
    <input type="textbox" name="axlenum"/>

        </div>
      </li>


      <li class="form-line form-line-column form-col-3" data-type="control_dropdown" id="id_5">
        <label class="form-label form-label-top" id="label_5" for="input_5"> Axle UT by Empl ID* </label>
        <div id="cid_5" class="form-input-wide">
          <select  onChange="getdutID(this.value);" class="form-dropdown" id="input_5" name="q5_axleUt" style="width:150px" data-component="dropdown">
                           <option value="">Select Employee</option>
  <?php while ($row2=mysql_fetch_array($result2)) { ?>
  <option value=<?php echo $row2['Emp_No']?>><?php echo $row2['Emp_No'] ?></option>
  <?php } ?>

          </select>
        </div>

      </li>














      <li class="form-line form-line-column form-col-4" data-type="control_dropdown" id="id_6">
        <label class="form-label form-label-top" id="label_6" for="input_6"> DiscUT by Empl ID* </label>
        <div id="cid_6" class="form-input-wide">
          <select  onChange="getdutID2(this.value);" class="form-dropdown" id="input_6" name="q6_discutBy" style="width:150px" data-component="dropdown">
                    <option value="">Select Employee</option>
  <?php while ($row3=mysql_fetch_array($result3)) { ?>
  <option value=<?php echo $row3['Emp_No']?>><?php echo $row3['Emp_No'] ?></option>
  <?php } ?>
</select>
</div>
</li>



      <li class="form-line form-line-column form-col-1" data-type="control_dropdown" id="id_3">
        <label class="form-label form-label-top" id="labDel_3" for="input_3"> Axle UT Emp Name  </label>
        <div id="cDid_3" class="form-input-wide">
          <select class="form-dropdown" id="inpDut_3" name="q3_pDickWheel" style="width:150px" data-component="dropdown">

 

          </select>
        </div>
      </li>

   <li class="form-line form-line-column form-col-1" data-type="control_dropdown" id="id_3">
        <label class="form-label form-label-top" id="labDel_3" for="input_3"> Disc UT Emp Name  </label>
        <div id="cDidg_3" class="form-input-wide">
          <select class="form-dropdown" id="ingpDut_3" name="q3_pDicekWheel" style="width:150px" data-component="dropdown">

 

          </select>
        </div>
      </li>


      </li>
      <li class="form-line form-line-column form-col-5" data-type="control_dropdown" id="id_7">
        <label class="form-label form-label-top" id="label_7" for="input_7"> UT Result* </label>
        <div id="cid_7" class="form-input-wide">
          <select id="getFname" onchange="admSelectCheck(this);" class="form-dropdown" name="q7_utResult" style="width:150px" data-component="dropdown">
            <option value=" ">Select  </option>
            <option value="OK"> OK </option>
            <option value="NOTOK"> NOT OK </option>
          </select>
        </div>
      </li>



         <li class="form-line" data-type="control_textarea" id="id_16">
             <div  id="NOTOK"  style="display : none" class="RFR NOTOK">
        <label class="form-label form-label-left form-label-auto"   id="labfel_16" for="input_16"> Reason For Rejection (Max : 250 Chars.)* </label>
    
          <textarea id="input_16" class="form-textarea1" name="q16_reasonFor" cols="40" rows="6" data-component="textarea"></textarea>
        </div>
      </li>




      <li class="form-line" data-type="control_button" id="id_2">
        <div id="cid_2" class="form-input-wide">
          <div style="margin-left:156px" class="form-buttons-wrapper">
            <button id="input_2" type="submit" class="form-submit-button" data-component="button">
              save
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



 <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script language="javascript" type="text/javascript">
 



$(function() {
  $('#getFname').change(function(){
    $('.RFR').hide();
    $('#' + $(this).val()).show();
  });
});



 



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
  

   function getdutID(WSNO) {    
    
    var strURL="ID1.php?WS="+WSNO;
    var req = getXMLHTTP();
    
    if (req) {
      
      req.onreadystatechange = function() {
        if (req.readyState == 4) {
          // only if "OK"
          if (req.status == 200) {            
            document.getElementById('cDid_3').innerHTML=req.responseText;

           
          } else {
            alert("Problem while using XMLHTTP:\n" + req.statusText);
          }          
        }       
      }     
      req.open("GET", strURL, true);
      req.send(null);
    }   
  }




   function getdutID2(WSNO) {    
    
    var strURL="ID2.php?WS="+WSNO;
    var req = getXMLHTTP();
    
    if (req) {
      
      req.onreadystatechange = function() {
        if (req.readyState == 4) {
          // only if "OK"
          if (req.status == 200) {            
            document.getElementById('cDidg_3').innerHTML=req.responseText;

           
          } else {
            alert("Problem while using XMLHTTP:\n" + req.statusText);
          }          
        }       
      }     
      req.open("GET", strURL, true);
      req.send(null);
    }   
  }


   function getD1(WSNO) {    
    
    var strURL="D1.php?WS="+WSNO;
    var req = getXMLHTTP();
    
    if (req) {
      
      req.onreadystatechange = function() {
        if (req.readyState == 4) {
          // only if "OK"
          if (req.status == 200) {            
            document.getElementById('cifghd_3').innerHTML=req.responseText;

            
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

