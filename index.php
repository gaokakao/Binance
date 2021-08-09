<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" href="favicon.png" type="image/x-icon" />
<meta http-equiv="refresh" content="100">
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
</head>
<body>
<div id="a">
    <div id="b">
		<div id="content">
<h1  style="color: blue"><b> BTC/USDT  </b></h1> <br><br><br><span color="red">

 <?php
	require 'database.php';
  $db  = new Database;
																																							   

	require 'vendor/autoload.php';
	require 'BinanceApiContainer.php';
	require 'php-binance-api.php';
	require 'BinanceClass.php';



$api = new Binance("dfMGKkg1X7Cq2vEciAMBSVYhWm7k6wQFgsYXDDMtJRsinZr0FGGWAyau9p5KoDIY","MAdQ3jG2DTGUk6bAL4nZ9p3HmGObHKUdekvj1fXGT2uPKb1fEiA5IkrUc773fSIm");

$price = $api->price("USDTBTC");
echo "Price of BTC: {$price} USDT.".PHP_EOL;


$api = new BinanceApiContainer('dfMGKkg1X7Cq2vEciAMBSVYhWm7k6wQFgsYXDDMtJRsinZr0FGGWAyau9p5KoDIY', 'MAdQ3jG2DTGUk6bAL4nZ9p3HmGObHKUdekvj1fXGT2uPKb1fEiA5IkrUc773fSIm');

// Get all orders for a symbol (BNB/BTC pair).
//$orders = $api->getOrderBook(['symbol' => 'USDTBTC']);
 //var_dump($orders->getBody()->getContents());
// $orderbook = $orders->getBody()->getContents();
 // var_dump(orderbook);
// var_dump(json_decode($orderbook));
//	$parsed = str_getcsv($orderbook);
//	var_dump($parsed);

/*
$backwards = array_reverse($parsed);
$last_item = NULL;
foreach ($backwards as $current_item) 
	{
		$last_item = $current_item;
		echo " $current_item <br>";
		echo " $last_item <br>";
		$price = $last_item;
		$amount = $current_item;
		$query =  " INSERT INTO orders 'bid', '$price', '$amount'";
//		$db->Query($query);
	}
							   
												   
														  
*/

?> </h5></div> </div></div></body></html>