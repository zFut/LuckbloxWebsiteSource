<?php

include "config.php";


$user = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);

$pass = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);

$key = filter_input(INPUT_POST, 'key', FILTER_SANITIZE_STRING);

date_default_timezone_set('America/Chicago');

$date = date('jS F Y');



if (!empty($user)){

    if($user != ' '){

        if (!empty($pass)){

            if (!empty($key)){

                if (!empty($email)){

                  if (mysqli_connect_error()){

                    die('connect error ('. mysqli_connect_errno() .')'. mysqli_connect_error());

                  }else{

                    $query = "SELECT * from users where username = '$user' limit 1";

                    $checkkey = "SELECT * FROM gkeys WHERE gkeys = '$key'";

                    

                    $result1 = mysqli_query($conn,$checkkey);

                    if($result1 && mysqli_num_rows($result1) > 0){



                        date_default_timezone_set('America/Chicago');

                        $date = date('jS F Y');

    

                       $result = mysqli_query($conn, $query);

                       if($result && mysqli_num_rows($result) < 1){

    

                         $hash = password_hash($pass, PASSWORD_DEFAULT);

                         $sql = "INSERT INTO users (username, password, tix, email, date, avatar) values ('$user', '$hash', '10', '$email', '$date', '24:23:24:24:37:37')";

                         $sql2 = "DELETE FROM gkeys WHERE gkeys = '$key' ";

            

                         if ($conn->query($sql) && $conn->query($sql2)){

                            $query2 = mysqli_query($conn,"SELECT * from users where username = '$user'");

                            $res = mysqli_fetch_array($query2);

                            $id = $res['id'];

                            $source = '../textures/render.png';

                            $destination = '../textures/renders/'. $id .'.png';

                            copy($source, $destination);

                            header("Location: ../login.php");

                            exit();

                         }else{

                            echo "error: ". $sql ."<br>". $conn->error;

                         }

                         $conn->close();

    

                       }else{

                        header("Location: ../signup.php?error=username already taken");

                       }

                        

                    }else{

                        header("Location: ../signup.php?error=key invalid!");

                    }

                }

            }else{

                header("Location: ../signup.php?error=please put a email");

                exit();

                }

            }else{

            header("Location: ../signup.php?error=please put a key");

            exit();

            }

        }else{

        header("Location: ../signup.php?error=please put a password!");

        exit();

        }   

    }else{

        header("Location: ../signup.php?error=username not valid");

        exit();

    }

    

}else{

    header("Location: ../signup.php?error=please put a user!");

    exit();

}

?>