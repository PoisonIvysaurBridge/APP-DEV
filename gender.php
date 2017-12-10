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
		color: white;
		padding: 8px;
		border-radius: 5px;
		background-color: green;
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
	
	select{
		border-radius: 5px;
		padding: 10px;
		margin: auto;
		font-size: 20px;
	}
	</style>
	
</head>
<body>
<div>
	<form action="bg.php" method="post">
		Please select your gender:<br>
		<select name="gender">
		<option value="M" selected>Male</option>
		<option value="F">Female</option>
		</select>
		
		<br>
		<input type = "submit">
	</form>
</div>
</body>
</html>