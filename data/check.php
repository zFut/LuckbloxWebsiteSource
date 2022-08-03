<?php

function check_login($conn){

    if(isset($_SESSION['username'])){

        $id = $conn->real_escape_string($_SESSION['username']);

        $query = "SELECT * FROM users WHERE username = '$id' limit 1";



        $result = mysqli_query($conn,$query);

        if($result && mysqli_num_rows($result) > 0){



            $user_data = mysqli_fetch_assoc($result);

            return $user_data;

        }

    }else{

       header("location: login.php");

       die; 

    }

}

function check_ban($conn){

    if(isset($_SESSION['username'])){

        $id = $conn->real_escape_string($_SESSION['username']);

        $query = "SELECT * FROM users WHERE username = '$id'";



        $result = mysqli_query($conn,$query);

        $user_data = mysqli_fetch_assoc($result);

        $ban = $user_data['banned'];

        if($ban > 0){

            header("location: banned.php");

            die;

        }

        

    }

}



?>