<?php
session_start();
include_once("connections.php");
if(isset($_POST['submit'])) {
$names=$_POST['names'];
$nid=$_POST['nid'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$bdate=$_POST['bdate'];
$code = rand(time(), 1000);
$status=$_POST['status'];
$position=$_POST['position'];


   $today=date("d-m-Y");

   $bdate1=new DateTime($bdate);
   $today1=new DateTime($today);

   $interval = $bdate1->diff($today1);

   $myage= $interval->y; 

  if ($myage >= 18){ 
     $reg=mysqli_query($conn,"INSERT INTO employee_details (Name,National_ID,code,Phone_Number,Email,Date_of_Birth,Status,Position) VALUES ('$names','$nid','EMP{$code}','$phone','$email','$bdate','$status','$position')");
header('location:Edetails.php');} 
  else{ 
     header('location:Invalidage.php');}


}
?>
