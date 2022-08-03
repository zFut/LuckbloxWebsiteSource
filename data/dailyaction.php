<?php

session_start();



include "config.php";



$result = mysqli_query($conn,"SELECT * FROM users ");



while($ar = mysqli_fetch_assoc($result)){

            $ret[] = $ar;

}



foreach($ret as $data){

    $tix = $data['tix'];

    $user = $data['username'];



    $ntix = $tix + 10;

    $upd = mysqli_query($conn,"UPDATE users SET tix='$ntix' WHERE username='$user'");

    header('location: ../panel.php?error=Daily tix given');

}



?>