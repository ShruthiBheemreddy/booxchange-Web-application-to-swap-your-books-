
<!DOCTYPE HTML>
<html>
	<head>
	<title>Library</title>
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
								<li>
									<a href="about1.html">About</a>
								</li>
								<li class="active"><a href="library.html">Library</a></li>
								<li><a href="account.php">Account</a></li>
								<li><a href="contact.php">Contact</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</nav>
		<?php
$localhost = "localhost";
$username = "root";
$password = "";
$dbname = "booxchange";
$mysqli = new mysqli($localhost, $username, $password, $dbname);
if( $mysqli->connect_errno){
    echo "failed";
    exit();
}
$query="select * from searchbook";
    if($result=$mysqli->query($query)){
    	?>
        <h3 style="margin-left: 30%; margin-top: 2%;">Some of the books available in our library are</h2>
        <table style="margin-left: auto; margin-right: auto; background-color: white; border: 2px solid black; padding: 50px solid black; width: 80%;color: white;">
            <tr >
                <th style="border: 1px solid black; padding: 5px; background-color: black; width: 20%">Name of the Book</th>
                <th style="border: 1px solid black; padding: 5px; background-color: black; width: 20%">Author of Book</th>
                <th style="border: 1px solid black; padding: 5px; background-color: black; width: 20%">Publisher of Book  
                <th style="border: 1px solid black; padding: 5px; background-color: black; width: 20%">Language</th>
                <th style="border: 1px solid black; padding: 5px; background-color: black; width: 20%">Pages</th>
                <th style="border: 1px solid black; padding: 5px; background-color: black; width: 10%">Genre</th>
            </tr>
        </table>
        <?php
        while($row=$result->fetch_assoc()){
    	?> 
    	
    	<table style="margin-left: auto; margin-right: auto; color: cyan; border: 2px solid black; padding: 50px solid black; width: 80%">
            <tr>
                <td style="border: 1px solid black; padding: 5px; background-color: black; width: 20%"><?php echo $row['name_of_book']; ?></td>
                <td style="border: 1px solid black; padding: 5px; background-color: black; width: 20%"><?php echo $row['author_of_book']; ?></td>
                <td style="border: 1px solid black; padding: 5px; background-color: black; width: 20%"><?php echo $row['Publisher_of_book']; ?></td>
                <td style="border: 1px solid black; padding: 5px; background-color: black; width: 20%"><?php echo $row['Language']; ?></td>
                <td style="border: 1px solid black; padding: 5px; background-color: black; width: 20%"><?php echo $row['Pages']; ?></td>
                <td style="border: 1px solid black; padding: 5px; background-color: black; width: 10%"><?php echo $row['genre']; ?></td>
            </tr>
        </table>
        <?php
    }
}
        ?>


	
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