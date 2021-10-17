<?php

session_start();
if(!isset($_SESSION['manager'])){
header('location:../login.php');
}
?>
 
 
 
 
 
 
 
 
 
 
 
 
 
 <?php
$connect = mysqli_connect("localhost", "root", "", "employees_management");
if(isset($_POST['submit'])) {
$search=$_POST['search'];

$query= "SELECT * FROM employee_details WHERE (Name LIKE '%{$search}%' OR National_ID LIKE '%{$search}%' OR code LIKE '%{$search}%' OR Phone_Number LIKE '%{$search}%' OR Email LIKE '%{$search}%') ";
$result = mysqli_query($connect, $query);
$num=mysqli_num_rows($result);
}
?>
 
 <html>
 <head>  
          <title>employees</title>  
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />             
    </head>  
    <body>  
  <div class="container">  
   <br />  
   <br />  
   <br />  
            <div class="table-responsive"> 
			<a href="home.php"><p style="color:#0000FF; font-family:Verdana, Arial, Helvetica, sans-serif">BACK</p></a>
    <h3 align="center">EMPLOYEE'S DETAILS </h3><br />  
    <table id="editable_table" class="table table-bordered table-striped">
     <thead>
      <tr>
       <th>National_ID</th>
       <th>code</th>
	   <th>Names</th>
	   <th>Phone_Number</th>
       <th>Email</th>
       <th>Date_of_Birth</th>
	   <th>Status</th>
       <th>	Position</th>
       <th>Date_Joined</th>
      </tr>
	 <?php
	if($num>0){
     while($row = mysqli_fetch_array($result)){?> <?php
	 if (($row['Status'])=="ACTIVE"){
	 $status="INACTIVE";
	 }
	  else{
	 $status="ACTIVE";
	 }
	 ?><?php
	 if(($row['Position'])=="MANAGER"){
	 $position1="DEVELOPER";
	 $position2="DESIGNER";
	 $position3="TESTER";
	 $position4="DEVOPS";
	 }
	 else if(($row['Position'])=="DEVELOPER"){
	 $position1="MANAGER";
	 $position2="DESIGNER";
	 $position3="TESTER";
	 $position4="DEVOPS";
	 }
	 else if(($row['Position'])=="DESIGNER"){
	 $position1="DEVELOPER";
	 $position2="MANAGER";
	 $position3="TESTER";
	 $position4="DEVOPS";
	 }
	 else if(($row['Position'])=="TESTER"){
	 $position1="DEVELOPER";
	 $position2="MANAGER";
	 $position3="DESIGNER";
	 $position4="DEVOPS";
	 }
	 else if(($row['Position'])=="DEVOPS"){
	 $position1="DEVELOPER";
	 $position2="MANAGER";
	 $position3="DESIGNER";
	 $position4="TESTER";
	 }
      echo '
      <tr>
       <td>'.$row["National_ID"].'</td>
       <td>'.$row["code"].'</td>
	   <td>'.$row["Name"].'</td>
      <td>'.$row["Phone_Number"].'</td>
       <td>'.$row["Email"].'</td>
       <td>'.$row["Date_of_Birth"].'</td>
	   	<td>'.$row["Status"].'</td>
       <td>'.$row["Position"].'</td>
       <td>'.$row["CreateDate"].'</td>
      </tr>';
	  }}
	 else{
	 echo"No Employee found";
	 }
     ?>
     </tbody>
    </table>
	</form>
   </div>  
  </div>  
 </body> 
</html>  