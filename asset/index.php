<?php

$requestedid = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_STRING);
$tosign = file_get_contents('../asset/' . $requestedid);
$private = file_get_contents('../game/pk/private_key.pem');

if (isset($requestedid)){
openssl_sign($tosign, $generated, $private);

echo '%';
echo base64_encode($generated);
echo '%';
echo $tosign;

}else{
    echo 'no requested id';
}
?>