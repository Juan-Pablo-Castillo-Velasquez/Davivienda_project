<?php
require("./particions/header.php");
require(dirname(__DIR__) . "/modules/conexion.php");
?>
<h1>Sistema de registro usuarios</h1>
<div class="table-responsive">
    <table class="table table-dark table-striped">
        <thead>
            <tr>

                <th scope="col"> id registro</th>
                <th scope="col">Nombre</th>
                <th scope="col">email</th>
                <th scope="col">nombre_producto</th>
                <th scope="col">cantidad</th>
                <th scope="col">precio_unitario</th>
                <th scope="col">total</th>
            </tr>
        </thead>
        <?php $dates = innerjoin();   foreach ($dates as $columna) { ?>

        <tbody>
            <tr class="">
              
              
                    <td>
                        <?php echo $columna["id"]; ?>
                    </td>
                    <td>
                        <?php echo $columna["nombre"]; ?>
                    </td>
                    <td>
                        <?php echo $columna["email"]; ?>
                    </td>
                    <td>
                        <?php echo $columna["nombre_producto"]; ?>
                    </td>

                    <td>
                        <?php echo $columna["cantidad"]; ?>
                    </td>
                    <td>
                        <?php echo $columna["precio_unitario"]; ?>
                    </td>
                    <td>
                        <?php echo $columna["total"]; ?>
                    </td>

            </tr>
        </tbody>
        <?php } ?>

    </table>
</div>


<?php
require("./particions/fotter.php"); ?>