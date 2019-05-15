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
      <?php echo "<h4 class='title is-4'>Editar ".$_GET["name"]. "</h4>";?>
      <div class="navbar-end">
        <div class="navbar-item">
      <a class="button is-warning" onclick="location.href='index.php'">Volver</a>
      </div>
      </div>
      </div>
      <?php
      echo "<form action='updatePr.php?id=". $_GET["id"] ."' method='post'>";
      ?>
        <div class="field">
          <label class="label">Price</label>
          <div class="control">
            <?php echo "<input value='" . $_GET["price"] . "' class='input' required type='text' pattern='^[0-9,.]{1,5}$' name='price' placeholder='precio'>";?>
          </div>
        </div>
        <div class="field">
          <label class="label">Active</label>
          <div class="control">
            <div class="select">
              <select name="active">
                <?php
                if ($_GET["active"] == 1){
                echo "<option value='1'>Activo</option>
                <option value='0'>Inactivo</option>";
              }else{
                echo "<option value='0'>Inactivo</option>
                <option value='1'>Activo</option>";
              }
                ?>
              </select>
            </div>
          </div>
        </div>
        <button class="button is-info">Modificar</button>
      </form>

    </div>
    <div class="column"></div>
  </div>
</body>
</html>
