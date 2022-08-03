<?php



include "config.php";





$username = $conn->real_escape_string($_POST['username']);





    if (!empty($username)){

                if (mysqli_connect_error()){

                    die('connect error ('. mysqli_connect_errno() .')'. mysqli_connect_error());

                }else{





                     $sql = "UPDATE users SET reason ='You are unbanned' , banned = '' WHERE username ='$username'";

        

                     if ($conn->query($sql)){

                        header("Location: ../panel.php?error=UnBanned user!");

                        exit();



                     }else{

                        echo "error: ". $sql ."<br>". $conn->error;

                     }

                     $conn->close();



                }

    }else{

        header("Location: ../panel.php?error=please put a username!");

        exit();

    }



?>