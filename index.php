<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="bulma.css">
  <title>Document</title>
</head>
<body>
<?php
  try {
      $servername = "localhost";
      $username = "root";
      $password = "1234";
      $dbname = "products";
      $user = $_POST["user"];
      $pass = $_POST["pass"];

    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "select * from producto";

    if($conn){
      $result = $conn->query($sql)
    }
  }
?>
  <div class="columns" style="margin-top: 100px">
    <div class="column"></div>
    <div class="column is-half box">
      <div class="navbar">
      <h4 class="title is-4">Productos</h4>
      <div class="navbar-end">
        <div class="navbar-item">
      <a class="button is-primary" onclick="location.href='insertProduct.html'">Nuevo Producto</a>
      </div>
      </div>
      </div>
      <table class="table is-striped is-fullwidth">
        <thead>
          <tr>
            <th>Id</th>
            <th>Producto</th>
            <th>Precio</th>
            <th>Activo</th>
            <th></th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>Coca cola</td>
            <td style="float: right">Q5</td>
            <td>Activo</td>
            <td><a href="updateProduct.html">Editar</a></td>
            <td><a>Eliminar</a></td>
          </tr>
          <tr>
            <td>2</td>
            <td>Lays</td>
            <td style="float: right">Q3</td>
            <td>Inactivo</td>
            <td><a href="updateProduct.html">Editar</a></td>
            <td><a>Eliminar</a></td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="column"></div>
  </div>
</body>
</html>
