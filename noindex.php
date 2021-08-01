<?

require("database.php");
$database = new database;


 $latitude =  $_GET["latitude"];
$longitude =  $_GET["longitude"];

	
	$query = "INSERT INTO gps VALUES (NULL, '$user', '$latitude', '$longitude');";
	$database->query($query);



// echo " Latitude : $latitude ";
// echo "Longitude: $longitude ";


?>