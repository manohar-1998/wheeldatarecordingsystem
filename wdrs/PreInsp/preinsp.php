
<?php 
error_reporting(E_ALL ^ E_DEPRECATED);
error_reporting(0);
$con = mysql_connect('localhost', 'root', ''); 
if (!$con) {
    die('Could not connect: ' . mysql_error());
}
mysql_select_db("wdrs");

mysql_select_db("wdrs");
$query="SELECT * FROM frm_Receipt_of_wheels WHERE Check_Insp = '0' ";
$result=mysql_query($query);



$query2="SELECT * FROM frm_empmaster";
$result2=mysql_query($query2);






?>




<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html class="supernova"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="alternate" type="application/json+oembed" href="https://www.jotform.com/oembed/?format=json&amp;url=http%3A%2F%2Fwww.jotform.com%2Fform%2F81651262184455" title="oEmbed Form"><link rel="alternate" type="text/xml+oembed" href="https://www.jotform.com/oembed/?format=xml&amp;url=http%3A%2F%2Fwww.jotform.com%2Fform%2F81651262184455" title="oEmbed Form">
<meta property="og:title" content="Pre - Inspection of Wheel" >
<meta property="og:url" content="https://form.jotform.me/81651262184455" >
<meta property="og:description" content="Please click the link to complete this form.">
<link rel="shortcut icon" href="https://cdn.jotfor.ms/favicon.ico">
<link rel="canonical" href="https://form.jotform.me/81651262184455" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<meta name="HandheldFriendly" content="true" />
<title>Pre - Inspection of Wheel</title>
<link href="https://cdn.jotfor.ms/static/formCss.css?3.3.6589" rel="stylesheet" type="text/css" />
<link type="text/css" rel="stylesheet" href="https://cdn.jotfor.ms/css/styles/nova.css?3.3.6589" />
<link type="text/css" media="print" rel="stylesheet" href="https://cdn.jotfor.ms/css/printForm.css?3.3.6589" />
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
<script src="https://cdn.jotfor.ms/static/jotform.forms.js?3.3.6589" type="text/javascript"></script>
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
      setTimeout(function() {
          $('input_10').hint('0000');
       }, 20);
      setTimeout(function() {
          $('input_19').hint('MM / YY');
       }, 20);
      JotForm.alterTexts(undefined);
	JotForm.clearFieldOnHide="disable";
	JotForm.submitError="jumpToFirstError";
    /*INIT-END*/
});

   JotForm.prepareCalculationsOnTheFly([null,{"name":"pre","qid":"1","text":"Pre - Inspection of Wheel","type":"control_head"},{"name":"save2","qid":"2","text":"Save","type":"control_button"},{"description":"","name":"date","qid":"3","text":"Date","type":"control_datetime"},null,{"description":"","name":"catagoryOf","qid":"5","subLabel":"","text":"Catagory Of Wheel","type":"control_dropdown"},{"description":"","name":"axleCapacity","qid":"6","subLabel":"","text":"Axle Capacity","type":"control_dropdown"},null,null,null,{"description":"","name":"wheelSet","qid":"10","subLabel":"","text":"Wheel Set Number","type":"control_number"},{"description":"","name":"wheelReceived","qid":"11","subLabel":"","text":"Wheel Received From","type":"control_dropdown"},{"description":"","name":"housingFront","qid":"12","subLabel":"","text":"Housing Front Cover","type":"control_dropdown"},{"description":"","name":"wheelDistance","qid":"13","subLabel":"","text":"Wheel Distance","type":"control_number"},{"description":"","name":"flangeThickness","qid":"14","subLabel":"","text":"Flange Thickness","type":"control_number"},{"description":"","name":"discNo","qid":"15","subLabel":"","text":"Disc No.","type":"control_textbox"},{"description":"","name":"btt","qid":"16","subLabel":"","text":"BTT / DIA","type":"control_number"},{"description":"","name":"bearingNo","qid":"17","subLabel":"","text":"Bearing No.","type":"control_textbox"},{"description":"","name":"make","qid":"18","subLabel":"","text":"Make","type":"control_textbox"},{"description":"","name":"lastMounting","qid":"19","subLabel":"","text":"Last Mounting","type":"control_textbox"},{"description":"","name":"inspectionBy","qid":"20","subLabel":"","text":"Inspection By","type":"control_dropdown"},{"description":"","name":"remarks","qid":"21","subLabel":"","text":"Remarks","type":"control_dropdown"},{"name":"back","qid":"22","text":"Back","type":"control_button"}]);
   setTimeout(function() {
JotForm.paymentExtrasOnTheFly([null,{"name":"pre","qid":"1","text":"Pre - Inspection of Wheel","type":"control_head"},{"name":"save2","qid":"2","text":"Save","type":"control_button"},{"description":"","name":"date","qid":"3","text":"Date","type":"control_datetime"},null,{"description":"","name":"catagoryOf","qid":"5","subLabel":"","text":"Catagory Of Wheel","type":"control_dropdown"},{"description":"","name":"axleCapacity","qid":"6","subLabel":"","text":"Axle Capacity","type":"control_dropdown"},null,null,null,{"description":"","name":"wheelSet","qid":"10","subLabel":"","text":"Wheel Set Number","type":"control_number"},{"description":"","name":"wheelReceived","qid":"11","subLabel":"","text":"Wheel Received From","type":"control_dropdown"},{"description":"","name":"housingFront","qid":"12","subLabel":"","text":"Housing Front Cover","type":"control_dropdown"},{"description":"","name":"wheelDistance","qid":"13","subLabel":"","text":"Wheel Distance","type":"control_number"},{"description":"","name":"flangeThickness","qid":"14","subLabel":"","text":"Flange Thickness","type":"control_number"},{"description":"","name":"discNo","qid":"15","subLabel":"","text":"Disc No.","type":"control_textbox"},{"description":"","name":"btt","qid":"16","subLabel":"","text":"BTT / DIA","type":"control_number"},{"description":"","name":"bearingNo","qid":"17","subLabel":"","text":"Bearing No.","type":"control_textbox"},{"description":"","name":"make","qid":"18","subLabel":"","text":"Make","type":"control_textbox"},{"description":"","name":"lastMounting","qid":"19","subLabel":"","text":"Last Mounting","type":"control_textbox"},{"description":"","name":"inspectionBy","qid":"20","subLabel":"","text":"Inspection By","type":"control_dropdown"},{"description":"","name":"remarks","qid":"21","subLabel":"","text":"Remarks","type":"control_dropdown"},{"name":"back","qid":"22","text":"Back","type":"control_button"}]);}, 20); 
</script>
</head>
<body>
<form class="jotform-form" action="sub.php" method="post" name="form_81651262184455" id="81651262184455" accept-charset="utf-8">
  <input type="hidden" name="formID" value="81651262184455" />
  <div class="form-all">
    <ul class="form-section page-section">
      <li id="cid_1" class="form-input-wide" data-type="control_head">
        <div class="form-header-group ">
          <div class="header-text httal htvam">
            <h2 id="header_1" class="form-header" data-component="header">
              Pre - Inspection of Wheel
            </h2>
          </div>
        </div>
      </li>
   
      <li class="form-line form-line-column form-col-2" data-type="control_number" id="id_10">
        <label class="form-label form-label-top" id="label_10" for="input_10"> Wheel Set Number* </label>
        <div id="cid_10" class="form-input-wide">
           <select onChange=" getD1(this.value); getD2(this.value); getD3(this.value); " class="form-dropdown" id="inpusft_5" name="q5_catsfagoryOf" style="width:150px" data-component="dropdown">
             <option value="">Select Wheel No</option>
  <?php while ($row=mysql_fetch_array($result)) { ?>
  <option value=<?php echo $row['Wheel_Set_Number']?>><?php echo $row['Wheel_Set_Number']?></option>
  <?php } ?>
  </select>
        </div>
      </li>


      <li class="form-line form-line-column form-col-1" data-type="control_datetime" id="id_3">
        <label class="form-label form-label-top" id="label_3" for="lite_mode_3"> Date* </label>
        <div id="cid_3" class="form-input-wide">

          <input type="date" name="D" >


        </div>
      </li>

      <li class="form-line form-line-column form-col-3" data-type="control_dropdown" id="id_5">
        <label class="form-label form-label-top" id="label_5" for="input_5"> Catagory Of Wheel* </label>
        <div id="cid_5" class="form-input-wide">
          <select onchange="pop('input_5','input_6');" class="form-dropdown" id="input_5" name="q5_catagoryOf" style="width:150px" data-component="dropdown">
             <option value="">  </option>
            <option value="ICF"> ICF </option>
            <option value="LHB"> LHB </option>
            <option value="MMTS"> MMTS </option>
            <option value="DEMU"> DEMU </option>
            <option value="DHMU"> DHMU </option>
          </select>
        </div>
      </li>
      <li class="form-line form-line-column form-col-4" data-type="control_dropdown" id="id_6">
        <label class="form-label form-label-top" id="label_6" for="input_6"> Axle Capacity* </label>
        <div  id="cid_6" class="form-input-wide">
          <select  id="input_6" style="width : 50px" name="q6_axleCapacity" >
          </select>
        </div>
      </li>
      <li class="form-line form-line-column form-col-5" data-type="control_dropdown" id="id_11">
        <label class="form-label form-label-top" id="label_11" for="input_11"> Wheel Received From* </label>
        <div id="cid_11" class="form-input-wide">
          <select class="form-dropdown" id="input_11" name="q11_wheelReceived" style="width:150px" data-component="dropdown">
            <option value="">  </option>
            <option value="POH"> POH </option>
            <option value="IOH"> IOH </option>
            <option value="Divisions"> Divisions </option>
          </select>
        </div>
      </li>
      <li class="form-line form-line-column form-col-6" data-type="control_dropdown" id="id_12">
        <label class="form-label form-label-top" id="label_12" for="input_12"> Housing Front Cover* </label>
        <div id="cid_12" class="form-input-wide">
          <select class="form-dropdown" id="input_12" name="q12_housingFront" style="width:150px" data-component="dropdown">
            <option value="">  </option>
            <option value="A"> A </option>
            <option value="B"> B </option>
            <option value="C"> C </option>
          </select>
        </div>
      </li>
      <li class="form-line form-line-column form-col-1 form-line-column-clear" data-type="control_number" id="id_13">
        <label class="form-label form-label-top" id="label_13" for="input_13"> Wheel Distance* </label>
        <div id="cid_13" class="form-input-wide">
           <input  type="text" id="inpaut_9_4_1" class="form-textbox" size="5" name="q9_inpuat941" value="1600" />
        

             <select class="form-dropdown" id="input_a132" name="q12_hoausingF5ont" style="width:50px" data-component="dropdown">






            <option value="1595"> -5 </option>
            <option value="1596"> -4</option>
               <option value="1597"> -3 </option>
            <option value="1598"> -2</option>
               <option value="1599"> -1 </option>
            <option value="1600"> 00</option>
               <option value="1601"> +1 </option>
            <option value="1602"> +2</option>
               <option value="1603"> +3 </option>
            <option value="1604"> +4</option>
               <option value="1605"> +5</option>
 
          </select>
        </div>
      </li>
      <li class="form-line form-line-column form-col-2" data-type="control_number" id="id_14">
        <label class="form-label form-label-top" id="label_14" for="input_14"> Flange Thickness* </label>
        <div id="cid_14" class="form-input-wide">
                 <select class="form-dropdown" id="inpaut_132" name="q12_housiangF5ont" style="width:150px" data-component="dropdown">
          
            <option value="25"> 25 </option>

            <option value="26"> 26 </option>
            <option value="27"> 27</option>
               <option value="28"> 28</option>
                  <option value="29"> 29</option>
                     <option value="30"> 30</option>
                        <option value="31"> 31</option>

             <option value="32"> 32</option>    
 
          </select>
        </div>
      </li>



            </li>
      <li class="form-line form-line-column form-col-1 form-line-column-clear" data-type="control_matrix" id="id_9">
        <label class="form-label form-label-top" id="label_9" for="input_9">  </label>
        <div id="cid_9" class="form-input-wide">
          <table summary="" cellPadding="4" cellSpacing="0" class="form-matrix-table" data-component="matrix">
            <tbody>
              <tr>
                <th style="border:none">
                   
                </th>
                <th class="form-matrix-column-headers form-matrix-column_0">
                  Side 1
                </th>
                <th class="form-matrix-column-headers form-matrix-column_1">
                  Side 2
                </th>
              </tr>
              <tr>
                <th style="text-align:left" class="form-matrix-row-headers">
                  Disc No
                </th>
                <td style="text-align:center" class="form-matrix-values">
                  <input type="text" id="input_9_0_0" class="form-textbox" size="5" name="q9_input900" value="" />
                </td>
                <td style="text-align:center" class="form-matrix-values">
                  <input type="text" id="input_9_0_1" class="form-textbox" size="5" name="q9_input901" value="" />
                </td>
              </tr>
              <tr>
                <th style="text-align:left" class="form-matrix-row-headers">
                  Bearing No
                </th>
                <td style="text-align:center" class="form-matrix-values">
                  <input type="text" id="input_9_1_0" class="form-textbox" size="5" name="q9_input910" value="" />
                </td>
                <td style="text-align:center" class="form-matrix-values">
                  <input type="text" id="input_9_1_1" class="form-textbox" size="5" name="q9_input911" value="" />
                </td>
              </tr>
              <tr>
                <th style="text-align:left" class="form-matrix-row-headers">
                  BTT / DIA
                </th>
                <td style="text-align:center" class="form-matrix-values">
                  <input type="text" id="input_9_2_0" class="form-textbox" size="5" name="q9_input920" value="" />
                </td>
                <td style="text-align:center" class="form-matrix-values">
                  <input type="text" id="input_9_2_1" class="form-textbox" size="5" name="q9_input921" value="" />
                </td>
              </tr>
              <tr>
                <th style="text-align:left" class="form-matrix-row-headers">
                  Make
                </th>
                <td style="text-align:center" class="form-matrix-values">
                  <input type="text" id="input_9_3_0" class="form-textbox" size="5" name="q9_input930" value="" />
                </td>
                <td style="text-align:center" class="form-matrix-values">
                  <input type="text" id="input_9_3_1" class="form-textbox" size="5" name="q9_input931" value="" />
                </td>
              </tr>
              <tr>
                <th style="text-align:left" class="form-matrix-row-headers">
                  Last Mounting
                </th>
                <td style="text-align:center" class="form-matrix-values">
                  <input type="text" id="input_9_4_0" class="form-textbox" size="5" name="q9_input940" value="" />
                </td>
                <td style="text-align:center" class="form-matrix-values">
                  <input type="text" id="input_9_4_1" class="form-textbox" size="5" name="q9_input941" value="" />
                </td>
              </tr>
            
            </tbody>
          </table>
        </div>
      </li>

             <li class="form-line form-line-column form-col-1 " data-type="control_dropdown" id="ida_20">
        <label class="form-label form-label-top" id="laabel_20" for="input_20"> Employee ID* </label>
        <div id="caid_20" class="form-input-wide">
          <select  onChange="getID(this.value);" class="form-dropdown" id="inpaut_20" name="q20_insfapectionBy" style="width:150px" data-component="dropdown">
          
       <option value="">Select Employee</option>
  <?php while ($row2=mysql_fetch_array($result2)) { ?>
  <option value=<?php echo $row2['Emp_No']?>><?php echo $row2['Emp_No'] ?></option>
  <?php } ?>

          </select>
        </div>
      </li>


     
      <li class="form-line form-line-column form-col-1 " data-type="control_dropdown" id="id_20">
        <label class="form-label form-label-top" id="label_20" for="input_20"> Employee Name </label>
        <div id="cid_20" class="form-input-wide">
          <select class="form-dropdown" id="input_20" name="q20_inspectionBy" style="width:150px" data-component="dropdown">

          </select>
        </div>
      </li>


  <li class="form-line form-line-column form-col-2" data-type="control_number" id="id_14">
        <label class="form-label form-label-top" id="labffsel_14" for="input_14"> Result* </label>
        <div id="cid_14" class="form-input-wide">
                 <select id="getFname" onchange="admSelectCheck(this);" class="fwn" name="q12_housicangF5ont" style="width:150px" data-component="dropdown">
            <option value=" "  selected="Select"> Select </option>
            <option value="OK"> OK </option>
         <option value="NOTOK">NOT OK </option>
          </select>
        </div>
      </li>




         <li class="form-line" data-type="control_textarea" id="id_16">
             <div  id="NOTOK"  style="display : none"class="RFR NOTOK">
        <label class="form-label form-label-left form-label-auto"   id="labfel_16" for="input_16"> Reason For Rejection* (Max : 250 Chars) </label>
    
          <textarea id="input_16" class="form-textarea1" name="q16_reasonFor" cols="40" rows="6" data-component="textarea"></textarea>
        </div>
      </li>



      <li  class="form-line form-line-column form-col-1 form-line-column-clear" data-type="control_button" id="id_2">
        <div id="cid_2" class="form-input-wide">
          <div style="margin-left:156px" class="form-buttons-wrapper">
            <button id="input_2" type="submit" class="form-submit-button" data-component="button">
              Save
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


 <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type= "text/javascript">
    

    
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
  


    function getD1(WSNO) {    
    
    var strURL="D1.php?WS="+WSNO;
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
 
   function getD2(WSNO) {    
    
    var strURL="D2.php?WS="+WSNO;
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
   function getD3(WSNO) {    
    
    var strURL="D3.php?WS="+WSNO;
    var req = getXMLHTTP();
    
    if (req) {
      
      req.onreadystatechange = function() {
        if (req.readyState == 4) {
          // only if "OK"
          if (req.status == 200) {            
            document.getElementById('cid_11').innerHTML=req.responseText;

            
          } else {
            alert("Problem while using XMLHTTP:\n" + req.statusText);
          }          
        }       
      }     
      req.open("GET", strURL, true);
      req.send(null);
    }   
  }



   function getID(WSNO) {    
    
    var strURL="ID.php?WS="+WSNO;
    var req = getXMLHTTP();
    
    if (req) {
      
      req.onreadystatechange = function() {
        if (req.readyState == 4) {
          // only if "OK"
          if (req.status == 200) {            
            document.getElementById('cid_20').innerHTML=req.responseText;

           
          } else {
            alert("Problem while using XMLHTTP:\n" + req.statusText);
          }          
        }       
      }     
      req.open("GET", strURL, true);
      req.send(null);
    }   
  }






function pop(s1,s2)
{
    var s1=document.getElementById(s1);
    var s2=document.getElementById(s2);
    s2.innerHTML="";
    if(s1.value=="ICF")
    { var optionArray = ["|Select","13|13","16|16"]; } 
 else { var optionArray = ["20|20"];}

   for(var option in optionArray){
    var pair = optionArray[option].split("|");
    var newOption = document.createElement("option");
    newOption.value=pair[0];
    newOption.innerHTML=pair[1];
    s2.options.add(newOption); 
   }
} 



</script>
