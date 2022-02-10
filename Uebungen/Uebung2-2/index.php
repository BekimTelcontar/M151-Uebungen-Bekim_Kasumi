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
$sql = "SELECT * FROM customers";
echo "<table>";
echo "<tr>";
echo "<th>Vorname</th>";
echo "<th>Nachname</th>";
echo "</tr>";
foreach ($conn->query($sql) as $row) {
    echo "<tr>";
    echo "<td>" . $row['first_name'] . "</td>";
    echo "<td>" . $row['last_name'] . "</td>";
    echo "</tr>";
}
echo "</table>";
?>