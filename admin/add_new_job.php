<?php 
session_start();
include('connection/db.php');

$login=$_SESSION['email'];
$job_title=$_POST['job_title'];
$Description=$_POST['Description'];
$country=$_POST['country'];
$state=$_POST['state'];
$city=$_POST['city'];
$keyword=$_POST['keyword'];
$category=$_POST['category'];

 $query= mysqli_query($conn,"insert into all_jobs(customer_email, job_title, des, country, state, city, keyword, category)values('$login','$job_title','$Description','$country','$state','$city','$keyword','$category')");

// var_dump($query);
 if($query){
    echo "Data has been successfully inserted";
 }
 else{
 	echo "Error occured, Please try again";
 }
 
?>