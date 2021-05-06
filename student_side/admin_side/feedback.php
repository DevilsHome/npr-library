<?php

  $con=mysqli_connect("localhost","root","","lib");  
          /* server name, username, password, database name */
include "include/trailnavbar.php";
?>
<!DOCTYPE HTML>
<html class="supernova"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta property="og:title" content="Responsive Contact Form" >
<meta property="og:url" >
<meta property="og:description" content="Please click the link to complete this form.">
<meta name="slack-app-id" content="AHNMASS8M">
<link rel="shortcut icon" href="https://cdn.jotfor.ms/favicon.ico">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=2.0, user-scalable=1" />
<meta name="HandheldFriendly" content="true" />
<title>Contact us</title>
<link href="https://cdn.jotfor.ms/static/formCss.css?3.3.12995" rel="stylesheet" type="text/css" />
<link type="text/css" rel="stylesheet" href="https://cdn.jotfor.ms/css/styles/nova.css?3.3.12995" />

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<style type="text/css">
@import url('https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300');
*{
    margin:0px;
    padding:0px;
  }       
    header{
      width:100%;
      height:160px;
      background-color: #000; 
      padding: 10px;  
    }
    .main ul{
  position:relative;
  float:right;
  margin-top: 60px;
  display: flex;
  margin-right: 10px;
}
.main ul li{
list-style: none;
}
.main ul li a{
  text-decoration: none;
  color:#fff;
  padding:5px 20px;
  border:1px solid transparent;
  transition:0.6 ease;
  width: 250px;
  margin:1px;
}
    .logo{
      float:left;
      padding-left:20px;

    }
    .logo img{
      margin-left:120px;
    }
    .logo h1{
      font-size: 20px;
    }
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
    .form-all{
        margin:0px auto;
        padding-top:0px;
        width:500px;
        color:white !important;
        font-family:'Open Sans Condensed';
        font-size:16px;
    }
    .form-radio-item label, .form-checkbox-item label, .form-grading-label, .form-header{
        color: #2E2E2E;
    }
</style>
<style type="text/css" id="form-designer-style">
    /* Injected CSS Code */
@import "https://fonts.googleapis.com/css?family=Open Sans Condensed:light,lightitalic,normal,italic,bold,bolditalic";
@import "//www.jotform.com/themes/css/buttons/form-submit-button-simple_red.css";
.form-all {
  font-family: "Open Sans Condensed", sans-serif;
  margin-top: 20px;
}
.form-all {
  width: 500px;
}
.form-label-left,
.form-label-right {
  width: 150px;
}
.form-label {
  white-space: normal;
}
.form-label.form-label-auto {
  display: inline-block;
  float: left;
  text-align: left;
  width: 150px;
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
  font-size: 20px;
}
.form-label {
  font-weight: bold;
}
.form-checkbox-item label,
.form-radio-item label {
  font-weight: normal;
  font-size: 40px;
}
.supernova body {
  background:url('images/cc.png');
  background-repeat: no-repeat;
  background-size: cover;
}
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
.form-captcha input,
.form-spinner input,
.form-error-message {
  padding: 4px 3px 2px 3px;
}
.form-header-group {
  font-family: "Open Sans Condensed", sans-serif;
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
.form-dropdown {
  -webkit-appearance: menulist-button;
  border-color: #cccccc;
}
[data-type="control_dropdown"] .form-input,
[data-type="control_dropdown"] .form-input-wide {
  width: 150px;
}
.form-buttons-wrapper {
  margin-left: 0 !important;
  text-align: center !important;
}
.form-label {
  font-family: "Open Sans Condensed", sans-serif;
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
  background-color: #ffffff;
  -webkit-box-shadow: inset 0px 3px 11px -7px #ff3200;
  -moz-box-shadow: inset 0px 3px 11px -7px #ff3200;
  box-shadow: inset 0px 3px 11px -7px #ff3200;
}
.form-line-error input:not(#coupon-input),
.form-line-error textarea,
.form-line-error .form-validation-error {
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
  border: 1px solid #fff4f4;
  -moz-box-shadow: 0 0 3px #fff4f4;
  -webkit-box-shadow: 0 0 3px #fff4f4;
  box-shadow: 0 0 3px #fff4f4;
}
.form-line-error .form-error-message {
  margin: 0;
  position: absolute;
  color: #fff;
  display: inline-block;
  right: 0;
  font-size: 10px;
  position: absolute!important;
  box-shadow: none;
  top: 0px;
  line-height: 20px;
  color: #FFF;
  background: #ff3200;
  padding: 0px 5px;
  bottom: auto;
  min-width: 105px;
  -webkit-border-radius: 0;
  -moz-border-radius: 0;
  border-radius: 0;
}
.form-line-error .form-error-message img,
.form-line-error .form-error-message .form-error-arrow {
  display: none;
}
.ie-8 .form-all {
  margin-top: auto;
  margin-top: initial;
}
.ie-8 .form-all:before {
  display: none;
}
  /*PREFERENCES STYLE*//*__INSPECT_SEPERATOR__*/
.form-all {
    -moz-box-sizing : border-box;
    -webkit-box-sizing : border-box;
    box-sizing : border-box;
    border : 2.5px solid #ed1b24 !important;
}
[data-type="control_head"] {
    padding-bottom : 20px;
}
/*responsive fields*/
[data-type="control_email"] .form-textbox,
[data-type="control_textarea"] .form-textarea, 
[data-type="control_dropdown"] .form-dropdown {
    width : 100% !important;
    max-width : none !important;
}
.form-textbox, .form-textarea, .form-dropdown {
    max-width : none !important;
    box-shadow : none;
    outline : none;
    box-sizing : border-box;
    -webkit-box-sizing : border-box;
    -moz-box-sizing : border-box;
    font-family : inherit;
}
[data-type="cyontrol_dropdown"] .form-input, 
[data-type="control_dropdown"] .form-input-wide {
    width : 100%;
}
/*reset submit button*/
[data-type="control_button"] {
    background : transparent !important;
}

.form-submit-button,
.form-submit-reset,
.form-submit-print {
    outline : none;
}

/*remove other checkbox*/
.form-checkbox-other, 
.form-radio-other {
    visibility : hidden !important;
}

/*shruken fields*/
.form-line-column {
    width : 50%;
}

.form-line-column .form-label-top {
    width : 100% !important;
}

/*fix form builder display*/
div#stage.form-all {
    max-width : none !important;
    margin-right : 0;
}

div#stage .form-input {
    width : 64% !important;
}

/* radio-checkbox button make border 1px */
.form-radio-item:not(#foo) label:after,
.form-radio-item:not(#foo) label:before {
    border-radius : 50%;
}

.form-checkbox-item:not(#foo) label:after,
.form-checkbox-item:not(#foo) label:before {
    border-radius : 0;
}

.form-radio-item:not(#foo) label:before,
.form-checkbox-item:not(#foo) label:before {
    border-width : 1px;
}

/*fix for braintree cc styling*/
[data-type="control_braintree"] .form-sub-label-container {
    width : 100% !important;
    padding : 4px;
    box-sizing : border-box;
}

[data-type="control_braintree"] .form-textbox {
    width : 100%;
}

.braintree-hosted-fields {
    width : 100% !important;
    box-sizing : border-box;
    min-height : 28px;
}

.jotform-form {
    padding-bottom : 10px;
}

.form-header {
    background : #ed1b24;
    border-bottom : none;
    padding : 30px 27px 15px 27px;
    clear : both;
    width : 200px;
    color : white !important;
    font-family : 'Open Sans Condensed', sans-serif !important;
    font-size : 24px;
    text-align : center;
}

.form-subHeader {
    width : 0;
    height : 0;
    border-top : 35px solid #ed1b24;
    border-left : 101px solid transparent;
    border-right : 101px solid transparent;
    padding-bottom : 25px;
}

.form-header-group {
    background : transparent;
    border-bottom : none;
    padding : 0;
    clear : both;
    padding-left : 50px;
}

.form-subHeader {
    margin : 0;
}

.form-header-group {
    margin-top : 0;
    margin-left : 0;
}
/*table css*/
.wrapper
      {
        padding: 10px;
        margin: 10px auto;
        width:900px;
        height: auto;
        background-color: black;
        opacity: .8;
        color: white;
      }
      .form-control
      {
        height: 70px;
        width: 60%;
      }
      .scroll
      {
        width: 100%;
        height: 300px;
        overflow: auto;
      }
    /* Injected CSS Code */
</style>

<script src="https://cdnjs.cloudflare.com/ajax/libs/punycode/1.4.1/punycode.min.js"></script>
<script src="https://cdn.jotfor.ms/static/prototype.forms.js" type="text/javascript"></script>
<script src="https://cdn.jotfor.ms/static/jotform.forms.js?3.3.12995" type="text/javascript"></script>
<script type="text/javascript">
  JotForm.init(function(){
      setTimeout(function() {
          $('input_7').hint('Ex: myname@example.com');
       }, 20);
      JotForm.setCustomHint( 'input_4', 'Message' );
    /*INIT-END*/
  });
   JotForm.prepareCalculationsOnTheFly([null,null,{"name":"submit","qid":"2","text":"Submit","type":"control_button"},null,{"name":"message4","qid":"4","text":"Message","type":"control_textarea"},null,null,{"name":"email","qid":"7","text":"E-mail","type":"control_email"},null,{"name":"clickTo","qid":"9","text":"CONTACT US","type":"control_head"},{"name":"subject","qid":"10","text":"Subject","type":"control_dropdown"}]);
   setTimeout(function() {
JotForm.paymentExtrasOnTheFly([null,null,{"name":"submit","qid":"2","text":"Submit","type":"control_button"},null,{"name":"message4","qid":"4","text":"Message","type":"control_textarea"},null,null,{"name":"email","qid":"7","text":"E-mail","type":"control_email"},null,{"name":"clickTo","qid":"9","text":"CONTACT US","type":"control_head"},{"name":"subject","qid":"10","text":"Subject","type":"control_dropdown"}]);}, 20); 
</script>
</head>

<body>
<form class="jotform-form" action="" method="post" name="form_92639491762469" id="92639491762469" accept-charset="utf-8">
  <input type="hidden" name="formID" value="92639491762469" />
  <input type="hidden" id="JWTContainer" value="" />
  <input type="hidden" id="cardinalOrderNumber" value="" />
  <div role="main" class="form-all">
    <ul class="form-section page-section">
      <li id="cid_9" class="form-input-wide" data-type="control_head">
        <div class="form-header-group ">
          <div class="header-text httal htvam">
            <h1 style="font-size: 30px"; id="header_9" class="form-header" data-component="header">
              CONTACT US
            </h1>
            <div id="subHeader_9" class="form-subHeader">
                
            </div>
          </div>
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_email" id="id_7">
        <label class="form-label form-label-left form-label-auto" id="label_7" for="input_7">
          E-mail
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_7" class="form-input jf-required">
          <input type="text" id="input_7" name="email" class="form-textbox validate[required, email]" size="25" value="" placeholder="Ex: " data-component="email" aria-labelledby="label_7" required="" />
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_textarea" id="id_4">
        <label class="form-label form-label-left form-label-auto" id="label_4" for="input_4">
          Message
          <span class="form-required">
            *
          </span>
        </label>

        <div id="cid_4" class="form-input jf-required">
          <textarea id="input_4" class="form-textarea validate[required]" name="comment" cols="26" rows="6" data-component="textarea" required="" aria-labelledby="label_4"></textarea>
        </div>
      </li>
      <li class="form-line" data-type="control_button" id="id_2">
        <div id="cid_2" class="form-input-wide">
          <div style="margin-left:156px" class="form-buttons-wrapper ">
            <button id="input_2" type="submit" name="submit" class="form-submit-button" data-component="button">
              Submit
            </button>
          </div>
        </div>
      </li>
    </ul>
  </div>
  </form>

<div class="wrapper">
<div class="scroll">
<?php
      if(isset($_POST['submit']))
      {
        $sql="INSERT INTO `comments` VALUES('', 'Admin', '$_POST[comment]');";
        if(mysqli_query($con,$sql))
        {
          $q="SELECT * FROM `comments` ORDER BY `comments`.`id` DESC";
          $res=mysqli_query($con,$q);


        echo "<table class='table table-bordered'>";
          while ($row=mysqli_fetch_assoc($res)) 
          {

            echo "<tr>";
              echo "<td>"; echo $row['username']; echo "</td>";
              echo "<td>"; echo $row['comment']; echo "</td>";
            echo "</tr>";
          }
        echo "</table>";
        }

      }

      else
      {
        $q="SELECT * FROM `comments` ORDER BY `comments`.`id` DESC"; 
          $res=mysqli_query($con,$q);

        echo "<table class='table table-bordered'>";
          while ($row=mysqli_fetch_assoc($res)) 
          {
            echo "<tr>";
              echo "<td>"; echo $row['username']; echo "</td>";
              echo "<td>"; echo $row['comment']; echo "</td>";
            echo "</tr>";
          }
        echo "</table>";
      }
    ?>
    </div>
    </div>
      </body>
      <?php
include "include/footer.php";
      ?>
  </html>