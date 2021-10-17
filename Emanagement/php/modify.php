<?php  
$connect = mysqli_connect("localhost", "root", "", "employees_management");

$input = filter_input_array(INPUT_POST);

$name = mysqli_real_escape_string($connect, $input["Name"]);
$phone = mysqli_real_escape_string($connect, $input["Phone_Number"]);
$email = mysqli_real_escape_string($connect, $input["Email"]);
$bdate = mysqli_real_escape_string($connect, $input["Date_of_Birth"]);
$status = mysqli_real_escape_string($connect, $input["Status"]);
$position = mysqli_real_escape_string($connect, $input["Position"]);

if($input["action"] === 'edit')
{
 $query = "UPDATE employee_details set Name='$name',Phone_Number='$phone',Email='$email',Date_of_Birth='$bdate',Status='$status',Position='$position' where National_ID='".$input["National_ID"]."'";

 mysqli_query($connect, $query);

}
if($input["action"] === 'delete')
{
 $query = "
 DELETE FROM employee_details
 WHERE National_ID = '".$input["National_ID"]."'
 ";
 mysqli_query($connect, $query);
}

echo json_encode($input);

?>
