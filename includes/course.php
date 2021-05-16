<?php
session_start();
if (!isset($_SESSION['name'])) {
	header("location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap version 4/5 -->
    <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <!-- Fonts awsome icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <!-- Jquery cdn Links for animation-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <!-- css links -->
    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>

<body>
    <!-- navbar start  -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top mb-2" style="background-color: rgba(75, 75, 180, 0.616);">
        <div class="container">
            <img src="../images/Logo 1.png" width="40px" height="40px" alt=""> <span class="ml-1 text-white">kids Learn</span>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto text-uppercase">
                    <li class="nav-link text-warning">
                        <b> Welcome <?php echo $_SESSION['name'];?>.</b>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link text-white" href="../index.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="login.php">Courses</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="about.php">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="team.php">Team</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="contact.php">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="logout.php">logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- navbar end -->
    <!-- login success message  -->
    <div class="alert alert-success alert-dismissible fade show mt-5 text-center">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>Success!</strong> You are successfully logged in .
    </div>
    <!-- login messsage end -->
    <!-- heading of course  -->
    <div class="container mt-5 mb-4 bg-info">
        <div class="jumbotron " data-aos="fade-right">
            <h1>Kids Education</h1>
            <p>Our vision is to be the source for childhood learning on the internet available from anywhere and without charge. Learning has to be fun! E-Learning for kids integrates gaming and learning to make our courseware more effective. To make the learning fun we present our courses as a-learning journey; while acquiring all their new skills, the children travel around the world learning more about the 7 continents, countries, cities, oceans and cultures.</p>
        </div>
    </div>
    <!-- end of course heading  -->
    <!-- course items start -->
    <div class="container mt-4 mb-4 m-auto">
        <h2 class=" text-center text-info mt-5 mb-2" data-aos="fade-in">Get Your Courses</h2>
        <hr class="w-25 mx-auto pb-5">
        <div class="row text-center">
            <div class="col-lg-4 col-md-4 col-12 mb-3">
                <div class="card" data-aos="zoom-in-up">
                    <img class="card-img-top" src="../images/math.jpg" alt="Card image">
                    <div class="card-body">
                        <h4 class="card-title">Maths</h4>
                        <a href="math.php" class="btn btn-primary">Enroll Course</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12 mb-3">
                <div class="card" data-aos="zoom-in-up">
                    <img class="card-img-top" src="../images/alphabates.jpg" alt="Card image">
                    <div class="card-body">
                        <h4 class="card-title">Alphabates</h4>
                        <a href="alphabate.php" class="btn btn-primary">Enroll Course</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12 mb-3">
                <div class="card" data-aos="zoom-in-up">
                    <img class="card-img-top" src="../images/english.png" alt="Card image">
                    <div class="card-body">
                        <h4 class="card-title">English</h4>
                        <a href="english.php" class="btn btn-primary">Enroll Course</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12 mb-3">
                <div class="card" data-aos="zoom-in-up">
                    <img class="card-img-top" src="../images/animals.jpg" alt="Card image">
                    <div class="card-body">
                        <h4 class="card-title">Animals</h4>
                        <a href="animals.php" class="btn btn-primary">Enroll Course</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12 mb-3">
                <div class="card" data-aos="zoom-in-up">
                    <img class="card-img-top" src="../images/colors.png" alt="Card image">
                    <div class="card-body">
                        <h4 class="card-title">Colours</h4>
                        <a href="colors.php" class="btn btn-primary">Enroll Course</a>
                    </div>
                </div>
            </div>
            <!-- <div class="col-lg-4 col-md-4 col-12 mb-3">
                <div class="card" data-aos="zoom-in-up">
                    <img class="card-img-top" src="../images/videos.jpg" alt="Card image">
                    <div class="card-body">
                      <h4 class="card-title">How to Videos</h4>
                      <a href="videos.php" class="btn btn-primary">Enroll Course</a>
                    </div>
                </div>
            </div> -->
        </div>

    </div>
    <!-- course items end -->
    <!-- Footer section start -->
    <footer>
        <div class="container">
            <section style="height:80px;"></section>
            <!----------- Footer ------------>
            <footer class="footer-bs">
                <div class="row">
                    <div class="col-md-3 footer-brand animated fadeInLeft">
                        <h2><img src="../images/Logo 2.png" width="50px" height="50px" alt=""></h2>
                        <p>Our vision is to be the source for childhood learning on the internet available from anywhere and without charge. Learning has to be fun! E-Learning for kids integrates gaming and learning to make our courseware more effective. To make the learning fun we present our courses as a-learning journey.</p>
                      <p><strong>© 2021 KIDS LEARN, All rights reserved</strong></p>
                    </div>
                    <div class="col-md-3 footer-nav animated fadeInUp">
                        <h4>Menu —</h4>
                        <div class="col-md-6">
                            <ul class="list">
                                <li><a href="about.php">About Us</a></li>
                                <li><a href="contact.php">Contacts</a></li>
                                <li><a href="#">Terms & Condition</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 footer-social animated fadeInDown">
                        <h4>Follow Us</h4>
                        <ul>
                            <li><a href="facebook.com/kidslearn">Facebook</a></li>
                            <li><a href="Twitter.com/kidslearn">Twitter</a></li>
                            <li><a href="instagram.com/kidslearn">Instagram</a></li>
                            <li><a href="mailto:info@muzamelhashimi10.be">Mail Us</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 footer-ns animated fadeInRight">
                        <h4>Newsletter</h4>
                        <p>Subscribe and connect with us for any update</p>
                        <p>
                            <div class="input-group">
                                <form action="">
                                    <input type="text" class="form-control" placeholder="Subscribe for...">
                                    <span class="input-group-btn">
                                      <button class="btn btn-default" type="button"></button>
                                    </span>
                                </form>
                            </div><!-- /input-group -->
                         </p>
                    </div>
                </div>
            </footer>
            <section style="text-align:center; margin:10px auto;"><p>Developer<a href="#"> D'FRAM BROTHERS 2021</a></p></section>
        
        </div>
    </footer>
    <!-- Footer section end -->
    <!-- Bootstrap Bundle with Popper.js version 4/5 -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
	<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <!-- animation script -->
    <script>			
        AOS.init()({
        offset:300,
        duration:2000,
        });
</script>
</body>
</html>
