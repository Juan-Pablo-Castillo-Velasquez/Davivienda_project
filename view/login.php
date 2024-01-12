<?php
require(dirname(__DIR__)."/modules/sesiones.php");

session_start();

if (isset($_SESSION["login"])) {
    header("Location: index.php");
    exit;
}
//aqui verifica si el we ya inicio sesion

if ($_POST) {
    $username = $_POST["user12"];
    $passwordcliente = $_POST["password12"];

    $x = SESION($username, $passwordcliente);

    if ($x) {
        $_SESSION["login"]= $x[0]["usuario"];
        header("location: index.php");
        exit;
    } else {
        echo "<script>alert('contraseña o nombre de usuario incorrecto')</script>";
    }
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SYSTEM AMANEGER</title>
    <link rel="stylesheet" href="/SistemaAdmin/public/index.css">
    <link rel="stylesheet" href="/SistemaAdmin/public/index.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<style>
    #loader-container {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.80);
  display: flex;
  align-items: center;
  justify-content: center;
  z-index: 9999;
}

#loader {
  border: 16px solid #f3f3f3;
  border-top: 16px solid #3498db;
  border-radius: 50%;
  width: 120px;
  height: 120px;
  animation: spin 2s linear infinite;
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}

</style>
    </head>

<body>
<?php include(dirname(__DIR__))."/view/particions/usuarioHeade.php"?>

    <div class="container">
    <img  style="display: block; margin: auto;" src="https://th.bing.com/th/id/OIP.7xHfOUCtuSsWPRwIQVYeJwHaE8?pid=ImgDet&w=1024&h=683&rs=1" height="200px" width="200px">
        
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h1 class="text-center mb-4">Inicia sesión</h1>
                <h6 style="text-align: center;font-weight: inherit;color:red;">*Solamente autorizado para personal administrativo*</h6>
                <form action="login.php" method="post" novalidate>
                    <div class="mb-3">
                        <label for="user" class="form-label">Usuario</label>
                        <input type="text" class="form-control" id="user12" name="user12" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Contraseña</label>
                        <input type="password" class="form-control" id="password" name="password12" required
                            pattern=".{6,}">
                        <small class="form-text text-muted">La contraseña debe tener al menos 6 caracteres.</small>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Iniciar sesión</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php include(dirname(__DIR__)."/view/particions/fotter.php")?>