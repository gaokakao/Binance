<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">    
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="icon" href="favicon.png" type="image/x-icon" />
<title>Gaokakao</title>
<meta http-equiv="refresh" content="1">
</head>
<body>
 <div style=' text-align: center;'>
 <?php
require 'vendor/autoload.php';
//$api = new Binance\API('dfMGKkg1X7Cq2vEciAMBSVYhWm7k6wQFgsYXDDMtJRsinZr0FGGWAyau9p5KoDIY','dfMGKkg1X7Cq2vEciAMBSVYhWm7k6wQFgsYXDDMtJRsinZr0FGGWAyau9p5KoDIY');
$api = new Binance\API('dfMGKkg1X7Cq2vEciAMBSVYhWm7k6wQFgsYXDDMtJRsinZr0FGGWAyau9p5KoDIY','dfMGKkg1X7Cq2vEciAMBSVYhWm7k6wQFgsYXDDMtJRsinZr0FGGWAyau9p5KoDIY');
$api = new Binance\RateLimiter(new Binance\API());

echo "<div style='color: Darkblue'> <h1> BTC USDT </h1></div>";
$price = round($api->price ("BTCUSDT"),4);
echo "<div style='color: Red'> <br><p><h2>  $price </h2>";
echo "<h3>";
$bookPrices = $api->bookPrices("BTCUSDT");
 $ask = $bookPrices['BTCUSDT']['ask'];
 $bid = $bookPrices['BTCUSDT']['bid'];

$ticker = $api->prices(); // Make sure you have an updated ticker object for this to work
$balances = $api->balances($ticker);

foreach ($ticker as &$cell) 
{
echo $cell;
echo "<br>";

}


//$prevDay = $api->prevDay("BTCUSDT");
//print_r($prevDay);
//echo "BNB price change since yesterday: ".$prevDay['priceChangePercent']."%".PHP_EOL;


?>

</div></h2></div></body></html>