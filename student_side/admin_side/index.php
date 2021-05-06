<?php
include "include/trailnavbar.php";
?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
<style>

html, div, span, object, iframe,
h1, h2, li, tr, th, td,
article, aside, canvas, details, figcaption, figure, 
footer, header, hgroup, menu, nav, section {
    margin:0;
    padding:0;
    border:0;
    outline:0;
    font-size:100%;
    vertical-align:baseline;
}
body{
    background-image:url("images/ff.png");
}
.col-container {
    margin-top:-1%;
    width: 100%;
    height:90vh;
    padding-right:2%;
    padding-left:5%;
    padding-top:0%;
    padding-bottom:0%; 
    background-size:cover;
}
.col1 {
    width: 40%;
    height:90%;
    float: left;
    margin-top: 3%;
    margin-left:-2%;
    margin-bottom: 2%;
    padding: 16px;
}
/* Slideshow container */
.slideshow-container {
    max-width:100%;
    max-height: 100%;
    background-color: #ccc;
    margin-left:40%;
    margin-top:2%; 
    position:relative;
}
/* Next & previous buttons */
.prev, .next {
    cursor: pointer;
    position: absolute;
    top: 50%;
    width: auto;
    padding: 16px;
    margin-top: -22px;
    color: white;
    font-weight: bold;
    font-size: 18px;
    transition: 0.6s ease;
    border-radius: 0 3px 3px 0;
    user-select: none;
}

/* Position the "next button" to the right */
.next {
    right: 0;
    border-radius: 3px 0 0 3px;
}
/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
    background-color: rgba(0,0,0,0.8);
}
/* Caption text */
.text {
    color: #f2f2f2;
    font-size: 15px;
    padding: 8px 12px;
    position: absolute;
    bottom: 8px;
    width: 100%;
    text-align: center;
}
/* Number text (1/3 etc) */
.numbertext {
    color: #f2f2f2;
    font-size: 12px;
    padding: 8px 12px;
    position: absolute;
    top: 0;
}
/* The dots/bullets/indicators */
.dot {
    cursor: pointer;
    height: 15px;
    width: 15px;
    margin: 0 2px;
    background-color: #bbb;
    border-radius: 50%;
    display: inline-block;
    transition: background-color 0.6s ease;
}
.active, .dot:hover {
    background-color: #717171;
}
/* Fading animation */
.fade {
    -webkit-animation-name: fade;
    -webkit-animation-duration: 1.5s;
    animation-name: fade;
    animation-duration: 1.5s;
}
@-webkit-keyframes fade {
from {opacity: .4} 
to {opacity: 1}
}
@keyframes fade {
from {
    opacity: .4
  } 
to {
    opacity: 1
  }
}
/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
.prev, .next,.text {
    font-size: 11px
}
}
/* Extra small devices (phones, 600px and down) */
@media only screen and (max-width: 600px) {
.col-container {
    width:100%;
}
.col1{
    max-width:40%;
}
.canvas{
    max-width:50%;
}
.slideshow-conatiner{
    max-width:100%;
}
.mySlides img{
    max-width:100%;
}
.font{
    max-width:100%;
}
}
/* Small devices (portrait tablets and large phones, 600px and up) */
@media only screen and (min-width: 600px) {
.col-container {
    width:100%;
}
.col1{
    max-width:40%;
}
.canvas{
    max-width:100%;
}
.slideshow-container{
    max-width:100%;
}
.mySlides img{
    max-width:100%;
}
.font{
    font-size:auto;
}
}
/* Medium devices (landscape tablets, 768px and up) */
@media only screen and (min-width: 768px) {
.col-container {
    width:100%;
}
.col1{
    max-width:40%;
}
.canvas{
    max-width:auto;
}
.slideshow-container{
    max-width:auto;
}
.mySlides img{
    max-width:100%;
}
.font{
    font-size:auto;
}
} 
/* Large devices (laptops/desktops, 992px and up) */
@media only screen and (min-width: 992px) {
.col-container {
    width:100%;
}
.col1{
    max-width:40%;
}
.canvas{
    max-width:auto;
}
.slideshow-container{
    max-width:auto;
}
.mySlides img{
    max-width:100%;
}
.font{
    font-size:auto;
}
}
/* Extra large devices (large laptops and desktops, 1200px and up) */
@media only screen and (min-width: 1200px) {
.col-container {
    width:100%;
}
.col1{
    max-width:40%;
}
.canvas{
    max-width:auto;
}
.slideshow-container{
    width:auto;
}
.mySlides img{
    max-width:100%;
}
.font{
    font-size:auto;
 }
}
</style>
</head>
<body>
  <div class="col-container">
    <div class="col1" style=" background:url('images/dd.png');">
      <h1  class="font" style="text-align:center; font-family:ARIAL BLACK; color: aqua; font-size:240%; font-weight:bold;"> SLIET LONGOWAL</h1>
         <h1 style="text-align:center; font-style:none; font-family:cambria; font-size:210%; color: aqua; font-weight:bold; margin-top:3%; margin-bottom:5%;">"CENTRAL LIBRARY"</h1>
           <h3  style=" text-align:center; font-family:Times New Roman;font-weight: bold; color:skyblue; margin-top:3%; margin-bottom:5%;">Opens at: 08:30</h3>
             <h3 style=" text-align:center; font-family:Times New Roman;font-weight: bold; color:skyblue; margin-top:3%; margin-bottom:5%;">Close at: 04:30</h3>
<canvas id="canvas" width="300" height="300" style="background-color:transparent; margin-left:18%; margin-top:1%;">
</canvas>
<script>
    var canvas = document.getElementById("canvas");
    var ctx = canvas.getContext("2d");
    var radius = canvas.height / 2;
    ctx.translate(radius, radius);
    radius = radius * 0.90
    setInterval(drawClock, 1000);

    function drawClock() {
    drawFace(ctx, radius);
    drawNumbers(ctx, radius);
    drawTime(ctx, radius);
}
function drawFace(ctx, radius) {
    var grad;
    ctx.beginPath();
    ctx.arc(0, 0, radius, 0, 2*Math.PI);
    ctx.fillStyle = 'white';
    ctx.fill();
    grad = ctx.createRadialGradient(0,0,radius*0.95, 0,0,radius*1.05);
    grad.addColorStop(0, '#333');
    grad.addColorStop(0.5, 'white');
    grad.addColorStop(1, '#333');
    ctx.strokeStyle = grad;
    ctx.lineWidth = radius*0.1;
    ctx.stroke();
    ctx.beginPath();
    ctx.arc(0, 0, radius*0.1, 0, 2*Math.PI);
    ctx.fillStyle = '#333';
    ctx.fill();
}
function drawNumbers(ctx, radius) {
    var ang;
    var num;
    ctx.font = radius*0.15 + "px arial";
    ctx.textBaseline="middle";
    ctx.textAlign="center";
for(num = 1; num < 13; num++){
    ang = num * Math.PI / 6;
    ctx.rotate(ang);
    ctx.translate(0, -radius*0.85);
    ctx.rotate(-ang);
    ctx.fillText(num.toString(), 0, 0);
    ctx.rotate(ang);
    ctx.translate(0, radius*0.85);
    ctx.rotate(-ang);
  }
}
function drawTime(ctx, radius){
    var now = new Date();
    var hour = now.getHours();
    var minute = now.getMinutes();
    var second = now.getSeconds();
    //hour
    hour=hour%12;
    hour=(hour*Math.PI/6)+
    (minute*Math.PI/(6*60))+
    (second*Math.PI/(360*60));
    drawHand(ctx, hour, radius*0.5, radius*0.07);
    //minute
    minute=(minute*Math.PI/30)+(second*Math.PI/(30*60));
    drawHand(ctx, minute, radius*0.8, radius*0.07);
    // second
    second=(second*Math.PI/30);
    drawHand(ctx, second, radius*0.9, radius*0.02);
}

function drawHand(ctx, pos, length, width) {
    ctx.beginPath(6,10);
    ctx.lineWidth = width;
    ctx.lineCap = "round";
    ctx.moveTo(0,0);
    ctx.rotate(pos);
    ctx.lineTo(0, -length);
    ctx.stroke();
    ctx.rotate(-pos);
}
</script>
</div>
<br>
  
<div class="slideshow-container">
<!-- Full-width images with number and caption text -->
<div class="mySlides fade">
    <img class="active" src="images/book.jpeg" style="width:100%; height:500px;">
 </div>
    <div class="mySlides fade">
        <img src="images/login.jpg" style="width:100%; height:500px;">
    </div>
        <div class="mySlides fade">
            <img src="images/book.jpeg" style="width:100%; height:500px;">
        </div>
      <div class="mySlides fade">
        <img src="images/fee.jpeg" style="width:100%; height:500px;">
      </div>
  <div class="mySlides fade">
    <img src="images/login.jpg" style="width:100%; height:500px;">
  </div>
<div class="mySlides fade">
  <img src="images/book.jpg" style="width:100%; height:500px;">
 </div>
<!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>
<!-- The dots/circles -->
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
  <span class="dot" onclick="currentSlide(4)"></span>
  <span class="dot" onclick="currentSlide(5)"></span>
</div>

   
  </div>

</div>
<script>
var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}
</script>
</body>
<?php
include "include/footer.php";
?>
</html>
