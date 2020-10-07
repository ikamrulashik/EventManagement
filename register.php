<?php
    ob_start();  
    include 'conn.php'; 
?>
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
                <div class = "col-lg-4" id="ul2">
                    <form action="" method = "post">
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="username" name = "username" class="form-control" id="username" placeholder="Username" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name ="email" class="form-control" id="email" placeholder="Email" required>
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="phone" name = "phone" class="form-control" id="phone" placeholder="Phone" required>
                        </div>
                        <div class="form-group">
                            <label for="pwd">Password</label>
                            <input type="password" name = "password" class="form-control" id="pwd" placeholder="Password" required>
                        </div>
                        <button type="submit" name = "submit" class="btn btn-primary btn-block btn-lg">Create an account</button><br>
                        <div class="form-group">
                            <a href="index.php">Already have an account?</a>
                        </div>
                    </form>
                </div>
                <br>
            </div>
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
        </div>
    </body>
</html>
<?php
    if(isset($_POST["submit"])) {

        $username = $_POST['username'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];

        if (!empty($username) || !empty($password) || !empty($email) || !empty($phone)) {
             
            $SELECT = "SELECT email From register Where email = ? Limit 1";
            $INSERT = "INSERT Into register (username, password, email, phone) values(?, ?, ?, ?)";

            $stmt = $conn->prepare($SELECT);
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $stmt->bind_result($email);
            $stmt->store_result();
            $rnum = $stmt->num_rows;

            if ($rnum==0) {
                $stmt->close();
                $stmt = $conn->prepare($INSERT);
                $stmt->bind_param("sssi", $username, $password, $email, $phone);
                $stmt->execute();
                echo "Registration Successfully";
            } else {
                echo "This email is already used";
            }
            
            header("location:index.php"); 
            $stmt->close();
            $conn->close();
            
        } else {
            echo "All field are required";
            die();
        }
    }
?>