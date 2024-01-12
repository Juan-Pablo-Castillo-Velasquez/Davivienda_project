<?php
class conexiones
{
    private $host = "localhost";
    private $userName = "root";
    private $password = "";
    private $database = "registro";
    private $conexiones;
    public function __construct()
    {
        try {
            if ($this->conexiones) {
                echo "hay erro we";
            } else {
                $this->conexiones = new PDO("mysql:hots=$this->host;dbname=$this->database;", $this->userName, $this->password);
                $this->conexiones->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }
        } catch (PDOException $e) {
            echo "hay un error en" . $e->getMessage();
        }

    }
    public function sql($sqlSentence)
    {
        try {
            if (isset($sqlSentence)) {
                return $this->conexiones->prepare($sqlSentence);

            } else {
                echo "hay un error we";
            }

        } catch (PDOException $e) {
            echo "hay un error en la sentencia";
        }

    }

}
function pines($nombre, $apellidos, $cedula, $telefono,$email, $registro, $direccion)
{
    $InsertPinesConexion = new conexiones();
    $insertPines = $InsertPinesConexion->sql("INSERT INTO usuariosCreados(
        Nombre,
        Apellidos,
        Cedula,
        telefono,
        email,
        registro,
        direccion)
        VALUES
        (
        ? ,
        ?,
        ?,
        ?,?,?,?)");
    $insertPines->bindParam(1, $nombre);
    $insertPines->bindParam(2, $apellidos);
    $insertPines->bindParam(3, $cedula);
    $insertPines->bindParam(4, $telefono);
    $insertPines->bindParam(5, $email);
    $insertPines->bindParam(6, $registro);
    $insertPines->bindParam(7, $direccion);
    $insertPines->execute();

}


function pinesFind()
{
    $verPinesConexion = new conexiones();
    $insertPines = $verPinesConexion->sql("SELECT * FROM usuariosCreados");
    $insertPines->execute();
    return $insertPines->fetchAll(PDO::FETCH_ASSOC);

}
function pinesFindOne($id_find)
{
    $verPinesConexion = new conexiones();
    if ($_POST) { {
            if (isset($id_find)) {
                $verPines = $verPinesConexion->sql("SELECT * FROM usuariosCreados where  cedula=?");
                $verPines->bindParam(1, $id_find);
                $verPines->execute();
                return $verPines->fetchAll(PDO::FETCH_ASSOC);
            }
        }
    }
}


function Delete1($idBorrar)
{
    $deleteconexion = new conexiones();
    $borrarlo = $deleteconexion->sql("DELETE FROM usuariosCreados  where id_usuario= ?");
    $borrarlo->bindParam(1, $idBorrar);
    $borrarlo->execute();
}



//usuarios




function Llaveros($nombre, $Apellidos, $cedula, $fecha,$telefono,$email,$direccion,$reportado)
{
    $InsertLlaverosConexion = new conexiones();
    if (isset($InsertLlaverosConexion)) {
       // Verificar si el usuario ya existe en la base de datos por medio de su cédula
$consultaExistenciaUsuario = $InsertLlaverosConexion->sql("SELECT COUNT(*) AS total FROM usuariosReportados WHERE Cedula = ?");
$consultaExistenciaUsuario->bindParam(1, $cedula);
$consultaExistenciaUsuario->execute();
$resultado = $consultaExistenciaUsuario->fetch(PDO::FETCH_ASSOC);

if ($resultado['total'] === '0') {
    // Si no existe, se puede proceder a la inserción del nuevo registro
    $insertLlaveros = $InsertLlaverosConexion->sql("INSERT INTO usuariosreportados(Nombre, Apellidos, Cedula, fecha, telefono, email, direccion,reportado)
                                                VALUES (?, ?, ?, ?, ?, ?, ?,?)");
    $insertLlaveros->bindParam(1, $nombre);
    $insertLlaveros->bindParam(2, $Apellidos);
    $insertLlaveros->bindParam(3, $cedula);
    $insertLlaveros->bindParam(4, $fecha);
    $insertLlaveros->bindParam(5, $telefono);
    $insertLlaveros->bindParam(6, $email);
    $insertLlaveros->bindParam(7, $direccion);
    $insertLlaveros->bindParam(8, $reportado);
    $insertLlaveros->execute();
    echo "Registro agregado exitosamente.";
} else {
    echo "El usuario con la cédula proporcionada ya existe en la base de datos.";
}

    

    }
}

function LlaverosFind()
{
    $verPinesConexion = new conexiones();
    $insertPines = $verPinesConexion->sql("SELECT * FROM usuariosreportados");
    $insertPines->execute();
    return $insertPines->fetchAll(PDO::FETCH_ASSOC);

}
function llaveroDelete1($idBorrar)
{
    $deleteconexion = new conexiones();
    $borrarlo = $deleteconexion->sql("DELETE FROM usuariosreportados  where id_usuario_reportado= ?");
    $borrarlo->bindParam(1, $idBorrar);
    $borrarlo->execute();
}


function LlaverosFindOne($id_find)
{
    $verPinesConexion = new conexiones();
    if ($_POST) { {
            if (isset($id_find)) {
                $verPines = $verPinesConexion->sql("SELECT * FROM usuariosreportados where  Cedula=?");
                $verPines->bindParam(1, $id_find);
                $verPines->execute();
                return $verPines->fetchAll(PDO::FETCH_ASSOC);
            }
        }
    }
}


function Stikers($fullName, $email, $tipodocumento, $documento,$telefono,$direccion,$ciudad,$loanAmount,$certificado,$loanPurpose)
{
    $InsertLlaverosConexion = new conexiones();
    if (isset($InsertLlaverosConexion)) {
        $insertLlaveros = $InsertLlaverosConexion->sql("INSERT INTO peticiones(
            fullName,
            email,
            tipodocumento,
            documento,
            telefono,
            direccion,
            ciudad,
            loanAmount,
            certificado,
            loanPurpose
            )
            VALUES
            (
            ? ,
            ?,
            ?,
            ?,?,?,?,?,?,?)");
        $insertLlaveros->bindParam(1, $fullName);
        $insertLlaveros->bindParam(2, $email);
        $insertLlaveros->bindParam(3, $tipodocumento);
        $insertLlaveros->bindParam(4, $documento);
        $insertLlaveros->bindParam(5, $telefono);
        $insertLlaveros->bindParam(6, $direccion);
        $insertLlaveros->bindParam(7, $ciudad);
        $insertLlaveros->bindParam(8, $loanAmount);
        $insertLlaveros->bindParam(9, $certificado);
        $insertLlaveros->bindParam(10, $loanPurpose);
        $insertLlaveros->execute();
    }
}

function StikersFind()
{
    $verPinesConexion = new conexiones();
    $insertPines = $verPinesConexion->sql("SELECT * FROM peticiones");
    $insertPines->execute();
    return $insertPines->fetchAll(PDO::FETCH_ASSOC);

}
function StikersDelete1($idBorrar)
{
    $deleteconexion = new conexiones();
    $borrarlo = $deleteconexion->sql("DELETE FROM peticiones  where id_registro_usuarios= ?");
    $borrarlo->bindParam(1, $idBorrar);
    $borrarlo->execute();
}


function StikersFindOne($id_find)
{
    $verPinesConexion = new conexiones();
    if ($_POST) { {
            if (isset($id_find)) {
                $verPines = $verPinesConexion->sql("SELECT * FROM Peticiones where  documento=?");
                $verPines->bindParam(1, $id_find);
                $verPines->execute();
                return $verPines->fetchAll(PDO::FETCH_ASSOC);
            }
        }
    }
}





function Imanes($nombre_producto, $descripcion, $precio_unitario, $imagen)
{
    $InsertLlaverosConexion = new conexiones();
    if (isset($InsertLlaverosConexion)) {
        $insertLlaveros = $InsertLlaverosConexion->sql("INSERT INTO productos_Imanes(
            nombre_producto,
            descripcion,
            precio_unitario,
            imagen)
            VALUES
            (
            ? ,
            ?,
            ?,
            ?)");
        $insertLlaveros->bindParam(1, $nombre_producto);
        $insertLlaveros->bindParam(2, $descripcion);
        $insertLlaveros->bindParam(3, $precio_unitario);
        $insertLlaveros->bindParam(4, $imagen);
        $insertLlaveros->execute();
    }
}

function ImanesFind()
{
    $verPinesConexion = new conexiones();
    $insertPines = $verPinesConexion->sql("SELECT * FROM productos_Imanes");
    $insertPines->execute();
    return $insertPines->fetchAll(PDO::FETCH_ASSOC);

}
function ImanesDelete1($idBorrar)
{
    $deleteconexion = new conexiones();
    $borrarlo = $deleteconexion->sql("DELETE FROM productos_Imanes  where id_Imanes= ?");
    $borrarlo->bindParam(1, $idBorrar);
    $borrarlo->execute();
}


function ImanesFindOne($id_find)
{
    $verPinesConexion = new conexiones();
    if ($_POST) { {
            if (isset($id_find)) {
                $verPines = $verPinesConexion->sql("SELECT * FROM productos_Imanes where  descripcion=?");
                $verPines->bindParam(1, $id_find);
                $verPines->execute();
                return $verPines->fetchAll(PDO::FETCH_ASSOC);
            }
        }
    }
}
function innerjoin(){
    $newjoin=new conexiones();
    $resultjoin=$newjoin->sql("SELECT usuariosregistro.*, compras_productos.*
    FROM usuariosregistro
    INNER JOIN compras_productos ON usuariosregistro.id = compras_productos.id");
    $resultjoin->execute();
    return $resultjoin->fetchAll(PDO::FETCH_ASSOC);
}