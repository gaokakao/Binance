<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" href="favicon.png" type="image/x-icon" />
<style>
.container 
{
    position: absolute;
    top: 50%;
    left: 50%;
    -moz-transform: translateX(-50%) translateY(-50%);
    -webkit-transform: translateX(-50%) translateY(-50%);
    transform: translateX(-50%) translateY(-50%);
}
html, body, #a {  margin: 0;  padding: 0;  height: 70%;   width: 100%; }
#a {    display: table; }
#b {   display: table-cell;  margin: 0;  padding: 0;  text-align: center;  vertical-align: middle; }
#content {   width: 500px;  height: 500px;   margin: auto;}
</style>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<title>Gaokakao</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
</style>
  <meta http-equiv="refresh" content="99999999">
</head>
<body>
<div id="a">
    <div id="b">
		<div id="content">
<h1  style="color: blue"><b> BTC/USDT  </b></h1> <br><br><br>
<span color="red">

 <?php
	require 'vendor/autoload.php';
	require 'BinanceApiContainer.php';
	require 'BinanceClass.php';
// Pirmas API		jaggedsoft / php-binance-api
/*
	$api = new Binance("dfMGKkg1X7Cq2vEciAMBSVYhWm7k6wQFgsYXDDMtJRsinZr0FGGWAyau9p5KoDIY","dfMGKkg1X7Cq2vEciAMBSVYhWm7k6wQFgsYXDDMtJRsinZr0FGGWAyau9p5KoDIY");
	$price = $api->price( "BTCUSDT" );
	echo '<h4 style="color: red">';
	echo "$price </h4";

*/ Antras API larislackers/ php-binance
	$bac = new BinanceApiContainer('dfMGKkg1X7Cq2vEciAMBSVYhWm7k6wQFgsYXDDMtJRsinZr0FGGWAyau9p5KoDIY', 'dfMGKkg1X7Cq2vEciAMBSVYhWm7k6wQFgsYXDDMtJRsinZr0FGGWAyau9p5KoDIY');
$orders = $bac->getOrderBook(['symbol' => 'BTCUSDT']);
var_dump($orders->getBody()->getContents());





?>
</h5></div> </div></div></body></html>