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
?>

<table>
  <tr>
    <th>Id</th>
    <th>Vorname</th>
    <th>Nachname</th>
    <th>Bestellungen</th>
  </tr>

<?php
foreach ($conn->query($sql) as $row) {
  ?>
  <tr>
    <td><?= $row['id']; ?></td>
    <td><?= $row['first_name']; ?></td>
    <td><?= $row['last_name']; ?></td>
    <td><a href="bestellungen.php?id=<?= $row['id'] ?>">Link</a></td>
  </tr>
  <?php
}
?>
</table>