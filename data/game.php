<?php
include "config.php";

$user = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_STRING);
$game = filter_input(INPUT_GET, 'game', FILTER_SANITIZE_STRING);
$ver = filter_input(INPUT_GET, 'ver', FILTER_SANITIZE_STRING);

function generateRandomString($length = 25)
{
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

$token = generateRandomString(40);

$query = "SELECT * from users where id='$user'";
$res = mysqli_query($conn, $query);
if($res && mysqli_num_rows($res) > 0){
  $sql = "UPDATE users SET token='$token' WHERE id='$user'";
  if ($conn->query($sql)){
      header("location: luckblox://$game&$token&$ver");
  }else{
    header("location: ../games.php");
}
}else{
    header("location: ../games.php");
}
?>