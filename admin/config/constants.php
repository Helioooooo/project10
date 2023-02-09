<!-- <?php
define('ROOT_URL', 'http://localhost/gcnews/');

// $hostName = "mysql-gcnews.alwaysdata.net";
// $db = "gcnews_bdd_v1";
// $username ="gcnews";
// $password = "359D55A";

$hostName = "localhost";
$db = "gcnews";
$username ="root";
$password = "roo";




try {
   $conn = new PDO("mysql:host=$hostName;dbname=gcnews", $username, $password);
   // set the PDO error mode to exception
   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   echo "Connected successfully";
   }
catch(PDOException $e)
   {
   echo "Connection failed: " . $e->getMessage();
   }
?>