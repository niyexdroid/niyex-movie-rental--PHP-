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

<body>
    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark warning-color fixed-top font-weight-bold">
        <!-- Navbar brand -->
        <a class="navbar-brand" href="index.php">
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
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="gallery.php">Gallery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="rent.php">Rent</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">About</a>
                    <span class="sr-only">(current)</span>
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
    <!--/.Navbar-->
    <!-- main  -->
    <section>
        <div class="card card-image" style="background-image: url(img/minions.jpg);">
            <div class="text-white text-center rgba-stylish-strong py-5">
                <div class="py-5">
                    <!--Content-->
                    <h6 class="amber-text font-bold">
                        <i class="fa fa-camera-retro fa-4x"></i>
                    </h6>
                    <h1 class="card-title pt-4 mb-1 font-bold">Niyexdroid Movies Rentals</h1>
                    <p class="px-2 pb-1">We have the latest collections of movies and Tvseries in our gallery. Try Us Out Today!!!!
                        <br> Check out our gallery for new and latest movies.You can also toggle the gallery view by clicking the button below.
                    </p>
                    <button class="btn btn-amber" id="gallery-btn">
                        <i class="fa fa-clone left"></i> View Gallery</button>
                    <!--Content-->
                </div>
            </div>
        </div>
        <!--Jumbotron-->
    </section>
    <!-- carousel -->
    <section class="section-image animated " id="carousel-link">
        <h1 class="h1-responsive text-center black-text my-2">Gallery Slider</h1>
        <hr class="my-2">
        <!--Carousel Wrapper-->
        <div id="carousel" class="carousel slide carousel-fade" data-ride="carousel">
            <!--Indicators-->
            <ol class="carousel-indicators">
                <li data-target="#carousel" data-slide-to="0" class="active"></li>
                <li data-target="#carousel" data-slide-to="1"></li>
                <li data-target="#carousel" data-slide-to="2"></li>
                <li data-target="#carousel" data-slide-to="3"></li>
                <li data-target="#carousel" data-slide-to="4"></li>
                <li data-target="#carousel" data-slide-to="5"></li>
            </ol>
            <!--/.Indicators-->
            <!--Slides-->
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <div class="view">
                        <img class="d-block w-100" src="img/lawbreakers.jpg" alt="First slide">
                        <div class="mask rgba-black-slight"></div>
                    </div>
                </div>
                <div class="carousel-item">
                    <!--Mask color-->
                    <div class="view ">
                        <img class="d-block w-100" src="img/beyond-good-and-evil.jpg" alt="Second slide">
                        <div class="mask rgba-black-slight"></div>
                    </div>
                </div>
                <div class="carousel-item">
                    <!--Mask color-->
                    <div class="view">
                        <img class="d-block w-100" src="img/justice-league.jpg" alt="Third slide">
                        <div class="mask rgba-black-slight"></div>
                    </div>
                </div>
                <div class="carousel-item">
                    <!--Mask color-->
                    <div class="view">
                        <img class="d-block w-100" src="img/star-wars-battlefront.jpg" alt="Fourth slide">
                        <div class="mask rgba-black-slight "></div>
                    </div>
                </div>
                <div class="carousel-item">
                    <!--Mask color-->
                    <div class="view">
                        <img class="d-block w-100" src="img/avengers.jpg" alt="Fifth slide">
                        <div class="mask rgba-black-slight "></div>
                    </div>
                </div>
                <div class="carousel-item">
                    <!--Mask color-->
                    <div class="view">
                        <img class="d-block w-100" src="img/mission-impossible.jpg" alt="Sixth slide">
                        <div class="mask rgba-black-slight "></div>
                    </div>
                </div>
            </div <!--/.Slides-->
            <!--Controls-->
            <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
            <!--/.Controls -->
        </div>
        <!--/.Carousel Wrapper-->
    </section>
    <!-- Footer -->
    <footer class="page-footer font-small warning-color pt-4 my-1">
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
                    <form action="processed_form" method="POST" class="input-group needs-validation" novalidate="novalidate">
                        <input type="email" name="email" class="form-control form-control-sm" placeholder="Your email" aria-label="Your email" aria-describedby="basic-addon2"
                            required>
                        <div class="input-group-append">
                            <button class="btn btn-md btn-outline-white waves-effect " type="submit">Sign Up for newsletter</button>
                        </div>
                        <div class="invalid-feedback">
                            Please provide a valid email!
                        </div>
                        <div class="valid-feedback">
                            Confirmed!
                        </div>
                    </form>
                </div
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