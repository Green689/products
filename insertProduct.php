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
      <h4 class="title is-4">Nuevo Producto</h4>
      <div class="navbar-end">
        <div class="navbar-item">
      <a class="button is-warning" onclick="location.href='index.php'">Volver</a>
      </div>
      </div>
      </div>
      <form action="insertPr.php" method="post">
        <div class="field">
          <label class="label">Name</label>
          <div class="control">
            <input class="input" required type="text" pattern="^[a-zA-Z0-9 ]{1,10}$" name="name" placeholder="nombre del producto">
          </div>
        </div>
        <div class="field">
          <label class="label">Price</label>
          <div class="control">
            <input class="input" required type="text" pattern="^[0-9,.]{1,5}$" name="price" placeholder="precio">
          </div>
        </div>
        <div class="field">
          <label class="label">Active</label>
          <div class="control">
            <div class="select">
              <select name="active">
                <option value="true">Disponible</option>
                <option value="false">No disponible</option>
              </select>
            </div>
          </div>
        </div>
        <button class="button is-success">Enviar</button>
      </form>

    </div>
    <div class="column"></div>
  </div>
</body>
</html>
