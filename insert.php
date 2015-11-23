<?php
include 'include/connect.php';
function validate($data)
{
	$data = trim($data);
   	$data = stripslashes($data);
   	$data = htmlspecialchars($data);
   return $data;

}

$first_name = validate($_POST['fname']);
$sec_name = validate($_POST['sname']);
$user_name = validate($_POST['uname']);
$pass = validate($_POST['password']);

$db = new Connect();
// $db->connect();
$insert = mysqli_query($db->connect(),"INSERT INTO signup (first_name, second_name, user_name, password)	VALUES ('$first_name','$sec_name','$user_name','$pass')");
if($insert){
echo "Record inserted successfully";
echo "<script>wnidow.open('login.php','_self')</script>";
}
else{
	echo "Falied to insert".mysqli_error($db->connect());
}	
//$qryinsert = mysqli_query($db->connect(),$insert);

?>