<?php



include "config.php";



$reason = filter_input(INPUT_GET, 'reason', FILTER_SANITIZE_STRING);

$username = filter_input(INPUT_GET, 'username', FILTER_SANITIZE_STRING);



if (!empty($reason)){

    if (!empty($username)){

                if (mysqli_connect_error()){

                    die('connect error ('. mysqli_connect_errno() .')'. mysqli_connect_error());

                }else{





                     $sql = "UPDATE users SET reason ='$reason' , banned = '1' WHERE username ='$username'";

        

                     if ($conn->query($sql)){

                        header("Location: ../panel.php?error=Banned user!");

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

}else{

    header("Location: ../panel.php?error=please put a reason!");

    exit();

}

?>