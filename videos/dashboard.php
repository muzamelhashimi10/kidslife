<?php
include_once('../includes/connection.php');
session_start();
if (!isset($_SESSION['name'])) {
	header("location:login.php");
}
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css" integrity="sha384-DhY6onE6f3zzKbjUPRc2hOzGAdEf4/Dz+WJwBvEYL/lkkIsI3ihufq9hk9K4lVoK" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <title>Dashboard</title>
</head>

<body class="bg-right bg-dark">
    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-md-10 col-11 mx-auto">
                <nav aria-label="breadcrumb" class="mb-3">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">User</a></li>
                        <li class="breadcrumb-item active" aria-current="page">profile</li>
                        <li class="breadcrumb-item active" aria-current="page"> Welcome <?= $_SESSION['name']; ?> </li>
                        <li class="breadcrumb-item active" aria-current="page"><a href="logout.php">Logout</a></li>
                    </ol>
                </nav>
                <div class="row">
                    <div class="col-lg-3 col-md-4 d-md-block d-none">
                        <div class="card bg-common card-left">
                            <div class="card-body">
                                <nav class="nav flex-column">
                                    <a data-toggle="tab" class="nav-link active" aria-current="page" href="#profile"><i class="fas fa-user mr-1"></i> Profile</a>
                                    <a data-toggle="tab" class="nav-link" href="#animals"><i class="fas fa-user-cog mr-1"></i> Animal Lecture</a>
                                    <a data-toggle="tab" class="nav-link" href="#math"><i class="fas fa-user-cog mr-1"></i> Math Lecture</a>
                                    <a data-toggle="tab" class="nav-link" href="#alphabet"><i class="fas fa-user-cog mr-1"></i> Alphabet Lecture</a>
                                    <a data-toggle="tab" class="nav-link" href="#english"><i class="fas fa-user-cog mr-1"></i> English Lecture</a>
                                    <a data-toggle="tab" class="nav-link" href="#color"><i class="fas fa-user-cog mr-1"></i> Color Lecture</a>
                                    <a data-toggle="tab" class="nav-link" href="#contact"><i class="fas fa-id-badge mr-1"></i> Contact</a>

                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-8">
                        <div class="card">
                            <div class="card-header border-bottom mb-3 d-md-none">
                                <ul class="nav nav-tabs card-header-tabs nav-fill">
                                    <li class="nav-item">
                                        <a class="nav-link active" aria-current="page" href="#profile"><i class="fas fa-user mr-1"></i></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#animals">Animal</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#math">Math</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#alphabet">Alphabet</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#english">English</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#color">Color</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#contact">Contact</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-body tab-content border-0">
                                <div class="tab-pane active " id="profile">
                                    <h5>Edit Profile</h5>
                                    <hr width="100px">
                                    <?php
                                    $show="SELECT * from login";
                                    $query=mysqli_query($con,$show);
                                    $array=mysqli_fetch_array($query);
                                    if(isset($_POST['addadmin'])){
                                        $name=$_POST['name'];
                                        $email=$_POST['email'];
                                        $password=$_POST['password'];
                                        $addins="UPDATE login SET name='$name',email='$email',password='$password' WHERE 1";
                                        $q=mysqli_query($con,$addins);
                                    }
                                    ?>
                                    <form action="" method="post" enctype="multipart/form-data" accept-charset="utf-8">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Name </label>
                                            <input type="text" name="name" class="form-control" value="<?php echo $array['name']; ?>" id="exampleFormControlInput1" placeholder="name">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Email </label>
                                            <input type="text" name="email" class="form-control" value="<?php echo $array['email']; ?>" id="exampleFormControlInput1" placeholder="name@example.com">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputPassword1" class="form-label">Password </label>
                                            <input type="password" name="password" class="form-control" value="<?php echo $array['password']; ?>" id="exampleInputPassword1" placeholder="password">
                                        </div>
                                        <input type="submit" name="addadmin" class="btn btn-outline-info" value="UPDATE">
                                    </form>
                                </div>

                                <div class="tab-pane" id="animals">
                                    <h5>Animal Lecture</h5>
                                    <hr width="100px">
                                    <?php 
                                        if(isset($_POST['addvideo'])){
                                        $lec=$_POST['animal'];
                                        $a="insert into animallecture(video)values('$lec')";
                                        $q=mysqli_query($con,$a);
                                            if($q){
                                                //header("location:dashboard.php?Added");
                                                ?>
                                    <script>
                                        window.location.href = "dashboard.php?added";

                                    </script>
                                    <?php
                                            }
                                            else{
                                                ?>
                                    <script>
                                        window.location.href = "dashboard.php?Notadded";

                                    </script>
                                    <?php
                                            }
                                        }
                                    ?>
                                    <form action="" method="post" enctype="multipart/form-data" accept-charset="utf-8">

                                        <div class="row mb-3">
                                            <div class="col">
                                                <label for="heading" class="form-label">Video link</label>
                                                <input type="text" name="animal" class="form-control" placeholder="Heading" aria-label="Heading">
                                            </div>
                                        </div>
                                        <input type="submit" name="addvideo" class="btn btn-outline-primary" value="Add Lecture">
                                    </form>
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">SL</th>
                                                <th scope="col">Video</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                            $s="select * from animallecture";
                                            $q=mysqli_query($con,$s);
                                            while($show=mysqli_fetch_array($q)){
                                                ?>
                                            <tr>
                                                <th scope="row"><?= $show['id'];?></th>
                                                <td width="500px" height="10px"><?= $show['video'];?></td>
                                                <td><a href="delete.php?delanimal=<?php echo $show['id']; ?>">Delete</a></td>
                                            </tr>
                                            <?php
                                            }
                                            ?>
                                            <tr>
                                        </tbody>
                                    </table>
                                </div>

                                <div class="tab-pane" id="math">
                                    <h5>Math Lecture</h5>
                                    <hr width="100px">
                                    <?php 
                                        if(isset($_POST['mathvideo'])){
                                        $mathlec=$_POST['mathematics'];
                                        $a="insert into mathlecture(video)values('$mathlec')";
                                        $q=mysqli_query($con,$a);
                                            if($q){
                                                //header("location:dashboard.php?Added");
                                                ?>
                                    <script>
                                        window.location.href = "dashboard.php?added";

                                    </script>
                                    <?php
                                            }
                                            else{
                                                ?>
                                    <script>
                                        window.location.href = "dashboard.php?Notadded";

                                    </script>
                                    <?php
                                            }
                                        }
                                    ?>
                                    <form action="" method="post" enctype="multipart/form-data" accept-charset="utf-8">

                                        <div class="row mb-3">
                                            <div class="col">
                                                <label for="heading" class="form-label">Video link</label>
                                                <input type="text" name="mathematics" class="form-control" placeholder="Heading" aria-label="Heading">
                                            </div>
                                        </div>
                                        <input type="submit" name="mathvideo" class="btn btn-outline-primary" value="Add Lecture">
                                    </form>
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">SL</th>
                                                <th scope="col">Video</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                            $s="select * from mathlecture";
                                            $q=mysqli_query($con,$s);
                                            while($show=mysqli_fetch_array($q)){
                                                ?>
                                            <tr>
                                                <th scope="row"><?= $show['id'];?></th>
                                                <td width="500px" height="10px"><?= $show['video'];?></td>
                                                <td><a href="delete.php?delmath=<?php echo $show['id']; ?>">Delete</a></td>
                                            </tr>
                                            <?php
                                            }
                                            ?>
                                            <tr>
                                        </tbody>
                                    </table>
                                </div>

                                <div class="tab-pane" id="alphabet">
                                    <h5>Alphabet Lecture</h5>
                                    <hr width="100px">
                                    <?php 
                                        if(isset($_POST['alphavideo'])){
                                        $alphalec=$_POST['alpha'];
                                        $a="insert into alphabatelecture(video)values('$alphalec')";
                                        $q=mysqli_query($con,$a);
                                            if($q){
                                                //header("location:dashboard.php?Added");
                                                ?>
                                    <script>
                                        window.location.href = "dashboard.php?added";

                                    </script>
                                    <?php
                                            }
                                            else{
                                                ?>
                                    <script>
                                        window.location.href = "dashboard.php?Notadded";

                                    </script>
                                    <?php
                                            }
                                        }
                                    ?>
                                    <form action="" method="post" enctype="multipart/form-data" accept-charset="utf-8">

                                        <div class="row mb-3">
                                            <div class="col">
                                                <label for="heading" class="form-label">Video link</label>
                                                <input type="text" name="alpha" class="form-control" placeholder="Heading" aria-label="Heading">
                                            </div>
                                        </div>
                                        <input type="submit" name="alphavideo" class="btn btn-outline-primary" value="Add Lecture">
                                    </form>
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">SL</th>
                                                <th scope="col">Video</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                            $s="select * from alphabatelecture";
                                            $q=mysqli_query($con,$s);
                                            while($show=mysqli_fetch_array($q)){
                                                ?>
                                            <tr>
                                                <th scope="row"><?= $show['id'];?></th>
                                                <td width="500px" height="10px"><?= $show['video'];?></td>
                                                <td><a href="delete.php?delalpha=<?php echo $show['id']; ?>">Delete</a></td>
                                            </tr>
                                            <?php
                                            }
                                            ?>
                                            <tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="tab-pane" id="english">
                                    <h5>English Lecture</h5>
                                    <hr width="100px">
                                    <?php 
                                        if(isset($_POST['englishvideo'])){
                                        $englec=$_POST['english'];
                                        $a="insert into englishlecture(video)values('$englec')";
                                        $q=mysqli_query($con,$a);
                                            if($q){
                                                //header("location:dashboard.php?Added");
                                                ?>
                                    <script>
                                        window.location.href = "dashboard.php?added";

                                    </script>
                                    <?php
                                            }
                                            else{
                                                ?>
                                    <script>
                                        window.location.href = "dashboard.php?Notadded";

                                    </script>
                                    <?php
                                            }
                                        }
                                    ?>
                                    <form action="" method="post" enctype="multipart/form-data" accept-charset="utf-8">

                                        <div class="row mb-3">
                                            <div class="col">
                                                <label for="heading" class="form-label">Video link</label>
                                                <input type="text" name="english" class="form-control" placeholder="Heading" aria-label="Heading">
                                            </div>
                                        </div>
                                        <input type="submit" name="englishvideo" class="btn btn-outline-primary" value="Add Lecture">
                                    </form>
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">SL</th>
                                                <th scope="col">Video</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                            $s="select * from englishlecture";
                                            $q=mysqli_query($con,$s);
                                            while($show=mysqli_fetch_array($q)){
                                                ?>
                                            <tr>
                                                <th scope="row"><?= $show['id'];?></th>
                                                <td width="500px" height="10px"><?= $show['video'];?></td>
                                                <td><a href="delete.php?delenglish=<?php echo $show['id']; ?>">Delete</a></td>
                                            </tr>
                                            <?php
                                            }
                                            ?>
                                            <tr>
                                        </tbody>
                                    </table>
                                </div>


                                <div class="tab-pane" id="color">
                                    <h5>Color Lecture</h5>
                                    <hr width="100px">
                                    <?php 
                                        if(isset($_POST['colorvideo'])){
                                        $colorlec=$_POST['color'];
                                        $a="insert into colorlecture(video)values('$colorlec')";
                                        $q=mysqli_query($con,$a);
                                            if($q){
                                                //header("location:dashboard.php?Added");
                                                ?>
                                    <script>
                                        window.location.href = "dashboard.php?added";

                                    </script>
                                    <?php
                                            }
                                            else{
                                                ?>
                                    <script>
                                        window.location.href = "dashboard.php?Notadded";

                                    </script>
                                    <?php
                                            }
                                        }
                                    ?>
                                    <form action="" method="post" enctype="multipart/form-data" accept-charset="utf-8">

                                        <div class="row mb-3">
                                            <div class="col">
                                                <label for="heading" class="form-label">Video link</label>
                                                <input type="text" name="color" class="form-control" placeholder="Heading" aria-label="Heading">
                                            </div>
                                        </div>
                                        <input type="submit" name="colorvideo" class="btn btn-outline-primary" value="Add Lecture">
                                    </form>
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">SL</th>
                                                <th scope="col">Video</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                            $s="select * from colorlecture";
                                            $q=mysqli_query($con,$s);
                                            while($show=mysqli_fetch_array($q)){
                                                ?>
                                            <tr>
                                                <th scope="row"><?= $show['id'];?></th>
                                                <td width="500px" height="10px"><?= $show['video'];?></td>
                                                <td><a href="delete.php?delcolor=<?php echo $show['id']; ?>">Delete</a></td>
                                            </tr>
                                            <?php
                                            }
                                            ?>
                                            <tr>
                                        </tbody>
                                    </table>
                                </div>

                                <div class="tab-pane" id="contact">
                                    <h5>Edit Contact</h5>
                                    <hr width="100px">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">SL</th>
                                                <th scope="col">Name</th>
                                                <th scope="col">Email</th>
                                                <th scope="col">Phone</th>
                                                <th scope="col">Message</th>
                                                <th scope="col">Date</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                            $s="select * from contact";
                                            $q=mysqli_query($con,$s);
                                            while($show=mysqli_fetch_array($q)){
                                                ?>
                                            <tr>
                                                <th scope="row"><?= $show['id'];?></th>
                                                <td><?= $show['name'];?></td>
                                                <td><?= $show['email'];?></td>
                                                <td><?= $show['phone'];?></td>
                                                <td><?= $show['message'];?></td>
                                                <td><?= $show['date'];?></td>
                                            </tr>
                                                <?php
                                            }
                                            ?>
                                            <tr>
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: Bootstrap Bundle with Popper.js -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.bundle.min.js" integrity="sha384-BOsAfwzjNJHrJ8cZidOg56tcQWfp6y72vEJ8xQ9w6Quywb24iOsW913URv1IS4GD" crossorigin="anonymous"></script>
</body>

</html>
