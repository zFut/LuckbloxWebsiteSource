<?php

session_start();

include 'config.php';

include 'data.php';

$data = get_data($conn);



$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_STRING);

$uid = filter_input(INPUT_GET, 'uid', FILTER_SANITIZE_STRING);







//check if u the one sending

if ($id == $data['id']){

    $sql = "SELECT * FROM friends WHERE uid='$id' AND fid='$uid' OR uid='$uid' AND fid='$id'";

    $res = mysqli_query($conn,$sql);

    if($res && mysqli_num_rows($res) > 0){

        $sql = "UPDATE friends SET accepted='1' WHERE uid='$id' AND fid='$uid' OR uid='$uid' AND fid='$id'";

        if ($conn->query($sql)){

            header("location: ../user.php?id=$uid");

        }

    }else{

        header("location: ../user.php?id=$uid");

    }

}else{

    header("location: ../user.php?id=$uid");

}

?>