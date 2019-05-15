<?php
$servername = "localhost";
$username = "root";
$password = "1234";
$dbname = "products";

$name = $_POST["name"];
$price = $_POST["price"];
$active = $_POST["active"];

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "INSERT INTO producto VALUES (null, '$name', '$price', '$active')";
  $conn->exec($sql);
  echo "New record created successfully";
}
catch(PDOException $e)
{
  echo $sql . "<br>" . $e->getMessage();
}
$conn = null;
header("Location: index.php");
?>
