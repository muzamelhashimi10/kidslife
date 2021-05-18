<?php include_once('connection.php') ?>
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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
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
                    <a class="nav-link text-white" href="signup.php">SignUP/login</a>
                </li>
              </ul>
            </div>
        </div>
    </nav>
    <!-- navbar end -->
    <br><br><br>
    <div class="container mt-5">
        <h2>Registration Form</h2>
        <p>Already registerd ? <code><a href="login.php"><button type="button" class="btn btn-warning"> Login Here</button></a></code> to get your courses.</p>
        <?php 
        if(isset($_REQUEST['submit'])){
            $kidimage=$_FILES['kidsphoto'];
            $kidname=$kidimage['name'];
            $kidpath=$kidimage['tmp_name'];
            $kiderror=$kidimage['error'];
            if($kiderror==0){
                $kiddest = '../images/'.$kidname;
                move_uploaded_file($kidpath,$kiddest);
            }
            else{
                $msz ='<div class="alert alert-warning alert-dismissible text-center mt-5">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                 <strong>Warning! Kids Image not inserted </strong> ?
             </div> ';
            }
            $kfname=$_POST['kfname'];
            $klname=$_POST['klname'];
            $kbdate=$_POST['kbdate'];
            $premember=$_POST['premember'];
            $parentphoto=$_FILES['parentphoto'];
            $parentname=$parentphoto['name'];
            $parentpath=$parentphoto['tmp_name'];
            $parenterror=$parentphoto['error'];
            if($parenterror==0){
                $parentdesti='../images/'.$parentname;
                move_uploaded_file($parentpath,$parentdesti);
            }
            else{
                $msz ='<div class="alert alert-warning alert-dismissible text-center mt-5">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                 <strong>Warning! Parents Image not inserted </strong> ?
             </div> ';
            }
            $pfname=$_POST['pfname'];
            $plname=$_POST['plname'];
            $paddress=$_POST['paddress'];
            $pcity=$_POST['pcity'];
            $pzip=$_POST['pzip'];
            $pstate=$_POST['pstate'];
            $pcountry=$_POST['pcountry'];
            $email=$_POST['email'];
            $pass=$_POST['password'];
            $tphone=$_POST['tnumber'];
            $pbdate=$_POST['pbdate'];
            $insert="insert into registration(kphoto,kfname,klname,kdate,confirmkid,pphoto,pfname,plname,address,city,zip,state,country,
            email,pass,phone,pdate)values('$kiddest','$kfname','$klname','$kbdate','$premember','$parentdesti','$pfname','$plname','$paddress','$pcity','$pzip','$pstate','$pcountry','$email','$pass','$tphone','$pbdate')";
            $q =mysqli_query($con,$insert);
            if($q==true){
                $success ='<div class="alert alert-success alert-dismissible text-center mt-3">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                 <strong>Hurrah ! Registration Complete </strong> ?
             </div> ';
            }
            else{
                $failed ='<div class="alert alert-danger alert-dismissible text-center mt-3">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                 <strong>Bad Luck ! Registration Failed . Please try again later </strong> ?
             </div> ';
            }

        }
        ?>
        <?php
        if(isset($success)){
            ?>
            <?php echo $success ?>
            <?php
        }
        ?>
        <?php
        if(isset($failed)){
            ?>
            <?php echo $failed ?>
            <?php
        }
        ?>
        <?php
        if(isset($msz)){
            ?>
            <?php echo $msz ?>
            <?php
        }
        ?>
        <form action="" method="POST" enctype="multipart/form-data" class="was-validated">
            <div class="row mt-2 mb-3">
                <div class="col-lg-6 col-md-6 col-12 mb-2">
                    <div class=" mt-2 mb-2">
                        <h4 class="text-danger"><Strong>kid's Corner</Strong></h4>
                    </div>
                    <div class="form-group">
                        <label for="uname">Kid Picture:</label>
                        <input type="file" class="form-control" id="uname" placeholder="uplaod kids photo" name="kidsphoto" required>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="fname">First Name:</label>
                                <input type="text" class="form-control" id="uname" placeholder="Kid Enter firstname" name="kfname" required>
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback">Please fill out this field.</div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="lname">Last Name</label>
                                <input type="text" class="form-control" id="pwd" placeholder="Kid Last Name" name="klname" required>
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback">Please fill out this field.</div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="birthday">Birthday:</label>
                                <input type="date" class="form-control" id="uname" placeholder="Enter Birth Date" name="kbdate" required>
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback">Please fill out this field.</div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group form-check">
                        <label class="form-check-label">
                          <input class="form-check-input" type="checkbox" name="premember" required>  I CONFIRM I AM THE PARENT AND REGISTERING FOR THE KID.
                          <div class="valid-feedback">Valid.</div>
                          <div class="invalid-feedback">Check this checkbox to continue.</div>
                        </label>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12 mb-2">
                    <div class=" mt-2 mb-2">
                        <h4 class="text-danger"><Strong>Parents Corner</Strong></h4>
                    </div>
                    <div class="form-group">
                        <label for="pphoto">Parents Picture:</label>
                        <input type="file" class="form-control" id="uname" placeholder="uplaod Parent photo" name="parentphoto" required>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="fname">First Name:</label>
                                <input type="text" class="form-control" id="uname" placeholder="Enter Parent Firstname" name="pfname" required>
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback">Please fill out this field.</div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="lname">Last Name</label>
                                <input type="text" class="form-control" id="pwd" placeholder="Parent Last Name" name="plname" required>
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback">Please fill out this field.</div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="address">Address:</label>
                                <input type="text" class="form-control" id="uname" placeholder="Enter Address" name="paddress" required>
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback">Please fill out this field.</div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="city">City:</label>
                                <input type="text" class="form-control" id="pwd" placeholder="Enter City" name="pcity" required>
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback">Please fill out this field.</div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="zip">Zip:</label>
                                <input type="text" class="form-control" id="pwd" placeholder="Enter Zip Code" name="pzip" required>
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback">Please fill out this field.</div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="state">State:</label>
                                <input type="text" class="form-control" id="uname" placeholder="Enter State" name="pstate" required>
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback">Please fill out this field.</div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="country">Country:</label>
                                <input type="text" class="form-control" id="pwd" placeholder="Enter country" name="pcountry" required>
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback">Please fill out this field.</div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="Email">Email:</label>
                                <input type="email" class="form-control" id="uname" placeholder="Enter Email" name="email" required>
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback">Please fill out this field.</div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="Repeat Email">Repeat Email:</label>
                                <input type="email" class="form-control" id="uname" placeholder="Repeat Email" name="remail" required>
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback">Please fill out this field.</div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="password">Password:</label>
                                <input type="password" class="form-control" id="uname" placeholder="Enter Password" name="password" required>
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback">Please fill out this field.</div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="pwd">Repeat Password:</label>
                                <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="rpassword" required>
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback">Please fill out this field.</div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="phone">Telephone Number:</label>
                                <input type="number" class="form-control" id="pwd" placeholder="Enter Phone" name="tnumber" required>
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback">Please fill out this field.</div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="birthday">Birthday:</label>
                                <input type="date" class="form-control" id="uname" placeholder="Enter Birth Date" name="pbdate" required>
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback">Please fill out this field.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <div class="form-group form-check">
                    <label class="form-check-label">
                      <input class="form-check-input" type="checkbox" name="remember" required> I agree with Tearms and Conditions
                      <div class="valid-feedback">Valid.</div>
                      <div class="invalid-feedback">Check this checkbox to continue.</div>
                    </label>
                </div>
                <div class="mb-2">
                    <input type="submit" name="submit" class="btn btn-info" value="Register">
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