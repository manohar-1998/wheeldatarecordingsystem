<?php 
error_reporting(E_ALL ^ E_DEPRECATED);
error_reporting(0);
$con = mysql_connect('localhost', 'root', ''); 
if (!$con) {
    die('Could not connect: ' . mysql_error());
}
mysql_select_db("wdrs");
$query="SELECT * FROM frm_empMaster";
$result=mysql_query($query);
?>



<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html class="supernova"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="alternate" type="application/json+oembed" href="https://www.jotform.com/oembed/?format=json&amp;url=http%3A%2F%2Fwww.jotform.com%2Fform%2F81581246792464" title="oEmbed Form"><link rel="alternate" type="text/xml+oembed" href="https://www.jotform.com/oembed/?format=xml&amp;url=http%3A%2F%2Fwww.jotform.com%2Fform%2F81581246792464" title="oEmbed Form">
<meta property="og:title" content="                           Carriage Workshop" >
<meta property="og:url" content="https://form.jotform.me/81581246792464" >
<meta property="og:description" content="Please click the link to complete this form.">
<link rel="shortcut icon" href="https://cdn.jotfor.ms/favicon.ico">
<link rel="canonical" href="https://form.jotform.me/81581246792464" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<meta name="HandheldFriendly" content="true" />
<title>                           Carriage Workshop</title>
<link href="https://cdn.jotfor.ms/static/formCss.css?3.3.6533" rel="stylesheet" type="text/css" />
<link type="text/css" rel="stylesheet" href="https://cdn.jotfor.ms/css/styles/nova.css?3.3.6533" />
<link type="text/css" media="print" rel="stylesheet" href="https://cdn.jotfor.ms/css/printForm.css?3.3.6533" />
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
        background:#4e4e4e;
    }

    .form-all{
        margin:0px auto;
        padding-top:0px;
        width:1450px;
        color:#cccccc !important;
        font-family:"Lucida Grande", "Lucida Sans Unicode", "Lucida Sans", Verdana, sans-serif;
        font-size:14px;
    }
</style>

<style type="text/css" id="form-designer-style">
    /* Injected CSS Code */
.form-label.form-label-auto {
        
      display: block;
      float: none;
      text-align: left;
      width: 100%;
    
      }.form-all:after {
  content: "";
  display: table;
  clear: both;
}
.form-all {
  font-family: "Lucida Grande", sans-serif;
}
.form-all {
  width: 690px;
}
.form-label-left,
.form-label-right {
  width: 150px;
}
.form-label {
  white-space: normal;
}

.form-label-left {
  display: inline-block;
  white-space: normal;
  float: left;
  text-align: left;
}
.form-label-right {
  display: inline-block;
  white-space: normal;
  float: left;
  text-align: right;
}
.form-label-top {
  white-space: normal;
  display: block;
  float: none;
  text-align: left;
}
.form-radio-item label:before {
  top: 0;
}
.form-all {
  font-size: 14px;
}
.form-label {
  font-weight: bold;
}
.form-checkbox-item label,
.form-radio-item label {
  font-weight: normal;
}
.supernova {
  background-color: #4e4e4e;
  background-color: #3e3e3e;
}
.supernova body {
  background-color: transparent;
}
/*
@width30: (unit(@formWidth, px) + 60px);
@width60: (unit(@formWidth, px)+ 120px);
@width90: (unit(@formWidth, px)+ 180px);
*/
/* | */
@media screen and (min-width: 480px) {
  .supernova .form-all {
    border: 1px solid #252525;
    -webkit-box-shadow: 0 3px 9px rgba(0, 0, 0, 0.1);
    -moz-box-shadow: 0 3px 9px rgba(0, 0, 0, 0.1);
    box-shadow: 0 3px 9px rgba(0, 0, 0, 0.1);
  }
}
/* | */
/* | */
@media screen and (max-width: 480px) {
  .jotform-form .form-all {
    margin: 0;
    width: 100%;
  }
}
/* | */
/* | */
@media screen and (min-width: 480px) and (max-width: 767px) {
  .jotform-form .form-all {
    margin: 0;
    width: 100%;
  }
}
/* | */
/* | */
@media screen and (min-width: 480px) and (max-width: 689px) {
  .jotform-form .form-all {
    margin: 0;
    width: 100%;
  }
}
/* | */
/* | */
@media screen and (min-width: 768px) {
  .jotform-form {
    padding: 60px 0;
  }
}
/* | */
/* | */
@media screen and (max-width: 689px) {
  .jotform-form .form-all {
    margin: 0;
    width: 100%;
  }
}
/* | */
.supernova .form-all,
.form-all {
  background-color: #4e4e4e;
  border: 1px solid transparent;
}
.form-header-group {
  border-color: #353535;
}
.form-matrix-table tr {
  border-color: #353535;
}
.form-matrix-table tr:nth-child(2n) {
  background-color: #414141;
}
.form-all {
  color: #cccccc;
}
.form-header-group .form-header {
  color: #cccccc;
}
.form-header-group .form-subHeader {
  color: #e6e6e6;
}
.form-sub-label {
  color: #e6e6e6;
}
.form-label-top,
.form-label-left,
.form-label-right,
.form-html {
  color: #cccccc;
}
.form-checkbox-item label,
.form-radio-item label {
  color: #e6e6e6;
}
.form-line.form-line-active {
  -webkit-transition-property: all;
  -moz-transition-property: all;
  -ms-transition-property: all;
  -o-transition-property: all;
  transition-property: all;
  -webkit-transition-duration: 0.3s;
  -moz-transition-duration: 0.3s;
  -ms-transition-duration: 0.3s;
  -o-transition-duration: 0.3s;
  transition-duration: 0.3s;
  -webkit-transition-timing-function: ease;
  -moz-transition-timing-function: ease;
  -ms-transition-timing-function: ease;
  -o-transition-timing-function: ease;
  transition-timing-function: ease;
  background-color: #ffffe0;
}
/* omer */
.form-radio-item,
.form-checkbox-item {
  padding-bottom: 0px !important;
}
.form-radio-item:last-child,
.form-checkbox-item:last-child {
  padding-bottom: 0;
}
/* omer */
.form-single-column .form-checkbox-item,
.form-single-column .form-radio-item {
  width: 100%;
}
.form-checkbox-item .editor-container div,
.form-radio-item .editor-container div {
  position: relative;
}
.form-checkbox-item .editor-container div:before,
.form-radio-item .editor-container div:before {
  display: inline-block;
  vertical-align: middle;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  left: 0;
  width: 18px;
  height: 18px;
}
.supernova {
  height: 100%;
  background-repeat: no-repeat;
  background-attachment: scroll;
  background-position: center top;
  background-repeat: repeat;
}
.supernova {
  background-image: none;
}
#stage {
  background-image: none;
}
/* | */
.form-all {
  background-repeat: no-repeat;
  background-attachment: scroll;
  background-position: center top;
  background-repeat: repeat;
}
.form-header-group {
  background-repeat: no-repeat;
  background-attachment: scroll;
  background-position: center top;
}
.form-line {
  margin-top: 12px;
  margin-bottom: 12px;
}
.form-line {
  padding: 12px 36px;
}
.form-all .qq-upload-button,
.form-all .form-submit-button,
.form-all .form-submit-reset,
.form-all .form-submit-print {
  font-size: 1em;
  padding: 9px 15px;
  font-family: "Lucida Grande", sans-serif;
  font-size: 14px;
  font-weight: normal;
}
.form-all .form-pagebreak-back,
.form-all .form-pagebreak-next {
  font-size: 1em;
  padding: 9px 15px;
  font-family: "Lucida Grande", sans-serif;
  font-size: 14px;
  font-weight: normal;
}
/*
& when ( @buttonFontType = google ) {
	@import (css) "@{buttonFontLink}";
}
*/
h2.form-header {
  line-height: 1.618em;
  font-size: 1.714em;
}
h2 ~ .form-subHeader {
  line-height: 1.5em;
  font-size: 1.071em;
}
.form-header-group {
  text-align: left;
}
/*.form-dropdown,
.form-radio-item,
.form-checkbox-item,
.form-radio-other-input,
.form-checkbox-other-input,*/
.form-captcha input,
.form-spinner input,
.form-error-message {
  padding: 4px 3px 2px 3px;
}
.form-header-group {
  font-family: "Lucida Grande", sans-serif;
}
.form-section {
  padding: 0px 0px 0px 0px;
}
.form-header-group {
  margin: 12px 36px 12px 36px;
}
.form-header-group {
  padding: 24px 0px 24px 0px;
}
.form-textbox,
.form-textarea {
  padding: 4px 3px 2px 3px;
}
.form-textbox,
.form-textarea,
.form-radio-other-input,
.form-checkbox-other-input,
.form-captcha input,
.form-spinner input {
  background-color: #3e3e3e;
}
[data-type="control_dropdown"] .form-input,
[data-type="control_dropdown"] .form-input-wide {
  width: 150px;
}
.form-label {
  font-family: "Lucida Grande", sans-serif;
}
li[data-type="control_image"] div {
  text-align: left;
}
li[data-type="control_image"] img {
  border: none;
  border-width: 0px !important;
  border-style: solid !important;
  border-color: false !important;
}
.form-line-column {
  width: auto;
}
.form-line-error {
  overflow: hidden;
  -webkit-transition-property: none;
  -moz-transition-property: none;
  -ms-transition-property: none;
  -o-transition-property: none;
  transition-property: none;
  -webkit-transition-duration: 0.3s;
  -moz-transition-duration: 0.3s;
  -ms-transition-duration: 0.3s;
  -o-transition-duration: 0.3s;
  transition-duration: 0.3s;
  -webkit-transition-timing-function: ease;
  -moz-transition-timing-function: ease;
  -ms-transition-timing-function: ease;
  -o-transition-timing-function: ease;
  transition-timing-function: ease;
  background-color: rgba(255, 50, 0, 0.6);
}
.form-line-error .form-error-message {
  background-color: #ff3200;
  clear: both;
  float: none;
}
.form-line-error .form-error-message .form-error-arrow {
  border-bottom-color: #ff3200;
}
.form-line-error input:not(#coupon-input),
.form-line-error textarea,
.form-line-error .form-validation-error {
  border: 1px solid #ff3200;
  -webkit-box-shadow: 0 0 3px #ff3200;
  -moz-box-shadow: 0 0 3px #ff3200;
  box-shadow: 0 0 3px #ff3200;
}
.form-all {
  position: relative;
}
.form-all:before {
  content: "";
  background-image: url("https://www.jotform.com/uploads/007B/form_files/WhatsApp_Image_2018-06-08_at_12.53.10_PM.5b1a2fbf873ef6.09609654.jpeg");
  display: inline-block;
  height: 69px;
  position: absolute;
  background-size: 700px 69px;
  background-repeat: no-repeat;
  width: 100%;
}
.form-all {
  margin-top: 79px !important;
}
.form-all:before {
  top: -79px;
  left: 0;
  background-position: top left;
}
.ie-8 .form-all {
  margin-top: auto;
  margin-top: initial;
}
.ie-8 .form-all:before {
  display: none;
}
[data-type="control_clear"] {
  display: none;
}
/* | */
@media screen and (max-width: 480px), screen and (max-device-width: 767px) and (orientation: portrait), screen and (max-device-width: 415px) and (orientation: landscape) {
  .testOne {
    letter-spacing: 0;
  }
  .form-all {
    border: 0;
    max-width: initial;
  }
  .form-sub-label-container {
    width: 100%;
    margin: 0;
    margin-right: 0;
    float: left;
    -moz-box-sizing: border-box;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
  }
  span.form-sub-label-container + span.form-sub-label-container {
    margin-right: 0;
  }
  .form-sub-label {
    white-space: normal;
  }
  .form-address-table td,
  .form-address-table th {
    padding: 0 1px 10px;
  }
  .form-submit-button,
  .form-submit-print,
  .form-submit-reset {
    width: 100%;
    margin-left: 0!important;
  }
  div[id*=at_] {
    font-size: 14px;
    font-weight: 700;
    height: 8px;
    margin-top: 6px;
  }
  .showAutoCalendar {
    width: 20px;
  }
  img.form-image {
    max-width: 100%;
    height: auto;
  }
  .form-matrix-row-headers {
    width: 100%;
    word-break: break-all;
    min-width: 40px;
  }
  .form-collapse-table,
  .form-header-group {
    margin: 0;
  }
  .form-collapse-table {
    height: 100%;
    display: inline-block;
    width: 100%;
  }
  .form-collapse-hidden {
    display: none !important;
  }
  .form-input {
    width: 100%;
  }
  .form-label {
    width: 100% !important;
  }
  .form-label-left,
  .form-label-right {
    display: block;
    float: none;
    text-align: left;
    width: auto!important;
  }
  .form-line,
  .form-line.form-line-column {
    padding: 2% 5%;
    -moz-box-sizing: border-box;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
  }
  input[type=text],
  input[type=email],
  input[type=tel],
  textarea {
    width: 100%;
    -moz-box-sizing: border-box;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
    max-width: initial !important;
  }
  .form-radio-other-input,
  .form-checkbox-other-input {
    max-width: 55% !important;
  }
  .form-dropdown,
  .form-textarea,
  .form-textbox {
    width: 100%!important;
    -moz-box-sizing: border-box;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
  }
  .form-input,
  .form-input-wide,
  .form-textarea,
  .form-textbox,
  .form-dropdown {
    max-width: initial!important;
  }
  .form-checkbox-item:not(#foo),
  .form-radio-item:not(#foo) {
    width: 100%;
  }
  .form-address-city,
  .form-address-line,
  .form-address-postal,
  .form-address-state,
  .form-address-table,
  .form-address-table .form-sub-label-container,
  .form-address-table select,
  .form-input {
    width: 100%;
  }
  div.form-header-group {
    padding: 24px 0px !important;
    margin: 0 12px 2% !important;
    margin-left: 5%!important;
    margin-right: 5%!important;
    -moz-box-sizing: border-box;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
  }
  div.form-header-group.hasImage img {
    max-width: 100%;
  }
  [data-type="control_button"] {
    margin-bottom: 0 !important;
  }
  [data-type=control_fullname] .form-sub-label-container {
    width: 48%;
  }
  [data-type=control_fullname] .form-sub-label-container:first-child {
    margin-right: 4%;
  }
  [data-type=control_phone] .form-sub-label-container {
    width: 65%;
    margin-right: 0;
    margin-left: 0;
    float: left;
  }
  [data-type=control_phone] .form-sub-label-container:first-child {
    width: 31%;
    margin-right: 4%;
  }
  [data-type=control_datetime] .allowTime-container {
    width: 100%;
  }
  [data-type=control_datetime] .form-sub-label-container:first-child {
    width: 10%!important;
    margin-left: 0;
    margin-right: 0;
  }
  [data-type=control_datetime] .form-sub-label-container + .form-sub-label-container {
    width: 24%!important;
    margin-left: 6%;
    margin-right: 0;
  }
  [data-type=control_datetime] span + span + span > span:first-child {
    display: block;
    width: 100% !important;
  }
  [data-type=control_birthdate] .form-sub-label-container,
  [data-type=control_time] .form-sub-label-container {
    width: 27.3%!important;
    margin-right: 6% !important;
  }
  [data-type=control_time] .form-sub-label-container:last-child {
    width: 33.3%!important;
    margin-right: 0 !important;
  }
  .form-pagebreak-back-container,
  .form-pagebreak-next-container {
    min-height: 1px;
    width: 50% !important;
  }
  .form-pagebreak-back,
  .form-pagebreak-next,
  .form-product-item.hover-product-item {
    width: 100%;
  }
  .form-pagebreak-back-container {
    padding: 0;
    text-align: right;
  }
  .form-pagebreak-next-container {
    padding: 0;
    text-align: left;
  }
  .form-pagebreak {
    margin: 0 auto;
  }
  .form-buttons-wrapper {
    margin: 0!important;
    margin-left: 0!important;
  }
  .form-buttons-wrapper button {
    width: 100%;
  }
  .form-buttons-wrapper .form-submit-print {
    margin: 0 !important;
  }
  table {
    width: 100%!important;
    max-width: initial!important;
  }
  table td + td {
    padding-left: 3%;
  }
  .form-checkbox-item,
  .form-radio-item {
    white-space: normal!important;
  }
  .form-checkbox-item input,
  .form-radio-item input {
    width: auto;
  }
  .form-collapse-table {
    margin: 0 5%;
    display: block;
    zoom: 1;
    width: auto;
  }
  .form-collapse-table:before,
  .form-collapse-table:after {
    display: table;
    content: '';
    line-height: 0;
  }
  .form-collapse-table:after {
    clear: both;
  }
  .fb-like-box {
    width: 98% !important;
  }
  .form-error-message {
    clear: both;
    bottom: -10px;
  }
  .date-separate,
  .phone-separate {
    display: none;
  }
  .custom-field-frame,
  .direct-embed-widgets,
  .signature-pad-wrapper {
    width: 100% !important;
  }
}
/* | */

/*PREFERENCES STYLE*/
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
      background-color: #4e4e4e;
      border: 1px solid transparent;
    }
  
    .form-all {
      color: #cccccc;
    }
    .form-header-group .form-header {
      color: #cccccc;
    }
    .form-header-group .form-subHeader {
      color: #cccccc;
    }
    .form-label-top,
    .form-label-left,
    .form-label-right,
    .form-html,
    .form-checkbox-item label,
    .form-radio-item label {
      color: #cccccc;
    }
    .form-sub-label {
      color: #e6e6e6;
    }
  
    .supernova {
      background-color: #3e3e3e;
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
      background-color: #3e3e3e;
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
  .form-all:before { display : none; } .form-all { margin-top: 0 !important; }
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
<script src="https://cdn.jotfor.ms/static/jotform.forms.js?3.3.6533" type="text/javascript"></script>
<script type="text/javascript">
   JotForm.init(function(){
      JotForm.alterTexts(undefined);
	JotForm.clearFieldOnHide="disable";
	JotForm.submitError="jumpToFirstError";
    /*INIT-END*/
});

   JotForm.prepareCalculationsOnTheFly([null,null,null,{"name":"Carriage","qid":"3","text":"  Carriage Workshop","type":"control_head"},{"name":"clickTo","qid":"4","text":"Wheel Data Recording System\n&nbsp;","type":"control_text"},{"description":"","name":"selectThe","qid":"5","subLabel":"","text":"Select the employee","type":"control_dropdown"},{"name":"clickTo6","qid":"6","text":"&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Please select the employee and select the role","type":"control_text"},{"description":"","name":"employeeNumber","qid":"7","subLabel":"","text":"Employee Number","type":"control_textbox"},{"description":"","name":"employeeName","qid":"8","subLabel":"","text":"Employee Name","type":"control_textbox"},{"description":"","name":"designation","qid":"9","subLabel":"","text":"Designation","type":"control_dropdown"},{"description":"","name":"section","qid":"10","subLabel":"","text":"Section","type":"control_dropdown"},{"description":"","name":"input11","qid":"11","text":"","type":"control_matrix"},{"description":"","name":"typeA","qid":"12","text":"","type":"control_matrix"},{"name":"addNew","qid":"13","text":"Add new Employee","type":"control_button"},{"name":"sUpdate","qid":"14","text":"S Update","type":"control_button"}]);
   setTimeout(function() {
JotForm.paymentExtrasOnTheFly([null,null,null,{"name":"Carriage","qid":"3","text":"  Carriage Workshop","type":"control_head"},{"name":"clickTo","qid":"4","text":"Wheel Data Recording System\n&nbsp;","type":"control_text"},{"description":"","name":"selectThe","qid":"5","subLabel":"","text":"Select the employee","type":"control_dropdown"},{"name":"clickTo6","qid":"6","text":"&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Please select the employee and select the role","type":"control_text"},{"description":"","name":"employeeNumber","qid":"7","subLabel":"","text":"Employee Number","type":"control_textbox"},{"description":"","name":"employeeName","qid":"8","subLabel":"","text":"Employee Name","type":"control_textbox"},{"description":"","name":"designation","qid":"9","subLabel":"","text":"Designation","type":"control_dropdown"},{"description":"","name":"section","qid":"10","subLabel":"","text":"Section","type":"control_dropdown"},{"description":"","name":"input11","qid":"11","text":"","type":"control_matrix"},{"description":"","name":"typeA","qid":"12","text":"","type":"control_matrix"},{"name":"addNew","qid":"13","text":"Add new Employee","type":"control_button"},{"name":"sUpdate","qid":"14","text":"S Update","type":"control_button"}]);}, 20); 
</script>
</head>
<body>
<form class="jotform-form" action="sub.php" method="post" name="form_81581246792464" id="81581246792464" accept-charset="utf-8">
  <input type="hidden" name="formID" value="81581246792464" />
  <div class="form-all">
    <ul class="form-section page-section">
      <li id="cid_3" class="form-input-wide" data-type="control_head">
        <div class="form-header-group ">
          <div class="header-text httac htvam">
            <h2 id="header_3" class="form-header" data-component="header">
              Carriage Workshop
            </h2>
            <div id="subHeader_3" class="form-subHeader">
              Lallaguda,Secundrabad
            </div>
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_text" id="id_4">
        <div id="cid_4" class="form-input-wide">
          <div id="text_4" class="form-html" data-component="text">
            <p style="text-align: center;"><strong><span style="text-decoration: underline;">Wheel Data Recording System</span></strong></p>
            <p style="text-align: center;"><strong> </strong></p>
          </div>
        </div>
      </li>
      <li class="form-line form-line-column form-col-1" data-type="control_dropdown" id="id_5">
        <label class="form-label form-label-top" id="label_5" for="input_5"> Select the employee </label>
        <div id="cid_5" class="form-input-wide">
          <select onChange="getEMPno(this.value); getEMPname(this.value); "  class="form-dropdown" id="input_5" name="q5_selectThe" style="width:150px" data-component="dropdown">
       
                       <option value="">Select Employee</option>
  <?php while ($row=mysql_fetch_array($result)) { ?>
  <option value=<?php echo $row['Emp_No']?>><?php echo $row['Emp_No']  ?></option>
  <?php } ?>

          </select>
        </div>
      </li>
      <li class="form-line" data-type="control_text" id="id_6">
        <div id="cid_6" class="form-input-wide">
          <div id="text_6" class="form-html" data-component="text">
            <p style="text-align: center;"><strong>               Please select the employee and select the role</strong></p>
          </div>
        </div>
      </li>
      <li class="form-line form-line-column form-col-1" data-type="control_textbox" id="id_7">
        <label class="form-label form-label-top" id="label_7" for="input_7"> Employee Number </label>
        <div id="cid_7" class="form-input-wide">
         <select class="form-dropdown" id="input_7" name="q99_designation" style="width:150px" data-component="dropdown">
   

          </select>
        </div>
      </li>
      <li class="form-line form-line-column form-col-2" data-type="control_textbox" id="id_8">
        <label class="form-label form-label-top" id="label_8" for="input_8"> Employee Name </label>
        <div id="cid_8" class="form-input-wide">
                        <select class="form-dropdown" id="input_97" name="q92_designation" style="width:150px" data-component="dropdown">


          </select>
        </div>
      </li>
      <li class="form-line form-line-column form-col-3" data-type="control_dropdown" id="id_9">
        <label class="form-label form-label-top" id="label_9" for="input_9"> Designation </label>
        <div id="cid_9" class="form-input-wide">
          <select class="form-dropdown" id="input_9" name="q9_designation" style="width:150px" data-component="dropdown">
            <option value="">  </option>
            <option value="A"> A </option>
            <option value="B"> B </option>
            <option value="C"> C </option>
          </select>
        </div>
      </li>
      <li class="form-line form-line-column form-col-4" data-type="control_dropdown" id="id_10">
        <label class="form-label form-label-top" id="label_10" for="input_10"> Section </label>
        <div id="cid_10" class="form-input-wide">
          <select class="form-dropdown" id="input_10" name="q10_section" style="width:150px" data-component="dropdown">
            <option value="">  </option>
            <option value="A"> A </option>
            <option value="B"> B </option>
            <option value="C"> C </option>
          </select>
        </div>
      </li>

            <li class="form-line form-line-column form-col-4" data-type="control_dropdown" id="id_10">
        <label class="form-label form-label-top" id="label_110" for="input_110"> Role </label>
        <div id="cid_110" class="form-input-wide">
          <select class="form-dropdown" id="input_10" name="q110_section" style="width:150px" data-component="dropdown">
            <option value="">  </option>
            <option value="A"> A </option>
            <option value="B"> B </option>
            <option value="C"> C </option>
          </select>
        </div>
      </li>


      <li class="form-line form-line-column form-col-1 form-line-column-clear" data-type="control_matrix" id="id_11">
        <label class="form-label form-label-top" id="label_11" for="input_11">  </label>
        <div id="cid_11" class="form-input-wide">
          <table summary="" cellPadding="4" cellSpacing="0" class="form-matrix-table" data-component="matrix">
            <tbody>
              <tr>
                <th style="border:none">
                   
                </th>
                <th class="form-matrix-column-headers form-matrix-column_0">
                </th>
              </tr>
              <tr>
                <th style="text-align:left" class="form-matrix-row-headers">
                  Axle Grinding
                </th>
                <td style="text-align:center" class="form-matrix-values">
                  <input type="checkbox" id="input_11_0_0" class="form-checkbox" name="q11_input1100" value="on" />
                </td>
              </tr>
              <tr>
                <th style="text-align:left" class="form-matrix-row-headers">
                  Axle Turning
                </th>
                <td style="text-align:center" class="form-matrix-values">
                  <input type="checkbox" id="input_11_1_0" class="form-checkbox" name="q11_input1111" value="on" />
                </td>
              </tr>
              <tr>
                <th style="text-align:left" class="form-matrix-row-headers">
                  Disc Boring
                </th>
                <td style="text-align:center" class="form-matrix-values">
                  <input type="checkbox" id="input_11_2_0" class="form-checkbox" name="q11_input1120" value="on" />
                </td>
              </tr>
              <tr>
                <th style="text-align:left" class="form-matrix-row-headers">
                  Disc De-Pressing
                </th>
                <td style="text-align:center" class="form-matrix-values">
                  <input type="checkbox" id="input_11_3_0" class="form-checkbox" name="q11_input1130" value="on" />
                </td>
              </tr>
              <tr>
                <th style="text-align:left" class="form-matrix-row-headers">
                  Disc Pressing
                </th>
                <td style="text-align:center" class="form-matrix-values">
                  <input type="checkbox" id="input_11_4_0" class="form-checkbox" name="q11_input1140" value="on" />
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </li>
      <li class="form-line form-line-column form-col-2" data-type="control_matrix" id="id_12">
        <label class="form-label form-label-top form-label-auto" id="label_12" for="input_12">  </label>
        <div id="cid_12" class="form-input-wide">
          <table summary="" cellPadding="4" cellSpacing="0" class="form-matrix-table" data-component="matrix">
            <tbody>
              <tr>
                <th style="border:none">
                   
                </th>
                <th class="form-matrix-column-headers form-matrix-column_0">
                </th>
              </tr>
              <tr>
                <th style="text-align:left" class="form-matrix-row-headers">
                  DPT Roller Bearing
                </th>
                <td style="text-align:center" class="form-matrix-values">
                  <input type="checkbox" id="input_12_0_0" class="form-checkbox" name="q12_typeA00" value="on" />
                </td>
              </tr>
              <tr>
                <th style="text-align:left" class="form-matrix-row-headers">
                  Inspection
                </th>
                <td style="text-align:center" class="form-matrix-values">
                  <input type="checkbox" id="input_12_1_0" class="form-checkbox" name="q12_typeA11" value="on" />
                </td>
              </tr>
              <tr>
                <th style="text-align:left" class="form-matrix-row-headers">
                  UT Test
                </th>
                <td style="text-align:center" class="form-matrix-values">
                  <input type="checkbox" id="input_12_2_0" class="form-checkbox" name="q12_typeA22" value="on" />
                </td>
              </tr>
              <tr>
                <th style="text-align:left" class="form-matrix-row-headers">
                  Wheel Mounting
                </th>
                <td style="text-align:center" class="form-matrix-values">
                  <input type="checkbox" id="input_12_3_0" class="form-checkbox" name="q12_typeA33" value="on" />
                </td>
              </tr>
              <tr>
                <th style="text-align:left" class="form-matrix-row-headers">
                  Wheel Profile Turning
                </th>
                <td style="text-align:center" class="form-matrix-values">
                  <input type="checkbox" id="input_12_4_0" class="form-checkbox" name="q12_typeA44" value="on" />
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </li>
      <li class="form-line form-line-column form-col-3" data-type="control_button" id="id_13">
        <div id="cid_13" class="form-input-wide">
          <div style="text-align:right" class="form-buttons-wrapper">
                    </div>
        </div>
      </li>
      <li class="form-line form-line-column form-col-4" data-type="control_button" id="id_14">
        <div id="cid_14" class="form-input-wide">
          <div style="text-align:left" class="form-buttons-wrapper">
            <button name="updates" id="update" type="submit" class="form-submit-button" data-component="button">
              Update
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
  


   function getEMPno(WSNO) {    
    
    var strURL="empno.php?WS="+WSNO;
    var req = getXMLHTTP();
    
    if (req) {
      
      req.onreadystatechange = function() {
        if (req.readyState == 4) {
          // only if "OK"
          if (req.status == 200) {            
            document.getElementById('cid_7').innerHTML=req.responseText;

           
          } else {
            alert("Problem while using XMLHTTP :\n" + req.statusText);
          }          
        }       
      }     
      req.open("GET", strURL, true);
      req.send(null);
    }   
  }

   function getEMPname(WSNO) {    
    
    var strURL="empname.php?WS="+WSNO;
    var req = getXMLHTTP();
    
    if (req) {
      
      req.onreadystatechange = function() {
        if (req.readyState == 4) {
          // only if "OK"
          if (req.status == 200) {            
            document.getElementById('cid_8').innerHTML=req.responseText;

           
          } else {
            alert("Problem while using XMLHTTP :\n" + req.statusText);
          }          
        }       
      }     
      req.open("GET", strURL, true);
      req.send(null);
    }   
  }



 </script>