<?php
require("./particions/header.php");
require(dirname(__DIR__) . "/modules/conexion.php");

if ($_POST) {
    
    if (isset($_POST["borrando"])) {
        $idBorrar = $_POST["borrando"];
        StikersDelete1($idBorrar);
    }
}

?>

<div class="row justify-content-center align-items-center g-2">
    <div class="col"></div>
    <div class="col">
        <form method="post" action="Peticiones.php">
            <label style="font-weight: lighter; font-size: 20px;" for="" class="form-label">Buscar peticion</label>
            <input style="padding: 5px;" type="text" name="buscandoxd" placeholder="Buscar @cedula">
            <button type="submit" class="btn btn-success" role="button">Buscar </button>
        </form>
    </div>
</div>



        <div class="col-12 " style="margin:40px 0px 0px 0px;">

            <h1 style="text-align: center;font-weight: bolder;">Sistema de registro de peticiones</h1>
            <?php
            if ($_POST) {
                if (isset($_POST['buscandoxd'])) {
                    $a = StikersFindOne($_POST["buscandoxd"]);
                    if ($a) {
                        ?>
                        <div class="table-responsive">
                            <table class="table table-danger table-striped">
                                <thead>
                                    <tr>
                                
                                        <th scope="col">FullName</th>
                                        <th scope="col">email</th>
                                        <th scope="col">tipodocumento</th>
                                        <th scope="col">documento</th>
                                        <th scope="col">telefono</th>
                                        <th scope="col">direccion</th>
                                        <th scope="col">ciudad</th>
                                        <th scope="col">loanAmount</th>
                                        <th scope="col">certificado</th>
                                        <th scope="col">peticion</th>
                                        <th scope="col">delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                    <td>
                                            <?php echo $a[0]["fullName"]; ?>
                                        </td>
                                        <td>
                                            <?php echo $a[0]["email"]; ?>
                                        </td>
                                        <td>
                                            <?php echo $a[0]["tipodocumento"]; ?>
                                        </td>
                                        <td>
                                            <?php echo $a[0]["documento"]; ?>
                                        </td>
                                        <td>
                                            <?php echo $a[0]["telefono"]; ?>
                                        </td>
                                        <td>
                                            <?php echo $a[0]["direccion"]; ?>
                                        </td>
                                        <td>
                                            <?php echo $a[0]["ciudad"]; ?>
                                        </td>
                                        <td>
                                            <?php echo $a[0]["loanAmount"]; ?>
                                        </td>
                                        <td>
                                            <?php echo $a[0]["certificado"]; ?>
                                        </td>
                                        <td>
                                            <?php echo $a[0]["loanPurpose"]; ?>
                                        </td>
                                        <td>
                                        <form action="Peticiones.php" method="post">
                                            <input name="borrando" type="hidden" value="<?php echo $a[0]["id_registro_usuarios"]; ?>"
                                                placeholder="">
                                            <button  id="modificar" type="submit" class="btn btn-danger">delete</button>
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

                <?php }}
            else { ?>
                <div class="table-responsive">
                    <table class="table table-dark table-striped">
                        <thead class="table-light">
                            <caption>Peticiones</caption>
                            <tr>
                            <th scope="col">FullName</th>
                                        <th scope="col">email</th>
                                        <th scope="col">tipodocumento</th>
                                        <th scope="col">documento</th>
                                        <th scope="col">telefono</th>
                                        <th scope="col">direccion</th>
                                        <th scope="col">ciudad</th>
                                        <th scope="col">loanAmount</th>
                                        <th scope="col">certificado</th>
                                        <th scope="col">peticion</th>
                                        <th scope="col">delete</th>
                            </tr>
                        </thead>
                        <tbody class="table-group-divider">
                            <?php
                            $x = StikersFind();
                            foreach ($x as $row) {
                                ?>
                                <tr >
                                <td>
                                            <?php echo $row["fullName"]; ?>
                                        </td>
                                        <td>
                                            <?php echo $row["email"]; ?>
                                        </td>
                                        <td>
                                            <?php echo $row["tipodocumento"]; ?>
                                        </td>
                                        <td>
                                            <?php echo $row["documento"]; ?>
                                        </td>
                                        <td>
                                            <?php echo $row["telefono"]; ?>
                                        </td>
                                        <td>
                                            <?php echo $row["direccion"]; ?>
                                        </td>
                                        <td>
                                            <?php echo $row["ciudad"]; ?>
                                        </td>
                                        <td>
                                            
                                            <?php echo $row["loanAmount"]; ?>
                                        </td>
                                        <td>
                                            
                                            <?php echo $row["certificado"]; ?>
                                        </td>
                                        <td>
                                        <button data-bs-toggle="modal" data-bs-target="#exampleModal" type="button" class="btn btn-success">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
  <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"></path>
  <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"></path>
</svg>
                
              </button>
              
                                        </td>
                                        <td>
                                        <form action="Peticiones.php" method="post">
                                            <input name="borrando" type="hidden" value="<?php echo $row["id_registro_usuarios"]; ?>"
                                                placeholder="">
                                            <button  id="modificar" type="submit" class="btn btn-danger">delete</button>
                                        </form>

                                        </td>

                                </tr>
                                
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">usuario  peticion</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <h5 style="color:whitesmoke;font-weight: bold;background-color: black;padding:12px;">¡Aqui puedes observar lo que el usuario describa!</h1>
      <p><b><?php echo $row["fullName"];  ?></b>,  Dice   <?php echo $row["loanPurpose"]; ?></p>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
                            <?php } ?>
                        </tbody>
                    </table>


                </div>
            <?php } ?>
            <a name="" id="" class="btn btn-danger" href="Peticiones.php" role="button">Ver todos</a>

        </div>

    </div>

</div>




<?php
require("./particions/fotter.php");
?>