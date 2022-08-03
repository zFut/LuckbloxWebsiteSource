<?php

session_start();

include "config.php";



$id = $conn->real_escape_string($_POST['id']);

$source = '../textures/render.png'; 

  



$destination = '../textures/renders/'. $id .'.png'; 



if( !copy($source, $destination) ) { 

    header("location: ../panel.php?error=failedd");

} 

else { 

    header("location: ../panel.php?error=render created");

} 

?>