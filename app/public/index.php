<?php

$servername = "mysql8-container";
$database = "mysql";
$username = "root";
$password = "secret1111";
$charset = "utf8mb4";

try {

$dsn = "mysql:host=$servername;dbname=$database;charset=$charset";
$pdo = new PDO($dsn, $username, $password);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

echo "Connection ok"; 

return $pdo;

}

catch (PDOException $e)

{
echo "Connection failed: ". $e->getMessage();
}

?>
