<?php
//use Dotenv\Dotenv;
//$test = dirname(__FILE__, 2);
//require $test.'/vendor/autoload.php';

//$dotenv = Dotenv::createImmutable(__DIR__);
//$dotenv->load();

//$test = dirname(__FILE__, 2);
//var_dump(dirname(__DIR__));
//var_dump($test);
//die();
//$dotenv = Dotenv\Dotenv::createImmutable($test);
//$dotenv->safeLoad();
//$test = "hi";
$url = getenv('JAWSDB_URL');
$dbparts = parse_url($url);

$hostname = $dbparts['host'];
$username = $dbparts['user'];
$password = $dbparts['pass'];
$database = ltrim($dbparts['path'],'/');

// Create connection
$conn = mysqli_connect($hostname, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connection was successfully established!";

