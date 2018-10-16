<?php
session_start();
if(!empty($_SESSION['adminid']))
{
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
		    font-size: 12px;
		}

		input[type=file], select
		{
		    padding: 12px 20px;
		    margin: 8px 0;
		    display: inline-block;
		    border: 2px solid #96989D;
		    border-radius: 6px;
		    box-sizing: border-box;
		    font-size: 12px;
		}

		input[type=Password], select 
		{
		    padding: 12px 20px;
		    margin: 8px 0;
		    display: inline-block;
		    border: 2px solid #96989D;
		    border-radius: 6px;
		    box-sizing: border-box;
		    font-size: 12px;
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

		.buttonout
		{
			padding: 7px 15px;
			float: right;
			margin-right: 20px;
		    /*margin: 8px 0;*/
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
			margin-top: 95px;
			width: 40%;
		}


		#container 
		{
		  color:white;
		  text-transform: uppercase;
		  font-size:36px;
		  font-weight:bold;
		  /*padding-top:200px;*/
		  top: 20px;  
		  position:absolute;
		  width:100%;
		  /*bottom:45%;*/
		  display:block;
		  font-family:'Roboto';
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






<?php


/*function clean($string) {
   $string = str_replace("'"," ", $string); // Replaces all spaces with hyphens.

   return preg_replace('/[^A-Za-z0-9\-]/', '', $string); // Removes special chars.
}*/



if(isset($_FILES['audiofile'])) 
{
    if($_FILES['audiofile']['error'] == 0)
    {
     
        $dbLink = new mysqli('localhost', 'root', '', 'onlinemusic');
        if(mysqli_connect_errno())
        {
            die("MySQL connection failed: ". mysqli_connect_error());
        }
 
        
        $data = $dbLink->real_escape_string(file_get_contents($_FILES  ['audiofile']['tmp_name']));
        $thumbnail = $dbLink->real_escape_string(file_get_contents($_FILES  ['thumbnail']['tmp_name']));
        //$songname = $dbLink->real_escape_string($_FILES['audiofile']['songname']);
        $songname = $_POST["songname"];
        //$lyrics = $_POST["lyrics"];
        //$lyrics=clean($lyrics);
        $language=$_POST["language"];
 
        // Create the SQL query
        $query = "INSERT INTO songs (name,language,audio,thumbnail) VALUES ('{$songname}','{$language}','{$data}','{$thumbnail}')";

        //$query = "INSERT INTO songs (audio) VALUES ('{$data}')";
 
        $result = $dbLink->query($query);
 
        if($result) 
        {
            echo '<script language="javascript">';
			echo 'alert("Upload Successful!")';
			echo '</script>';
        }
        else 
        {
            echo 'Error! Failed to insert the file'
               . "<pre>{$dbLink->error}</pre>";
        }
    }
    else
    {
        echo 'An error accured while the file was being uploaded. '
           . 'Error code: '. intval($_FILES['audiofile']['error']);
    }
 
 
    $dbLink->close();
}

	/*
	$dbh=new PDO("mysql:host=localhost;dbname=onlinemusic","root","");
	if(isset($_POST['saveaudio']))
	{
		//$audio=$_FILES['audiofile']['audio'];
		$audio=file_get_contents($_FILES["audiofile"]["tmp_name"]);
		$stmt=$dbh->prepare("insert into songs (audio) values (:audio)");
		//$stmt->bindParam(1,$audio);
		$stmt->bindParam(':audio', $blob, PDO::PARAM_LOB);
		$stmt->execute();
	}*/

?>







<form method="post" enctype="multipart/form-data">

<div style="text-align:center;">
	<div id=container>
	  Music Player 
	  <div id=flip>
	  	<div><div>Download</div></div>
	    <div><div>Love</div></div>
	    <div><div>Listen</div></div>
	  </div>
	</div>


	<br><br><br>
	<section class="back" style="color:white ;">

	<fieldset style="border-color:#00ffb9;border-width: medium;">

		<legend><strong style="font-size: 25px;">Enter Song Details</strong></legend>
		<div style="font-size: 18px;">

			<label>Song Name: </label><input type="text" name="songname" autofocus="on" placeholder="Enter Song Name" /><br>

			<label>Language: </label>
			<select name="language">
				<option value="Hindi">Hindi</option>
				<option value="English">English</option>
				<option value="Marathi">Marathi</option>
			</select><br>

			<label>Lyrics: </label><textarea name="lyrics" rows="1" cols="30"></textarea><br>

			<label>Select Audio File: </label><input type="file" name="audiofile" id="audiofile"><br>

			<label>Select Thumbnail: </label><input type="file" name="thumbnail" id="thumbnail"><br>

	        <button type="submit" class="btn button" name="saveaudio">Upload Song</button>
			
		</div>
	</fieldset>
	</section>
</div>

<button class="btn buttonout" formaction="adminlogin2.php">Signout</button>

</form>

</body>
</html>

<?php
}

else
{
	echo "not logged in";
}


?>