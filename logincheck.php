<?php

session_start();
include 'include/connect.php';

if (isset($_POST['submitlog'])) {
function validate($data)
{
	$data = trim($data);
   	$data = stripslashes($data);
   	$data = htmlspecialchars($data);
   return $data;
}
// post values assigned to variables
$user_name = validate($_POST['user_name']);
$user_pass = validate($_POST['pass']);
// connection to database
$db = new Connect();
//fetch the entered name and username from database
$fetch_user = "SELECT * FROM signup WHERE user_name='$user_name' AND password='$user_pass'";

$excufetch = mysqli_query($db->connect(),$fetch_user);
if($excufetch)
		{
				echo "<script> window.open('home.php','_self')</script>";
				$_SESSION['user_name']=$user_name;
		}
else
		{
				echo "<script>
		   alert('username and password are incorrect');
				</script>";
		}


}

?>
