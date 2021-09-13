<?php
	session_start();
	$conn = mysqli_connect('localhost', 'root', '', 'clubdiamond');

	if(isset($_POST['submit1'])){
		$fname=$_POST['fname'];
    	$lname=$_POST['lname'];
    	$pass=$_POST['pswd'];
    

    	$pass = md5($pass);
    	$query = "SELECT * FROM member6 WHERE fname='$fname' AND lname='$lname' AND pswd='$pass'";
    	$result = mysqli_query($conn, $query);

 
    	if(mysqli_num_row($result) == 1){
    		$_SESSION['fname'] = $fname;
    		header("location: index1.php");
    	}else{
    		$_SESSION['message'] = "Username/Password Combination Incorrect";
    	}
   	}
?>



<!DOCTYPE html>
<html>
<body>
<head>
<style>
body {
	margin: 0;
	color: black;
	display: flex;
	padding: 0px;
	font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
	background:url("backform.jpg");
	background-size: 1400px 1000px;
	background-repeat: no-repeat;
}
.box {
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%,-50%);
	margin: auto;
	padding: 40px;
	background: rgb(234,244,244);
	width: 500px;
	height:auto;
	opacity: 0.8;
	border-radius: 10px;
 	box-sizing: border-box;
	box-shadow: 0 15px 25px rgba(0,0,0,.5);
}
.box h1 {
	color: rgba(14, 99, 164,1);
	margin: 0 0 30px;
	font-weight: 100;
       	padding: 0;
	text-align:center;
}
.box table{
 	color:"black";
	position: relative;
}
.btn {
	background-color: blue;
	border: 2px solid grey;
	padding: 10px 26px;
	font-weight: 400;
	border-radius: 4px;
	letter-spacing: 1px;
	background-color: rgba(255,255,255,0.2);
}
.register
{
 	float: left;
}
.clear
{
float: right;
}
</style>
</head>
<script type="text/javascript" src="validate.js"></script>
<form name="register" onsubmit="return validateform(this)" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
<div class="box">
<h1>Member Registration</h1>
<table >
	<tr><td>First Name:</td>
	<td><input type="text" name="fname" ></td></tr>
<tr><td>Last Name:</td>
	<td><input type="text" name="lname" ></td></tr>
<tr><td>Password:</td>
<td><input type="password" name="pswd" placeholder="Between 6 to 15" ></td></tr>
</table>
<input class="btn register" type="submit" name="submit1" value="submit" onclick="return validateform(this)">
<button class="btn clear" type="reset">Clear</button>	
</div>
</form>
</body>
</html>