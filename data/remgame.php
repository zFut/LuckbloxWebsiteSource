<?php

include 'config.php';



$id = $conn->real_escape_string($_POST['id']);



if (!empty($id)){

    $sql = "DELETE FROM games WHERE id='$id'";



    if ($conn->query($sql)){



        header("Location: ../panel.php?error=Removed game!");



        exit();

    } else {

        echo "error: ". $sql ."<br>". $conn->error;

    }

} else {

    header('location: ../panel.php?error=please set a name!');

}

?>