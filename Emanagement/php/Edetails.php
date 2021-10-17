<?php

session_start();
if(!isset($_SESSION['manager'])){
header('location:../login.php');
}
?>





<?php
$connect = mysqli_connect("localhost", "root", "", "employees_management");
$query = "SELECT * FROM  employee_details ORDER BY CreateDate DESC  ";
$result = mysqli_query($connect, $query);
?>
<html>  
 <head>  
          <title>employees</title>  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>            
    <script src="jquery.tabledit.min.js"></script>
    </head>  
    <body>  
  <div class="container">  
   <br />  
   <br />  
   <br />  
            <div class="table-responsive">  
			<a href="home.php"><p style="color:#0000FF; font-family:Verdana, Arial, Helvetica, sans-serif">BACK</p></a>
    <h3 align="center">EMPLOYEE'S DETAILS</h3><br />  
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
     </thead>
     <tbody>
     <?php
     while($row = mysqli_fetch_array($result))
     {?> <?php
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
      </tr>
      ';
     }
     ?>
     </tbody>
    </table>
   </div>  
  </div>  
 </body> 
</html>  
<script>  
$(document).ready(function(){  
     $('#editable_table').Tabledit({
      url:'modify.php',
      columns:{
       identifier:[0, "National_ID"],
       editable:[[2, 'Name'], [3, 'Phone_Number'],[4, 'Email'],[5, 'Date_of_Birth'],[6, 'Status'],[7, 'Position']]
      },
      restoreButton:false,
      onSuccess:function(data, textStatus, jqXHR)
      {
       if(data.action == 'delete')
       {
        $('#'+data.id).remove();
       }
      }
     });
 
});  
 </script>

