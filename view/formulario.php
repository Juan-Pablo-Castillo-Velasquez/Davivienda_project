<?php
require(dirname(__DIR__) . "/modules/conexion.php");
if ($_POST) {
    if (isset($_POST["fullName"]) && isset($_POST["email"]) && isset($_POST["tipodocumento"]) 
    && isset($_POST["documento"])
    && isset($_POST["telefono"])
    && isset($_POST["direccion"])
    && isset($_POST["ciudad"]) 
    && isset($_POST["loanAmount"])
    && isset($_POST["certificado"])
    && isset($_POST["loanPurpose"])
    ){
        $fullName = $_POST["fullName"];
        $email = $_POST["email"];
        $tipodocumento = $_POST["tipodocumento"];
        $telefono = $_POST["telefono"];
        $direccion = $_POST["direccion"];
        $ciudad = $_POST["ciudad"];
        $loanAmount= $_POST["loanAmount"];
        $documento = $_POST["documento"];
        $certificado = $_POST["certificado"];
        $loanPurpose = $_POST["loanPurpose"];
        Stikers($fullName, $email, $tipodocumento, $documento,$telefono,$direccion,$ciudad,$loanAmount,$certificado,$loanPurpose);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
      body {
        background-image: url('background_image.jpg'); /* Replace with your background image URL */
        background-size: cover;
      }
#exampleModal{
  background-color: rgba(0, 0, 0, 0.5);
}
.modal-content {
    background-color: rgba(0, 0, 0, 0.10); /* Cambia el valor alfa para ajustar la opacidad */
    color: white; /* Color del texto dentro del modal */
}
      .custom-form-container {
        max-width: 500px;
        margin: 0 auto;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        background-color: rgba(0, 0, 0, 0.83);
      }
      #formex input:hover{
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
      }
      #formex input{
background-color: whitesmoke;
color: black;
      }
      #formex textarea{
background-color: whitesmoke;
color: black;
      }

      .custom-form-container h1 {
        font-family: "Arial", sans-serif;
        text-align: center;
        margin-bottom: 20px;
        color: #fff;
      }

      .custom-form-container label,
      .custom-form-container input[type="text"],
      .custom-form-container input[type="email"],
      .custom-form-container select,
      .custom-form-container textarea,
      .custom-form-container .custom-btn {
        width: 100%;
        padding: 10px;
        font-size: 16px;
        border: 1px solid #ccc;
        font-weight: bold;
        text-transform: uppercase;
        border-radius: 5px;
        margin-bottom: 10px;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        color: #fff;
        background-color: transparent;
      }

      .custom-form-container select {
        appearance: none;
        -webkit-appearance: none;
        padding-right: 30px;
        background: url("") no-repeat right center / 20px;
      }

      .custom-form-container textarea {
        resize: vertical;
      }

      .custom-form-container .custom-btn {
        display: block;
        width: 100%;
        padding: 12px 20px;
        font-size: 16px;
        background-color: #4caf50;
        color: #fff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        transition: background-color 0.3s ease;
      }

      .custom-form-container .custom-btn:hover {
        background-color: #45a049;
      }

      #loanPurpose {
        text-transform: lowercase;
      }

      #edit-container {
        background-color: rgba(0, 0, 0, 0.5);
        color: white;
        background-image: url('https://d9zuehkdkxba0.cloudfront.net/wp-content/uploads/2019/10/Davivienda-1.jpg');
        background-color: transparent;
      }

      #become {
        background-color: transparent;
        background-color: rgba(0, 0, 0, 0.5);
      }

      #documentType option {
        color: black;
      }

    </style>
</head>
<body>
<?php require(dirname(__DIR__) . "/view/particions/usuarioHeade.php"); ?>
<div id="edit-container">
  <div id="become">x</div>
  <div class="custom-form-container mt-5">
    <h1>Solicitud de Préstamo</h1>
    <form id="formex" action="formulario.php" method="post">
      <div class="mb-3">
        <label for="fullName">Nombre completo</label>
        <input type="text" id="fullName" name="fullName" placeholder="Ingrese su nombre completo" required>
      </div>
      <div class="mb-3">
        <label for="email">Correo electrónico</label>
        <input type="email" id="email" name="email" placeholder="Ingrese su correo electrónico" required>
      </div>
      <div class="mb-3">
        <label for="documentType">Tipo de documento</label>
        <select id="documentType" name="tipodocumento" required>
          <option value="">Seleccionar...</option>
          <option value="cedula">Cédula</option>
          <option value="pasaporte">Pasaporte</option>
          <option value="extranjeria">Extranjería</option>
          <!-- Agrega otras opciones según sea necesario -->
        </select>
      </div>
      <div class="mb-3">
        <label for="documento">Número de documento</label>
        <input type="text" id="documento" name="documento" placeholder="Ingrese su número de documento" required>
      </div>
      <div class="mb-3">
        <label for="telefono">Teléfono</label>
        <input type="text" id="telefono" name="telefono" placeholder="Ingrese su número de teléfono" required>
      </div>
      <div class="mb-3">
        <label for="direccion">Dirección</label>
        <input type="text" id="direccion" name="direccion" placeholder="Ingrese su dirección" required>
      </div>
      <div class="mb-3">
        <label for="ciudad">Ciudad</label>
        <input type="text" id="ciudad" name="ciudad" placeholder="Ingrese su ciudad" required>
      </div>
      <div class="mb-3">
        <label for="loanAmount">Monto del préstamo</label>
        <input type="number" id="loanAmount" name="loanAmount" placeholder="Ingrese el monto del préstamo" required>
      </div>
      <div class="mb-3">
        <label for="certificado">Certificado bancario</label>
        <input type="file" id="certificado" name="certificado" required>
      </div>
      <div class="mb-3">
        <label for="loanPurpose">Propósito del préstamo</label>
        <textarea id="loanPurpose" name="loanPurpose" rows="3" placeholder="Ingrese el propósito del préstamo" required></textarea>
      </div>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div  class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar Peticion<span class="octicon octicon-arrow-right"></span></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div  class="modal-body">
       <p style="text-align: center;font-weight: inherit;">Estas apunto de agregar una peticion de prestamo</p>
     <img style="display: block; margin:auto;" src="https://cdn-icons-png.flaticon.com/512/4231/4231891.png" height="100px" width="100px" >
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">cerrar</button>
        <button type="submit" id="verificacion" class="btn btn-primary">Agregar peticion</button>
      </div>
    </div>
  </div>
</div>
    </form>
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Click para agregar
</button>


  </div>
</div>

<?php require(dirname(__DIR__) . "/view/particions/fotter.php")?>

