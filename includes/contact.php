<?php include_once('connection.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <!-- Bootstrap version 4/5 -->
    <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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
                        <a class="nav-link text-white" href="video.php">Video</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="signup.php">SignUP/login</a>
                    </li>
                    
                </ul>
            </div>
        </div>
    </nav>
    <!-- navbar end -->
    <div class="container contact-form">
        <div class="contact-image">
            <img src="https://image.ibb.co/kUagtU/rocket_contact.png" alt="rocket_contact" />
        </div>
        <?php 
            if(isset($_POST['submit'])){
                $name=$_POST['name'];
                $email=$_POST['email'];
                $phone=$_POST['number'];
                $message=$_POST['message'];
                $send="insert into contact(name,email,phone,message)values('$name','$email','$phone','$message')";
                $q=mysqli_query($con,$send);
                if($q){
                    $msz ='<div class="alert alert-success alert-dismissible text-center mt-3">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                     <strong>Success ! Message Successfully Sent</strong>
                 </div> ';
                }
                else{
                    $msz ='<div class="alert alert-danger alert-dismissible text-center mt-3">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                     <strong>Failed ! Message Not Successfully Sent</strong>
                 </div> ';
                }
            }
            ?>
        <?php 
                if(isset($msz)){
                    ?>
        <?php echo $msz; ?>
        <?php
                }
                ?>
        <form method="post" accept-charset="utf-8">
            <h3>Drop Us a Message</h3>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" name="name" class="form-control" placeholder="Your Name *" required="" />
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" class="form-control" placeholder="Your Email *" required="" />
                    </div>
                    <div class="form-group">
                        <input type="text" name="number" class="form-control" placeholder="Your Phone Number *" required="" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <textarea name="message" class="form-control" placeholder="Your Message *" required="" style="width: 100%; height: 150px;"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="submit" class="btnContact" value="Send Message" />
                    </div>
                </div>
            </div>
        </form>
    </div>

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
