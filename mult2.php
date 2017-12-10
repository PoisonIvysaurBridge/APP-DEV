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
		margin: 5% 5%;
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
	<table border = 1>
		<?php
			$rUB = $_POST["cUB"];
			$rLB = $_POST["cLB"];
			$cUB = $_POST["rUB"];
			$cLB = $_POST["rLB"];
			$isFirst = true;
			echo "<tr>";
			echo "<th>X</th>";
			for($k = $cUB; $k <= $cLB; $k++){
				echo "<th>".$k."</th>";
			}
			echo "</tr>";
			
			for($i = $rUB; $i <= $rLB; $i++){
				echo "<tr><th>".$i."</th>";
				for($j = $cUB; $j <= $cLB; $j++){
					echo "<td>".$i * $j."</td>";
				}
				echo "</tr>";
			}
			
		?>
	</table>
	</div>
	</body>
</html>