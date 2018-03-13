<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "carsharing";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error)
{
  die("Connection failed: " . $conn->connect_error);
}

$custName = $_POST['name'];
$custEmail = $_POST['email'];

$sql = "INSERT INTO pramanahotel
(bookingID, Name, Email, Phone, checkIn, NoDays, Type, Charge1, Charge2, Charge3)
VALUES (NULL, '$custName', '$custEmail', '$custPhone',
  '$checkInDate', '$stayLength', '$type',
  '$charge1', '$charge2', '$charge3')";

if ($conn->query($sql) === TRUE)
{
  echo "New record created successfully";
}
else
{
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
