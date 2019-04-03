
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Niyexdroid Movie Rentals</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/style.css" rel="stylesheet">
    <link rel="shortcut icon" type="image/png" href="img/rental.png">
</head>

<body class="rent-image">
    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark warning-color fixed-top font-weight-bold mb-5">
        <!-- Navbar brand -->
        <a class="navbar-brand" href="index.html">
            <img class="img-fluid" height="30" width="50" src="img/logo.png">
        </a>
        <!-- Collapse button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav" aria-controls="basicExampleNav"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Collapsible content -->
        <div class="collapse navbar-collapse" id="basicExampleNav">
            <!-- Links -->
            <ul class="navbar-nav nav-pills nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.html">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="gallery.html">Gallery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="rent.html">Rent</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.html">Contact Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.html">About</a>
                </li>
            </ul>
            <!-- Links -->
            <form class="form-inline">
                <div class="md-form my-0">
                    <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                </div>
                <button class="btn btn-outline-white btn-md my-2 my-sm-0 ml-3" type="submit">Search</button>
            </form>
        </div>
        <!-- Collapsible content -->
    </nav>
    <div class='mt-5 pt-5 text-center' >
        <h3 >Below is a list of years displaying a leap year in between, with the total number of leap year </h3>
    </div>
<?php
#variable for leapYear counter
$leapYearCounter = 0;
#this loop is to iterate from 1980 to 2018 and display the years and also leap year in between them
for ($currentYear = 1980; $currentYear <= 2018; $currentYear++) {
    if (leapYear($currentYear)) {
        $leapYearCounter++;
        echo $currentYear . ' Is a leap Year' . '<br>';
    } else {
        echo $currentYear . '<br>';
    }
}
#condition to determine the leapYear
function leapYear($currentYear)
{
    $leapYear = false;
    if ($currentYear % 4 == 0 && $currentYear % 100 != 0 || $currentYear % 400 == 0) {
        $leapYear = true;
        return $leapYear;
    }
}
# Display total number of leap year on page
echo '<br>' . 'The total number of leap year from the 1980 to 2018 is ' . $leapYearCounter;
?>

<footer class="page-footer font-small warning-color pt-4">
        <!-- Footer Text -->
        <div class="container-fluid text-center text-md-left">
            <!-- Grid row -->
            <div class="row">
                <!-- Grid column -->
                <div class="col-md-6 mt-md-0 mt-3">
                    <!-- Content -->
                    <h5 class="text-uppercase font-weight-bold">Contact Info</h5>
                    <p>Address: Iba Housing Estate, Ojo, Lagos
                        <br>Tel: 08168819022
                        <br>Email: adeniyi.4568@yahoo.com</p>
                </div>
                <!-- Grid column -->
                <hr class="clearfix w-100 d-md-none pb-3">
                <!-- Grid column -->
                <div class="col-md-6 mb-md-0 mt-3">
                    <form class="input-group">
                        <input type="text" class="form-control form-control-sm" placeholder="Your email" aria-label="Your email" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-md btn-outline-white waves-effect" type="button" data-toggle="modal" data-target="#signUp">Sign Up for newsletter</button>
                        </div>
                    </form>
                </div>
                <!--Modal: modalCookie-->
                <div class="modal fade bottom" id="signUp" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"
                    data-backdrop="false">
                    <div class="modal-dialog modal-frame modal-bottom modal-notify modal-info" role="document">
                        <!--Content-->
                        <div class="modal-content">
                            <!--Body-->
                            <div class="modal-body">
                                <div class="row d-flex justify-content-center align-items-center">
                                    <p class="pt-3 pr-2">Thank you for signing up for our Newsletter, updates about the latest movies will be
                                        sent to you!</p>
                                    <a type="button" class="btn btn-outline-amber waves-effect" data-dismiss="modal">Ok, thanks</a>
                                </div>
                            </div>
                        </div>
                        <!--/.Content-->
                    </div>
                </div>
                <!--Modal: modalCookie-->

                <!-- Grid column -->
                <div class="col-md-12 py-1">
                    <div class="mb-3 flex-center">
                        <!-- Facebook -->
                        <a class="fb-ic" href="https://www.facebook.com/niyex15">
                            <i class="fa fa-facebook fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                        </a>
                        <!-- Twitter -->
                        <a class="tw-ic" href="https://twitter.com/niyexdroid">
                            <i class="fa fa-twitter fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                        </a>
                        <!-- Google +-->
                        <a class="gplus-ic" href="https://plus.google.com/110119918843916178209">
                            <i class="fa fa-google-plus fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                        </a>
                        <!--Linkedin -->
                        <a class="li-ic" href="https://www.linkedin.com/in/adeniyi-adegbola-b82a4911a/">
                            <i class="fa fa-linkedin fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                        </a>
                        <!--Instagram-->
                        <a class="ins-ic" href="https://www.instagram.com/niyexdroid/">
                            <i class="fa fa-instagram fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                        </a>
                    </div>
                </div>
                <!-- Grid column -->
            </div>
            <!-- Grid row -->
        </div>
        <!-- Footer Text -->
        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">© 2018 Copyright | Designed by
            <a href="https://niyexdroid.webflow.io"> Niyexdroid</a>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->
    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <!-- Local Jquery for animation -->
    <script type="text/javascript" src="js/jquery.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
</body>
</html>