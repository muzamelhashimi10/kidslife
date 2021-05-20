<!--Animal Courses delete  -->
<?php
require("../includes/connection.php");
$idanimal=$_GET['delanimal'];
$delete="DELETE FROM animallecture WHERE id=$idanimal";
$query=mysqli_query($con,$delete);
if ($query) {
	header("location:dashboard.php?Deleted");
}
else{
	header("location:dashboard.php?Not Deleted");
}
?>
<!--Math Courses delete  -->
<?php
require("../includes/connection.php");
$idmath=$_GET['delmath'];
$delete="DELETE FROM mathlecture WHERE id=$idmath";
$query=mysqli_query($con,$delete);
if ($query) {
	header("location:dashboard.php?Deleted");
}
else{
	header("location:dashboard.php?Not Deleted");
}
?>


<!--Alphabet Courses delete  -->
<?php
require("../includes/connection.php");
$idalpha=$_GET['delalpha'];
$delete="DELETE FROM alphabatelecture WHERE id=$idalpha";
$query=mysqli_query($con,$delete);
if ($query) {
	header("location:dashboard.php?Deleted");
}
else{
	header("location:dashboard.php?Not Deleted");
}
?>


<!--English Courses delete  -->
<?php
require("../includes/connection.php");
$idenglish=$_GET['delenglish'];
$delete="DELETE FROM englishlecture WHERE id=$idenglish";
$query=mysqli_query($con,$delete);
if ($query) {
	header("location:dashboard.php?Deleted");
}
else{
	header("location:dashboard.php?Not Deleted");
}
?>


<!--Color Courses delete  -->
<?php
require("../includes/connection.php");
$idcolor=$_GET['delcolor'];
$delete="DELETE FROM colorlecture WHERE id=$idcolor";
$query=mysqli_query($con,$delete);
if ($query) {
	header("location:dashboard.php?Deleted");
}
else{
	header("location:dashboard.php?Not Deleted");
}
?>
