<html>
<body>
<?php
session_start();

if ($_SESSION['username']=="juandelacruz" &&   $_SESSION['password']=="dlsu") {
	echo "WELCOME ".$_SESSION["username"]."!";
/*Of course, these should have been taken from a database*/
       

} 
else {
 header("Location: http://".$_SERVER['HTTP_HOST'].  dirname($_SERVER['PHP_SELF'])."/index.php");
}

?>

</body>
</html>