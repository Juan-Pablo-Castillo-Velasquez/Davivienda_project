<?php
require("./particions/header.php");
require(dirname(__DIR__) . "/modules/conexion.php");
if ($_POST) {
    if (isset($_POST["Nombre"]) && isset($_POST["Apellidos"]) && isset($_POST["cedula"]) 
    && isset($_POST["fecha"])
    && isset($_POST["telefono"])
    && isset($_POST["email"])
    && isset($_POST["direccion"])
    
    ) {
        $nombre = $_POST["Nombre"];
        $Apellidos = $_POST["Apellidos"];
        $cedula = $_POST["cedula"];
        $fecha = $_POST["fecha"];
        $telefono = $_POST["telefono"];
        $email = $_POST["email"];
        $direccion = $_POST["direccion"];
        $reportado = $_POST["reporte"];
        Llaveros($nombre, $Apellidos, $cedula, $fecha,$telefono,$email,$direccion,$reportado);
    }
    if (isset($_POST["borrando"])) {
        $idBorrar = $_POST["borrando"];
        llaveroDelete1($idBorrar);
    }
}
?>

<div class="row justify-content-center align-items-center g-2">
    <div class="col"></div>
    <div class="col">
        <form method="post" action="reportes.php">
            <label style="font-weight: lighter; font-size: 20px; text-align:center;" for="" class="form-label">Buscar Persona reportada</label>
            <input style="padding: 10px;min-width: 300px; " type="text" name="buscandoxd" placeholder="Buscar @example">
            <button style="min-width: 100px;" type="submit" class="btn btn-danger" role="button">Buscar </button>
        </form>
    </div>
    <div class="col"></div>

</div>

<br>

<div class="container">
    <div class="row">
        <div class="col-4">
            <h4>Reportes de personas </h1>
            <div class="row justify-content-center align-items-center g-2">
                <div class="col">
                    <div class="mb-3">
                        <form  class="formularioReport" method="post" action="reportes.php">
                            <label style="color:red;font-weight: bolder;" for="" class="form-label">*Nombre de persona Reportada</label>
                            <input required="" type="text" class="form-control" name="Nombre" id=""
                                aria-describedby="helpId" placeholder="Nombre reportado">
                            <label style="color:red;font-weight: bolder;"for="" class="form-label">*Apellidos Reportada</label>
                            <input required="" type="text" class="form-control" name="Apellidos" id=""
                                aria-describedby="helpId" placeholder="Apellidos de persona Reportada">
                            <label for=""style="color:red;font-weight: bolder;" class="form-label">*cedula Reportada</label>
                            <input required="" type="text" class="form-control" name="cedula" id=""
                                aria-describedby="helpId" placeholder="cedula de persona Reportada">
                            <label  style="color:red;font-weight: bolder;" for="" class="form-label">* fecha de registro</label>
                            <input required="" type="date" class="form-control" name="fecha" id=""
                                aria-describedby="helpId" placeholder="">
                                <label  style="color:red;font-weight: bolder;" for=""   class="form-label">*Telefono </label>
                            <input style="color:red;font-weight: bolder;" required="" type="tel" class="form-control" name="telefono" id=""
                                aria-describedby="helpId" placeholder="Telefono">
                                <label for=""  style="color:red;font-weight: bolder;" class="form-label">*email</label>
                            <input  style="color:red;font-weight: bolder;" required="" type="email" class="form-control" name="email" id=""
                                aria-describedby="helpId" placeholder="email">
                                <label for=""  style="color:red;font-weight: bolder;" class="form-label">*Direccion</label>
                            <input  style="color:red;font-weight: bolder;" required="" type="text" class="form-control" name="direccion" id=""
                                aria-describedby="helpId" placeholder="direccion">
                                <label for="" style="color:red;font-weight: bolder;" class="form-label">*Estado</label>
<input style="color:red;font-weight: bolder;" required="" type="text" class="form-control" value="reportado" name="reporte" id="" aria-describedby="helpId" placeholder="direccion" readonly>

                                
                            <br>
                            <button type="button"  data-bs-target="#exampleModal" data-bs-toggle="modal" class="btn btn-danger" role="button">Agregar Reporte</button>
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"> Registrar usuario</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div style="text-align: center;" class="modal-body">
        <p style="font-weight: lighter; font-weight:600;" >porfavor recuerda que todos los campos son requerido verifica muy bien antes de enviarlos</p>
        <img src="https://cdn.pixabay.com/photo/2014/04/02/10/38/sign-304093_1280.png" height="50px" width="50px" >
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Cerrar ventana</button>
        <button type="submit"id="sure" class="btn btn-warning">Agregar</button>
      </div>
    </div>
  </div>
</div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-8 " style="margin:40px 0px 0px 0px;">
            <h1 style="text-align: center;font-weight: bolder;">Sistema de registro de personas reportadas</h1>
            <?php
            if ($_POST) {
                if (isset($_POST['buscandoxd'])) {
                    $a = LlaverosFindOne($_POST["buscandoxd"]);
                    if ($a) {
            ?>
                        <div class="table-responsive">
                            <table class="table table-danger table-striped">
                                <thead>
                                    <tr>
                                    <th scope="col">Nombre</th>
                                <th scope="col">Apellidos</th>
                                <th scope="col">Cedula</th>
                                <th scope="col">fecha</th>
                                <th scope="col">telefono</th>
                                <th scope="col">email</th>
                                <th scope="col">direccion</th>
                                <th scope="col">reportado</th>
                                <th scope="col">delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                    <td>
                                        <?php echo $a[0]["Nombre"]; ?>
                                    </td>
                                    <td>
                                        <?php echo $a[0]["Apellidos"]; ?>
                                    </td>
                                    <td>
                                        <?php echo $a[0]["Cedula"]; ?>
                                    </td>
                                    <td>
                                        <?php echo $a[0]["fecha"]; ?>
                                    </td>
                                    <td>
                                        <?php echo $a[0]["telefono"]; ?>
                                    </td>
                                    <td>
                                        <?php echo $a[0]["email"]; ?>
                                    </td>
                                    <td>
                                        <?php echo $a[0]["direccion"]; ?>
                                    </td>
                                    <td>
                                        <?php echo $a[0]["reportado"]; ?>
                                    </td>
                                        <td>
                                            <form action="reportado.php" method="post">
                                                <input name="borrando" type="hidden" value="<?php echo $a[0]["id_usuario_reportado"]; ?>" placeholder="">
                                                <button id="modificar" type="submit" class="btn btn-danger">delete</button>
                                            </form>
                                        </td>
                                       
                                    </tr>
                                </tbody>
                            </table>
                        </div>
            <?php
                    }
                }
            }
            ?>

            <?php
            if (isset($a)) {
                if (count($a) < 1) {
            ?>
                    <h1>no encontrado</h1>
            <?php
                }
            } else {
            ?>
                <div class="table-responsive">
                    <table class="table table-dark   table-striped">
                       <thead class="thead-dark">
                            <caption>Usuarios reportados</caption>
                            <tr>
                                <th  scope="col">Nombre</th>
                                <th  scope="col">Apellidos</th>
                                <th  scope="col">Cedula</th>
                                <th  scope="col">fecha</th>
                                <th  scope="col">telefono</th>
                                <th  scope="col">email</th>
                                <th  scope="col">direccion</th>
                                <th  scope="col">reportado</th>
                                <th  scope="col">delete</th>
                            </tr>
                            </thead>
                        </thead>
                        <tbody class="table-group-divider">
                            <?php
                            $x = LlaverosFind();
                            foreach ($x as $row) {
                            ?>
                                <tr>
                                    <td >
                                        <?php echo $row["Nombre"]; ?>
                                    </td>
                                    <td>
                                        <?php echo $row["Apellidos"]; ?>
                                    </td>
                                    <td>
                                        <?php echo $row["Cedula"]; ?>
                                    </td>
                                    <td>
                                        <?php echo $row["fecha"]; ?>
                                    </td>
                                    <td>
                                        <?php echo $row["telefono"]; ?>
                                    </td>
                                    <td>
                                        <?php echo $row["email"]; ?>
                                    </td>
                                    <td>
                                        <?php echo $row["direccion"]; ?>
                                    </td>
                                    <td>
                                        <?php echo $row["reportado"]; ?>
                                    </td>
                                    <td>
                                        <form action="reportes.php" method="post">
                                            <input name="borrando" type="hidden" value="<?php echo $row["id_usuario_reportado"]; ?>" placeholder="">
                                            <button id="modificar" type="submit" class="btn btn-danger">delete</button>
                                        </form>
                                    </td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            <?php
            }
            ?>
            <a name="" id="" class="btn btn-danger" href="reportes.php" role="button">Ver todos</a>
        </div>
    </div>
</div>

<script>
const sure=document.querySelector("#sure")
sure.addEventListener("click",(e)=>{
    const x=confirm("seguro que desea agregar este reporte?")
    if(x){
        alert("reporte agregado a la base de datos")
    }else{
        alert("reporte no agregado a la base de datos")
        e.preventDefault()
    }
})

</script>
<?php
require("./particions/fotter.php");
?>
