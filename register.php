<?php
include('connect.php');

$name=$_POST['firstName'];
$lname=$_POST['lastName'];
$email=$_POST['email'];
$country=$_POST['country'];
$dob=$_POST['dob'];
$gend=$_POST['gender'];
$sql="INSERT INTO `student`( `firstname`, `lastname`, `email`, `country`, `dob`, `gender`) VALUES ('$name','$lname','$email','$country','$dob','$gend')";
if(mysqli_query($conn,$sql))
{
    header("location:select.php");
}
?>