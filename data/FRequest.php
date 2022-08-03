<?php

include 'config.php';



$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_STRING);

$uid = filter_input(INPUT_GET, 'uid', FILTER_SANITIZE_STRING);



$sql = "SELECT * FROM users WHERE id='$uid'";

//check for friend

if ($conn->query($sql)){

    $res = mysqli_query($conn,$sql);

    if($res && mysqli_num_rows($res) > 0){

        //check for user

        $sql = "SELECT * FROM users WHERE id='$id'";

        $ar = mysqli_fetch_array($res);

        $userf = $ar['username'];

        if ($conn->query($sql)){

            $res = mysqli_query($conn,$sql);

            $ar = mysqli_fetch_array($res);

            $users = $ar['username'];

            if($res && mysqli_num_rows($res) > 0){

                //IF ALL ID EXISTS check if already request

                $sql = "SELECT * FROM friends WHERE uid='$id' AND fid='$uid' OR uid='$uid' AND fid='$id'";

                if ($conn->query($sql)){

                    $res = mysqli_query($conn,$sql);

                    if($res && mysqli_num_rows($res) < 1){

                        //add request

                        $sql = "INSERT INTO `friends`(`uid`, `fid`, `uname`, `fname`) VALUES ('$id','$uid','$users','$userf')";

                        if ($conn->query($sql)){

                            header("location: ../user.php?id=$uid");

                        }else{

                            header("location: ../user.php?id=$uid");

                        }

                    }else{

                        header("location: ../user.php?id=$uid");

                    }

                }

            }else{

                header("location: ../user.php?id=$uid");

            }

        }

    }else{

        header("location: ../user.php?id=$uid");

    }

}

?>