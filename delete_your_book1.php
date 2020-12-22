<?php
session_start();
$db = mysqli_connect('localhost', 'root', '', 'booxchange');
if( $db->connect_error){
    echo "failed";
    die('Error: ' . $con->connect_error);
}
$name_of_book=$_POST['name_of_book'];
$query = "DELETE FROM  searchbook where name_of_book='$name_of_book' limit 1";
$result=mysqli_query($db, $query) or die("cannot insert");
header('location: your_library.php');
?>