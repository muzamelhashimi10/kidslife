<?php
include_once ('includes/connection.php');
include_once ('includes/navbar.php');
?>
<!-- hero start -->
<div id="carouselExampleIndicators" class="carousel slide mb-3" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="images/1.jpg" alt="First slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="images/two.jpg" alt="Second slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="images/2.jpg" alt="Third slide">
        </div>
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
<!-- hero end -->

<!-- main section start -->
<div class="container mt-4 mb-3">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-12">
            <img src="images/one.png" alt="" class="img-fluid" data-aos="fade-right">
        </div>
        <div class="col-lg-6 col-md-6 col-12" data-aos="fade-left">
            <h1 class=" text-capitalize text-info ">Education Matters !</h1>
            <p>Education gives us a knowledge of the world around us and changes it into something better.
                It develops in us a perspective of looking at life. It helps us build opinions and have points
                of view on things in life. Maintaining mental sharpness is beneficial to your overall health.
                With a good education, you could also become well-informed about healthy living, making you more
                likely to live longer. An education also exposes you to new people and experiences which can have a
                positive impact on your life.We believe education is the most important tool you can receive,
                that can bring you most success in society today.
            <div>
                <a href="includes/about.php"><button class="btn btn-secondary">Know More</button></a>
            </div>
            </p>
        </div>
    </div>
</div>
<!-- main section end -->


<!-- course section start -->
<div class="container mt-2 mb-4 m-auto" id="course">
    <h2 class=" text-center text-info mt-5 mb-2" data-aos="fade-in">What we offer ?</h2>
    <hr class="w-25 mx-auto pb-5">
    <div class="row text-center">
        <div class="extra-div col-lg-4 col-md-4 col-12 mt-2 mb-3" data-aos="zoom-in-up">
            <a href="includes/login.php" title=""><i class="fas fa-3x fa-calculator text-primary"></i></a>
            <h2>Mathematics</h2>
            <p>Mathematics is the study of numbers, shapes and patterns.how things can be counted.
            </p>
            <a href="includes/login.php" class="btn btn-primary">Enroll Now</a>
        </div>
        <div class="extra-div col-lg-4 col-md-4 col-12 mt-2 mb-3" data-aos="zoom-in-up">
            <a href="includes/login.php" title=""><i class="fas fa-3x fa-language text-success"></i></a>
            <h2>English</h2>
            <p>Learning English is important for socialising and entertainment as well as work!</p>
            <a href="includes/login.php" class="btn btn-success">Enroll Now</a>
        </div>
        <div class="extra-div col-lg-4 col-md-4 col-12 mt-2 mb-3" data-aos="zoom-in-up">
            <a href="includes/login.php" title=""><i class="fas fa-3x fa-sort-alpha-down text-dark"></i></a>
            <h2>Alphabates</h2>
            <p>letter is a segmental symbol of a phonemic writing system. The inventory of all letters forms the alphabet.</p>
            <a href="includes/login.php" class="btn btn-dark">Enroll Now</a>
        </div>
        <div class="extra-div col-lg-4 col-md-4 col-12 mt-4 mb-3" data-aos="zoom-in-up">
            <a href="login.php" title=""><i class="fas fa-3x fa-dove text-warning"></i></a>
            <h2>Animals</h2>
            <p>Animal is a living creature such as a dog, lion, or rabbit, rather than a bird, fish, insect, or human being.</p>
            <a href="includes/login.php" class="btn btn-warning">Enroll Now</a>
        </div>
        <div class="extra-div col-lg-4 col-md-4 col-12 mt-4 mb-3" data-aos="zoom-in-up">
            <a href="includes/login.php" title=""><i class="fas fa-3x fa-palette text-danger"></i></a>
            <h2>Colours</h2>
            <p>Colour is the element of art that involves light.It is produced when
                light waves strike an object and are reflected into our eyes.</p>
            <a href="includes/login.php" class="btn btn-danger">Enroll Now</a>
        </div>
        <div class="extra-div col-lg-4 col-md-4 col-12 mt-4 mb-3" data-aos="zoom-in-up">
            <a href="includes/login.php" title=""><i class="fas fa-3x fa-video text-info"></i></a>
            <h2>Videos</h2>
            <p>Some might call it a how-to. Others might use tutorial. And some people refer to them as a training video.</p>
            <a href="includes/login.php" class="btn btn-info">Enroll Now</a>
        </div>
    </div>

</div>
<!-- course section end -->
<!-- testimonial section start -->
<section class="container mt-5 mb-4">
    <h2 class=" text-center text-info mt-5">Testimonials</h2>
    <hr class="w-25 mx-auto pb-3">
        <div id="carouselExampleIndicators" class="carousel slide mt-2 mb-3" data-ride="carousel" style="background:#ff699e3a">
        <div class="carousel-inner text-center">
          <div class="carousel-item active mt-3">
            <h5>" The best online educaiton platform for begining to your child "</h5>            
            <img src="images/1.jpg" class="rounded-circle" alt="First slide" width="150" height="150"> 
            <p><b>"Boris Eto ( ceo )"</b></p>
            
          </div>
          <div class="carousel-item mt-3">
            <h5>" Me invested on the best deal always , so you gonna trust the platform "</h5>             
            <img src="images/1.jpg" class="rounded-circle" alt="Second slide" width="150" height="150"> 
            <p><b>"Collins Van ( investor )"</b></p>
          </div>
          <div class="carousel-item mt-3">
            <h5>" If education is a backbone of a nation then start from here  "</h5>             
            <img src="images/1.jpg" class="rounded-circle" alt="Third slide" width="150" height="150"> 
            <p><b>"Fergus A ( education teacher ) "</b></p>     
          </div>
                    <div class="carousel-item mt-3">
            <h5>" Human interaction with technologies is important , so start with begining "</h5>             
            <img src="images/1.jpg" class="rounded-circle" alt="Fourth slide" width="150" height="150"> 
            <p><b>"Muzammel H ( human resource ) "</b></p>     
          </div>
                    <div class="carousel-item mt-3">
            <h5>"Flow with a modern workd , start basic concept of knowledge from now"</h5>            
            <img src="images/1.jpg" class="rounded-circle" alt="Fifth slide" width="150" height="150"> 
            <p><b>"Ramson N ( sales )"</b></p>     
          </div>
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
</section>
<!-- testimonial section end -->

<?php include_once ('includes/footer.php') ?>
