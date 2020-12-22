<?php
$localhost = "localhost";
$username = "root";
$password = "";
$dbname = "booxchange";
$conn = new mysqli($localhost, $username, $password, $dbname);
if( $conn->connect_errno){
    echo "failed";
    exit();
}
$email=$_SESSION["username"];
$book=$_SESSION["name_of_book"];
$price=$_SESSION["price"];
$user=$_SESSION["user"];
$query="INSERT INTO cart(email,books,price,user) values('$email','$book','$price','$user')";
mysqli_query($conn, $query);
?>