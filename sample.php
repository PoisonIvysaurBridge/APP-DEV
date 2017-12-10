<html>
<header>

	<style>
	body{
		background-color: springgreen;
		font-family: tahoma;
		font-size: 72px;
		color: gray;
	}
	input{
		size: 70px;
		padding: 10px;
		margin: 0 auto;
		border-radius: 10px;
		font-family: tahoma;
		color: gray;
	}
	</style>
	
	<script>
		function display()
		{
			alert('The sum is: '+(n1+n2));
		}
	</script>

</header>
<body>

<form action="squares.php" method="post">
first number: <input type="number" name="n1"><br>
second number: <input type="number" name="n2"><br>
<input type="submit" onclick='alert("The sum is: "+($_POST["n1"] + $_POST["n2"]))'>
</form>

<script>


</script>
</body>
</html>