<?php

$hostname = "localhost";
$username = "root";
$password = "";

$conn = mysqli_connect($hostname, $username, $password); 

if (!$conn) {
    // echo("Connection failed: <br><br>" . mysqli_connect_error()); //mysqli_connect_error() function returns the error description 
}
else
{
	// echo ("Connected successfully <br><br>");
}

$sql = "CREATE DATABASE fwd_pro";

if (mysqli_query($conn, $sql))
{
// echo "Database created successfully";
} else {
// echo "Error creating database: " . mysqli_error($conn);
}

$conn = mysqli_connect($hostname, $username, $password, "fwd_pro");

$sql = "CREATE TABLE users (
        srno INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        fname VARCHAR(30) NOT NULL,
        uname VARCHAR(10),
        email_id VARCHAR(50),
        passwords VARCHAR(10)
);";


if (mysqli_query($conn, $sql))
{    
}

mysqli_close($conn);

echo "<script>window.location = 'http://localhost/FWD%20Project/signUp.php'</script>";

?>