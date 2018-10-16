<?php 
session_start();
session_destroy();
?>

<!DOCTYPE html>
<html>
<head>

	<link rel="shortcut icon" type="image/x-icon" href="icon2.jpg"/>
	<title>Admin Login</title>

	<style type="text/css">
		@import url('https://fonts.googleapis.com/css?family=Roboto:700');

		body 
		{
		  margin:0px;
		  text-align:center;
		  background-image: url("headphone21.jpg");
		  background-size: 100%;
		}

		input[type=text], select 
		{
		    padding: 12px 20px;
		    margin: 8px 0;
		    display: inline-block;
		    border: 2px solid #96989D;
		    border-radius: 6px;
		    box-sizing: border-box;
		    font-size: 15px;
		}

		input[type=Password], select 
		{
		    padding: 12px 20px;
		    margin: 8px 0;
		    display: inline-block;
		    border: 2px solid #96989D;
		    border-radius: 6px;
		    box-sizing: border-box;
		    font-size: 15px;
		}
		.button
		{
			padding: 12px 20px;
		    margin: 8px 0;
		    display: inline-block;
		    border: 2px solid #96989D;
		    border-radius: 6px;
		    box-sizing: border-box;
		    font-size: 15px;
		}

		.btn:hover
		{
			background-color: #737373;
			color: #ffffff;
			cursor: pointer;
		}

		.back
		{
			background:rgba(255,255,255,0.2);
			/*color: #0340FD;
			padding-left:60px;*/
			width: 35%;
			/*margin-left: 440px;*/
			padding-bottom: 10px;
			padding-top: 10px;
			padding-left: 10px;
			padding-right: 10px; 
			margin-left: auto;
			margin-right: auto;
			/*margin-top: 150px;*/
			width: 50%;
		}


		.topnav 
		{
		    background-color: rgba(255,255,255,0.3);
		    overflow: hidden;
		}
		.topnav a
		{
		    float: left;
		    color: white;
		    text-align: center;
		    padding: 14px 16px;
		    text-decoration: none;
		    font-size: 17px;
		}
		.topnav a:hover
		{
		    background-color: #ddd;
		    color: black;
		}


		#container 
		{
		  color:white;
		  text-transform: uppercase;
		  font-size:36px;
		  font-weight:bold;
		  /*padding-top:200px;*/
		  top: 20px;  
		  position:fixed;
		  width:100%;
		  /*bottom:45%;*/
		  display:block;
		  font-family:'Roboto';*/
		}

		#flip 
		{
		  height:50px;
		  overflow:hidden;
		}

		#flip > div > div 
		{
		  color:#fff;
		  padding:4px 12px;
		  height:45px;
		  margin-bottom:45px;
		  display:inline-block;
		}

		#flip div:first-child 
		{
		  animation: show 5s linear infinite;
		}

		#flip div div 
		{
		  background: #FFC300 ;
		}
		#flip div:first-child div 
		{
		  background:#4ec7f3;
		}
		#flip div:last-child div 
		{
		  background:#DC143C;
		}


		@keyframes show 
		{
		  0% {margin-top:-270px;}
		  5% {margin-top:-180px;}
		  33% {margin-top:-180px;}
		  38% {margin-top:-90px;}
		  66% {margin-top:-90px;}
		  71% {margin-top:0px;}
		  99.99% {margin-top:0px;}
		  100% {margin-top:-270px;}
		}

		

	</style>
</head>
<body>

<form action="login.php" method="post">

<div id=container>
  Music Player 
  <div id=flip>
  	<div><div>Download</div></div>
    <div><div>Love</div></div>
    <div><div>Listen</div></div>
  </div>
</div>


<br>
<div class="topnav" style="margin-top: 130px;background-image: linear-gradient(to right,rgba(255,255,255,0.1),rgba(0,0,0,0.9));">
	<a href="index.php" style="margin-left: 50px; "><b>Home</b></a>
	<a href="#"><b>Languge</b></a>
	<!--<a href="#yourseat" style="float:right; margin-right: 70px;"><b>Login</b></a>-->
	<a href="adminlogin2.php" style="float:right;margin-right: 50px;"><b>Admin</b></a>
	<a href="#" style="float:right;"><b>Login</b></a>
	<a href="#" style="float:right;"><b>Create Account</b></a>
	<!--<a href="#logout.php" style="margin-left: 870px;"><b>Sign Out</b></a>-->
</div>



<br><br>
<section class="back" style="color:white ;">
<fieldset style="border-color:#00ffb9;border-width: medium;">
	<legend><strong style="font-size: 25px;">Admin Login</strong></legend>
	<br><br>
	<div style="font-size: 22px;">
			Email-ID: <input type="text" name="adminid" autofocus="on" placeholder="Enter Email-ID" size="25" /><br>
			Password: <input type="Password" name="adminpass" placeholder="Enter Password" size="25" /><br>
			<button type="submit" class="button btn" formaction="login.php">Login</button>
			<br><br>
	</div>
</fieldset>
</section>

</form>

</body>
</html>