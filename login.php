<?php
session_start();
$localhost = "localhost";
$username = "root";
$password = "";
$dbname = "booxchange";
$con = new mysqli($localhost, $username, $password, $dbname);
if( $con->connect_error){
    echo "failed";
    die('Error: ' . $con->connect_error);
}
else{
    $email=$_POST['uname'];
    $password=$_POST['psw'];
    $query="select * from userinfo where email='$email' and password='$password'";
    $result=mysqli_query($con,$query);
    $row = $result->fetch_assoc();
    if($row['email']==$email && $row['password']==$password){
      $_SESSION["username"]=$email;
      include "dashboard.php";
    }
    else{
      include "accountlogin.php";
    }
  }
  ?>