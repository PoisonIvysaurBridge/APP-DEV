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
	
		<form action="authentication.php" method="post">
		Name: <br><input type="text" name="name"><br>
		Password: <br><input type="password" name="pw"><br>
		<input class="button" type="submit" value="Login">
		</form>
	
	</div>
	</body>
</html>