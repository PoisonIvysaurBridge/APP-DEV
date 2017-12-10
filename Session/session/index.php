<?php
session_start();
$_SESSION=array();
 session_destroy();
 setcookie('PHPSESSID','',time()-300,'/','',0);

       header("Location: http://".$_SERVER['HTTP_HOST'].  dirname($_SERVER['PHP_SELF'])."/index.php");


if(!isset($_SESSION['blockCtr'])){
	$_SESSION['blockCtr'] = 0;
}
else{
	echo $_SESSION['blockCtr'];
	if ($_SESSION['blockCtr'] >= 5){
		header("Location: http://".$_SERVER['HTTP_HOST'].  dirname($_SERVER['PHP_SELF'])."/blocked.php");
		//$isBlocked = TRUE;
	 }
}/*
if(isset($isBlocked)){
	if($isBlocked)
	header("Location: http://".$_SERVER['HTTP_HOST'].  dirname($_SERVER['PHP_SELF'])."/blocked.php");
}*/

if (isset($_POST['submit'])){

	$message=NULL;

	if (empty($_POST['username'])){
		$_SESSION['username']=FALSE;
		$message.='<p>You forgot to enter your username!';
		
	} else {
		$_SESSION['username']=$_POST['username']; 
	}

	if (empty($_POST['password'])){
		$_SESSION['password']=FALSE;
		$message.='<p>You forgot to enter your password!';
		$_SESSION['blockCtr']++;
	} else {
		$_SESSION['password']=$_POST['password']; 
	}
	
	if ($_SESSION['username']=="juandelacruz" &&   $_SESSION['password']=="dlsu") {

	/*Of course, these should have been taken from a database*/
		   header("Location: http://".$_SERVER['HTTP_HOST'].  dirname($_SERVER['PHP_SELF'])."/customer.php");

	} 
	else if($_SESSION['username']=="admin" &&   $_SESSION['password']=="dlsu"){
			header("Location: http://".$_SERVER['HTTP_HOST'].  dirname($_SERVER['PHP_SELF'])."/admin.php");
	}
	else{
	 $message.='<p>Please try again';
	 $_SESSION['blockCtr']++;
	}
}/*End of main Submit conditional*/

if (isset($message)){
 echo '<font color="red">'.$message. '</font>';
}

?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
	<fieldset><legend>Please login below: </legend>
	<input type="hidden" name="blockCtr" value=0>
	<p>User Name: <input type="text" name="username" size="20" maxlength="30" value="<?php if (isset($_POST['username'])) echo $_POST['username']; ?>"/>
	<p>Password: <input type="password" name="password" size="20" maxlength="20" />
	<div align="center"><input type="submit" name="submit" value="Login" /></div>

</form>

