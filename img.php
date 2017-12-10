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
	<img src =
		<?php

			switch($_POST["animal"]){
				case "cat": echo $img = 'http://i.amz.mshcdn.com/190ps8I0o_v-KeW6TV2amEoz64g=/fit-in/850x850/http%3A%2F%2Fmashable.com%2Fwp-content%2Fgallery%2Fcatmemes%2Fserious%2520cat.jpg';
					break;
				case "dog": echo $img = 'https://i.imgflip.com/ltidl.jpg';
					break;
				case "owl": echo $img = 'http://i0.kym-cdn.com/photos/images/facebook/000/002/109/orly_owl.jpg';
					break;
				case "pig": echo $img= 'https://img.memecdn.com/good-animal-pig_o_674996.jpg';
					break;
				case "horse": echo $img = 'https://www.askideas.com/media/39/Maybe-Shes-Barn-With-It-Funny-Horse-Meme-Picture.jpg';
					break;
			}
			
			$nRows = $_POST['nRows'];
			$nCols = $_POST['nCols'];
			$w = 100/$nCols;
			$h = 100/$nRows;
			for($i = 0; $i < $nRows; $i++){
				for($j = 0; $j < $nCols; $j++){
					echo "<img src = ".$img."
							style='width:".$w."%;'>";
				}
				echo "<br>";
			}
		?>
	?
	</div>
	</body>
</html>