<?php



include "config.php";



$msg = $_POST['msg'];

$on = $_POST['stat'];



if (!empty($msg)){

    if (!empty($on)){

                if (mysqli_connect_error()){

                    die('connect error ('. mysqli_connect_errno() .')'. mysqli_connect_error());

                }else{





                     $sql = "UPDATE `alert` SET `message`='$msg',`on`='$on' WHERE `id`='1'";

        

                     if ($conn->query($sql)){

                        header("Location: ../panel.php?error=Alert changed!");

                        exit();



                     }else{

                        echo "error: ". $sql ."<br>". $conn->error;

                     }

                     $conn->close();



                }

    }else{

        header("Location: ../panel.php?error=please put an stat!");

        exit();

    }

}else{

    header("Location: ../panel.php?error=please put a alert!");

    exit();

}

?>