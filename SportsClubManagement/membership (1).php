<!DOCTYPE html>
<html>
<head>
	<title>CLUB DIAMOND</title>
	<style>
	.memdet {
		background-image: linear-gradient(to right, #660000 , #000080); 
	}
		.faci1 {
			font-family: 'Arial';
			text-align: center;
			font-weight: bold;
			color: white;
			font-size: 30px;
		}
		.faci2 {
			font-family: 'Arial';
			text-align: center;
			font-weight: bold;
			color: white;
			font-size: 27px;
		}
		.items12 {
			color: white;
			font-family: 'Arial';
		}
		.span1 {
			font-weight: bold;
			font-size: 25px;
		}
		.memexp {
			font-size: 20px;
		}
		.button1 {
  padding: 15px 25px;
  font-size: 24px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color:  #660000;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
}

.button1:hover {
	background-color:  #660000
}

.button1:active {
  background-color:  #660000;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}

.abc1 {
	font-family: 'Arial';
	font-weight: bold;
	font-size: 30px;
	text-align: center;
	color: #000080
}
.arran {
	text-align: center;
	margin-bottom: 20px;
}


	</style>

</head>
<?php include 'inc/header.php';?>
<div class="arran">
	<p class="abc1">WANT TO EXPERIENCE A THREE DAY TRIAL THEN CLICK THE BUTTON BELOW!!</p>
	<a href="form2.php"><button class="button1">Get Trial</button></a>
</div>
<div class="memdet">
<p class="faci1">MEMBERSHIP PLANS</p>
<h2 class="faci2">THE PLANS ARE FOR VARIOUS TENURES AS FOLLOWS</h2>
	<ul class="items12">
		<li><span class="span1">Life Membership: </span><p class="memexp">This Membership is the best option for those wanting to be a part of the Family of Club Emerald for life. No Annual Maintenance Fees are payable under this category of Membership.</p></li>
		<li><span class="span1">1 Year Membership: </span><p class="memexp">Annual Maintenance Fees are payable under this Category of Membership.</p></li>
		<li><span class="span1">6 Months Membership: </span><p class="memexp">This Membership is best suited for Families who have located to Bombay on deputation for a short duration. Annual Membership Fees are payable under this Category of Membership.</p></li>
		<li><span class="span1">3 Months Membership: </span><p class="memexp">This Membership is best suited for those on an extremely short duration in the city of Bombay.</p></li>
	</ul>
</div>
<div class="arran">
	<p class="abc1">Want To Apply For A Membership Plan Click Below!!</p>
	<a href="form1.php"><button class="button1">Get Membership</button></a>
</div>


<?php include 'inc/footer.php';?>
</html>