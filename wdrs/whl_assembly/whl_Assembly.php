
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
<link rel="alternate" type="application/json+oembed" href="https://www.jotform.com/oembed/?format=json&amp;url=http%3A%2F%2Fwww.jotform.com%2Fform%2F81768807045465" title="oEmbed Form"><link rel="alternate" type="text/xml+oembed" href="https://www.jotform.com/oembed/?format=xml&amp;url=http%3A%2F%2Fwww.jotform.com%2Fform%2F81768807045465" title="oEmbed Form">
<meta property="og:title" content="WHL Assembly" >
<meta property="og:url" content="https://form.jotform.me/81768807045465" >
<meta property="og:description" content="Please click the link to complete this form.">
<link rel="shortcut icon" href="https://cdn.jotfor.ms/favicon.ico">
<link rel="canonical" href="https://form.jotform.me/81768807045465" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<meta name="HandheldFriendly" content="true" />
<title>WHL Assembly</title>
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

   JotForm.prepareCalculationsOnTheFly([null,{"name":"heading","qid":"1","text":"WHL Assembly","type":"control_head"},{"name":"save","qid":"2","text":"Save","type":"control_button"},{"description":"","name":"date","qid":"3","text":"Date","type":"control_datetime"},{"description":"","name":"pnumber","qid":"4","subLabel":"","text":"P.Number","type":"control_textbox"},{"description":"","name":"whlDistance","qid":"5","subLabel":"","text":"WHL DIstance","type":"control_textbox"},{"description":"","name":"flangeThickness","qid":"6","subLabel":"","text":"Flange Thickness","type":"control_textbox"},{"description":"","name":"att","qid":"7","subLabel":"","text":"ATT / DIA","type":"control_textbox"},{"description":"","name":"mountedPosition","qid":"8","subLabel":"","text":"Mounted Position","type":"control_textbox"},{"description":"","name":"input9","qid":"9","text":"","type":"control_matrix"},{"description":"","name":"axleCapacity","qid":"10","subLabel":"","text":"Axle Capacity","type":"control_textbox"},{"description":"","name":"axleNo","qid":"11","subLabel":"","text":"Axle No","type":"control_textbox"},{"description":"","name":"utNo","qid":"12","subLabel":"","text":"UT No","type":"control_textbox"},{"description":"","name":"input13","qid":"13","text":"","type":"control_matrix"},{"description":"","name":"employeeName","qid":"14","subLabel":"","text":"Employee Name","type":"control_textbox"},{"name":"clickTo","qid":"15","text":"Inspected By","type":"control_text"},{"description":"","name":"employeeId","qid":"16","subLabel":"","text":"Employee ID","type":"control_textbox"},{"name":"home","qid":"17","text":"Home","type":"control_button"}]);
   setTimeout(function() {
JotForm.paymentExtrasOnTheFly([null,{"name":"heading","qid":"1","text":"WHL Assembly","type":"control_head"},{"name":"save","qid":"2","text":"Save","type":"control_button"},{"description":"","name":"date","qid":"3","text":"Date","type":"control_datetime"},{"description":"","name":"pnumber","qid":"4","subLabel":"","text":"P.Number","type":"control_textbox"},{"description":"","name":"whlDistance","qid":"5","subLabel":"","text":"WHL DIstance","type":"control_textbox"},{"description":"","name":"flangeThickness","qid":"6","subLabel":"","text":"Flange Thickness","type":"control_textbox"},{"description":"","name":"att","qid":"7","subLabel":"","text":"ATT / DIA","type":"control_textbox"},{"description":"","name":"mountedPosition","qid":"8","subLabel":"","text":"Mounted Position","type":"control_textbox"},{"description":"","name":"input9","qid":"9","text":"","type":"control_matrix"},{"description":"","name":"axleCapacity","qid":"10","subLabel":"","text":"Axle Capacity","type":"control_textbox"},{"description":"","name":"axleNo","qid":"11","subLabel":"","text":"Axle No","type":"control_textbox"},{"description":"","name":"utNo","qid":"12","subLabel":"","text":"UT No","type":"control_textbox"},{"description":"","name":"input13","qid":"13","text":"","type":"control_matrix"},{"description":"","name":"employeeName","qid":"14","subLabel":"","text":"Employee Name","type":"control_textbox"},{"name":"clickTo","qid":"15","text":"Inspected By","type":"control_text"},{"description":"","name":"employeeId","qid":"16","subLabel":"","text":"Employee ID","type":"control_textbox"},{"name":"home","qid":"17","text":"Home","type":"control_button"}]);}, 20); 
</script>
</head>
<body>
<form class="jotform-form" action="sub.php" method="post" name="form_81768807045465" id="81768807045465" accept-charset="utf-8">
  <input type="hidden" name="formID" value="81768807045465" />
  <div class="form-all">
    <ul class="form-section page-section">
      <li id="cid_1" class="form-input-wide" data-type="control_head">
        <div class="form-header-group ">
          <div class="header-text httal htvam">
            <h2 id="header_1" class="form-header" data-component="header">
              WHL Assembly
            </h2>
          </div>
        </div>
      </li>


     <li class="form-line form-line-column form-col-5" data-type="control_textbox" id="id_7">
        <label class="form-label form-label-top" id="label_7" for="input_7"> Wheel Set Number* </label>
        <div id="cid_7" class="form-input-wide">
                <select  onChange="getD1(this.value); getD2(this.value);" class="form-dropdown" id="infput_3" name="q3_pickWfheel" style="width:150px" data-component="dropdown">

              <option value="">Select Wheel No</option>
  <?php while ($row=mysql_fetch_array($result)) { ?>
  <option value=<?php echo $row['Wheel_Set_Number']?>><?php echo $row['Wheel_Set_Number']?></option>
  <?php } ?>

          </select>
        </div>
      </li>

      <li class="form-line form-line-column form-col-1" data-type="control_datetime" id="id_3">
        <label class="form-label form-label-top" id="label_3" for="lite_mode_3"> Date* </label>
       <input type="date" name="WD" id="whldate"> 
      </li>
      <li class="form-line form-line-column form-col-2" data-type="control_textbox" id="id_4">
        <label class="form-label form-label-top" id="label_4" for="input_4"> P.Number* </label>
        <div id="cid_4" class="form-input-wide">
          <input type="text" id="input_4" name="q4_pnumber" data-type="input-textbox" class="form-textbox" size="20" value="" data-component="textbox" />
        </div>
      </li>
      <li class="form-line form-line-column form-col-3" data-type="control_textbox" id="id_5">
        <label class="form-label form-label-top" id="label_5" for="input_5"> WHL DIstance* </label>
        <div id="cid_5" class="form-input-wide">
          <select id="input_5" name="q5_whlDistance"  style="width : 50px" value=""  > </select>
        </div>
      </li>
      <li class="form-line form-line-column form-col-1" data-type="control_textbox" id="id_6">
        <label class="form-label form-label-top" id="label_6" for="input_6"> Flange Thickness* </label>
        <div id="cid_6" class="form-input-wide">
  
          <select id="ingput_5" name="q5_whlDghistance"  style="width : 50px"  value=""  > </select>
        </div>
      </li>
 
      <li class="form-line form-line-column form-col-3" data-type="control_textbox" id="id_8">
        <label class="form-label form-label-top" id="label_8" for="input_8"> Mounted Position* </label>
        <div id="cid_8" class="form-input-wide">
          <input type="text" id="input_8" name="q8_mountedPosition" data-type="input-textbox" class="form-textbox" size="20" value="" data-component="textbox" />
        </div>
      </li>


   <li class="form-line form-line-column form-col-2" data-type="control_textbox" id="id_10">
        <label class="form-label form-label-top" id="label_10" for="input_10"> Axle Capacity* </label>
        <div id="cid_10" class="form-input-wide">
          <select id="input_10" name="q10_axleCapacity" >
        <option value="13">13</option>
        <option value="13">16</option>
        <option value="13">20</option>
        </select>
        </div>
      </li>
     <li class="form-line form-line-column form-col-3" data-type="control_textbox" id="id_12">
        <label class="form-label form-label-top" id="label_12" for="input_12"></label>
        <div id="cid_12" class="form-input-wide">

        </div>
      </li>
      <li class="form-line form-line-column form-col-3" data-type="control_textbox" id="id_12">
        <label class="form-label form-label-top" id="label_12" for="input_12"> UT No* </label>
        <div id="cid_12" class="form-input-wide">
          <input type="text" id="input_12" name="q12_utNo" data-type="input-textbox" class="form-textbox" size="20" value="" data-component="textbox" />
        </div>
      </li>
      <li class="form-line form-line-column form-col-5" data-type="control_textbox" id="id_11">
        <label class="form-label form-label-top" id="label_11" for="input_11"> Axle No* </label>
        <div id="cid_11" class="form-input-wide">
          <input type="text" id="input_11" name="q11_axleNo" data-type="input-textbox" class="form-textbox" size="20" value="" data-component="textbox" />
        </div>
      </li>
        <label class="form-label form-label-top form-label-auto" id="label_9" for="input_9">  </label>
        <div id="cid_9" class="form-input-wide">
          <table summary="" cellPadding="8" cellSpacing="0" class="form-matrix-table" data-component="matrix">
            <tbody>
              <tr>
                <th >
                   
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
                  ATT / DIA
                </th>
                <td style="text-align:center" class="form-matrix-values">
                  <input type="text" id="input_9_1_0" class="form-textbox" size="5" name="q9_input910" value="" />
                </td>
                <td style="text-align:center" class="form-matrix-values">
                  <input type="text" id="input_9_1_1" class="form-textbox" size="5" name="q9_input911" value="" />
                </td>
              </tr>
              </tbody>
              </table>
       

    <li class="form-line" data-type="control_matrix" id="id_9">
        <label class="form-label form-label-top form-label-auto" id="label_9" for="input_9">  </label>
        <div id="cid_9" >
          <table summary="" cellPadding="8" cellSpacing="0" class="form-matrix-table" data-component="matrix">
            <tbody>
                          <th class="form-matrix-column-headers form-matrix-column_0">
                
                </th>
                <th class="form-matrix-column-headers form-matrix-column_1">
                  Side1
                </th>
                    <th class="form-matrix-column-headers form-matrix-column_1">
                  Side2
                </th>
              </tr>
              <tr>
              <tr>
                <th style="text-align:left" class="form-matrix-row-headers">
                  Journal Dia
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
                  Bearing No
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
                  Bearing Bore Dia
                </th>
                <td style="text-align:center" class="form-matrix-values">
                  <input type="text" id="input_9_4_0" class="form-textbox" size="5" name="q9_input940" value="" />
                </td>
                <td style="text-align:center" class="form-matrix-values">
                  <input type="text" id="input_9_4_1" class="form-textbox" size="5" name="q9_input941" value="" />
                </td>

              <tr>
                <th style="text-align:left" class="form-matrix-row-headers">
                  Rear Cover
                </th>
                <td style="text-align:center" class="form-matrix-values">
                  <select id="input_13_0_0" class="form-dropdown" name="q13_input1300">
                    <option>  </option>
                    <option value="Serviceable"> Serviceable </option>
                    <option value="New"> New </option>
                  </select>
                </td>
                <td style="text-align:center" class="form-matrix-values">
                  <select id="input_13_0_1" class="form-dropdown" name="q13_input1301">
                    <option>  </option>
                    <option value="Serviceable"> Serviceable </option>
                    <option value="New"> New </option>
                  </select>
                </td>
              </tr>
              <tr>
                <th style="text-align:left" class="form-matrix-row-headers">
                  M16 Bolt
                </th>
                <td style="text-align:center" class="form-matrix-values">
                  <select id="input_13_1_0" class="form-dropdown" name="q13_input1310">
                    <option>  </option>
                    <option value="Serviceable"> Serviceable </option>
                    <option value="New"> New </option>
                  </select>
                </td>
                <td style="text-align:center" class="form-matrix-values">
                  <select id="input_13_1_1" class="form-dropdown" name="q13_input1311">
                    <option>  </option>
                    <option value="Serviceable"> Serviceable </option>
                    <option value="New"> New </option>
                  </select>
                </td>
              </tr>
              <tr>
                <th style="text-align:left" class="form-matrix-row-headers">
                  Felt Seal Ring
                </th>
                <td style="text-align:center" class="form-matrix-values">
                  <select id="input_13_2_0" class="form-dropdown" name="q13_input13210">
                    <option>  </option>
                    <option value="Serviceable"> Serviceable </option>
                    <option value="New"> New </option>
                  </select>
                </td>
                <td style="text-align:center" class="form-matrix-values">
                  <select id="input_13_2_1" class="form-dropdown" name="q13_input1321">
                    <option>  </option>
                    <option value="Serviceable"> Serviceable </option>
                    <option value="New"> New </option>
                  </select>
                </td>
              </tr>
              <tr>
                <th style="text-align:left" class="form-matrix-row-headers">
                  O Ring
                </th>
                <td style="text-align:center" class="form-matrix-values">
                  <select id="input_13_3_0" class="form-dropdown" name="q13_input1330">
                    <option>  </option>
                    <option value="Serviceable"> Serviceable </option>
                    <option value="New"> New </option>
                  </select>
                </td>
                <td style="text-align:center" class="form-matrix-values">
                  <select id="input_13_3_1" class="form-dropdown" name="q13_input1331">
                    <option>  </option>
                    <option value="Serviceable"> Serviceable </option>
                    <option value="New"> New </option>
                  </select>
                </td>
              </tr>
              <tr>
                <th style="text-align:left" class="form-matrix-row-headers">
                  Locking Plate
                </th>
                <td style="text-align:center" class="form-matrix-values">
                  <select id="input_13_4_0" class="form-dropdown" name="q13_input1340">
                    <option>  </option>
                    <option value="Serviceable"> Serviceable </option>
                    <option value="New"> New </option>
                  </select>
                </td>
                <td style="text-align:center" class="form-matrix-values">
                  <select id="input_13_4_1" class="form-dropdown" name="q13_input1341">
                    <option>  </option>
                    <option value="Serviceable"> Serviceable </option>
                    <option value="New"> New </option>
                  </select>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </li>
   
      <li class="form-line" data-type="control_text" id="id_15">
        <div id="cid_15" class="form-input-wide">
          <div id="text_15" class="form-html" data-component="text">
            <p><strong>Inspected By</strong></p>
          </div>
        </div>
      </li>
      <li class="form-line form-line-column form-col-2" data-type="control_textbox" id="id_16">
        <label class="form-label form-label-top" id="label_16" for="input_16"> Employee ID </label>
        <div id="cid_16" class="form-input-wide"><select  onChange="getID(this.value);" name="EID" id="EmpID">

                            <option value="">Select Employee</option>
  <?php while ($row2=mysql_fetch_array($result2)) { ?>
  <option value=<?php echo $row2['Emp_No']?>><?php echo $row2['Emp_No'] ?></option>
  <?php } ?>

      </select>
        </div>
      </li>


      <li class="form-line form-line-column form-col-1" data-type="control_textbox" id="id_14">
        <label class="form-label form-label-top" id="label_14" for="input_14"> Employee Name* </label>
        <div id="cid_14" class="form-input-wide">
        <select  name="ename" id="ename">
       

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

      <li class="form-line form-line-column form-col-1 form-line-column-clear" data-type="control_button" id="id_2">
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
  <script>
  JotForm.showJotFormPowered = "new_footer";
  </script>

</form></body>
</html>




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

   function getID(WSNO) {    
    
    var strURL="ID.php?WS="+WSNO;
    var req = getXMLHTTP();
    
    if (req) {
      
      req.onreadystatechange = function() {
        if (req.readyState == 4) {
          // only if "OK"
          if (req.status == 200) {            
            document.getElementById('cid_14').innerHTML=req.responseText;

           
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

 