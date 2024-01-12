<?php
require("./particions/header.php");
require(dirname(__DIR__) . "/modules/conexion.php");

if ($_POST) {
    if (
        isset($_POST["Nombre"]) && isset($_POST["apellidos"]) && isset($_POST["cedula"])
        && isset($_POST["telefono"])
        && isset($_POST["email"])
        && isset($_POST["registro"])
        && isset($_POST["direccion"])

    ) {
        $nombre = $_POST["Nombre"];
        $apellidos = $_POST["apellidos"];
        $cedula = $_POST["cedula"];
        $telefono = $_POST["telefono"];
        $email = $_POST["email"];
        $registro = $_POST["registro"];
        $direccion = $_POST["direccion"];
        pines($nombre, $apellidos, $cedula, $telefono, $email, $registro, $direccion);
    }
    if (isset($_POST["borrando"])) {
        $idBorrar = $_POST["borrando"];
        Delete1($idBorrar);
    }
}

?>

<div class="row justify-content-center align-items-center g-2">
    <div class="col"></div>
    <div class="col">
        <form method="post" action="usuarios.php">
            <label style="font-weight: lighter; font-size: 20px;" for="" class="form-label">Buscar Persona</label>
            <input style="padding: 5px;" type="text" name="buscandoxd" placeholder="Buscar @">
            <button type="submit" class="btn btn-success" role="button">Buscar Persona </button>
        </form>
    </div>
</div>


<div class="container">
    <div class="row">
        <div class="col-4">
            <h1 style="font-size: 30px;">Agrega usuarios </h1>
            <div class="row justify-content-center align-items-center g-2">
                <div class="col">
                    <div class="mb-3">
                        <form class="formularioInv" method="post" action="usuarios.php">
                            <label for="" style="font-weight: bolder; color:green;" class="form-label">*Nombre Persona</label>
                            <input required="" style="font-weight: bolder; color:black;" type="text" class="form-control" name="Nombre" id="" aria-describedby="helpId" placeholder="Nombre persona">
                            <label for="" style="font-weight: bolder; color:green;" class="form-label">*Apellidos persona</label>
                            <input required="" style="font-weight: bolder; color:black;" type="text" class="form-control" name="apellidos" id="" aria-describedby="helpId" placeholder="Apellidos">
                            <label for="" style="font-weight: bolder; color:green;" class="form-label">*cedula persona</label>
                            <input required="" style="font-weight: bolder; color:black;" type="text" class="form-control" name="cedula" id="" aria-describedby="helpId" placeholder="cedula persona">
                            <label for="" style="font-weight: bolder; color:green;" class="form-label">*telefono</label>
                            <input required="" style="font-weight: bolder; color:black;" type="text" class="form-control" name="telefono" id="" aria-describedby="helpId" placeholder="Telefono">
                            <label for="" style="font-weight: bolder; color:green;" class="form-label">*email</label>
                            <input required="" style="font-weight: bolder; color:black;" type="text" class="form-control" name="email" id="" aria-describedby="helpId" placeholder="juan@example.com">
                            <label for="" style="font-weight: bolder; color:green;" class="form-label">*fecha registro</label>
                            <input required="" style="font-weight: bolder; color:black;" type="date" class="form-control" name="registro" id="" aria-describedby="helpId" placeholder="juan@example.com">
                            <label for="" style="font-weight: bolder; color:green;" class="form-label">*Direccion</label>
                            <input required="  " type="text" class="form-control" name="direccion" id="" aria-describedby="helpId" style="font-weight: bolder; color:black;" placeholder="direccion">

                            <br>
                            <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-success" role="button">Agregar</button>
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Añadir una persona</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <h6 style="color:black;font-weight: inherit;text-align: center;">¿Estas apunto de agregar a esta personas? </h6>
                                        <img  style="display: block; margin:auto;" src="https://cdn-icons-png.flaticon.com/512/2921/2921226.png" height="100px" width="100px" >
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-success">Agregar</button>
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

            <h1 style="text-align: center;font-weight: bolder;">Sistema de registro personas</h1>
            <?php
            if ($_POST) {
                if (isset($_POST['buscandoxd'])) {
                    $a = pinesFindOne($_POST["buscandoxd"]);
                    if ($a) {
            ?>
                        <div class="table-responsive table ">
                            <table class="table table-danger table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">Nombre </th>
                                        <th scope="col">Apellidos </th>
                                        <th scope="col">cedula</th>
                                        <th scope="col">telefono</th>
                                        <th scope="col">email</th>
                                        <th scope="col">registro</th>
                                        <th scope="col">direccion</th>
                                        <th scope="col">delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($a as $find1) { ?>
                                        <tr>
                                            <td>
                                                <?php print_r($find1["Nombre"]); ?>
                                            </td>
                                            <td>
                                                <?php echo $find1["Apellidos"]; ?>
                                            </td>
                                            <td>
                                                <?php echo $find1["Cedula"]; ?>
                                            </td>
                                            <td>
                                                <?php echo $find1["telefono"]; ?>
                                            </td>
                                            <td>
                                                <?php echo $find1["email"]; ?>
                                            </td>
                                            <td>
                                                <?php echo $find1["registro"]; ?>
                                            </td>
                                            <td>
                                                <?php echo $find1["direccion"]; ?>
                                            </td>
                                            <td>
                                                <form action="usuarios.php" method="post">
                                                    <input name="borrando" type="hidden" value="<?php echo $a[0]["id_usuario"]; ?>" placeholder="">
                                                    <button id="modificar" type="submit" class="btn btn-danger">delete</button>
                                                </form>

                                            </td>

                                        </tr>
                                    <?php } ?>

                                </tbody>
                            </table>
                        </div>
            <?php
                    }
                }
            }
            ?>

            <?php if (isset($a)) {
                if (count($a) < 1) {
            ?>
                    <h1>no encontrado</h1>

                <?php }
            } else { ?>
                <div class="table-responsive">
                    <table class="table table-dark table-striped">
                        <thead class="table-light">
                            <caption>Productos pines</caption>
                            <tr>
                                <th scope="col">Nombre </th>
                                <th scope="col">Apellidos </th>
                                <th scope="col">cedula</th>
                                <th scope="col">telefono</th>
                                <th scope="col">email</th>
                                <th scope="col">registro</th>
                                <th scope="col">direccion</th>
                                <th scope="col">delete</th>
                            </tr>
                        </thead>
                        <tbody class="table-group-divider">
                            <?php
                            $x = pinesFind();
                            foreach ($x as $row) {
                            ?>
                                <tr>
                                    <td>
                                        <?php print_r($row["Nombre"]); ?>
                                    </td>
                                    <td>
                                        <?php echo $row["Apellidos"]; ?>
                                    </td>
                                    <td>
                                        <?php echo $row["Cedula"]; ?>
                                    </td>
                                    <td>
                                        <?php echo $row["telefono"]; ?>
                                    </td>
                                    <td>
                                        <?php echo $row["email"]; ?>
                                    </td>
                                    <td>
                                        <?php echo $row["registro"]; ?>
                                    </td>
                                    <td>
                                        <?php echo $row["direccion"]; ?>
                                    </td>

                                    <td>
                                        <form action="usuarios.php" method="post">
                                            <input name="borrando" type="hidden" value="<?php echo $row["id_usuario"]; ?>" placeholder="">
                                            <button id="modificar" type="submit" class="btn btn-danger">delete</button>
                                        </form>
                                    </td>

                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>


                </div>
            <?php } ?>
            <a name="" id="" class="btn btn-danger" href="usuarios.php" role="button">Ver todos</a>

        </div>

    </div>

</div>




<?php
require("./particions/fotter.php");
?>