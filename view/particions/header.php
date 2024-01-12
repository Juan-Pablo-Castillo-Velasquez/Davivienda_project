<?php
session_start();
if (!isset($_SESSION["login"])) {
    header("location:login.php"); // Redirige al usuario a la página de inicio si ya ha iniciado sesión
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manager</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="/src/index.css">
    <style>
        .logout-token {
      display: inline-block;
      position: relative;
      cursor: pointer;
    }

    .logout-token:hover .token-popup {
      display: block;
    }

    .token-popup {
      display: none;
      position: absolute;
      top: 100%;
      left: 0;
      z-index: 1;
      padding: 10px;
      background-color: #fff;
      box-shadow: 0 0 5px rgba(0, 0, 0, 0.3);
    }
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
#logito{
  width: 300px;
  height: 50px;
}
#colorfondo{
  background-color: rgba(0, 0, 0, 0.9) ;
  
}


.formularioReport input{
        padding: 20px;
        box-shadow: 0px 2px 4px rgba(255, 0, 1, 0.7);
        font-weight: bold;


}
.formularioInv input{
  padding: 20px;
  box-shadow: 0px 2px 4px rgba(0, 128, 0, 0.7);



  font-weight: bold;

}
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="index.php"><img  id="logito"src="https://git.co.davivienda.com/uploads/-/system/appearance/logo/1/Davivienda-Logo.png"> </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="usuarios.php">Usuarios</a>
                    </li>
                    <a class="nav-link" href="reportes.php">Reporte Personas</a>
                    </li>
                    </li>
                    <a class="nav-link" href="Peticiones.php">Peticiones</a>
                    </li>


                  



            </div>
            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#confirmModal">
      Cerrar Sesión
    </button>
            <div class="formulariando">


            </div>
        </div>
    </nav>
    <br>

    <div class="modal fade" id="confirmModal" tabindex="-1" aria-labelledby="confirmModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="confirmModalLabel">Confirmar Cierre de Sesión</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <?php echo $_SESSION["login"];?>
            ¿Estás seguro de que deseas cerrar sesión?
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
            <a href="destruitConexion.php" class="btn btn-danger">Cerrar Sesión</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="loader-container">
    <div id="loader"></div>
  </div>
  