<?php
$con=mysqli_connect('localhost','root','');
if(!$con)
{
	echo 'error in connection'.mysql_connect_error();
}
$db=mysqli_select_db($con,'examination');
if (!$db)
{
	echo 'no database selected';
}
?>