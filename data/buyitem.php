<?php

session_start();

include "config.php";



$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_STRING);

$user = $conn->real_escape_string($_SESSION['username']);



$query = "SELECT * from hats_owned where owner = '$user'AND id='$id' limit 1";

$result = mysqli_query($conn, $query);



if($result && mysqli_num_rows($result) < 1){

    $query1 = "SELECT * from catalog where id='$id'";

    $result1 = mysqli_query($conn, $query1);

    $row = mysqli_fetch_assoc($result1);





    $query2 = "SELECT * from users where username='$user'";

    $result2 = mysqli_query($conn, $query2);

    $row1 = mysqli_fetch_assoc($result2);



    if ($row['sale'] == 0){

        if ($row['type'] == 'tix'){

            if ($row1['tix'] >= $row['price']){

                $set = $row1['tix'] - $row['price'];

                $query3 = "UPDATE users SET tix='$set' WHERE username ='$user'";

                $conn->query($query3);



                $query4 = "INSERT INTO hats_owned (owner, id) values ('$user','$id')";

                $conn->query($query4);

                

                header("location: ../catalog.php?error=Bough item");

            }else{

                header("location: ../catalog.php?error=not enough tix");

            }

        }else{

            if ($row['type'] == 'bux'){

                if ($row1['bux'] >= $row['price']){

                    $set1 = $row1['bux'] - $row['price'];

                    $query5 = "UPDATE users SET bux='$set1' WHERE username ='$user'";

                    $conn->query($query5);



                    $query6 = "INSERT INTO hats_owned (owner, id) values ('$user','$id')";

                    $conn->query($query6);

                    

                    header("location: ../catalog.php?error=Bough item");

                }else{

                    header("location: ../catalog.php?error=not enough bux");

                }

            }

        }

    }else{

        header("location: ../catalog.php?error=Off Sale!");

    }

}else{

    header("location: ../catalog.php?error=Already owns hat!");

}

?>