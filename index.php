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
          <?php
          try {
            $servername = "localhost";
            $username = "root";
            $password = "1234";
            $dbname = "products";

            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "select * from producto order by is_active DESC, id;";

            if($conn){
              $result = $conn->query($sql);
              foreach($result as $value){
                echo
                "<tr><td>" . $value["id"] . "</td>" .
                "<td>" . $value["product_name"] . "</td>" .
                "<td style='text-align: right'>" . $value["price"] . "</td>" .
                "<td>";
                if($value["is_active"] == 1){ echo "Activo";} else {echo "Inactivo";};
                echo"</td><td><a href='updateProduct.php?id=". $value["id"] . "&name=". $value["product_name"] . "&price=" . $value["price"] . "&active=" . $value["is_active"] ."'>Editar</a></td><td><a href='deleteProduct.php?id=". $value["id"] ."'>Eliminar</a></td></tr>";
              }
            }else{
              echo "nothing";
            }
          }

          catch(PDOException $e)
          {
            echo $sql . "<br>" . $e->getMessage();
          }
          $conn = null;
          ?>
        </tbody>
      </table>
    </div>
    <div class="column"></div>
  </div>
</body>
</html>
