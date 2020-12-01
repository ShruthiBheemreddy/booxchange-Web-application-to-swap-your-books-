<?php
session_start();
$db = mysqli_connect('localhost', 'root', '', 'booxchange');
if( $db->connect_error){
    echo "failed";
    die('Error: ' . $con->connect_error);
}
$name_of_book=$_POST['name_of_book'];
$author_of_book=$_POST['author_of_book'];
$Publisher_of_book=$_POST['Publisher_of_book'];
$Language=$_POST['Language'];
$Pages=$_POST['Pages'];
$genre=$_POST['genre'];
$email=$_SESSION["username"];
$query = "INSERT INTO searchbook (username,name_of_book,author_of_book,Publisher_of_book,Language,Pages,genre) VALUES('$email','$name_of_book','$author_of_book','$Publisher_of_book','$Language','$Pages','$genre')";
$result=mysqli_query($db, $query) or die("cannot insert");
header('location: your_library.php');
?>