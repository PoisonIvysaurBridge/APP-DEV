<html>
<body>
<?php
session_start();

if($_SESSION['username']=="admin" &&   $_SESSION['password']=="dlsu"){
		echo "WELCOME ".$_SESSION["username"]."!";
}
else {
 header("Location: http://".$_SERVER['HTTP_HOST'].  dirname($_SERVER['PHP_SELF'])."/index.php");
}

?>

</body>
</html>