<?php
$servername = "localhost";
$username = "root";
$password = "1234";
$dbname = "products";

$id = $_GET["id"];
$price = $_POST["price"];
$active = $_POST["active"];

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "UPDATE producto SET price=$price, is_active=$active WHERE id=$id";
  $conn->query($sql);
  echo "New record created successfully";
}
catch(PDOException $e)
{
  echo $sql . "<br>" . $e->getMessage();
}
$conn = null;
header("Location: index.php");
?>
