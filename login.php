<?php

	session_start();
	$_SESSION["adminid"]=$_POST["adminid"];
	$_SESSION["adminpass"]=$_POST["adminpass"];
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

		$sql = "SELECT * FROM admin WHERE email='$adminid'";
		$result = mysqli_query($conn,$sql); //or trigger_error("Query Failed! SQL: $sql - Error: ".mysqli_error(db_conx), E_USER_ERROR);
		$rows = mysqli_num_rows($result);

		while($row = mysqli_fetch_assoc($result))
		{
			if($adminpass==$row["password"])
			{  ?>
				<script type="text/javascript">
					window.location.href='selectsong.php';
				</script>
				<?php
				
					
			}
			else
			{
				echo "incorrect id or password";
			}
		}


	}
	else
	{
		echo 'not logged in';
	}

?>
