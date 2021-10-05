<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>welcome</title>
  <link rel="stylesheet" type="text/css" href="homestyle.css">
	</head>
	<body>
<div class="container">
		<ul>
  <li><a class="active" href="#home">Home</a></li>
  <li><a href="calendar.php">Calendar</a></li>
 <li><a href="course.php">Courses</a></li>
  <li><a href="result.php">See result</a></li>
  <li><a href="#about">About</a></li>
  <li style="float:right"><a href="login.php">Logout</a></li>
    </ul>
      </div> 
      <br>
      <br>
      <br>
      <div class="slideshow-container">

<div class="mySlides fade">
  
  <img src="ju/5.png" style="width:100%">
  
</div>

<div class="mySlides fade">
  
  <img src="ju/6.png" style="width:100%">
  
</div>

<div class="mySlides fade">
  
  <img src="ju/3.png" style="width:100%">
  
</div>
<div class="mySlides fade">
  
  <img src="ju/7.png" style="width:100%">
  
</div>
<div class="mySlides fade">
  
  <img src="ju/8.png" style="width:100%">
  
</div>
<div class="mySlides fade">
  
  <img src="ju/4.png" style="width:100%">
  
</div>
<div class="mySlides fade">
  
  <img src="ju/9.png" style="width:100%">
  
</div>
</div>


<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
 
  slides[slideIndex-1].style.display = "block";  

  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>
	</body>
</html>