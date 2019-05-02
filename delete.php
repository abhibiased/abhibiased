<?php
include 'dbcon.php'; 
$id=$_GET['ID'];
$qry="delete from user where ID=$id";
mysqli_query($con,$qry);
header('location:regdetails.php');
?>