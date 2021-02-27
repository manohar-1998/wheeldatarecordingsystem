<?php 
error_reporting(E_ALL ^ E_DEPRECATED);
error_reporting(0);
$con = mysql_connect('localhost', 'root', ''); 
if (!$con) {
    die('Could not connect: ' . mysql_error());
}
mysql_select_db("wdrs");
$query="SELECT * FROM frm_receipt_of_wheels";
$result=mysql_query($query);
?>





<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html class="supernova"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="alternate" type="application/json+oembed" href="https://www.jotform.com/oembed/?format=json&amp;url=http%3A%2F%2Fwww.jotform.com%2Fform%2F81691994876479" title="oEmbed Form"><link rel="alternate" type="text/xml+oembed" href="https://www.jotform.com/oembed/?format=xml&amp;url=http%3A%2F%2Fwww.jotform.com%2Fform%2F81691994876479" title="oEmbed Form">
<meta property="og:title" content="Disc pressing" >
<meta property="og:url" content="https://form.jotform.me/81691994876479" >
<meta property="og:description" content="Please click the link to complete this form.">
<link rel="shortcut icon" href="https://cdn.jotfor.ms/favicon.ico">
<link rel="canonical" href="https://form.jotform.me/81691994876479" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<meta name="HandheldFriendly" content="true" />
<title>Disc pressing</title>
<link href="https://cdn.jotfor.ms/static/formCss.css?3.3.6532" rel="stylesheet" type="text/css" />
<link type="text/css" rel="stylesheet" href="https://cdn.jotfor.ms/css/styles/nova.css?3.3.6532" />
<link type="text/css" media="print" rel="stylesheet" href="https://cdn.jotfor.ms/css/printForm.css?3.3.6532" />
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
  /*PREFERENCES STYLE*//*__INSPECT_SEPERATOR__*/
    /* Injected CSS Code */
</style>
<div class="topnav">
<a href="http://localhost/Projects/Compressed/wel2/1.html">HOME</a>
  <a href="http://localhost/Projects/Compressed/wel2/wdrs/PreInsp/PreInsp.php">Pre Inspection of Wheel</a>
  <a href="http://localhost/Projects/Compressed/wel2/wdrs/whlproft/whlproft.php">Wheel Profile Turning</a>

  <a href="http://localhost/Projects/Compressed/wel2/wdrs/1/Axle_Grinding.php">Axle Grinding</a>
  
  <a href="http://localhost/Projects/Compressed/wel2/wdrs/2/Axleturning.php">Axle Turning</a>
  <a href="http://localhost/Projects/Compressed/wel2/wdrs/4/frm_discboring.php">Disc Boring</a>

  <a href="http://localhost/Projects/Compressed/wel2/wdrs/5/frm_discdepressing.php">Disc Depressing</a>
  <a href="http://localhost/Projects/Compressed/wel2/wdrs/6/Disc_pressing.php">Disc_pressing</a>
  <a href="http://localhost/Projects/Compressed/wel2/wdrs/12/UT_of_WheelSet.php">UT_of_WheelSet</a>
    <a href="http://localhost/Projects/Compressed/wel2/wdrs/7i/frm_EmpMaster.php">Employee input</a>
      <a href="http://localhost/Projects/Compressed/wel2/wdrs/7u/frm_EmpMaster.php">Employee Update</a>
  
</div>
<script src="https://cdn.jotfor.ms/static/prototype.forms.js" type="text/javascript"></script>
<script src="https://cdn.jotfor.ms/static/jotform.forms.js?3.3.6532" type="text/javascript"></script>
<script type="text/javascript">
   JotForm.init(function(){

 JotForm.calendarMonths = ["January","February","March","April","May","June","July","August","September","October","November","December"];
 JotForm.calendarDays = ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"];
 JotForm.calendarOther = {"today":"Today"};
 var languageOptions = document.querySelectorAll('#langList li'); 
 for(var langIndex = 0; langIndex < languageOptions.length; langIndex++) { 
   languageOptions[langIndex].on('click', function(e) { setTimeout(function(){ JotForm.setCalendar("23", false, {"days":{"monday":true,"tuesday":true,"wednesday":true,"thursday":true,"friday":true,"saturday":true,"sunday":true},"future":true,"past":true,"custom":false,"ranges":false,"start":"","end":""}); }, 0); });
 } 
 JotForm.setCalendar("23", false, {"days":{"monday":true,"tuesday":true,"wednesday":true,"thursday":true,"friday":true,"saturday":true,"sunday":true},"future":true,"past":true,"custom":false,"ranges":false,"start":"","end":""});

 JotForm.calendarMonths = ["January","February","March","April","May","June","July","August","September","October","November","December"];
 JotForm.calendarDays = ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"];
 JotForm.calendarOther = {"today":"Today"};
 var languageOptions = document.querySelectorAll('#langList li'); 
 for(var langIndex = 0; langIndex < languageOptions.length; langIndex++) { 
   languageOptions[langIndex].on('click', function(e) { setTimeout(function(){ JotForm.setCalendar("22", false, {"days":{"monday":true,"tuesday":true,"wednesday":true,"thursday":true,"friday":true,"saturday":true,"sunday":true},"future":true,"past":true,"custom":false,"ranges":false,"start":"","end":""}); }, 0); });
 } 
 JotForm.setCalendar("22", false, {"days":{"monday":true,"tuesday":true,"wednesday":true,"thursday":true,"friday":true,"saturday":true,"sunday":true},"future":true,"past":true,"custom":false,"ranges":false,"start":"","end":""});
      JotForm.alterTexts(undefined);
	JotForm.clearFieldOnHide="disable";
	JotForm.submitError="jumpToFirstError";
    /*INIT-END*/
});

   JotForm.prepareCalculationsOnTheFly([null,{"name":"heading","qid":"1","text":"Disc pressing","type":"control_head"},{"name":"submit2","qid":"2","text":"Submit","type":"control_button"},{"name":"divider","qid":"3","type":"control_divider"},null,null,null,null,{"description":"","name":"input8","qid":"8","text":"","type":"control_matrix"},null,null,{"description":"","name":"wheelGuage","qid":"11","subLabel":"","text":"Wheel Guage","type":"control_textbox"},{"description":"","name":"inspectionResult","qid":"12","subLabel":"","text":"Inspection Result","type":"control_textbox"},null,null,{"description":"","name":"sidePressure","qid":"15","subLabel":"","text":"Side Pressure LH","type":"control_textbox"},{"description":"","name":"sidePressure16","qid":"16","subLabel":"","text":"Side Pressure RH","type":"control_textbox"},{"description":"","name":"searchWheel","qid":"17","subLabel":"","text":"Search Wheel Set Number","type":"control_dropdown"},{"description":"","name":"wheelReceived","qid":"18","subLabel":"","text":"Wheel Received For","type":"control_dropdown"},{"description":"","name":"wheelReceived19","qid":"19","subLabel":"","text":"Wheel Received From","type":"control_dropdown"},{"description":"","name":"receivedDate","qid":"20","subLabel":"","text":"Received Date","type":"control_dropdown"},{"description":"","name":"wheelSet","qid":"21","subLabel":"","text":"Wheel Set Number","type":"control_dropdown"},{"description":"","name":"pressingDate22","qid":"22","text":"Pressing Date","type":"control_datetime"},{"description":"","name":"inspectionDate","qid":"23","text":"Inspection Date","type":"control_datetime"},{"description":"","name":"pressingEmployee24","qid":"24","subLabel":"","text":"Pressing Employee","type":"control_dropdown"},{"description":"","name":"inspectionEmployee25","qid":"25","subLabel":"","text":"Inspection Employee","type":"control_dropdown"}]);
   setTimeout(function() {
JotForm.paymentExtrasOnTheFly([null,{"name":"heading","qid":"1","text":"Disc pressing","type":"control_head"},{"name":"submit2","qid":"2","text":"Submit","type":"control_button"},{"name":"divider","qid":"3","type":"control_divider"},null,null,null,null,{"description":"","name":"input8","qid":"8","text":"","type":"control_matrix"},null,null,{"description":"","name":"wheelGuage","qid":"11","subLabel":"","text":"Wheel Guage","type":"control_textbox"},{"description":"","name":"inspectionResult","qid":"12","subLabel":"","text":"Inspection Result","type":"control_textbox"},null,null,{"description":"","name":"sidePressure","qid":"15","subLabel":"","text":"Side Pressure LH","type":"control_textbox"},{"description":"","name":"sidePressure16","qid":"16","subLabel":"","text":"Side Pressure RH","type":"control_textbox"},{"description":"","name":"searchWheel","qid":"17","subLabel":"","text":"Search Wheel Set Number","type":"control_dropdown"},{"description":"","name":"wheelReceived","qid":"18","subLabel":"","text":"Wheel Received For","type":"control_dropdown"},{"description":"","name":"wheelReceived19","qid":"19","subLabel":"","text":"Wheel Received From","type":"control_dropdown"},{"description":"","name":"receivedDate","qid":"20","subLabel":"","text":"Received Date","type":"control_dropdown"},{"description":"","name":"wheelSet","qid":"21","subLabel":"","text":"Wheel Set Number","type":"control_dropdown"},{"description":"","name":"pressingDate22","qid":"22","text":"Pressing Date","type":"control_datetime"},{"description":"","name":"inspectionDate","qid":"23","text":"Inspection Date","type":"control_datetime"},{"description":"","name":"pressingEmployee24","qid":"24","subLabel":"","text":"Pressing Employee","type":"control_dropdown"},{"description":"","name":"inspectionEmployee25","qid":"25","subLabel":"","text":"Inspection Employee","type":"control_dropdown"}]);}, 20); 
</script>
</head>
<body>
<form class="jotform-form" action="sub.php" method="post" name="form_81691994876479" id="81691994876479" accept-charset="utf-8">
  <input type="hidden" name="formID" value="81691994876479" />
  <div class="form-all">
    <ul class="form-section page-section">
      <li id="cid_1" class="form-input-wide" data-type="control_head">
        <div class="form-header-group ">
          <div class="header-text httal htvam">
            <h2 id="header_1" class="form-header" data-component="header">
              Disc pressing
            </h2>
          </div>
        </div>
      </li>
      <li class="form-line form-line-column form-col-1" data-type="control_dropdown" id="id_17">
        <label class="form-label form-label-top" id="label_17" for="input_17"> Search Wheel Set Number </label>
        <div id="cid_17" class="form-input-wide">
          <select onChange="getDATE(this.value); getWSN(this.value); getWRF1(this.value); getWRF2(this.value); " class="form-dropdown" id="input_17" name="q17_searchWheel" style="width:150px" data-component="dropdown">
       

                    <option value="">Select Wheel No</option>
  <?php while ($row=mysql_fetch_array($result)) { ?>
  <option value=<?php echo $row['Wheel_Set_Number']?>><?php echo $row['Wheel_Set_Number']?></option>
  <?php } ?>

          </select>
        </div>
      </li>
      <li class="form-line form-line-column form-col-2" data-type="control_dropdown" id="id_21">
        <label class="form-label form-label-top" id="label_21" for="input_21"> Wheel Set Number </label>
        <div id="cid_21" class="form-input-wide">
          <select class="form-dropdown" id="input_21" name="q21_wheelSet" style="width:150px" data-component="dropdown">
            <option value="">  </option>
            <option selected="" value="">  </option>
          </select>
        </div>
      </li>
      <li class="form-line form-line-column form-col-3" data-type="control_dropdown" id="id_20">
        <label class="form-label form-label-top" id="label_20" for="input_20"> Received Date </label>
        <div id="RD" class="form-input-wide">
          <select class="form-dropdown" id="input_20" name="RD" style="width:150px" data-component="dropdown">
            <option value="">  </option>
            <option selected="" value="">  </option>
          </select>
        </div>
      </li>
      <li class="form-line form-line-column form-col-4" data-type="control_dropdown" id="id_18">
        <label class="form-label form-label-top" id="label_18" for="input_18"> Wheel Received For </label>
        <div id="cid_18" class="form-input-wide">
          <select class="form-dropdown" id="input_18" name="q18_wheelReceived" style="width:150px" data-component="dropdown">
            <option value="">  </option>
            <option selected="" value="">  </option>
          </select>
        </div>
      </li>
      <li class="form-line form-line-column form-col-5" data-type="control_dropdown" id="id_19">
        <label class="form-label form-label-top" id="label_19" for="input_19"> Wheel Received From </label>
        <div id="cid_19" class="form-input-wide">
          <select class="form-dropdown" id="input_19" name="q19_wheelReceived19" style="width:150px" data-component="dropdown">
            <option value="">  </option>
            <option selected="" value="">  </option>
          </select>
        </div>
      </li>
      <li class="form-line" data-type="control_divider" id="id_3">
        <div id="cid_3" class="form-input-wide">
          <div data-component="divider" style="border-bottom:1px solid #e6e6e6;height:1px;margin-left:0px;margin-right:0px;margin-top:5px;margin-bottom:5px">
          </div>
        </div>
      </li>
      <li class="form-line form-line-column form-col-1" data-type="control_datetime" id="id_23">
        <label class="form-label form-label-top" id="label_23" for="lite_mode_23"> Inspection Date </label>

      <input type="date" name="ID">

      </li>
      <li class="form-line form-line-column form-col-2" data-type="control_dropdown" id="id_25">
        <label class="form-label form-label-top" id="label_25" for="input_25"> Inspection Employee </label>
        <div id="cid_25" class="form-input-wide">
          <select class="form-dropdown" id="input_25" name="q25_inspectionEmployee25" style="width:150px" data-component="dropdown">
           <option> EMP1 </option>
           <option> EMP2 </option>
           <option> EMP3 </option>
          </select>
        </div>
      </li>
      <li class="form-line form-line-column form-col-3" data-type="control_textbox" id="id_11">
        <label class="form-label form-label-top" id="label_11" for="input_11"> Wheel Guage </label>
        <div id="cid_11" class="form-input-wide">
          <input type="text" id="input_11" name="q11_wheelGuage" data-type="input-textbox" class="form-textbox" size="20" value="" data-component="textbox" />
        </div>
      </li>
      <li class="form-line form-line-column form-col-4" data-type="control_datetime" id="id_22">
        <label class="form-label form-label-top" id="label_22" for="lite_mode_22"> Pressing Date </label>
        
          <input type="date" name="PD">

      </li>
      <li class="form-line form-line-column form-col-5" data-type="control_dropdown" id="id_24">
        <label class="form-label form-label-top" id="label_24" for="input_24"> Pressing Employee </label>
        <div id="cid_24" class="form-input-wide">
          <select class="form-dropdown" id="input_24" name="q24_pressingEmployee24" style="width:150px" data-component="dropdown">
           <option> EMP1 </option>
           <option> EMP2 </option>
           <option> EMP3 </option>
          </select>
        </div>
      </li>
      <li class="form-line form-line-column form-col-6" data-type="control_textbox" id="id_15">
        <label class="form-label form-label-top" id="label_15" for="input_15"> Side Pressure LH </label>
        <div id="cid_15" class="form-input-wide">
          <input type="text" id="input_15" name="q15_sidePressure" data-type="input-textbox" class="form-textbox" size="20" value="" data-component="textbox" />
        </div>
      </li>
      <li class="form-line form-line-column form-col-7" data-type="control_textbox" id="id_16">
        <label class="form-label form-label-top" id="label_16" for="input_16"> Side Pressure RH </label>
        <div id="cid_16" class="form-input-wide">
          <input type="text" id="input_16" name="q16_sidePressure16" data-type="input-textbox" class="form-textbox" size="20" value="" data-component="textbox" />
        </div>
      </li>
      <li class="form-line form-line-column form-col-8" data-type="control_textbox" id="id_12">
        <label class="form-label form-label-top" id="label_12" for="input_12"> Inspection Result </label>
        <div id="cid_12" class="form-input-wide">
          <input type="text" id="input_12" name="q12_inspectionResult" data-type="input-textbox" class="form-textbox" size="20" value="" data-component="textbox" />
        </div>
      </li>
      <li class="form-line form-line-column form-col-9" data-type="control_matrix" id="id_8">
        <label class="form-label form-label-top" id="label_8" for="input_8">  </label>
        <div id="cid_8" class="form-input-wide">
          <table summary="" cellPadding="4" cellSpacing="0" class="form-matrix-table" data-component="matrix">
            <tbody>
              <tr>
                <th style="border:none">
                   
                </th>
                <th class="form-matrix-column-headers form-matrix-column_0">
                  LH
                </th>
                <th class="form-matrix-column-headers form-matrix-column_1">
                  RH
                </th>
              </tr>
              <tr>
                <th style="text-align:left" class="form-matrix-row-headers">
                  New Disc Number
                </th>
                <td style="text-align:center" class="form-matrix-values">
                  <input type="text" id="input_8_0_0" class="form-textbox" size="5" name="q8_input800" value="" />
                </td>
                <td style="text-align:center" class="form-matrix-values">
                  <input type="text" id="input_8_0_1" class="form-textbox" size="5" name="q8_input801" value="" />
                </td>
              </tr>
              <tr>
                <th style="text-align:left" class="form-matrix-row-headers">
                  Disc Boring Size
                </th>
                <td style="text-align:center" class="form-matrix-values">
                  <input type="text" id="input_8_1_0" class="form-textbox" size="5" name="q8_input810" value="" />
                </td>
                <td style="text-align:center" class="form-matrix-values">
                  <input type="text" id="input_8_1_1" class="form-textbox" size="5" name="q8_input811" value="" />
                </td>
              </tr>
              <tr>
                <th style="text-align:left" class="form-matrix-row-headers">
                  Axle Wheel Seat Dia
                </th>
                <td style="text-align:center" class="form-matrix-values">
                  <input type="text" id="input_8_2_0" class="form-textbox" size="5" name="q8_input820" value="" />
                </td>
                <td style="text-align:center" class="form-matrix-values">
                  <input type="text" id="input_8_2_1" class="form-textbox" size="5" name="q8_input821" value="" />
                </td>
              </tr>
              <tr>
                <th style="text-align:left" class="form-matrix-row-headers">
                  Side Interference
                </th>
                <td style="text-align:center" class="form-matrix-values">
                  <input type="text" id="input_8_3_0" class="form-textbox" size="5" name="q8_input830" value="" />
                </td>
                <td style="text-align:center" class="form-matrix-values">
                  <input type="text" id="input_8_3_1" class="form-textbox" size="5" name="q8_input831" value="" />
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </li>
      <li class="form-line" data-type="control_button" id="id_2">
        <div id="cid_2" class="form-input-wide">
          <div style="margin-left:156px" class="form-buttons-wrapper">
            <button id="input_2" type="submit" class="form-submit-button" data-component="button">
              Submit
            </button>
          </div>
        </div>
      </li>
      <li style="clear:both">
      </li>
      <li style="display:none">
        Should be Empty:
        <input type="text" name="website" value="" />
      </li>
    </ul>
  </div>

<script language="javascript" type="text/javascript">
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
  


   function getDATE(WSNO) {    
    
    var strURL="predate.php?WS="+WSNO;
    var req = getXMLHTTP();
    
    if (req) {
      
      req.onreadystatechange = function() {
        if (req.readyState == 4) {
          // only if "OK"
          if (req.status == 200) {            
            document.getElementById('RD').innerHTML=req.responseText;

           
          } else {
            alert("Problem while using XMLHTTP:\n" + req.statusText);
          }          
        }       
      }     
      req.open("GET", strURL, true);
      req.send(null);
    }   
  }



  function getWSN(WSNO) {    
    
    var strURL="pre1.php?WS="+WSNO;
    var req = getXMLHTTP();
    
    if (req) {
      
      req.onreadystatechange = function() {
        if (req.readyState == 4) {
          // only if "OK"
          if (req.status == 200) {            
            document.getElementById('cid_21').innerHTML=req.responseText;

            
          } else {
            alert("Problem while using XMLHTTP:\n" + req.statusText);
          }          
        }       
      }     
      req.open("GET", strURL, true);
      req.send(null);
    }   
  }
 

   function getWRF1(WSNO) {    
    
    var strURL="pre2.php?WS="+WSNO;
    var req = getXMLHTTP();
    
    if (req) {
      
      req.onreadystatechange = function() {
        if (req.readyState == 4) {
          // only if "OK"
          if (req.status == 200) {            
            document.getElementById('cid_18').innerHTML=req.responseText;

           
          } else {
            alert("Problem while using XMLHTTP:\n" + req.statusText);
          }          
        }       
      }     
      req.open("GET", strURL, true);
      req.send(null);
    }   
  }




   function getWRF2(WSNO) {    
    
    var strURL="pre3.php?WS="+WSNO;
    var req = getXMLHTTP();
    
    if (req) {
      
      req.onreadystatechange = function() {
        if (req.readyState == 4) {
          // only if "OK"
          if (req.status == 200) {            
            document.getElementById('cid_19').innerHTML=req.responseText;

           
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