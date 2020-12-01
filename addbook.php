<!DOCTYPE HTML>
<html>
	<head>
	<title>BOOXCHANGE</title>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<link rel="stylesheet" href="css/style.css">

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
								<li class="active">
									<a href="about1.html">About</a>
								</li>
								<li><a href="library.php">Library</a></li>
								<li><a href="account.php">Account</a></li>
								<li><a href="contact.php">Contact</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</nav>
		<ul class="unordered">
  <li class="vertical"><a href="#dashboard">Dashboard</a></li>
  <li class="vertical"><a href="#news">Orders</a></li>
  <li class="vertical"><a href="your_library.php">Your_Library</a></li>
  <form style="margin:0 auto;width:20%;text-align:left" action="addbook1.php" method="post">
  <b style="color: black;">Fill info of the book</b>
  <input type="text" name="name_of_book"  placeholder="name of Book"  maxlength="50" size="50" style="background-color: powderblue;
  color: black; "><br>
  <input type="text" name="author_of_book"  placeholder="author of book"  maxlength="50" size="50" required style="background-color: powderblue; "><br>
  <input type="text" name="Publisher_of_book"  placeholder="Publisher of book"  maxlength="50" size="50"  required style="background-color: powderblue; "><br>
  <input type="text" name="Language"  placeholder="Language"  maxlength="50" size="50"  required style="background-color: powderblue; "><br>
  <input type="text" name="Pages"  placeholder="Pages"  maxlength="50" size="50" required style="background-color: powderblue; "><br>
  <input type="text" name="genre"  placeholder="Genre"  maxlength="50" size="50" required style="background-color: powderblue;"><br>
  <button type="submit" value="Submit">Add</button>
</form>
  <li class="vertical"><a href="#about">Wallet</a></li>
  <li class="vertical"><a href="your_cart.php">Your_cart</a></li>
  <li class="vertical"><a href="shop.php">Shop</a></li>
  <li class="vertical"><a href="#about">Profile</a></li>
  <li class="vertical"><a href="#about">Logout</a></li>
</ul>
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