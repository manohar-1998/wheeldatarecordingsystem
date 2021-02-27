
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
<link rel="alternate" type="application/json+oembed" href="https://www.jotform.com/oembed/?format=json&amp;url=http%3A%2F%2Fwww.jotform.com%2Fform%2F81651655084460" title="oEmbed Form"><link rel="alternate" type="text/xml+oembed" href="https://www.jotform.com/oembed/?format=xml&amp;url=http%3A%2F%2Fwww.jotform.com%2Fform%2F81651655084460" title="oEmbed Form">
<meta property="og:title" content="Wheel Profile Turning" >
<meta property="og:url" content="https://form.jotform.me/81651655084460" >
<meta property="og:description" content="Please click the link to complete this form.">
<link rel="shortcut icon" href="https://cdn.jotfor.ms/favicon.ico">
<link rel="canonical" href="https://form.jotform.me/81651655084460" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<meta name="HandheldFriendly" content="true" />
<title>Wheel Profile Turning</title>
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
        background:#ffffff;
    }

    .form-all{
        margin:0px auto;
        padding-top:0px;
        width:1450px;
        color:#000000 !important;
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
      background-color: #ffffff;
      border: 1px solid transparent;
    }
  
    .form-all {
      color: #000000;
    }
    .form-header-group .form-header {
      color: #000000;
    }
    .form-header-group .form-subHeader {
      color: #000000;
    }
    .form-label-top,
    .form-label-left,
    .form-label-right,
    .form-html,
    .form-checkbox-item label,
    .form-radio-item label {
      color: #000000;
    }
    .form-sub-label {
      color: #1a1a1a;
    }
  
    .supernova {
      background-color: #ffffff;
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
      background-color: #ffffff;
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


<link type="text/css" rel="stylesheet" href="https://cdn.jotfor.ms/css/styles/buttons/form-submit-button-simple_red.css?3.3.6511"/>
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
   languageOptions[langIndex].on('click', function(e) { setTimeout(function(){ JotForm.setCalendar("9", false, {"days":{"monday":true,"tuesday":true,"wednesday":true,"thursday":true,"friday":true,"saturday":true,"sunday":true},"future":true,"past":true,"custom":false,"ranges":false,"start":"","end":""}); }, 0); });
 } 
 JotForm.setCalendar("9", false, {"days":{"monday":true,"tuesday":true,"wednesday":true,"thursday":true,"friday":true,"saturday":true,"sunday":true},"future":true,"past":true,"custom":false,"ranges":false,"start":"","end":""});

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

   JotForm.prepareCalculationsOnTheFly([null,{"name":"heading","qid":"1","text":"Wheel Profile Turning","type":"control_head"},{"name":"submit2","qid":"2","text":"Submit","type":"control_button"},{"description":"","name":"searchWheel","qid":"3","subLabel":"","text":"Search Wheel Set Number","type":"control_dropdown"},{"description":"","name":"receivedDate","qid":"4","text":"Received Date","type":"control_datetime"},{"description":"","name":"wheelSet","qid":"5","subLabel":"","text":"Wheel Set Number","type":"control_dropdown"},{"description":"","name":"wheelReceived","qid":"6","subLabel":"","text":"Wheel Received For","type":"control_dropdown"},{"description":"","name":"wheelReceived7","qid":"7","subLabel":"","text":"Wheel Received From","type":"control_dropdown"},{"description":"","name":"profileTurning","qid":"8","subLabel":"","text":"Profile Turning Employee","type":"control_dropdown"},{"description":"","name":"inspectionDate","qid":"9","text":"Inspection Date","type":"control_datetime"},{"description":"","name":"profileTurning10","qid":"10","text":"Profile Turning Date","type":"control_datetime"},{"description":"","name":"inspectionEmployee","qid":"11","subLabel":"","text":"Inspection Employee","type":"control_dropdown"},{"description":"","name":"profileGuage","qid":"12","subLabel":"","text":"Profile Guage","type":"control_textbox"},{"description":"","name":"inspectionResult","qid":"13","subLabel":"","text":"Inspection Result","type":"control_dropdown"},{"description":"","name":"profileSize","qid":"14","subLabel":"","text":"Profile Size","type":"control_dropdown"},{"description":"","name":"axleJournal","qid":"15","subLabel":"","text":"Axle Journal Dia LH ","type":"control_textbox"},{"description":"","name":"axleJournal16","qid":"16","subLabel":"","text":"Axle Journal Dia RH ","type":"control_textbox"},{"description":"","name":"wheelAssign","qid":"17","subLabel":"","text":"Wheel Assign For","type":"control_textbox"},{"description":"","name":"profileThread","qid":"18","subLabel":"","text":"Profile Thread Dia LH","type":"control_textbox"},{"description":"","name":"profileThread19","qid":"19","subLabel":"","text":"Profile Thread Dia RH","type":"control_textbox"},{"name":"divider","qid":"20","type":"control_divider"}]);
   setTimeout(function() {
JotForm.paymentExtrasOnTheFly([null,{"name":"heading","qid":"1","text":"Wheel Profile Turning","type":"control_head"},{"name":"submit2","qid":"2","text":"Submit","type":"control_button"},{"description":"","name":"searchWheel","qid":"3","subLabel":"","text":"Search Wheel Set Number","type":"control_dropdown"},{"description":"","name":"receivedDate","qid":"4","text":"Received Date","type":"control_datetime"},{"description":"","name":"wheelSet","qid":"5","subLabel":"","text":"Wheel Set Number","type":"control_dropdown"},{"description":"","name":"wheelReceived","qid":"6","subLabel":"","text":"Wheel Received For","type":"control_dropdown"},{"description":"","name":"wheelReceived7","qid":"7","subLabel":"","text":"Wheel Received From","type":"control_dropdown"},{"description":"","name":"profileTurning","qid":"8","subLabel":"","text":"Profile Turning Employee","type":"control_dropdown"},{"description":"","name":"inspectionDate","qid":"9","text":"Inspection Date","type":"control_datetime"},{"description":"","name":"profileTurning10","qid":"10","text":"Profile Turning Date","type":"control_datetime"},{"description":"","name":"inspectionEmployee","qid":"11","subLabel":"","text":"Inspection Employee","type":"control_dropdown"},{"description":"","name":"profileGuage","qid":"12","subLabel":"","text":"Profile Guage","type":"control_textbox"},{"description":"","name":"inspectionResult","qid":"13","subLabel":"","text":"Inspection Result","type":"control_dropdown"},{"description":"","name":"profileSize","qid":"14","subLabel":"","text":"Profile Size","type":"control_dropdown"},{"description":"","name":"axleJournal","qid":"15","subLabel":"","text":"Axle Journal Dia LH ","type":"control_textbox"},{"description":"","name":"axleJournal16","qid":"16","subLabel":"","text":"Axle Journal Dia RH ","type":"control_textbox"},{"description":"","name":"wheelAssign","qid":"17","subLabel":"","text":"Wheel Assign For","type":"control_textbox"},{"description":"","name":"profileThread","qid":"18","subLabel":"","text":"Profile Thread Dia LH","type":"control_textbox"},{"description":"","name":"profileThread19","qid":"19","subLabel":"","text":"Profile Thread Dia RH","type":"control_textbox"},{"name":"divider","qid":"20","type":"control_divider"}]);}, 20); 
</script>
</head>
<body>
<form class="jotform-form" action="sub.php" method="post" name="form_81651655084460" id="81651655084460" accept-charset="utf-8">
  <input type="hidden" name="formID" value="81651655084460" />
  <div class="form-all">
    <ul class="form-section page-section">
      <li id="cid_1" class="form-input-wide" data-type="control_head">
        <div class="form-header-group ">
          <div class="header-text httal htvam">
            <h2 id="header_1" class="form-header" data-component="header">
              Wheel Profile Turning
            </h2>
          </div>
        </div>
      </li>
      <li class="form-line form-line-column form-col-1" data-type="control_dropdown" id="id_3">
        <label class="form-label form-label-top" id="label_3" for="input_3"> Wheel Set Number* </label>
        <div id="cid_3" class="form-input-wide">
          <select onChange="getDATE(this.value); getWSN(this.value); getD1(this.value); getD2(this.value); getD3(this.value); getD4(this.value); " class="form-dropdown" id="input_3" name="q3_searchWheel" style="width:150px" data-component="dropdown">
            

  <option value="">Select Wheel No</option>
  <?php while ($row=mysql_fetch_array($result)) { ?>
  <option value=<?php echo $row['Wheel_Set_Number']?>><?php echo $row['Wheel_Set_Number']?></option>
  <?php } ?>
          </select>
        </div>
      </li>


            <li class="form-line form-line-column form-col-3" data-type="control_dropdown" id="id_5">
        <label class="form-label form-label-top" id="label_5" for="input_5"> CNC* </label>
        <div id="cifd_5" class="form-input-wide">
          <select class="form-dropdown" id="inffpfut_5" name="q5_whefelSfet" style="width:150px" data-component="dropdown">
            <option value=""> Select </option>
            <option value="CNC 1"> CNC 1 </option>
            <option value="CNC 2"> CNC 2 </option>
          
          </select>
        </div>
      </li>


      <li class="form-line form-line-column form-col-2" data-type="control_datetime" id="id_4">
        <label class="form-label form-label-top" id="label_4" for="lite_mode_4"> Wheel Distance </label>
        <div id="RD" class="form-input-wide">
              <select onChange="getttt(this.value);" class="form-dropdown" id="input_11" name="q55_wheelSet" style="width:150px" data-component="dropdown">

      </select>
      <input type="hidden" name="nametypes" id="nametypes" value=""/>
         </div>
      </li> 
      <li class="form-line form-line-column form-col-3" data-type="control_dropdown" id="id_5">
        <label class="form-label form-label-top" id="label_5" for="input_5"> Flange Thickness </label>
        <div id="cid_5" class="form-input-wide">
          <select class="form-dropdown" id="input_5" name="q5_wheelSet" style="width:150px" data-component="dropdown">
            <option value="">  </option>
            <option value="SN1"> SN1 </option>
            <option value="SN2"> SN2 </option>
            <option value="SN3"> SN3 </option>
          </select>
        </div>
      </li>
 
      <li class="form-line form-line-column form-col-3" data-type="control_dropdown" id="id_5">
        <label class="form-label form-label-top" id="label_5" for="input_5"> Disc No  <label>
        <div id="cid_099" class="form-input-wide">
          <select class="form-dropdown" id="ianput_5" name="q5_wheaasdelSet" style="width:50px" data-component="dropdown">
        
          </select>  S1 </div>
           <div id="cid_0223" >
         <select   id="isdsf" name="ssSet" style="width:50px">

           </select>  S2


   </div>
      </li>

        <li class="form-line form-line-column form-col-3" data-type="control_dropdown" id="id_5">
        <label class="form-label form-label-top" id="label_5" for="input_5"> BTT / DIA  <label>
        <div id="cid_1fg99" class="form-input-wide">
          <select class="form-dropdown" id="ifanput_5" name="q5_wheaasdfelSet" style="width:50px" data-component="dropdown">
        
          </select>  S1</div>
                <div id="cid_149" class="form-input-wide">
            <select class="form-dropdown" id="iandpfwut_5" name="q5_whefaasdfelSet" style="width:50px" data-component="dropdown">
        
          </select>  S2

        </div>
      </li>





      <li class="form-line form-line-column form-col-1 " data-type="control_matrix" id="id_9">
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
            

                <!---------
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
             
                ---------->

              <tr>
                <th style="text-align:left" class="form-matrix-row-headers">
                 ATT / DIA*
                </th>
                <td style="text-align:center" class="form-matrix-values">
                  <input type="text" id="input_9_1_0" class="form-textbox" size="5" name="q9_input910" value="" />
                </td>
                <td style="text-align:center" class="form-matrix-values">
                  <input type="text" id="input_9_1_1" class="form-textbox" size="5" name="q9_input911" value="" />
                </td>
              </tr>
              <tr>


            
            </tbody>
          </table>
        </div>
      </li>

  <li class="form-line form-line-column form-col-1 form-line-column-clear" data-type="control_number" id="id_13">
        <label class="form-label form-label-top" id="label_13" for="input_13"> Wheel Distance*</label>
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

             <li class="form-line form-line-column form-col-1 " data-type="control_dropdown" id="ida_20">
        <label class="form-label form-label-top" id="laabel_20" for="input_20"> Employee ID* </label>
        <div id="caid_20" class="form-input-wide">
          <select onChange="getID(this.value);" class="form-dropdown" id="inpaut_20" name="q20_insapectionBy" style="width:150px" data-component="dropdown">
     
                    <option value="">Select Employee</option>
  <?php while ($row2=mysql_fetch_array($result2)) { ?>
  <option value=<?php echo $row2['Emp_No']?>><?php echo $row2['Emp_No'] ?></option>
  <?php } ?>

          </select>
        </div>
      </li>

      <li class="form-line form-line-column form-col-1" data-type="control_dropdown" id="id_8">
        <label class="form-label form-label-top" id="label_8" for="input_8"> Employee Name </label>
        <div id="cid_8" class="form-input-wide">
          <select  class="form-dropdown" id="input_8" name="q8_profileTurning" style="width:150px" data-component="dropdown">


          </select>
        </div>
      </li>
      




      <li  class="form-line form-line-column form-col-1 form-line-column-clear" data-type="control_button" id="id_2">
        <div id="cid_2" class="form-input-wide">
          <div style="margin-left:156px" class="form-buttons-wrapper">
            <button id="input_2" type="submit" class="form-submit-button" data-component="button">
              Save
            </button>
          </div>
        </di
      <li style="clear:both">
      </li>
      <li style="display:none">
        Should be Empty:
        <input type="text" name="website" value="" />
      </li>
    </ul>
  </div>


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
  


   function getDATE(WSNO) {    
    
    var strURL="wd.php?WS="+WSNO;
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
 

    function getD1(WSNO) {    
    
    var strURL="D1.php?WS="+WSNO;
    var req = getXMLHTTP();
    
    if (req) {
      
      req.onreadystatechange = function() {
        if (req.readyState == 4) {
          // only if "OK"
          if (req.status == 200) {          
            document.getElementById('cid_099').innerHTML=req.responseText;

            
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
            document.getElementById('cid_0223').innerHTML=req.responseText;

            
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
    
    var strURL="BTT_DIA_S1.php?WS="+WSNO;
    var req = getXMLHTTP();
    
    if (req) {
      
      req.onreadystatechange = function() {
        if (req.readyState == 4) {
          // only if "OK"
          if (req.status == 200) {            
            document.getElementById('cid_1fg99').innerHTML=req.responseText;

            
          } else {
            alert("Problem while using XMLHTTP:\n" + req.statusText);
          }          
        }       
      }     
      req.open("GET", strURL, true);
      req.send(null);
    }   
  }

   function getD4(WSNO) {    
    
    var strURL="BTT_DIA_S2.php?WS="+WSNO;
    var req = getXMLHTTP();
    
    if (req) {
      
      req.onreadystatechange = function() {
        if (req.readyState == 4) {
          // only if "OK"
          if (req.status == 200) {            
            document.getElementById('cid_149').innerHTML=req.responseText;

            
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
            document.getElementById('cid_8').innerHTML=req.responseText;

           
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

