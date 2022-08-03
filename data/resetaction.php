<?php

include "config.php";



$user = $conn->real_escape_string(trim($_POST['username']));

$pass = $conn->real_escape_string($_POST['password']);



if (!empty($user)){

    if(!empty($pass)){

                if (mysqli_connect_error()){

                    die('connect error ('. mysqli_connect_errno() .')'. mysqli_connect_error());

                }else{

                       

                         $hash = password_hash($pass, PASSWORD_DEFAULT);

                         $sql = "UPDATE users SET password='$hash' WHERE username='$user' ";

            

                         if ($conn->query($sql)){

                            header("Location: ../panel.php?error=Password Changed!");

                            exit();

                         }else{

                            echo "error: ". $sql ."<br>". $conn->error;

                         }

                         $conn->close();

    

                }   

    }else{

        header("Location: ../panel.php?error=please put a passord!");

        exit();

    }

    

}else{

    header("Location: ../panel.php?error=please put a user!");

    exit();

}

?>