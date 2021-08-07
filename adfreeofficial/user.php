<?

require("database.php");
$database = new database;
 $latitude =  $_GET["latitude"];
 $longitude =  $_GET["longitude"];

$nick =  $_GET["nick"];
$email =  $_GET["email"];


	
	$query = "INSERT INTO gps VALUES (NULL, '$nick', '$latitude', '$longitude');";
$database->query($query)  ;

	$query = "INSERT INTO users VALUES (NULL, '$email', '$nick');";
$database->query($query);
 
echo "Tu esi  bybys - latitude: $latitude ir                            \n        Longitude: $longitude";


?>