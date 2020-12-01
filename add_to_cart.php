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
$query="INSERT INTO cart(email,books) values('$email','$book')";
mysqli_query($conn, $query);
?>