<?php
session_start();
$localhost = "localhost";
$username = "root";
$password = "";
$dbname = "booxchange";
$conn = new mysqli($localhost, $username, $password, $dbname);
if( $conn->connect_errno){
    echo "cannot connect to database";
    exit();
}
if(isset($_POST['Checkout']))
{
	$email=$_SESSION["username"];
	$sql="select * from cart where email='".$email."'";
	if ($res=$conn->query($sql)) {
        while($row=$res->fetch_assoc()){
        	$book=$row['books'];
        	$user=$row['user'];
        	$s="INSERT INTO orders (email,books,user) values('".$email."','".$book."','".$user."')";
			$query=mysqli_query($conn,$s);
			$q="DELETE from cart where books='".$book."' limit 1";
			$result=mysqli_query($conn, $q);
 			$query1="DELETE from searchbook where name_of_book='".$book."' limit 1";
			$result=mysqli_query($conn,$query1);
				}
	   }
  echo '<script>alert("your order is placed successfully. Check them in orders page.")</script>';
      include "order.php";
}
?>
