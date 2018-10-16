
<?php

	session_start();
	//$_SESSION["adminid"]=$_POST["adminid"];
	//$_SESSION["adminpass"]=$_POST["adminpass"];
	if(!empty($_SESSION["adminid"]))
	{
		$adminid=$_SESSION["adminid"];
		$adminpass=$_SESSION["adminpass"];
		$servername="localhost";
		$username="root";
		$password="";
		$db='onlinemusic';
		$conn = mysqli_connect($servername, $username, $password,$db);

		/*if(! $conn ) {
		            die('Could not connect: ' . mysql_error());
		         }
		         echo 'Connected successfully';
		*/

		$songname=$_GET["songname"];
		$language=$_GET["language"];
		$lyrics=$_GET["lyrics"];
		$audio=addslashes($_FILES['audiofile']['temp_name']);
		$audio=file_get_contents($audio);
		$audio=base64_encode($audio);
		$query=mysqli_query($conn,"insert into songs(name,lyrics,language,audio) values('$songname','$lyrics','$language','$audio')");

		echo $songname;echo $language;echo $lyrics;

	}
	else
	{
		echo 'not logged in';
	}


?>
