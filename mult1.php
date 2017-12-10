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
		<h3>Welcome!</h3>
		<form action="mult2.php" method="post">
		Input LB for 1st range:
		<input type=number name="cUB"><br>
		Input UB for 1st range:
		<input type=number name="cLB"><br>
		Input LB for 2nd range:
		<input type=number name="rUB"><br>
		Input UB for 2nd range:
		<input type=number name="rLB"><br>
		<input class="button" type="submit" value="Submit">
		</form>
	
	</div>
	</body>
</html>