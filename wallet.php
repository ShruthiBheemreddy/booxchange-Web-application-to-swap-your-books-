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
?>
<!DOCTYPE HTML>
<html>
	<head>
	<title>BOOXCHANGE</title>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<link rel="stylesheet" href="css/style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="jquery.min.js"></script> 
	</head>
	<body>
		
	<div class="colorlib-loader"></div>

	<div id="page">
		<nav class="colorlib-nav" role="navigation">
			<div class="top-menu">
				<div class="container">
					<div class="row">
						<div class="col-sm-7 col-md-9">
							<div id="colorlib-logo"><a href="index.html">BOOXCHANGE</a></div>
						</div>
						<div class="col-sm-5 col-md-3">
			            <form action="/booxchange\searchbook.php" class="search-wrap" method="post">
			               <div class="form-group">
			                  <input type="search" class="form-control search" placeholder="Search by name of book" name="name_of_book">
			                  <input class="btn btn-primary submit-search text-center" type="submit" value=">>"><i class="icon-search"></i>

			               </div>
			            </form>
			         </div>
		         </div>
					<div class="row">
						<div class="col-sm-12 text-left menu-1">
							<ul>
								<li ><a href="index.php">Home</a></li>
								<li>
									<a href="about1.html">About</a>
								</li>
								<li><a href="library.php">Library</a></li>
								<li class="active"><a href="account.php">Account</a></li>
								<li><a href="contact.php">Contact</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</nav>
		<ul class="unordered" style="float: left;">
  <li class="vertical"><a href="dashboard.php">Dashboard</a></li>
  <li class="vertical"><a href="order.php">Orders</a></li>
  <li class="vertical"><a href="your_Library.php">Your_Library</a></li>
  <li class="vertical"><a href="wallet.php">Wallet</a></li>
  <li class="vertical"><a href="your_library.php">Your_cart</a></li>
  <li class="vertical"><a href="shop.php">Shop</a></li>
  <li class="vertical"><a href="profile.php">Profile</a></li>
  <li class="vertical"><a href="index.php">Logout</a></li>
</ul>
<p style="width: 90.2%;
    margin-left: 20%;
    border-top: 0;">
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
$user=$_SESSION["username"];
$sql="select * from orders where user='".$user."'";
if($result=$conn->query($sql)){
	$_SESSION["wallet"]="0";
        while($row=$result->fetch_assoc())
        {
        	$book=$row['books'];
        	$query="select * from book_price where name='".$book."'";
        	$res=mysqli_query($conn,$query);
        	$row1=$res->fetch_assoc();

        	$_SESSION["wallet"]=(int)$_SESSION["wallet"]+(int)$row1['price'];
        	
        }}
?>
    <form method="post" action="checkout.php">
    		<b style="margin-left: 20%"> A total of :<?php echo $_SESSION["wallet"];?>  INR Is available in your wallet</b>
          
            </form>

    </p>
<style type="text/css">
.vertical{
  display: block;
  width: 150px;
  color: cyan;
  padding: 5px 16px;
  background-color:black;
}
.vertical a{
	color: cyan;
}
.vertical:hover {
  color: red;
}

</style>
</script>
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
   <!-- popper -->
   <script src="js/popper.min.js"></script>
   <!-- bootstrap 4.1 -->
   <script src="js/bootstrap.min.js"></script>
   <!-- jQuery easing -->
   <script src="js/jquery.easing.1.3.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- Owl carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Date Picker -->
	<script src="js/bootstrap-datepicker.js"></script>
	<!-- Stellar Parallax -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>

	</body>
</html>