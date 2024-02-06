<?php
//use Dotenv\Dotenv;
$test = dirname(__FILE__, 2);
require $test.'/vendor/autoload.php';

//$dotenv = Dotenv::createImmutable(__DIR__);
//$dotenv->load();

$test = dirname(__FILE__, 2);
//var_dump(dirname(__DIR__));
//var_dump($test);
//die();
//$dotenv = Dotenv\Dotenv::createImmutable($test);
//$dotenv->safeLoad();

var_dump($_ENV);

$url = $_ENV('JAWSDB_URL');
$dbparts = parse_url($url);

$hostname = $dbparts['host'];
$username = $dbparts['user'];
$password = $dbparts['pass'];
$database = ltrim($dbparts['path'],'/');

// Create connection
$conn = new mysqli($hostname, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connection was successfully established!";

die();
