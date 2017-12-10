<?php

$dbc=mysqli_connect('127.0.0.1','root','l;lkl k ','orderingsysdb');

if (!$dbc) {
 die('Could not connect: '.mysql_error());
}


/*
$dbc=mysqli_connect('localhost','root',NULL,'orderingsysdb');

if (!$dbc) {
 die('Could not connect: '.mysql_error());
}
*/

?>