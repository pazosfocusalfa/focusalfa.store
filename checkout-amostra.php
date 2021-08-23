<?php

$email = $_GET['inf_field_Email'];
$name = $_GET['inf_field_FirstName'];
//$phoneac = $_GET['phoneac'];
$phonenumber = limpar_fone($_GET['inf_field_Phone1']);
$boleto = $_GET['inf_custom_boleto'];
$zipcode = $_GET['inf_field_ZipFour1'];
$streetNumber = $_GET['inf_field_StreetAddress1'];
$complementary = $_GET['inf_field_StreetAddress2'];

$xcod = isset($_GET['xcod']) ? $_GET['xcod'] : "0";
$src = isset($_GET['src']) ? $_GET['src'] : "0";

function limpar_fone($str){ 
  return preg_replace("/[^0-9]/", "", $str); 
}

$ddd = $phonenumber;

if ($boleto  == "nao" ){
  //header("Location: https://pay.hotmart.com/B10767425P?checkoutMode=10&hideBillet=1&split=12" . $xcod . '&src=' . $src . '&email=' . $email . '&name=' . $name . '&phoneac=' . substr($ddd, 0, 2) . '&phonenumber=' . substr($phonenumber, 2, 9));
  header("Location: https://payb.ticto.com.br/c/7CF59FF1?&split=12&zipcode=". $zipcode . "&streetNumber=" . $streetNumber . "&complementary=" .  $complementary . "&email=". $email . "&name=" . $name . "&phoneac=" . substr($ddd, 0, 2) . "&phonenumber=" . substr($phonenumber, 2, 9));
} else {
  header("Location: https://payb.ticto.com.br/c/7CF59FF1?&split=12&zipcode=". $zipcode . "&streetNumber=" . $streetNumber . "&complementary=" .  $complementary . "&email=". $email . "&name=" . $name . "&phoneac=" . substr($ddd, 0, 2) . "&phonenumber=" . substr($phonenumber, 2, 9));
}



?>
