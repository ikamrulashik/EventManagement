<?php
    ob_start();  
    include 'conn.php';
    $wrongPassMsg = ""; 
?>
<?php
    if(isset($_POST["login_submit"])) {

        $email = $_POST['login_email'];
        $password = $_POST['login_password'];

        if (!empty($email) && !empty($password)) {
             
            $SELECT = "SELECT * From register Where email = '$email' Limit 1";

            $result = mysqli_query($conn, $SELECT);

            if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {
                    $_SESSION["username"] = $row["username"];
                    $_SESSION["email"] = $row["email"];
                    $_SESSION["phone"] = $row["phone"];
                    $pass = $row["password"];
                }
            }

            if ($pass == $password) {
                $wrongPassMsg = "";
                header("Location: home.php");
            } else {
                $wrongPassMsg = "* Wrong password, try again!";
            }        
        } else {
            echo "All field are required";
            die();
        }
    
    }
?>

<html>
    <head>
        <title>Event Management</title>
        <link rel ="stylesheet" type = "text/css" href ="style.css">
        <link rel ="stylesheet" type = "text/css" href ="bootstrap.min.css">
        <link rel ="stylesheet" href = "https://use.fontawesome.com/releases/v5.8.2/css/all.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class = "container">
            <div class="card" style="width: 30rem;">
                <div class="card-body">
                    <h3 class="card-title" style="text-align: center"><img src="LOGO.png" width="300"></h3>
                    <h3 class="card-text" style="text-align: center">You Dream We Create</h3>
                </div>
            </div>
            <div class = "row">
                <div class = "col-lg-4" id="ul">
                    <form action="" method = "post">
                        <div class="form-group">
                            <label for="login_email">Email</label>
                            <input type="email" name = "login_email" class="form-control" id="login_email" placeholder="Email" required>
                        </div>
                        <div class="form-group">
                        <label for="login_pwd">Password</label>
                            <input type="password" name = "login_password" class="form-control" id="pwd" placeholder="Password"required>
                        </div>
                        <p style="color: red; font-weight: 600;"> <?php echo $wrongPassMsg; ?> </p>
                        <button type="submit" name = "login_submit" class="btn btn-primary btn-block btn-lg">Login</button><br>
                        <div class="form-group">
                            <a href="register.php">Don't have an account?</a>
                        </div>
                    </form>
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

