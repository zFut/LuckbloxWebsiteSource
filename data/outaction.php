<?php 

session_start();

include 'config.php';

$user = $_SESSION['username'];

$sql = "UPDATE users SET seen='0' WHERE username='$user'";

$result = mysqli_query($conn, $sql);

session_unset();

session_destroy();

header("location: ../login.php");

?>