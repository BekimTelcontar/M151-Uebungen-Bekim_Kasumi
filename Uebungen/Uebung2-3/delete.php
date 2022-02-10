<?php
$servername = "localhost";
$username = "vmadmin";
$password = "sml12345";
$database = "northwind";

$conn = null;

try {
  $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);

  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
  die();
}

$id = $_GET['customer_id'];

if (!$id) {
  die('Keine ID vorhanden');
}

$sql = "DELETE FROM orders WHERE customer_id = :id";
$statement = $conn->prepare($sql);

$params = [
  ':id' => $id
];

$statement->execute($params);

$result = $statement->fetchAll();
?>