<?php
 include_once('connection.php');
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
    <title>Animals</title>
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
    <nav class="navbar navbar-expand-lg navbar-light fixed-top mb-2" style="background-color: rgb(81, 81, 194);">
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
                        <a class="nav-link text-white" href="course.php">Courses</a>
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
                        <a class="nav-link text-white" href="video.php">Video</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="logout.php">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- navbar end -->
    <!-- math course section start -->
    <div class="container mt-5 mb-4">
        <div class="row">
            <div class="col-lg-8 col-md-7 col-12">
                <div class="mt-3 mb-3">
                    <div>
                        <h4>Animals lectures</h4>
                    </div>
                    <div class="mb-3">
                        <div id="carouselExampleIndicators" class="carousel slide mb-3" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            </ol>

                            <?php
                          		$show="select * from animallecture";
                              $query=mysqli_query($con,$show);
                              $rowcount=mysqli_num_rows($query);
                            ?>
                            <div class="carousel-inner">
                                <?php
				for ($i=1; $i<=$rowcount ; $i++) {
				$arraydata=mysqli_fetch_array($query);
				?>
                                <?php
				if ($i==1) {
				?>
                                <div class="carousel-item active">
                                    <?php echo $arraydata['video']; ?>
                                </div>
                                <?php
				}
				else{
				?>
                                <div class="carousel-item">
                                    <?php echo $arraydata['video']; ?>

                                </div>
                                <?php
				}
				?>
                                <?php
				}
				?>
                            </div>

                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- quiz section start  -->

                <div class="container mt-4 mb-4" data-aos="fade-up">
                    <div class="alert alert-danger alert-dismissible fade show">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <strong>Here Your Questoins!</strong> All The Very Best To You .
                    </div>

                    <form action="../result/animal.php" method="post">
                        <div id="accordion">

                            <div class="card mb-1">
                                <div class="card-header">
                                    <a class="card-link" data-toggle="collapse" href="#collapseOne">
                                        Question 1 :
                                    </a>
                                </div>
                                <div id="collapseOne" class="collapse" data-parent="#accordion">
                                    <div class="question bg-white p-3 border-bottom">
                                        <div class="d-flex flex-row align-items-center question-title">
                                            <h3 class="text-danger">Q.</h3>
                                            <h5 class="mt-1 ml-2">What color is a lion ?</h5>
                                        </div>
                                        <div class="ans ml-2">
                                            <label class="radio"> <input type="radio" name="ansone" value="Pink" required=""> <span>A) Pink</span>
                                            </label>
                                        </div>
                                        <div class="ans ml-2">
                                            <label class="radio"> <input type="radio" name="ansone" value="Black with white stripes"> <span>B) Black with white stripes</span>
                                            </label>
                                        </div>
                                        <div class="ans ml-2">
                                            <label class="radio"> <input type="radio" name="ansone" value="Yellow"> <span>C) Yellow</span>
                                            </label>
                                        </div>
                                        <div class="ans ml-2">
                                            <label class="radio"> <input type="radio" name="ansone" value="None of the above"> <span>D) None of the above</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-1">
                                <div class="card-header">
                                    <a class="card-link" data-toggle="collapse" href="#collapsetwo">
                                        Question 2 :
                                    </a>
                                </div>
                                <div id="collapsetwo" class="collapse" data-parent="#accordion">
                                    <div class="question bg-white p-3 border-bottom">
                                        <div class="d-flex flex-row align-items-center question-title">
                                            <h3 class="text-danger">Q.</h3>
                                            <h5 class="mt-1 ml-2">What is the biggest animal that has ever lived ?</h5>
                                        </div>
                                        <div class="ans ml-2">
                                            <label class="radio"> <input type="radio" name="anstwo" value="Blue Whale"> <span>Blue Whale</span>
                                            </label>
                                        </div>
                                        <div class="ans ml-2">
                                            <label class="radio"> <input type="radio" name="anstwo" value="African" required=""> <span>African</span>
                                            </label>
                                        </div>
                                        <div class="ans ml-2">
                                            <label class="radio"> <input type="radio" name="anstwo" value="Rat"> <span>Rat</span>
                                            </label>
                                        </div>
                                        <div class="ans ml-2">
                                            <label class="radio"> <input type="radio" name="anstwo" value="Crocodile"> <span>Crocodile</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-1">
                            <div class="card-header">
                                <a class="card-link" data-toggle="collapse" href="#collapsethree">
                                    Question 3 :
                                </a>
                            </div>
                            <div id="collapsethree" class="collapse" data-parent="#accordion">
                                <div class="question bg-white p-3 border-bottom">
                                    <div class="d-flex flex-row align-items-center question-title">
                                        <h3 class="text-danger">Q.</h3>
                                        <h5 class="mt-1 ml-2"> What are baby dogs called ?</h5>
                                    </div>
                                    <div class="ans ml-2">
                                        <label class="radio"> <input type="radio" name="ansthree" value="Mares"> <span>Mares</span>
                                        </label>
                                    </div>
                                    <div class="ans ml-2">
                                        <label class="radio"> <input type="radio" name="ansthree" value="Puppy" required=""> <span>Puppy</span>
                                        </label>
                                    </div>
                                    <div class="ans ml-2">
                                        <label class="radio"> <input type="radio" name="ansthree" value="Cows"> <span>Cows</span>
                                        </label>
                                    </div>
                                    <div class="ans ml-2">
                                        <label class="radio"> <input type="radio" name="ansthree" value="Dams"> <span>Dams</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-1">
                            <div class="card-header">
                                <a class="card-link" data-toggle="collapse" href="#collapsefour">
                                    Question 4 :
                                </a>
                            </div>
                            <div id="collapsefour" class="collapse" data-parent="#accordion">
                                <div class="question bg-white p-3 border-bottom">
                                    <div class="d-flex flex-row align-items-center question-title">
                                        <h3 class="text-danger">Q.</h3>
                                        <h5 class="mt-1 ml-2"> Which animal lives in water ?</h5>
                                    </div>
                                    <div class="ans ml-2">
                                        <label class="radio"> <input type="radio" name="ansfour" value="Fish" required=""> <span>Fish</span>
                                        </label>
                                    </div>
                                    <div class="ans ml-2">
                                        <label class="radio"> <input type="radio" name="ansfour" value="Elephant"> <span>Elephant</span>
                                        </label>
                                    </div>
                                    <div class="ans ml-2">
                                        <label class="radio"> <input type="radio" name="ansfour" value="Rat"> <span>Rat</span>
                                        </label>
                                    </div>
                                    <div class="ans ml-2">
                                        <label class="radio"> <input type="radio" name="ansfour" value="Chicken"> <span>Chicken</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-1">
                            <div class="card-header">
                                <a class="card-link" data-toggle="collapse" href="#collapsefive">
                                    Question 5 :
                                </a>
                            </div>
                            <div id="collapsefive" class="collapse" data-parent="#accordion">
                                <div class="question bg-white p-3 border-bottom">
                                    <div class="d-flex flex-row align-items-center question-title">
                                        <h3 class="text-danger">Q.</h3>
                                        <h5 class="mt-1 ml-2"> Who is the king of the jungle ?</h5>
                                    </div>
                                    <div class="ans ml-2">
                                        <label class="radio"> <input type="radio" name="ansfive" value="Lion"> <span>Lion</span>
                                        </label>
                                    </div>
                                    <div class="ans ml-2">
                                        <label class="radio"> <input type="radio" name="ansfive" value="Tiger" required=""> <span>Tiger</span>
                                        </label>
                                    </div>
                                    <div class="ans ml-2">
                                        <label class="radio"> <input type="radio" name="ansfive" value="Whale"> <span>Whale</span>
                                        </label>
                                    </div>
                                    <div class="ans ml-2">
                                        <label class="radio"> <input type="radio" name="ansfive" value="Chicken"> <span>Chicken</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-2 mb-3">
                            <button type="submit" name="submit" class="btn btn-success">Submit Answer</button>
                        </div>
                    </form>

                </div>
                <!-- quiz section end -->
            </div>

            <div class="col-lg-4 col-md-5 col-12">
                <div class="mt-3 mb-3">
                    <div>
                        <h4>Other Courses</h4>
                    </div>
                    <div class="mb-2 text-center">
                        <div class="card" data-aos="zoom-in-up">
                            <img class="card-img-top" src="../images/colors.png" alt="Card image">
                            <div class="card-body">
                                <h4 class="card-title">Colours</h4>
                                <a href="colors.php" class="btn btn-primary">Enroll Course</a>
                            </div>
                        </div>
                        <div class="mb-2 text-center">
                            <div class="card" data-aos="zoom-in-up">
                                <img class="card-img-top" src="../images/english.png" alt="Card image">
                                <div class="card-body">
                                    <h4 class="card-title">English</h4>
                                    <a href="english.php" class="btn btn-primary">Enroll Course</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4 mb-2 text-center">
                        <a href="course.php" class="btn btn-primary">Enroll More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- math course section end -->
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
                                <li><a href="terms.html">Terms & Condition</a></li>
                                <li><a href="privacy.html">Privacy Policy</a></li>
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
