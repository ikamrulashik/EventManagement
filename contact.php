<?php include("conn.php") ?>
<?php 

    if(isset($_POST["contact_submit"])) {
        $n = $_POST["name"];
        $e = $_POST["email"];
        $p = $_POST["phone"];
        $s = $_POST["subject"];
        $m = $_POST["message"];

        $sql = "INSERT INTO contact (name, email, phone, subject, message) VALUES ('$n', '$e', '$p','$s', '$m')";
        
        if(mysqli_query($conn,$sql)) {
            $message = "Message Delivered!";
            echo "<script type='text/javascript'>alert('$message');</script>";
        }
    }


?>
<html>
    <head>
        <title>Event Management</title>
        <link rel ="stylesheet" type = "text/css" href ="contact.css">
        <link rel ="stylesheet" type = "text/css" href ="bootstrap.min.css">
        <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
        <link rel ="stylesheet" href = "https://use.fontawesome.com/releases/v5.8.2/css/all.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </head>
    <Body>
        <div class = "navbar">
            <nav class="navbar navbar-inverse navbar-fixed-top">
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="home.php">Dream Events</a>
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
        <?php 
            $name = $_SESSION["username"];
            $email = $_SESSION["email"];
            $phone = $_SESSION["phone"];
        ?>
        <div class = "contact">
            <div class="container">
                <h3 class="col-4 d-flex justify-content-center" >Contact</h3>
                <hr class="clearfix w-100 d-md-none pb-3">
                <div class = "col-lg-6">
                    <form action="" method = "post">
                        <div class="form-group">
                            <!-- <label for="name">Name</label> -->
                            <input type="hidden" name="name" value="<?php echo $name; ?>">
                        </div>
                        <div class="form-group">
                            <!-- <label for="email">Email</label> -->
                            <input type="hidden" name="email" value="<?php echo $email; ?>">
                        </div>
                        <div class="form-group">
                            <!-- <label for="phone">Phone</label> -->
                            <input type="hidden" name="phone" value="<?php echo $phone; ?>">
                        </div>
                        <div class="form-group">
                            <label for="subject">Subject</label>
                            <input type="text" name="subject" class = "form-control">
                        </div>
                        <div class="form-group">
                            <label for="msg">Message</label><br>
                            <textarea name="message" id="message" cols="74" rows="5" class="form-control" required></textarea>
                        </div>
                        <button type="submit" name = "contact_submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
                <div class="card" style="width: 30rem;">
                    <div class="card-body">
                        <h3 class="card-title" style="text-align: center">Bashundhara R/A</h3>
                        <h4 class="card-text" style="text-align: center"><a><i class="far fa-envelope"> cse482@northsouth.edu</i></a></h4>
                        <p class="card-text" style="text-align: center"><a><i class="fas fa-phone-alt"> 017000000000</i></a></p>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
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
    </Body>
</html>