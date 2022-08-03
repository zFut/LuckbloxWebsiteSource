<?php

session_start();

include "config.php";




if (isset($_POST['username']) && isset($_POST['password'])){

    function validate($data){

        $data = trim($data);

        $data = stripslashes($data);

        $data = htmlspecialchars($data);  

        return $data;

    }



    $user = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);

    $pass = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);



    if (empty($user)){

        header("Location: ../login.php?error=invalid username");

        exit();

    }else if(empty($pass)){

        header("Location: ../login.php?error=invalid password");

        exit();

    }else{

        $sql = "SELECT username, password , seen FROM users WHERE username='$user'";

        $result = mysqli_query($conn, $sql);



        if (mysqli_num_rows($result) === 1){

            $row = mysqli_fetch_assoc($result);

            if ($row['username'] === $user){

                $hashed = password_verify($pass, $row['password']);

                if($hashed == 1){

                    $seen = $row['seen'];

                    $sql = "UPDATE users SET seen='1' WHERE username='$user'";

                    $result = mysqli_query($conn, $sql);

                    $_SESSION['username'] = $row['username'];

                    


                    header("Location: ../home.php");

                    exit(); 

                }else{

                    header("Location: ../login.php?error=inccorect username or password");

                    exit();

                }

                

            }else{

                header("Location: ../login.php?error=inccorect username or password");

                exit();

            }

        } else{

            header("Location: ../login.php?error=inccorect username or password");

            exit();

        }

    }



} else{

    header("location: ../login.php");

    exit();

}



?>