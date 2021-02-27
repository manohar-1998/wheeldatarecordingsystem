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
<link rel="alternate" type="application/json+oembed" href="https://www.jotform.com/oembed/?format=json&amp;url=http%3A%2F%2Fwww.jotform.com%2Fform%2F81650938884471" title="oEmbed Form"><link rel="alternate" type="text/xml+oembed" href="https://www.jotform.com/oembed/?format=xml&amp;url=http%3A%2F%2Fwww.jotform.com%2Fform%2F81650938884471" title="oEmbed Form">
<meta property="og:title" content="                      Wheel Data Recording System" >
<meta property="og:url" content="https://form.jotform.me/81650938884471" >
<meta property="og:description" content="Please click the link to complete this form.">
<link rel="shortcut icon" href="https://cdn.jotfor.ms/favicon.ico">
<link rel="canonical" href="https://form.jotform.me/81650938884471" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<meta name="HandheldFriendly" content="true" />
<title>                      Wheel Data Recording System</title>
<link href="https://cdn.jotfor.ms/static/formCss.css?3.3.6511" rel="stylesheet" type="text/css" />
<link type="text/css" rel="stylesheet" href="https://cdn.jotfor.ms/css/styles/nova.css?3.3.6511" />
<link type="text/css" media="print" rel="stylesheet" href="https://cdn.jotfor.ms/css/printForm.css?3.3.6511" />
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

<script src="https://cdn.jotfor.ms/static/prototype.forms.js" type="text/javascript"></script>
<script src="https://cdn.jotfor.ms/static/jotform.forms.js?3.3.6511" type="text/javascript"></script>
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

 JotForm.calendarMonths = ["January","February","March","April","May","June","July","August","September","October","November","December"];
 JotForm.calendarDays = ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"];
 JotForm.calendarOther = {"today":"Today"};
 var languageOptions = document.querySelectorAll('#langList li'); 
 for(var langIndex = 0; langIndex < languageOptions.length; langIndex++) { 
   languageOptions[langIndex].on('click', function(e) { setTimeout(function(){ JotForm.setCalendar("10", false, {"days":{"monday":true,"tuesday":true,"wednesday":true,"thursday":true,"friday":true,"saturday":true,"sunday":true},"future":true,"past":true,"custom":false,"ranges":false,"start":"","end":""}); }, 0); });
 } 
 JotForm.setCalendar("10", false, {"days":{"monday":true,"tuesday":true,"wednesday":true,"thursday":true,"friday":true,"saturday":true,"sunday":true},"future":true,"past":true,"custom":false,"ranges":false,"start":"","end":""});
      JotForm.alterTexts(undefined);
	JotForm.clearFieldOnHide="disable";
	JotForm.submitError="jumpToFirstError";
    /*INIT-END*/
});

   JotForm.prepareCalculationsOnTheFly([null,{"name":"Wheel1","qid":"1","text":"                      Wheel Data Recording System","type":"control_head"},{"name":"submit2","qid":"2","text":"Submit","type":"control_button"},{"description":"","name":"searchWheel","qid":"3","subLabel":"","text":"Search Wheel Set Number","type":"control_dropdown"},{"description":"","name":"receivedDate","qid":"4","text":"Received Date","type":"control_datetime"},{"description":"","name":"wheelSet","qid":"5","subLabel":"","text":"Wheel Set Number","type":"control_dropdown"},{"description":"","name":"wheelReceived","qid":"6","subLabel":"","text":"Wheel Received For","type":"control_dropdown"},{"description":"","name":"wheelReceived7","qid":"7","subLabel":"","text":"Wheel Received From","type":"control_dropdown"},null,{"description":"","name":"wheelSet9","qid":"9","subLabel":"","text":"Wheel Set Number","type":"control_dropdown"},{"description":"","name":"inspectionDate","qid":"10","text":"Inspection Date","type":"control_datetime"},{"description":"","name":"wheelSet11","qid":"11","subLabel":"","text":"Wheel Set Designated For","type":"control_textbox"},{"description":"","name":"wheelThread","qid":"12","text":"Wheel Thread Dia","type":"control_matrix"},{"description":"","name":"lhEnd","qid":"13","subLabel":"","text":"LH End","type":"control_textbox"},{"description":"","name":"rhEnd","qid":"14","subLabel":"","text":"RH End","type":"control_textbox"},{"description":"","name":"wheelDistance","qid":"15","text":"Wheel Distance","type":"control_matrix"},{"description":"","name":"inspectedBy","qid":"16","subLabel":"","text":"Inspected By","type":"control_textbox"},{"name":"divider","qid":"17","type":"control_divider"},{"description":"","name":"wheelDistance18","qid":"18","subLabel":"","text":"Wheel Distance","type":"control_textbox"}]);
   setTimeout(function() {
JotForm.paymentExtrasOnTheFly([null,{"name":"Wheel1","qid":"1","text":"                      Wheel Data Recording System","type":"control_head"},{"name":"submit2","qid":"2","text":"Submit","type":"control_button"},{"description":"","name":"searchWheel","qid":"3","subLabel":"","text":"Search Wheel Set Number","type":"control_dropdown"},{"description":"","name":"receivedDate","qid":"4","text":"Received Date","type":"control_datetime"},{"description":"","name":"wheelSet","qid":"5","subLabel":"","text":"Wheel Set Number","type":"control_dropdown"},{"description":"","name":"wheelReceived","qid":"6","subLabel":"","text":"Wheel Received For","type":"control_dropdown"},{"description":"","name":"wheelReceived7","qid":"7","subLabel":"","text":"Wheel Received From","type":"control_dropdown"},null,{"description":"","name":"wheelSet9","qid":"9","subLabel":"","text":"Wheel Set Number","type":"control_dropdown"},{"description":"","name":"inspectionDate","qid":"10","text":"Inspection Date","type":"control_datetime"},{"description":"","name":"wheelSet11","qid":"11","subLabel":"","text":"Wheel Set Designated For","type":"control_textbox"},{"description":"","name":"wheelThread","qid":"12","text":"Wheel Thread Dia","type":"control_matrix"},{"description":"","name":"lhEnd","qid":"13","subLabel":"","text":"LH End","type":"control_textbox"},{"description":"","name":"rhEnd","qid":"14","subLabel":"","text":"RH End","type":"control_textbox"},{"description":"","name":"wheelDistance","qid":"15","text":"Wheel Distance","type":"control_matrix"},{"description":"","name":"inspectedBy","qid":"16","subLabel":"","text":"Inspected By","type":"control_textbox"},{"name":"divider","qid":"17","type":"control_divider"},{"description":"","name":"wheelDistance18","qid":"18","subLabel":"","text":"Wheel Distance","type":"control_textbox"}]);}, 20); 
</script>
</head>
<body>
<form class="jotform-form" action="sub.php" method="post" name="form_81650938884471" id="81650938884471" accept-charset="utf-8">
  <input type="hidden" name="formID" value="81650938884471" />
  <div class="form-all">
    <ul class="form-section page-section">
      <li id="cid_1" class="form-input-wide" data-type="control_head">
        <div class="form-header-group ">
          <div class="header-text httal htvam">
            <h2 id="header_1" class="form-header" data-component="header">
              Pre - Inspection of Wheel
            </h2>
            <div id="subHeader_1" class="form-subHeader">
              Lallaguda,Secundrabad
            </div>
          </div>
        </div>
      </li>
      <li class="form-line form-line-column form-col-1" data-type="control_dropdown" id="id_3">
        <label class="form-label form-label-top" id="label_3" for="input_3"> Search Wheel Set Number </label>
        <div id="cid_3" class="form-input-wide">
          <select onChange="getDATE(this.value); getWSN(this.value); getWRF1(this.value); getWRF2(this.value); " class="form-dropdown" id="input_3" name="q3_searchWheel" style="width:150px" data-component="dropdown">
       


  <option value="">Select Wheel No</option>
  <?php while ($row=mysql_fetch_array($result)) { ?>
  <option value=<?php echo $row['Wheel_Set_Number']?>><?php echo $row['Wheel_Set_Number']?></option>
  <?php } ?>



          </select>
        </div>
      </li>
      <li class="form-line form-line-column form-col-2" data-type="control_datetime" id="id_4">
        <label class="form-label form-label-top" id="label_4" for="input_99"> Received Date </label>
        <div id="RD" class="form-input-wide">
      <select class="form-dropdown" id="input_11" name="q55_wheelSet" style="width:150px" data-component="dropdown">
      



          </select>
        </div>
      </li>
      <li class="form-line form-line-column form-col-3" data-type="control_dropdown" id="id_5">
        <label class="form-label form-label-top" id="label_5" for="input_5"> Wheel Set Number </label>
        <div id="cid_5" class="form-input-wide">
          <select class="form-dropdown" id="input_5" name="q5_wheelSet" style="width:150px" data-component="dropdown">
      



          </select>
        </div>
      </li>
      <li class="form-line form-line-column form-col-4" data-type="control_dropdown" id="id_6">
        <label class="form-label form-label-top" id="label_6" for="input_6"> Wheel Received For </label>
        <div id="cid_6" class="form-input-wide">
          <select class="form-dropdown" id="input_6" name="q6_wheelReceived" style="width:150px" data-component="dropdown">
  

          </select>
        </div>
      </li>
      <li class="form-line form-line-column form-col-5" data-type="control_dropdown" id="id_7">
        <label class="form-label form-label-top" id="label_7" for="input_7"> Wheel Received From </label>
        <div id="cid_7" class="form-input-wide">
          <select class="form-dropdown" id="input_7" name="q7_wheelReceived7" style="width:150px" data-component="dropdown">
  

          </select>
        </div>
      </li>
      <li class="form-line" data-type="control_divider" id="id_17">
        <div id="cid_17" class="form-input-wide">
          <div data-component="divider" style="border-bottom:1px solid #e6e6e6;height:1px;margin-left:0px;margin-right:0px;margin-top:5px;margin-bottom:5px">
          </div>
        </div>
      </li>

      </li>
      <li class="form-line form-line-column form-col-2" data-type="control_datetime" id="id_10">
        <label class="form-label form-label-top" id="label_10" for="lite_mode_10"> Inspection Date </label>
        <div id="cid_10" class="form-input-wide">
         
         <input type="date" name="ID" >

        </div>
      </li>
      <li class="form-line form-line-column form-col-3" data-type="control_textbox" id="id_11">
        <label class="form-label form-label-top" id="label_11" for="input_11"> Wheel Set Designated For </label>
        <div id="cid_11" class="form-input-wide">
          <input type="text" id="input_11" name="q11_wheelSet11" data-type="input-textbox" class="form-textbox" size="20" value="" data-component="textbox" />
        </div>
      </li>
      <li class="form-line form-line-column form-col-4" data-type="control_textbox" id="id_16">
        <label class="form-label form-label-top" id="label_16" for="input_16"> Inspected By </label>
        <div id="cid_16" class="form-input-wide">
          <input type="text" id="input_16" name="q16_inspectedBy" data-type="input-textbox" class="form-textbox" size="20" value="" data-component="textbox" />
        </div>
      </li>
      <li class="form-line form-line-column form-col-5" data-type="control_textbox" id="id_18">
        <label class="form-label form-label-top" id="label_18" for="input_18"> Wheel Distance </label>
        <div id="cid_18" class="form-input-wide">
          <input type="text" id="input_18" name="q18_wheelDistance18" data-type="input-textbox" class="form-textbox" size="20" value="" data-component="textbox" />
        </div>
      </li>

        <li class="form-line form-line-column form-col-5" data-type="control_textbox" id="id_18">
        <label class="form-label form-label-top" id="label_18" for="input_18"> Inspection Result </label>
        <div id="cid_18" class="form-input-wide">
           <select class="form-dropdown" id="input_3" name="q33_result" style="width:150px" data-component="dropdown">
          <option> Success </option>
          <option> Fail </option>
          </select>
        </div>
      </li>

      <li class="form-line form-line-column form-col-1 form-line-column-clear" data-type="control_textbox" id="id_14">
        <label class="form-label form-label-top" id="label_14" for="input_14"> RH End </label>
        <div id="cid_14" class="form-input-wide">
          <input type="text" id="input_14" name="q14_rhEnd" data-type="input-textbox" class="form-textbox" size="20" value="" data-component="textbox" />
        </div>
      </li>
      <li class="form-line form-line-column form-col-2" data-type="control_textbox" id="id_13">
        <label class="form-label form-label-top" id="label_13" for="input_13"> LH End </label>
        <div id="cid_13" class="form-input-wide">
          <input type="text" id="input_13" name="q13_lhEnd" data-type="input-textbox" class="form-textbox" size="20" value="" data-component="textbox" />
        </div>
      </li>
      <li class="form-line form-line-column form-col-3" data-type="control_matrix" id="id_12">
        <label class="form-label form-label-top" id="label_12" for="input_12"> Wheel Thread Dia </label>
        <div id="cid_12" class="form-input-wide">
          <table summary="" cellPadding="4" cellSpacing="0" class="form-matrix-table" data-component="matrix">
            <tbody>
              <tr>
                <th style="border:none">
                   
                </th>
                <th class="form-matrix-column-headers form-matrix-column_0">
                  Conventional
                </th>
                <th class="form-matrix-column-headers form-matrix-column_1">
                  LHB
                </th>
                <th class="form-matrix-column-headers form-matrix-column_2">
                  Locomotive
                </th>
                <th class="form-matrix-column-headers form-matrix-column_3">
                  DEMU
                </th>
              </tr>
              <tr>
                <th style="text-align:left" class="form-matrix-row-headers">
                  Min
                </th>
                <td style="text-align:center" class="form-matrix-values">
                  <input type="text" id="input_12_0_0" class="form-textbox" size="5" name="q12_wheelThread[0][]" value="123" />
                </td>
                <td style="text-align:center" class="form-matrix-values">
                  <input type="text" id="input_12_0_1" class="form-textbox" size="5" name="q12_wheelThread[0][]" value="123" />
                </td>
                <td style="text-align:center" class="form-matrix-values">
                  <input type="text" id="input_12_0_2" class="form-textbox" size="5" name="q12_wheelThread[0][]" value="123" />
                </td>
                <td style="text-align:center" class="form-matrix-values">
                  <input type="text" id="input_12_0_3" class="form-textbox" size="5" name="q12_wheelThread[0][]" value="123" />
                </td>
              </tr>
              <tr>
                <th style="text-align:left" class="form-matrix-row-headers">
                  Max
                </th>
                <td style="text-align:center" class="form-matrix-values">
                  <input type="text" id="input_12_1_0" class="form-textbox" size="5" name="q12_wheelThread[1][]" value="123" />
                </td>
                <td style="text-align:center" class="form-matrix-values">
                  <input type="text" id="input_12_1_1" class="form-textbox" size="5" name="q12_wheelThread[1][]" value="123" />
                </td>
                <td style="text-align:center" class="form-matrix-values">
                  <input type="text" id="input_12_1_2" class="form-textbox" size="5" name="q12_wheelThread[1][]" value="123" />
                </td>
                <td style="text-align:center" class="form-matrix-values">
                  <input type="text" id="input_12_1_3" class="form-textbox" size="5" name="q12_wheelThread[1][]" value="123" />
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </li>
      <li class="form-line form-line-column form-col-4" data-type="control_matrix" id="id_15">
        <label class="form-label form-label-top" id="label_15" for="input_15"> Wheel Distance </label>
        <div id="cid_15" class="form-input-wide">
          <table summary="" cellPadding="4" cellSpacing="0" class="form-matrix-table" data-component="matrix">
            <tbody>
              <tr>
                <th style="border:none">
                   
                </th>
                <th class="form-matrix-column-headers form-matrix-column_0">
                  Conventional
                </th>
                <th class="form-matrix-column-headers form-matrix-column_1">
                  LHB
                </th>
                <th class="form-matrix-column-headers form-matrix-column_2">
                  Locomotive
                </th>
                <th class="form-matrix-column-headers form-matrix-column_3">
                  DEMU
                </th>
              </tr>
              <tr>
                <th style="text-align:left" class="form-matrix-row-headers">
                  Min
                </th>
                <td style="text-align:center" class="form-matrix-values">
                  <input type="text" id="input_15_0_0" class="form-textbox" size="5" name="q15_wheelDistance[0][]" value="123" />
                </td>
                <td style="text-align:center" class="form-matrix-values">
                  <input type="text" id="input_15_0_1" class="form-textbox" size="5" name="q15_wheelDistance[0][]" value="123" />
                </td>
                <td style="text-align:center" class="form-matrix-values">
                  <input type="text" id="input_15_0_2" class="form-textbox" size="5" name="q15_wheelDistance[0][]" value="123" />
                </td>
                <td style="text-align:center" class="form-matrix-values">
                  <input type="text" id="input_15_0_3" class="form-textbox" size="5" name="q15_wheelDistance[0][]" value="123" />
                </td>
              </tr>
              <tr>
                <th style="text-align:left" class="form-matrix-row-headers">
                  Max
                </th>
                <td style="text-align:center" class="form-matrix-values">
                  <input type="text" id="input_15_1_0" class="form-textbox" size="5" name="q15_wheelDistance[1][]" value="123" />
                </td>
                <td style="text-align:center" class="form-matrix-values">
                  <input type="text" id="input_15_1_1" class="form-textbox" size="5" name="q15_wheelDistance[1][]" value="123" />
                </td>
                <td style="text-align:center" class="form-matrix-values">
                  <input type="text" id="input_15_1_2" class="form-textbox" size="5" name="q15_wheelDistance[1][]" value="123" />
                </td>
                <td style="text-align:center" class="form-matrix-values">
                  <input type="text" id="input_15_1_3" class="form-textbox" size="5" name="q15_wheelDistance[1][]" value="123" />
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </li>
      <li class="form-line" data-type="control_button" id="id_2">
        <div id="cid_2" class="form-input-wide">
          <div style="margin-left:156px" class="form-buttons-wrapper">
            <button id="input_2" type="submit" class="form-submit-button" value='Save' data-component="button">
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
            document.getElementById('cid_5').innerHTML=req.responseText;

            
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
            document.getElementById('cid_6').innerHTML=req.responseText;

           
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
            document.getElementById('cid_7').innerHTML=req.responseText;

           
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