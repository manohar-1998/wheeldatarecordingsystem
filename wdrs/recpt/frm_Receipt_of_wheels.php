
<?php 
error_reporting(E_ALL ^ E_DEPRECATED);
error_reporting(0);
$con = mysql_connect('localhost', 'root', ''); 
if (!$con) {
    die('Could not connect: ' . mysql_error());
}
mysql_select_db("wdrs");
$query="SELECT LPAD(max(Wheel_Set_Number)+1, 5, 0) as Wheel_Set_Number from frm_Receipt_of_wheels";
$result=mysql_query($query);


$myDate = date('m/d/y');


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
<title>Receipt of Wheels</title>
<link href="https://cdn.jotfor.ms/static/formCss.css?3.3.6619" rel="stylesheet" type="text/css" />
<link type="text/css" rel="stylesheet" href="https://cdn.jotfor.ms/css/styles/nova.css?3.3.6619" />
<link type="text/css" media="print" rel="stylesheet" href="https://cdn.jotfor.ms/css/printForm.css?3.3.6619" />








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
<script src="https://cdn.jotfor.ms/static/jotform.forms.js?3.3.6470" type="text/javascript"></script>
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

   JotForm.prepareCalculationsOnTheFly([null,{"name":"heading","qid":"1","text":"frm_Receipt_of_wheels","type":"control_head"},{"name":"submit2","qid":"2","text":"Submit","type":"control_button"},{"description":"","name":"receivedDate","qid":"3","text":"Received Date","type":"control_datetime"},null,{"description":"","name":"wheelSet","qid":"5","subLabel":"","text":"Wheel Set Number","type":"control_number"},null,null,{"description":"","name":"axleCapacity","qid":"8","subLabel":"","text":"Axle Capacity (In Tonnes)","type":"control_number"},{"description":"","name":"housingFront","qid":"9","subLabel":"","text":"Housing Front Cover","type":"control_textbox"},{"description":"","name":"wheelReceived10","qid":"10","subLabel":"","text":"Wheel Received For","type":"control_textarea"},{"description":"","name":"housingFront11","qid":"11","subLabel":"","text":"Housing Front Cover","type":"control_textbox"},{"description":"","name":"wheelReceived","qid":"12","subLabel":"","text":"Wheel Received From","type":"control_textarea"},{"description":"","name":"catagoryOf","qid":"13","subLabel":"","text":"Catagory Of Wheels","type":"control_textbox"}]);
   setTimeout(function() {
JotForm.paymentExtrasOnTheFly([null,{"name":"heading","qid":"1","text":"frm_Receipt_of_wheels","type":"control_head"},{"name":"submit2","qid":"2","text":"Submit","type":"control_button"},{"description":"","name":"receivedDate","qid":"3","text":"Received Date","type":"control_datetime"},null,{"description":"","name":"wheelSet","qid":"5","subLabel":"","text":"Wheel Set Number","type":"control_number"},null,null,{"description":"","name":"axleCapacity","qid":"8","subLabel":"","text":"Axle Capacity (In Tonnes)","type":"control_number"},{"description":"","name":"housingFront","qid":"9","subLabel":"","text":"Housing Front Cover","type":"control_textbox"},{"description":"","name":"wheelReceived10","qid":"10","subLabel":"","text":"Wheel Received For","type":"control_textarea"},{"description":"","name":"housingFront11","qid":"11","subLabel":"","text":"Housing Front Cover","type":"control_textbox"},{"description":"","name":"wheelReceived","qid":"12","subLabel":"","text":"Wheel Received From","type":"control_textarea"},{"description":"","name":"catagoryOf","qid":"13","subLabel":"","text":"Catagory Of Wheels","type":"control_textbox"}]);}, 20); 
</script>

<body>









<form class="jotform-form" action="demo.php" method="POST" name="form_81605025959461" id="81605025959461" accept-charset="utf-8"/>
<head>
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
  background-color: #58dd1f;
  color: black;
}

.topnav a.active {
  background-color: #47a51f;
  color: white;
}
</style>
</head>










  <input type="hidden" name="formID" value="81605025959461" />
  <div class="form-all">
    <ul class="form-section page-section">
      <li id="cid_1" class="form-input-wide" data-type="control_head">
        <div class="form-header-group ">
          <div class="header-text httal htvam">
            <h2 id="header_1" class="form-header" data-component="header">
              Receipt of Wheels
            </h2>
          </div>
        </div>
      </li>
      <li class="form-line form-line-column form-col-1" data-type="control_datetime" id="id_3">
        <label class="form-label form-label-top" id="label_3" for="lite_mode_3"> Received Date* </label>
        <div id="cid_3" class="form-input-wide">
        
        <input type="date" name="seldate">


        </div>




            </li>
      <li class="form-line form-line-column form-col-2" data-type="control_number" id="id_5">
        <label class="form-label form-label-top" id="label_5" for="input_5"> Wheel Set Number </label>
        <div id="cid_5" class="form-input-wide">
                 <select onChange="getDATE(this.value); getWSN(this.value); getD1(this.value); getD2(this.value); getD3(this.value); getD4(this.value); " class="form-dropdown" id="input_3" name="q3_searchWheel" style="width:150px" data-component="dropdown">
            
  <?php while ($row=mysql_fetch_array($result)) { ?>
  <option value=<?php echo $row['Wheel_Set_Number']?>><?php echo $mydate.$row['Wheel_Set_Number']?></option>
  <?php } ?>
          </select>
        </div>
      </li>

      </li>
      <li class="form-line form-line-column form-col-2" data-type="control_number" id="id_5">
        <label class="form-label form-label-top" id="label_5" for="input_5"> OLD P Number (Optional) </label>
        <div id="cgid_5" class="form-input-wide">
                 <id="input_3" name="q3_searchWheel" style="width:150px">
<input name="Pnum"> </input>
         
        </div>
      </li>


      <li class="form-line form-line-column form-col-1 form-line-column-clear" data-type="control_number" id="id_10">
        <label class="form-label form-label-top" id="label_10" for="input_10"> Wheel Received For* </label>
        <div id="cid_10" class="form-input-wide">
          <select type="text" id="input_10" name="q10_wheelReceived10" value="">
            <option>POH</option>
            <option>IOH</option>
             <option>DIV</option>
            <option>COMPLAINT</option>
              <option>ACCIDENT</option>
           <option>OTHERS</option>


          </select>
        </div>
      </li>
      <li class="form-line form-line-column form-col-2" data-type="control_textarea" id="id_12">
        <label class="form-label form-label-top" id="label_12" for="input_12"> Wheel Received From* </label>
        <div id="cid_12" class="form-input-wide">
          <select onchange="pop(this.id,'inpugt_12');"  type="text" id="input_12"  name="q12_wheelReceived" cols="40" rows="6" >
                <option>Select</option>
             <option>POH</option>
            <option>IOH</option>
             <option>DIV</option>
               <option>LHB</option>
       

     


          </select>
      





        </div>
      </li>


            <li class="form-line form-line-column" data-type="control_textarea" id="id_12">
        <label class="form-label form-label-top" id="label_12" for="input_12"> Source* </label>
        <div id="cigd_12" class="form-input-wide">
          <select type="text" id="inpugt_12"  name="q12_whegelReceived" style="width : 50px" rows="6" >
          
     


          </select>
      





        </div>
      </li>



    <li class="form-line form-line-column" data-type="control_textarea" id="idf_12">
        <label class="form-label form-label-top form-label-auto" id="label_13" for="input_13"> Catagory Of Wheels* </label>
        <div id="cid_13" class="form-input-wide">
         <select  onchange="pop2(this.id,'input_6');" class="form-dropdown" id="aaa1255" name="q5_cataghgoryOf" style="width:150px" data-component="dropdown">
       
            <option>ICF</option>
             <option>LHB</option>
             <option>MMTS</option>
             <option>DEMU</option>
             <option>DHMU</option>

 
        

          </select>
        </div>


        <li class="form-line form-line-column" data-type="control_dropdown" id="id_6">
        <label class="form-label form-label-top" id="label_6" for="input_6"> Axle Capacity* </label>
        <div  id="cid_6" class="form-input-wide">
          <select  id="input_6" style="width : 50px" name="q6_axleCapacity">
          </select>
        </div>
      </li>



      <li class="form-line form-line-column form-col-4" data-type="control_textbox" id="id_9">
        <label class="form-label form-label-top" id="label_9" for="input_9"> Housing Front Cover* </label>
        <div id="cid_9" class="form-input-wide">
          <input type="text" id="input_9" name="q9_housingFront" class="form-textbox" size="20" value="" data-component="textbox" ></input>
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
      <li style="display:none">
        Should be Empty:
        <input type="text" name="website" value="" />
      </li>
    </ul>

  </div>
</li>
 

 <script  type= "text/javascript">

$(function(){
     $('body').prepend('<div id="menu">Add your links etc here</div>');
});





 function pop(s1,s2)
{
    var s1=document.getElementById(s1);
    var s2=document.getElementById(s2);
    s2.innerHTML="";

    if(s1.value=="POH")
    { var optionArray = ["POH|POH"]; } 
   if(s1.value=="IOH")
    { var optionArray = ["IOH|IOH"]; } 
   if(s1.value=="DIV")
    { var optionArray = ["SC|SC","HYB|HYB","KCG|KCG","NED|NED","CBO / BZA|CBO / BZA","RYPS|RYPS","RDM|RDM","MLY / ECS|MLY / ECS","BZA / DEMU|BZA / DEMU","ELS / LGD|ELS / LGD","MLY / DSL / LOCO|MLY / DSL / LOCO","BZA / LOCO|BZA / LOCO","KZJ / LOCO|KZJ / LOCO"]; } 
   if(s1.value=="LHB")
    { var optionArray = ["SC (LHB)|SC (LHB)", "HYB (LHB)|HYB (LHB)","KCG (LHB)|KCG (LHB)","BZA (LHB)|BZA (LHB)","TPTY (LHB)|TPTY (LHB)"]; } 



   for(var option in optionArray){
    var pair = optionArray[option].split("|");
    var newOption = document.createElement("option");
    newOption.value=pair[0];
    newOption.innerHTML=pair[1];
    s2.options.add(newOption); 
   }
} 



function pop2(s1,s2)
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