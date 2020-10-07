<?php

session_start();
if(!isset($_SESSION['username']))
header('location:index.php');

?>
<html>
    <head>
        <title>Event Management</title>
        <link rel ="stylesheet" type = "text/css" href ="home_style.css">
        <link rel ="stylesheet" type = "text/css" href ="bootstrap.min.css">
        <link rel ="stylesheet" href = "https://use.fontawesome.com/releases/v5.8.2/css/all.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class = "navbar">
            <nav class="navbar navbar-inverse navbar-fixed-top">
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="#">Dream Events</a>
                    </div>
                    <ul class="nav navbar-nav">
                        <li><a href="home.php">Home</a></li>
                        <li><a href="about.php">About</a></li>
                    </ul>
                    <ul class = "nav navbar-right ml-auto">
                        <li><a href = "logout.php">Logout</a></li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class = "container">
            <h2 class = "text-center text-success">Welcome <?php echo $_SESSION['username']; ?></h2>
        </div>
        <div class = "service">
            <div class="container">
                <h3 class="col-4 d-flex justify-content-center" >Services</h3>
                <hr class="clearfix w-100 d-md-none pb-3">
                <p>With a perfect blend of experience and passion, Dream Events is an event management company in Bangladesh. 
                    We’ve emerged as a company with ideas to turn your corporate or personal event into something worth remembering. 
                    With the help of our creative team, we provide our services - </p>
                <ul>
                    <li>Wedding</li>
                    <li>Birthday</li>
                    <li>Corporate Events</li>
                    <li>Haldi</li>
                    <li>Anniversary</li>
                    <li>Concert</li>
                    <li>Trade Shows</li>
                    <li>Cultural Events</li>
                    <li>Exhibitions</li>
                    <li>Product Launces</li>
                    <li>Photographer Hire</li>
                    <li>Corporate Meeings</li>
                    <li>Fashion Shows</li>
                </ul>
            </div>
            <div class="bottom text-center">
                <div class="card-body">
                    <p class="card-text">Get Started</p>
                    <a href="contact.php" class="btn btn-primary">Contact Us</a>
                </div>
            </div>
        </div>
        <br>
        <div class = "footer">
        <footer class="page-footer bg-dark">
                <div class="container-fluid text-center text-md-left">
                    <br>
                    <div class="row">
                        <div class="col-md-6 mt-md-0 mt-3">
                            <h5 class="text-uppercase">Dream Events</h5>
                            <p>You dream We create</p>
                            <div class = "row py-4 d-flex align-items-center">
                            <div class = "col-md-12 text-center">
                                <a href="#"><i class = "fab fa-facebook-f text-white mr-4"></i></a>
                                <a href="#"><i class = "fab fa-twitter text-white mr-4"></i></a>
                                <a href="#"><i class = "fab fa-google-plus-g text-white mr-4"></i></a>
                                <a href="#"><i class = "fab fa-linkedin-in text-white mr-4"></i></a>
                                <a href="#"><i class = "fab fa-instagram text-white mr-4"></i></a>
                            </div>
                        </div>
                        </div>
                        
                        <div class="col-md-6 mb-md-0 mb-6">
                            <h5 class="text-uppercase">Support</h5>
                            <ul class="list-unstyled">
                                <li>
                                    <a href="#!">Contact Us</a>
                                </li>
                                <li>
                                    <a href="#!">Need Help?</a>
                                </li>
                                <li>
                                    <a href="#!">Privacy</a>
                                </li>
                                <li>
                                    <a href="#!">Term of Use</a>
                                </li>
                            </ul>

                        </div>
                    </div>
                </div>
                <div class="footer-copyright text-center py-3">© 2020 Copyright
                    <a href="#"> Kamrul</a>
                </div>
            </footer>
        </div>
    </body>
</html>