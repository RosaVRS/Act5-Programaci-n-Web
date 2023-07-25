<?php
session_start();
if (
  isset($_SESSION["username"]) && isset($_SESSION["id"]) && isset($_SESSION["role"])
) {
  header("Location: ./purchases.php");
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>SAAS</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous" />
  <link rel="shortcut icon" href="img/descarga.png" />
  <style>
    body {
      background-image: url(img/diseñofondo.png);
    background-repeat: no-repeat;
    background-position: center center;
    height: 1800px;
    background-attachment: fixed;
    background-size: cover;
    }
    </style>
</head>

<body>
  <main style="height: 100vh; display: flex; align-items: center">
    <section class="container-sm" style="max-width: 540px">
    <div class="col-md">
        <header class="py-3">
            <img class="text-center" src="img/logosaas.svg">
        </header>
    </div>
      <h1 class="h1 text-center">CONTROL DE INVENTARIO</h1>
      <form action="./php/sesion/login.php" method="POST">
        <div class="mb-3">
          <label for="username" class="form-label">Usuario</label>
          <input type="text" class="form-control" id="username" name="username" placeholder="juan" />
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Contraseña</label>
          <input type="password" class="form-control" id="password" name="password" placeholder="12345" />
        </div>
        <?php
        if (isset($_GET["error"])) {
        ?>
          <div class="alert alert-danger" role="alert">
            Datos son incorrectos.
        <?php
        }
        ?>
        <button type="submit" class="w-100 btn btn-primary">Iniciar sesión</button>
      </form>
    </section>
  </main>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>

</html>