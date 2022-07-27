<?php
 
// From URL to get webpage contents.
$url = "https://api.binance.com/api/v3/ticker/price?symbol=SOLBUSD";
 
// Initialize a CURL session.
$ch = curl_init();
 
// Return Page contents.
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
 
//grab URL and pass it to the variable.
curl_setopt($ch, CURLOPT_URL, $url);
 
$result = curl_exec($ch);

$jsonDecode = json_decode($result);

$fiyat = $jsonDecode->price;
echo $fiyat;
echo "<br>";
echo 3.50689499*$fiyat;
echo "<script>location.reload()</script>";

?>