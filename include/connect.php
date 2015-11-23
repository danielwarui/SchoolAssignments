<?php

class Connect{
public $conn;
    // constructor
    function __construct() {

    }

    // destructor
    function __destruct() {
        // $this->close();
    }

    // Connecting to database
    public function connect() {

$server_name="localhost";
$user_name="root";
$password="";
$dbname="forum";
$conn=mysqli_connect( $server_name, $user_name, $password, $dbname);
if($conn)
{
	echo "Successfully connected to database";
	return $conn;
}
else
{
	echo "error".mysqli_error($conn);
}
}
 // Closing database connection
    public function close() {
      echo "Config failed";
        mysql_close();
    }

}

?>

