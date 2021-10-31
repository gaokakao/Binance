<?php
require 'vendor/autoload.php';
$api = new Binance\API('dfMGKkg1X7Cq2vEciAMBSVYhWm7k6wQFgsYXDDMtJRsinZr0FGGWAyau9p5KoDIY','dfMGKkg1X7Cq2vEciAMBSVYhWm7k6wQFgsYXDDMtJRsinZr0FGGWAyau9p5KoDIY');
$api = new Binance\RateLimiter(new Binance\API());

$price = round($api->price ("BTCUSDT"));



echo "

<!DOCTYPE html>
<html lang='en'>
<head>
<meta charset='UTF-8'>
<link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' integrity='sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T' crossorigin='anonymous'>
<link rel='icon' href='favicon.png' type='image/x-icon' />
<title> $price";
 echo "
 </title>
<meta http-equiv='refresh' content='1'>

<script>
function refresh()
{
   setTimeout('refresh();',500)
}
refresh();

</script>

</head>
<body>
 <div style=' text-align: center;'>
";
echo "<div style='color: Darkblue'> <h1> BTC - USDT </h1></div>";

echo "<div style='color: Red'> <br><p><h2>  $price </h2>";
echo "<h2>";

echo"
</div></h2></div></body></html>
";

?>

