<?php
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
    $name_of_book=$_POST['name_of_book'];
    $query="select * from searchbook where name_of_book='$name_of_book'";
    $result=mysqli_query($con,$query);

    $row = $result->fetch_assoc();
    if($row['name_of_book']==$name_of_book){
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
                                <li >
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
        <h2 style="margin-left: 30%; margin-right: ; width: 75%; color: green;">Book of your choice is found successfully</h2>
        <h5 style="margin-left: 30%; margin-top: 2%; width: 75%; color: green;">Here are the details of the book</h5>
        <table style="margin-left: auto; margin-right: auto; color: cyan; border: 2px solid black; padding: 1px solid black;">
            <tr >
                <th style="border: 1px solid black; padding: 5px; background-color: black;">Name of the Book</th>
                <th style="border: 1px solid black; padding: 5px; background-color: black;">Author of Book</th>
                <th style="border: 1px solid black; padding: 5px; background-color: black;">Publisher of Book            </th>
                <th style="border: 1px solid black; padding: 5px; background-color: black;">Language</th>
                <th style="border: 1px solid black; padding: 5px; background-color: black;">Pages</th>
                <th style="border: 1px solid black; padding: 5px; background-color: black;">Genre</th>
            </tr>
            <tr>
                <td style="border: 1px solid black; padding: 5px; background-color: black;"><?php echo $row['name_of_book']; ?></td>
                <td style="border: 1px solid black; padding: 5px; background-color: black;"><?php echo $row['author_of_book']; ?></td>
                <td style="border: 1px solid black; padding: 5px; background-color: black;"><?php echo $row['Publisher_of_book']; ?></td>
                <td style="border: 1px solid black; padding: 5px; background-color: black;"><?php echo $row['Language']; ?></td>
                <td style="border: 1px solid black; padding: 5px; background-color: black;"><?php echo $row['Pages']; ?></td>
                <td style="border: 1px solid black; padding: 5px; background-color: black;"><?php echo $row['genre']; ?></td>
            </tr>
            
        </table>
        <?php
    }
    else{
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
                                <li >
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

        <h3 style="color: red; width: 100%; margin: auto; margin-left: 10%">"sorry, Book of your choice is not available right now, Goback to previous page!!"</h3>
        <?php
    }

}
?>

