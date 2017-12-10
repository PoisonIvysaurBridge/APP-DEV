<!DOCTYPE HTML>

<html>

	<header>
	<style>
	body{
		background-color: springgreen;
		font-family: tahoma;
		font-size: 75px;
		color: white;
		margin: auto;
		text-align: left;
	}
	input{
		color: black;
	}
	div{
		margin: 10% 20%;
		/*width: 70%;
		margin:auto;*/
		text-align:center;
		background-color: rgba(0,0,0,0.5);
		padding: 20px;
		border-radius: 20px;
	}
	div:hover{
		background-color: rgba(200,20,200,.5);
	}
	</style>
	</header>

	<body>
	<div>
		<?php

			$hehe = "global variable";

			if($_POST["name"] == "ivy" && $_POST["pw"] == "yoyo")
			{
				echo "Access Granted!";
			}
			else
			{
				echo "Access Denied!";
			}

			function myTest()
			{
				global $hehe;
				echo "<br>$hehe";
			}

			//myTest();
		
		?>
	
	</div>
	</body>
</html>