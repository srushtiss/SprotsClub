
	
<link rel="stylesheet" type="text/css" href="headfoot.css">
<style>
	.logo {
  width: 200px;
  height: 100px;
  margin-left: 10px;
}

.threeD
{
  text-shadow:
    -1px 1px 0 #004de6,
    -2px 2px 0 #c8c8c8,
    -3px 3px 0 #4d4dff,
    -4px 4px 0 #b8b8b8,
    -4px 4px 0 #bbb,
    0px 1px 1px rgba(0,0,0,.4),
    0px 2px 2px rgba(0,0,0,.3),
    -1px 3px 3px rgba(0,0,0,.2),
    -1px 5px 5px rgba(0,0,0,.1),
    -2px 8px 8px rgba(0,0,0,.1),
    -2px 13px 13px rgba(0,0,0,.1)
    ;
    font-family: 'Mogra';
    font-size: 42px;
}

.loname {
	float: left;
}

</style>
<body>
	<div class="header">
  <a href="index.php"><img class="logo" src="h1.png"></a>
  <div class="loname">
  	<p class="threeD">CLUB DIAMOND</p>
  </div>
  <div class="header-right">
    <a href="form1.php"><button class="button">Login</button></a>
    <a href="form2.php"><button class="button">SignUp</button></a>
  </div>
</div>

<div style="padding-left:20px">
</div>

<div class="slideshow-container">

<div class="mySlides fade">
	<div class="nav-container">
	    <div class="topnav">
	      <a href="index.php">Home</a>
	      <a href="indoor.php">Indoor</a>
	      <a href="outdoor.php">Outdoor</a>
	      <a href="membership.php">Membership</a>
	      <a href="gym.php">Fitness</a>
	      <a href="cafe.php">Cafeteria</a>
	      <a href="about.php">About Us</a>
	    </div>
  </div>
  <img class="slide" src="i1.png">
</div>

<div class="mySlides fade">
	<div class="nav-container">
	    <div class="topnav">
	      <a href="index.php">Home</a>
	      <a href="indoor.php">Indoor</a>
	      <a href="outdoor.php">Outdoor</a>
	      <a href="membership.php">Membership</a>
	      <a href="gym.php">Fitness</a>
	      <a href="cafe.php">Cafeteria</a>
	      <a href="about.php">About Us</a>
	    </div>
  </div>
    <img class="slide" src="i2.png">
  
</div>

<div class="mySlides fade">
	<div class="nav-container">
	    <div class="topnav">
	      <a href="index.php">Home</a>
	      <a href="indoor.php">Indoor</a>
	      <a href="outdoor.php">Outdoor</a>
	      <a href="membership.php">Membership</a>
	      <a href="gym.php">Fitness</a>
	      <a href="cafe.php">Cafeteria</a>
	      <a href="about.php">About Us</a>
	    </div>
  </div>
  <img class="slide" src="i3.png">
  
</div>


</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 4000); // Change image every 7 seconds
}
</script>