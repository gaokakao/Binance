<?


require("database.php");
$database = new database;
 $artist =  $_GET["artist"];
 $title =  $_GET["title"];
 
 	
		$query = "INSERT INTO songs VALUES (NULL, '$artist', '$title');";
		$database->query($query); 

?>
