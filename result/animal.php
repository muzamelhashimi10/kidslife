<?php include_once('../includes/connection.php') ?>
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
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
    <!-- Jquery cdn Links for animation-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>

<body>
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        body {
            background: #c7ecee;
        }

        #field {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .jumbotron h1,
        h3 {
            
            font-family: 'Dancing Script', cursive;
        }

    </style>

    <div class="container mt-5">
    <?php
                    $one = $_POST['ansone'];
                    $two = $_POST['anstwo'];
                    $three = $_POST['ansthree'];
                    $four = $_POST['ansfour'];
                    $five = $_POST['ansfive'];
                    
                    $count=0;
                    
                    if($one=="Yellow"){$count++;}
                    if($two=="Blue Whale"){$count++;}
                    if($three=="Puppy"){$count++;}
                    if($four=="Fish"){$count++;}
                    if($five=="Lion"){$count++;}
                    
                    $Got = "$count/5";
                    if($Got>2){
                        $success='<div class="alert alert-success alert-dismissible text-center mt-5">
                        <strong> <h3>Congratulatoins !  You are successfully passed the examination </h3></strong>
                    </div>';
                    }
                    else{
                        $failed='<div class="alert alert-danger alert-dismissible text-center mt-5">
                        <strong> <h3>Failed !  You are not pass the examination </h3></strong>
                    </div>';
                    }
                    
    ?>
        <div class="jumbotron text-center">
            <h1>Kids Education</h1>
            <h3>Animal Course Result</h3>
            <?php 
            if(isset($success)){
                ?>
                <?php echo $success; ?>
                <?php
            }
            ?>
                        <?php 
            if(isset($failed)){
                ?>
                <?php echo $failed; ?>
                <?php
            }
            ?>
            <div class="alert alert-success alert-dismissible text-center mt-5">
                <strong><h3>You have <?php echo $Got; ?></h3></strong>
            </div>
            <a href="../includes/animals.php"><button type="button" class="btn btn-danger mt-3">Back To Course Page</button></a>
        </div>

    </div>

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
            offset: 300,
            duration: 2000,
        });

    </script>
</body>

</html>