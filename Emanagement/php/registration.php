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
$status="ACTIVE";
$position="MANAGER";
$password=$_POST['password'];
$Encryptpassword=md5($password);





$reg=mysqli_query($conn,"INSERT INTO employee_details (Name,National_ID,code,Phone_Number,Email,Date_of_Birth,Status,Position) VALUES ('$names','$nid','EMP{$code}','$phone','$email','$bdate','$status','$position')");
$Maccount=mysqli_query($conn,"INSERT INTO manageraccount (email,password) VALUES ('$email','{$Encryptpassword}' )");
  
 $sel=mysqli_query($conn,"SELECT * from employee_details where Email='$email'");
 
  if(mysqli_num_rows($sel)>0){
  $result = mysqli_fetch_assoc($sel);
  $_SESSION['manager']=$result['code'];
 header('location:home.php');
}
else{
echo "something went wrong";
}}
?>
