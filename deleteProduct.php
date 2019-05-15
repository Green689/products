<?php
  $id = $_GET["id"];

  $servername = "localhost";
  $username = "root";
  $password = "1234";
  $dbname = "products";

  try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "delete from producto where id='" . $id . "'";
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
