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
  .size
  {
  	font-size: 20px;
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

          .error 
          {
              color: #FF0000;
          }
    </style>

<?php
// define variables and set to empty values
$nameErr = $filenameErr = $languageErr = $song_idErr = $categoryErr = $lyricsErr = "";
$name = $song_id = $filename = $language = $category = $lyrics = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
  if (empty($_POST["name"])) 
  {
    $nameErr = "Name is required";
  } 
  else 
  {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed"; 
    }
  }

  if (empty($_POST["lyrics"])) 
  {
    $lyrics = "";
  } 
  else 
  {
    $lyrics = test_input($_POST["lyrics"]);
  }

  if (empty($_POST["language"])) 
  {
    $languageErr = "Language is required";
  } 
  else 
  {
    $language = test_input($_POST["language"]);
  }

if (empty($_POST["song_id"])) 
 {
    $song_idErr = "Song ID is required";
  } 
  else 
  {
    $song_id = test_input($_POST["song_id"]);
  }

  if (empty($_POST["filename"])) 
  {
    $filenameErr = "File name is required";
  } 
  else 
  {
    $filename = test_input($_POST["filename"]);
  }



}



function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Song_id : <input type="text" name="song_id" value="<?php echo $song_id;?>">
  <span class="error">* <?php echo $song_idErr;?></span>
  <br><br>

  Name: <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>

  filename : <input type="text" name="filename" value="<?php echo $filename;?>">
  <span class="error">* <?php echo $filenameErr;?></span>
  <br><br>

  lyrics: <textarea name="lyrics" rows="5" cols="40"><?php echo $lyrics;?></textarea>
  <span class="error"><?php echo $lyricsErr;?></span>
  <br><br>

  Category: <input type="text" name="category" value="<?php echo $category;?>">
  <br><br>

  language:
<select name="dropdown" size="1">
<option value="Option1">Hindi</option>
<option value="Option2">Marathi</option>
<option value="Option3">English</option>
</select>
  <span class="error">* <?php echo $languageErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Upload">  
</form>

<?php
echo $song_id;
echo "<br>";
echo $name;
echo "<br>";
echo $filename;
echo "<br>";
echo $lyrics;
echo "<br>";
echo $language;
?>
</body>
</html>
