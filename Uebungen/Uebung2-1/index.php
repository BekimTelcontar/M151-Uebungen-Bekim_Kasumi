<?php
$servername = "localhost";
$username = "vmadmin";
$password = "sml12345";

$conn = mysqli_connect($servername, $username, $password);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
$sql = "SELECT * FROM northwind.customers WHERE job_title = 'Purchasing Representative'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo "<br>" . $result->num_rows . " Resultate:";
  foreach ($result as $customer) {
      echo "<br>" . $customer['first_name'];
  }
  var_dump($result);
} else {
  echo "Keine Resultate vorhanden";
}
mysqli_close($conn);
?>