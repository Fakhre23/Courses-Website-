<?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kbems";
 
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  
} catch (PDOException $th) {
    echo "Connection failed: " . $th->getMessage();
}


?>