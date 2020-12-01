<?php
$db = mysqli_connect('localhost', 'root', '', 'booxchange');
$errors = array();
if( $db->connect_error){
    echo "failed";
    die('Error: ' . $db->connect_error);
}
  $uname = $_POST['email'];
  $psw = $_POST['psw'];
  $psw_repeat = $_POST['psw-repeat'];
  $user_check_query = "SELECT * FROM userinfo WHERE email='$uname' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) {
    if ($user['email'] === $uname or $psw!=$psw_repeat) {
     echo '<script>alert("User already Exists!!. Try with different username or Make sure that both passwords are same ")</script>';
     include "account.php";
    }
  }
  else{
    $query = "INSERT INTO userinfo (email,password) 
          VALUES('$uname','$psw')";
    $result=mysqli_query($db, $query) or die("cannot insert");
    include "accountlogin.php";    
  }
?>