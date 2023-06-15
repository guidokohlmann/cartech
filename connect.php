<?php
$rawFile = file_get_contents("./config.json");
$configArray = json_decode($rawFile, true);
// var_dump($configArray);
// echo $configArray["servername"];

// Create connection
$conn = new mysqli($configArray["servername"], $configArray["username"], $configArray["password"]);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

?>
