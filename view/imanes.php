<?php
require("./particions/header.php");
require(dirname(__DIR__) . "/modules/conexion.php");

if ($_POST) {
    if (isset($_POST["nombre_producto"]) && isset($_POST["descripcion"]) && isset($_POST["precio_unitario"]) && isset($_POST["imagen"])) {
        $nombre = $_POST["nombre_producto"];
        $descripcion = $_POST["descripcion"];
        $precio_unitario = $_POST["precio_unitario"];
        $imagen = $_POST["imagen"];
        Imanes($nombre, $descripcion, $precio_unitario, $imagen);
    }
    if (isset($_POST["borrando"])) {
        $idBorrar = $_POST["borrando"];
        ImanesDelete1($idBorrar);
    }
}

?>

<div class="row justify-content-center align-items-center g-2">
    <div class="col"></div>
    <div class="col">
        <form method="post" action="imanes.php">
            <label style="font-weight: lighter; font-size: 20px;" for="" class="form-label">Buscar producto</label>
            <input style="padding: 5px;" type="text" name="buscandoxd" placeholder="Buscar @example">
            <button type="submit" class="btn btn-success" role="button">Buscar</button>
        </form>
    </div>
</div>


<div class="container">
    <div class="row">
        <div class="col-4">
            <h1>Imanes</h1>
            <div class="row justify-content-center align-items-center g-2">
                <div class="col">
                    <div class="mb-3">
                        <form method="post" action="imanes.php">
                            <label for="" class="form-label">nombre_producto</label>
                            <input required="" type="text" class="form-control" name="nombre_producto" id=""
                                aria-describedby="helpId" placeholder="">
                            <label for="" class="form-label">descripcion</label>
                            <input required="" type="text" class="form-control" name="descripcion" id=""
                                aria-describedby="helpId" placeholder="">
                            <label for="" class="form-label">precio_unitario</label>
                            <input required="" type="text" class="form-control" name="precio_unitario" id=""
                                aria-describedby="helpId" placeholder="">
                            <label for="" class="form-label">imagen</label>
                            <input required="" type="text" class="form-control" name="imagen" id=""
                                aria-describedby="helpId" placeholder="">
                            <br>
                            <button type="submit" class="btn btn-success" role="button">Agregar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-8 " style="margin:40px 0px 0px 0px;">

            <h1 style="text-align: center;font-weight: bolder;">Sistema de registro imanes</h1>
            <?php
            if ($_POST) {
                if (isset($_POST['buscandoxd'])) {
                    $a = ImanesFindOne($_POST["buscandoxd"]);
                    if ($a) {
                        ?>
                        <div class="table-responsive">
                            <table class="table table-danger table-striped">
                                <thead>
                                    <tr>
                                        <th>Nombre del Producto</th>
                                        <th>descripcion</th>
                                        <th>precio unitario</th>
                                        <th>Imagen</th>
                                        <th>delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td scope="col">
                                            <?php echo $a[0]["nombre_producto"]; ?>
                                        </td>
                                        <td scope="col">
                                            <?php echo $a[0]["descripcion"]; ?>
                                        </td>
                                        <td scope="col">
                                            <?php echo $a[0]["precio_unitario"]; ?>
                                        </td>
                                        <td scope="col">
                                            <?php echo $a[0]["imagen"]; ?>
                                        </td>
                                        <td scope="col">
                                            <form action="imanes.php" method="post">
                                                <input name="borrando" type="hidden" value="<?php echo $a[0]["id_Imanes"]; ?>"
                                                    placeholder="">
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

            <?php if (isset($a)) {
                if (count($a) < 1) {
                    ?>
                    <h1>no encontrado</h1>

                <?php }
            } else { ?>
                <div class="table-responsive">
                    <table class="table table-dark table-striped">
                        <caption>Productos Stikers</caption>
                        <thead>
                            <tr>
                                <th scope="col">Nombre del Producto</th>
                                <th scope="col">Descripción</th>
                                <th scope="col">Precio unitario</th>
                                <th scope="col">Imagen</th>
                                <th scope="col">Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $x = ImanesFind();
                            foreach ($x as $row) {
                                ?>
                                <tr>
                                    <td><?php echo $row["nombre_producto"]; ?></td>
                                    <td><?php echo $row["descripcion"]; ?></td>
                                    <td><?php echo $row["precio_unitario"]; ?></td>
                                    <td><?php echo $row["imagen"]; ?></td>
                                    <td>
                                        <form action="imanes.php" method="post">
                                            <input name="borrando" type="hidden" value="<?php echo $row["id_Imanes"]; ?>">
                                            <button id="modificar" type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            <?php } ?>
            <a class="btn btn-danger" href="imanes.php" role="button">Ver todos</a>

        </div>
    </div>

</div>

<?php
require("./particions/fotter.php");
?>
