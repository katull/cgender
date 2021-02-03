<?php

$url = "https://api.hakuna.live/user";

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

echo "Bearer : ";
$bear = trim(fgets(STDIN));
$headers = array(
   "Authorization: ".$bear,
   "Content-Type: application/json",
);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

echo "\n\nMALE | FEMALE | OTHER \n Input : ";

$gen = trim(fgets(STDIN));
$data = '{"displayName":"Baic Tools","birthDate":null,"gender":"'.$gen.'","status":"","profileImage":null,"profileImageUrl":null,"deleteProfieImage":null}';

curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

//for debug only!
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

$resp = curl_exec($curl);
curl_close($curl);
var_dump($resp);

?>

