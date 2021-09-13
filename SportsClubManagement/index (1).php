<!DOCTYPE html>
<html>
<head>
	<title>Club Diamond</title>
	<style>

.column {
    float: left;
    width: 25%;
    padding: 5px;
}

/* Clearfix (clear floats) */
.row::after {
    content: "";
    clear: both;
    display: table;
}

/* Responsive layout - makes the three columns stack on top of each other instead of next to each other */
@media screen and (max-width: 500px) {
    .column {
        width: 100%;
    }
}

.faci {
	text-align: center;
	font-family: Arial;
	color: white;
    text-shadow: 1px 1px 2px black, 0 0 25px black, 0 0 5px gray;
}

.new {
	border-top: 1px solid;
	width: 25%;
	text-align: center;
}

.container {
  position: relative;
  width: auto;
}

.overlay {
  position: absolute; 
  bottom: 0; 
  background: rgb(0, 0, 0);
  background: rgba(0, 0, 0, 0.5); /* Black see-through */
  color: #f1f1f1; 
  width: 100%;
  transition: .5s ease;
  opacity:0;
  color: white;
  font-size: 20px;
  padding: 20px;
  text-align: center;
}

.container:hover .overlay {
  opacity: 1;
}
.hero-image {
  background-image: url("bgimg.jpg");
  background-color: #cccccc;
  height: 300px;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
  background-blend-mode: soft-light;
  margin-bottom: 5px;
}

.hero-text {
  text-align: center;
}

.stof {
  margin-top: 80px;
}

.hero-image1 {
  background-image: url("n4.png");
  background-color: #cccccc;
  height: 400px;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
  background-blend-mode: soft-light;
  margin-bottom: 5px;
}

.font {
  font-family: 'Arial';
  font-size: 17px;
}

.column12 {
    float: left;
    width: 50%;
    padding: 15px;
   
}

/* Clearfix (clear floats) */
.row12::after {
    content: "";
    clear: both;
    display: table;
}

.eve-container {
  position: relative;
  max-width: 800px;
  margin: 0 auto;
}


.eve-container .content12 {
  position: absolute;
  bottom: 0;
  background: rgb(0, 0, 0); /* Fallback color */
  background: rgba(0, 0, 0, 0.5); /* Black background with 0.5 opacity */
  color: #f1f1f1;
  width: 100%;
  padding: 5px;
}

.stof1 {
  margin-top: 30px;
  height: 300px;
}

.stof2 {
  margin-top: 30px;
  height: 300px;
}

</style>
</head>
<?php include 'inc/header.php';?>
<h2 class="faci">OUR FACILITIES</h2>
<hr class="new">
<h3 class="faci">LEARN PLAY COMPETE</h3>
<div class="row">
  <div class="column">
    <h2 class="faci" style="font-size: 20px;">GYM</h2>

    <div class="container">
    	<a href="#"><img src="a1.png" style="width:100%; height:300px;"></a>
    	<div class="overlay">GYM</div>
   </div>

  </div>

  <div class="column">
    <h2 class="faci" style="font-size: 20px;">INDOOR</h2>

    <div class="container">
    <a href="#"><img src="a2.png" style="width:100%; height:300px;"></a>
    <div class="overlay">INDOOR</div>
</div>
  </div>

  <div class="column">
    <h2 class="faci" style="font-size: 20px;">OUTDOOR</h2>

     <div class="container">
    <a href="#"><img src="a3.png" style="width:100%; height:300px;"></a>
    <div class="overlay">OUTDOOR</div>
</div>
  </div>

  <div class="column">
    <h2 class="faci" style="font-size: 20px;">CAFETERIA</h2>

     <div class="container">
    <a href="#"><img src="a4.png" style="width:100%; height:300px;"></a>
    <div class="overlay">CAFETERIA</div>
</div>
  </div>
</div>
<h2 class="faci">MEMBERSHIP PLANS</h2>
<hr class="new">
<div class="hero-image">
  <div class="hero-text">
    <img src="offer.png" class="stof">
  </div>
</div>
<h2 class="faci">UPCOMING EVENTS</h2>
<hr class="new">
<div class="hero-image1">
<div class="row12">
  <div class="column12">
    <div class="eve-container">
    <img src="n2.jpg" alt="Snow" style="width:100%" class="stof1">
    <div class="content12">
    <h1 style="font-family: Arial;">TABLE TENNIS TOURNAMENT</h1>
    <p class="font">Starting From 27 OCTOBER 2018</p>
  </div>
</div>
  </div>
  <div class="column12">
    <div class="eve-container">
    <img src="n3.jpg" alt="Forest" style="width:100%" class="stof1">
    <div class="content12">
    <h1 style="font-family: Arial;">BADMINTON TOURNAMENT</h1>
    <p class="font">Starting From 3 NOVEMBER 2018</p>
  </div>
</div>
  </div>
  </div>
</div>


<?php include 'inc/footer.php';?>
</body>
</html>