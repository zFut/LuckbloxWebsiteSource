<?php

include "config.php";



$randkey = base64_encode(openssl_random_pseudo_bytes(5));

$randkey1 = base64_encode(openssl_random_pseudo_bytes(5));

$randkey2 = base64_encode(openssl_random_pseudo_bytes(5));



$gkey = 'luckblox-'. $randkey .'-'.  $randkey1 .'-'. $randkey2;



$sql = "INSERT INTO gkeys (gkeys) values ('$gkey')";

$conn->query($sql);

header("Location: ../panel.php?error=new key generated!");

exit();

?>