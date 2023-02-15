<?php
# phpinfo();
// $host = $_POST['host'];
// $user = $_POST['user'];
// $password = $_POST['password'];

$servername = $_POST['host'];
$username = $_POST['user'];
$database = $_POST['database'];
$password = $_POST['password'];

try {
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
    } catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    }
?>