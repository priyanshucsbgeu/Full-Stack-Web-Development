<?php
$hostname = 'localhost';
$username = 'root';
$password = '';
$databaseName = 'cseb2020';

if(mysqli_connect($hostname, $username, $password, $databaseName)){
echo 'Connection Successful';
}
else
{
echo 'Connection Failed!!' + mysqli_connect_error();
}
?>