<!DOCTYPE html>
<html>
	<head>
		<title> About Me </title>
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<link rel="icon" type="image/x-icon" href="img/icon.png">
			<link rel="stylesheet" href="css/aboutme.css">
	</head>
	<body>
		<ul>
			<li><a href="guests">Guests</a></li>
			<li><a href="validation_complete">Form Validation</a></li>
			<li><a href="references">References</a></li>
			<li><a href="aboutme">About Me</a></li>
			<li><a href="profilepage">Profile Page</a></li>
		</ul>

		<div class = "flex-container">
	<!-- Container for the image gallery -->
	<div class = "half1-container">
	<div class="image-container">

	<!-- Full-width images with number text -->
	<div class="mySlides">
	  <div class="numbertext">1 / 8</div>
		<img src="img/photo1.jpg">
	</div>
  
	<div class="mySlides">
	  <div class="numbertext">2 / 8</div>
		<img src="img/photo2.jpg">
	</div>
  
	<div class="mySlides">
	  <div class="numbertext">3 / 8</div>
		<img src="img/photo3.jpg">
	</div>
  
	<div class="mySlides">
	  <div class="numbertext">4 / 8</div>
		<img src="img/photo4.jpg">
	</div>
  
	<div class="mySlides">
	  <div class="numbertext">5 / 8</div>
		<img src="img/photo5.jpg">
	</div>
  
	<div class="mySlides">
	  <div class="numbertext">6 / 8</div>
		<img src="img/photo6.jpg">
	</div>

	<div class="mySlides">
	  <div class="numbertext">7 / 8</div>
		<img src="img/photo7.jpg">
	</div>

	<div class="mySlides">
		<div class="numbertext">8 / 8</div>
		  <img src="img/photo8.jpg">
	  </div>
  
	<!-- Next and previous buttons -->
	<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
	<a class="next" onclick="plusSlides(1)">&#10095;</a>
	</div>	
  </div>
  <div class = "half2-container">
<div class = "about">
<h1>About Me:</h1>
<p>- Born on November 28, 2002, in Legazpi, Albay.</p>
<p>- Currently studying Computer Science.</p>
<p>- Has a huge interest in technology and innovation.</p>
<p>- Loves singing, cooking, swimming, and biking.</p>
<p>- Has expensives hobbies (lol).</p>
<p>- An atheist.</p>
<p></p>
</div>
</div>
</div>
	<script>
  	let slideIndex = 1;
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
	  let i;
	  let slides = document.getElementsByClassName("mySlides");
	  let dots = document.getElementsByClassName("demo");
	  let captionText = document.getElementById("caption");
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
	  captionText.innerHTML = dots[slideIndex-1].alt;
	} 
	</script>
	</body>
</html>