<!DOCTYPE HTML>

<html>

	<header>
	<style>
	body{
		background-color: springgreen;
		font-family: tahoma;
		font-size: 25px;
		color: white;
		margin: 0 auto
		text-align: left;
	}
	input{
		color: black;
		border-radius: 5px;
		
		padding: 8px;
		size: 25px;
	}
	div{
		margin: 10% 30%;
		background-color: rgba(0,0,0,0.5);
		padding: 20px;
		border-radius: 20px;
	}
	.button{
		background-color: green;
		color: white;
		margin: 20px;
		border-radius: 5px;
		font-size:20px;
		padding: 5px 20px;
	}
	</style>
	</header>

	<body>
	<div>
	
		<form action="img.php" method="post">
		Select an image:<br>
		<input type=radio name="animal" value="cat">Cat<br>
		<input type=radio name="animal" value="dog">Dog<br>
		<input type=radio name="animal" value="owl">Owl<br>
		<input type=radio name="animal" value="pig">Pig<br>
		<input type=radio name="animal" value="horse">Horse<br><br>
		Enter a number of rows:<br>
		<input type=number name="nRows"><br>
		Enter a number of columns:<br>
		<input type=number name="nCols"><br>
		<input class="button" type="submit" value="Submit">
		</form>
	
	</div>
	</body>
</html>