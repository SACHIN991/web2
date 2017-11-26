<?php
session_start();
include 'connection.php';
$username=$_POST['name'];
$password=$_POST['password'];
$sql = "SELECT * FROM username WHERE username='$username' AND password='$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $_SESSION['login']="loggedin";
    unset($_SESSION["loginerror"]); 
    header('Location: http://localhost/web2/form.php');
    }
else {
	 echo "Error: " . $sql . "<br>" . $conn->error;
	$_SESSION['loginerror']="incoorect username or password";
	// header('Location: http://localhost/web1/login.php');
    echo "0 results";
}
$conn->close();
?>