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
    <nav class="navbar navbar-expand-lg navbar-dark warning-color fixed-top font-weight-bold mb-5">
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
                    <a class="nav-link" href="gallery.php">Gallery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="rent.php">Rent</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="contact.php">Contact Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">About</a>
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
    <!-- Section: Contact v.2 -->
    <section class=" section-image pt-5 my-5">
        <!-- Section heading -->
        <h2 class="h1-responsive font-weight-bold text-center my-5">Contact us</h2>
        <!-- Section description -->
        <p class="text-center w-responsive mx-auto mb-3">For enquiry and information, please click on the link below and submit your requst here, we will get back to you
            within 24hrs.
            <br> Thank you!</p>
        <div class="modal fade" id="modalContactForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog cascading-modal" role="document">
                <!--Content-->
                <div class="modal-content">

                    <!--Header-->
                    <div class="modal-header amber darken-3 white-text">
                        <h4 class="title">
                            <i class="fa fa-pencil"></i> Contact form</h4>
                        <button type="button" class="close waves-effect waves-light" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <!--Body-->
                    <div class="modal-body mb-0">
                            <form action="processed_form.php" method="POST" id="formValidate" novalidate="novalidate" class="needs-validation">
                                <div class="md-form form-sm">
                                    <i class="fa fa-user prefix active"></i>
                                    <input type="text" name="name" id="contact-name" class="form-control" required>
                                    <input type="hidden" name="submitted" value="1" />
                                    <label for="contact-name" class="active">Your name</label>
                                    <div class="valid-feedback">
                                        Checked!
                                    </div>
                                    <div class="invalid-feedback">
                                        Please provide a valid name!
                                    </div>
                                </div>

                                <div class="md-form form-sm">
                                    <i class="fa fa-envelope prefix active"></i>
                                    <input type="email" name="email" id="contact-email" class="form-control" required>
                                    <label for="contact-email" class="active">Your email</label>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                    <div class="invalid-feedback">
                                        Please provide a valid email!
                                    </div>
                                </div>

                                <div class="md-form form-sm">
                                    <i class="fa fa-tag prefix"></i>
                                    <input type="tel" name="phone" id="contact-phone" pattern="[0-9]{3}[0-9]{4}[0-9]{4}" class="form-control" required>
                                    <label for="contact-phone" class="active">Phone</label>
                                </div>

                                <div class="md-form form-sm">
                                    <i class="fa fa-pencil prefix"></i>
                                    <textarea type="text" id="contact-message" name="message" class="md-textarea mb-0 form-control" required></textarea>
                                    <label for="contact-message">Your message</label>
                                    <div class="valid-feedback">
                                        Correct!
                                    </div>
                                    <div class="invalid-feedback">
                                        Please input your message!
                                    </div>
                                </div>

                                <div class="text-center mt-1-half">
                                    <button class="btn btn-amber mb-2 waves-effect waves-light" id="contact-send" name="submit" type="submit">Send
                                        <i class="fa fa-send ml-1"></i>
                                    </button>
                                </div>
                            </form>
                    </div>
                </div>
                <!--/.Content-->
            </div>
        </div>

        <div class="text-center">
            <a href="" class="btn btn-amber btn-rounded my-3" data-toggle="modal" data-target="#modalContactForm">Contact Us</a>
        </div>
    <?php if (isset($_POST['submit'])) : ?> 
        <!--import class here-->
        <?php
        include "class/csvform.php";

        registerUser::process($_POST);
        endif;
        ?>

    </section>
    <!-- Section: Contact v.2 -->
    <!-- Footer -->
    <footer class="page-footer font-small warning-color mt-5  pt-4">
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
                    <form action="processed_form.php" method="POST" class="input-group needs-validation" novalidate="novalidate">
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