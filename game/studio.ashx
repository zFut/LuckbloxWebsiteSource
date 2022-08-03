<?php
$tosign = file_get_contents('getstudio.txt');
$private = file_get_contents('pk/private_key.pem');

openssl_sign($tosign, $generated, $private);

echo '%';
echo base64_encode($generated);
echo '%';
echo $tosign;
?>