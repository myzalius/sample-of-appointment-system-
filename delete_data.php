<?php

include('connection.php');

$sql = "DELETE FROM `appointments` WHERE username=$username";
$confirm=mysql_query($conn,$sql)
if($confirm)
{
	header('location:usersadmin.php');
}
else
{
	die('Could not delete record:' .mysql_error());
}
?>