<?php







include "config.php";







$name = $conn->real_escape_string($_POST['name']);

$creator = $conn->real_escape_string($_POST['creator']);

$cid = $conn->real_escape_string($_POST['creatorId']);

$desc = $conn->real_escape_string($_POST['desc']);

$address = $conn->real_escape_string($_POST['address']);

$status = $conn->real_escape_string($_POST['status']);



date_default_timezone_set('America/Chicago');



$date = date('jS F Y');





if (!empty($name)){



    if (!empty($creator)){

        if (!empty($cid)){

            if (!empty($desc)){

                if (!empty($address)){

                    if (!empty($status)){



                if (mysqli_connect_error()){



                    die('connect error ('. mysqli_connect_errno() .')'. mysqli_connect_error());



                }else{











                     $sql = "INSERT INTO games (creator,cid,name,description,ip,status,date) VALUES ('$creator','$cid','$name','$desc','$address','$status','$date')";



        



                     if ($conn->query($sql)){



                        header("Location: ../panel.php?error=Added game!");



                        exit();







                     }else{



                        echo "error: ". $sql ."<br>". $conn->error;



                     }



                     $conn->close();







                }

            }else{



                header("Location: ../panel.php?error=please put a status!");

        

                exit();

        

            }

        }else{



            header("Location: ../panel.php?error=please put a address!");

    

            exit();

    

        }

    }else{



        header("Location: ../panel.php?error=please put a game description!");



        exit();



    }

}else{



    header("Location: ../panel.php?error=please put a creator id!");



    exit();



}

    }else{



        header("Location: ../panel.php?error=please put a creator!");



        exit();



    }



}else{



    header("Location: ../panel.php?error=please put a game name!");



    exit();



}



?>