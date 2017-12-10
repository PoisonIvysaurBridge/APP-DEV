<!DOCTYPE html>
<html>
<head>
<title>Select Box Control</title>
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
</head>
<body>
	<div>
		<?php

			if($_POST["gender"] == "M")
			{
				echo '<body style= "background-color: DodgerBlue">';
				
			}
			else if($_POST["gender"] == "F")
			{
				echo '<body style= "background-color: HotPink">';
			}

			echo "Welcome!";
		?>
	</div>
</body>
</html>