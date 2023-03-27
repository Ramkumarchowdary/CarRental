<?php 
// DB credentials.
// define('DB_HOST','localhost');
// define('DB_USER','root');
// define('DB_PASS','02KkEp@1');
// define('DB_NAME','CarRental1');
$servername = "carrental2.mysql.database.azure.com";
// $username = "ramkumar@carrental2.mysql.database.azure.com";
$username = "ramkumar";
// $password = "RamKumar@123";
$password = "CarRental@123";
$dbname = "carrental";
// $ssl_ca = "/certs/DigiCertGlobalRootCA.crt.pem";


// Establish database connection.
try
{
// $dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
// $dbh = new PDO("mysql:host=$servername;dbname=$dbname;sslmode=require;sslrootcert=$ssl_ca", $username, $password);
$dbh = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
}
catch (PDOException $e)
{
exit("Error: " . $e->getMessage());
}
?>

