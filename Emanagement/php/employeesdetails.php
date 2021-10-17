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
    <h3 align="center">EMPLOYEE'S DETAILS</h3><br />  
    <table id="editable_table" class="table table-bordered table-striped">
     <thead>
      <tr>
	   <th>Names</th>
       <th>National_ID</th>
       <th>code</th>
	   <th>Phone_Number</th>
       <th>Email</th>
       <th>Date_of_Birth</th>
	   <th>code</th>
	   <th>Status</th>
       <th>	Position</th>
       <th>Date_Joined</th>
      </tr>
     </thead>
     <tbody>
     <?php
     while($row = mysqli_fetch_array($result))
     {
      echo '
      <tr>
	    <td>'.$row["Name"].'</td>
       <td>'.$row["National_ID"].'</td>
       <td>'.$row["code"].'</td>
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
 <p align="center"><a href="controlcenter.php"><button  style="padding:10px;padding-right:10px; background-color:#00FFFF font-size:18px" class="btn btn-primary">Go back</button></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="regist.php"><button  style="padding:10px;padding-right:10px; background-color:#00CCFF; font-size:18px" class="btn btn-primary">Add agent</button></a>  </p>
</html>  
<script>  
$(document).ready(function(){  
     $('#editable_table').Tabledit({
      url:'action.php',
      columns:{
       identifier:[0, "nid"],
       editable:[[2, 'password'], [1, 'username']]
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

