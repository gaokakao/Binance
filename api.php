
<?php


require 'vendor/autoload.php';
// 1. config in home directory
$api = new Binance\API();
// 2. config in specified file
$api = new Binance\API( "somefile.json" );
// 3. config by specifying api key and secret
$api = new Binance\API("dfMGKkg1X7Cq2vEciAMBSVYhWm7k6wQFgsYXDDMtJRsinZr0FGGWAyau9p5KoDIY","MAdQ3jG2DTGUk6bAL4nZ9p3HmGObHKUdekvj1fXGT2uPKb1fEiA5IkrUc773fSIm");
// 4. config by specifying api key, api secret and testnet flag. By default the testnet is disabled
$api = new Binance\API("<testnet api key>","<testnet secret>", true);
// 5. Rate Limiting Support
$api = new Binance\RateLimiter(new Binance\API());




?>

