<?
 var_dump($_GET);

$user = $_GET['user'];
$latitude = $_GET['latitude'];
$longitude = $_GET['longitude'];

require ("database.php");
$database = new database;
$database->insert($user, $latitude, $longitude);

?>     
