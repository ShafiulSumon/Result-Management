<?php

$con = mysqli_connect('localhost', 'root');

if($con)
{
  echo "Connection succesful";
}
else
{
  echo "No connection";
}

mysqli_select_db ($con, 'rms_db');

$name = $_POST['name'];
$classid = $_POST['classid'];
$email = $_POST['email'];
$password = $_POST['password'];

$query = " insert into students (name,	classid,	email,	password)	values('$name', '$classid', '$email', '$password') ";

mysqli_query($con, $query);

echo "$query";

header('location:signupsuccess.php');

?>