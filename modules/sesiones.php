<?php
class Iniciar
{
    private $host = "localhost";
    private $user = "root";
    private $password = "";
    private $database = "sesiones";
    private $conexion;
    function __construct()
    {
        $this->conexion = new PDO("mysql:host=$this->host;dbname=$this->database;", $this->user, $this->password);
        $this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        try {
            if ($this->conexion) {
                echo "conexion a la base de datos correcta";
            } else {
                echo "hay un problema al obtener la base de datos";
            }
        } catch (PDOException $ERROR) {
            echo "hay un eroor en la linea" . $ERROR->getMessage();
        }
    }
    public function sql($sqlsetence)
    {
        return $this->conexion->prepare($sqlsetence);
    }
}
function SESION($username, $passwordcliente)
{
    $newconexion = new Iniciar();
    try {
        $resultado = $newconexion->sql("SELECT * FROM administrador where usuario=? and contraseña=?");
        $resultado->bindParam(1, $username);
        $resultado->bindParam(2, $passwordcliente);
        $resultado->execute();
        return $resultado->fetchAll();

    } catch (PDOException $e) {
        echo "hay un error en " . $e->getMessage();
    }
}
function USUARIO($username)
{
    $newTokenConexion = new Iniciar();
    try {
        $resultado123 = $newTokenConexion->sql('SELECT * FROM administrador where usuario=?');
        $resultado123->bindParam(1, $username);
        $resultado123->execute();
        return $resultado123->fetchAll();


    } catch (PDOException $e) {
        echo "ups hay un error en" . $e->getMessage();
    }
}
?>