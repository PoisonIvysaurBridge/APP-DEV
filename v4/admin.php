<html>
<body>

<?php
session_start();
if ($_SESSION['usertype']!=102) 
       header("Location: http://".$_SERVER['HTTP_HOST'].  dirname($_SERVER['PHP_SELF'])."/index.php");
else{

echo "WELCOME ".$_SESSION["username"]."!";
}

?>
<p><p>
Show dashboard of administrator, etc, here
<p>
<a href="addnewproducts.php">Add New Product</a><br>
<a href="addnewaccounts.php">Add New Account</a>


</body>
</html>