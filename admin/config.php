<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "icon24_details";
$conn = mysqli_connect($servername,$username,$password,$database);

// $servername = "localhost";
// $username = "u419687700_icon2023"; 
// $password = "7?jlwm1V&5x";
// $database = "u419687700_icon23_details";
// $conn = mysqli_connect($servername,$username,$password,$database);

if($conn)
{
    //echo "record successfully";
}
else
{
   // echo "record unsuccessfully<br>";
}

$insadmin = "CREATE TABLE IF NOT EXISTS admins(
  id INT(10) PRIMARY KEY AUTO_INCREMENT ,
  username varchar(20),
  email varchar(20),
  pass varchar(100),
  hpassword varchar(100),
  eventname varchar(10))";
$result1 = mysqli_query($conn,$insadmin);
if($result1)
{
//  echo "table  INS ADMIN created successfully";
}
else
{
//  echo "table not created successfully<br>".mysqli_error($conn);
}
