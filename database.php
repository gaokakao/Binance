<?

class Database
{
public $servername = "localhost";
public $username = "music";
public $password = "music";
public $dbname = "gps";
 public $conn;

function __construct()
{
$this->conn  = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
}

function escape($value)
{	return str_replace ("'", "\'", $value); }

function query($query)
{
// echo "<br>$query<br>";

	$result =  mysqli_query($this->conn, $query);
//	if (!$result ) 
	{ echo "<br>";  echo    mysqli_error($this->conn); echo "<br>"; }

return $result ;
}


//  Insert Into  gps table 

function insert ( $user, $lattitude, $longitude)
{
$Lattitude = $this->escape($lattitude);
$Longitude = $this->escape($longitude);
$user = $this->escape($user);

$query =" INSERT INTO `gps` (`id`, `user`, `latitude`, `longitude`) VALUES (NULL, '$user', '$lattitude', '$longitude') ";

// $query =" INSERT INTO gps  (NULL, '$user', '$lattitude', '$longitude') "; 
 
$this->query($query);

} 


}
?>