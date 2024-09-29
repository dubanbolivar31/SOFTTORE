<?php
require_once("database.php");

class modeloUsuario extends database
{
    private  $idusuario;
    private  $tipoIdUsuario;
    private  $numIdUsuario;
    private  $nombreUsuario;
    private  $apellido;
    private  $correoUsuario;
    private  $claveUsuario;
    private  $estadoUsuario;
    private  $idRol;


    function __construct($idusuarioIN,$tipoIdUsuarioIN,$numIdUsuarioIN,$nombreUsuarioIN,$apellidoIN,$correoUsuarioIN,$claveUsuarioIN,$estadoUsuarioIN,$idRolIN)
{
     $this->idusuario = $idusuarioIN;
     $this->tipoIdUsuario = $tipoIdUsuarioIN;
     $this->numIdUsuario = $numIdUsuarioIN;
     $this->nombreUsuario = $nombreUsuarioIN;
     $this->apellido = $apellidoIN;
     $this->correoUsuario = $correoUsuarioIN;
     $this->claveUsuario = $claveUsuarioIN;
     $this->estadoUsuario = $estadoUsuarioIN;
     $this->idRol = $idRolIN;

}

public function consultaLogin()
{
    $objConexion = new database();
    $objPDO = $objConexion::Startup();

    try {
        $sql = $objPDO->prepare("SELECT correoUsuario, claveUsuario, estadoUsuario, idRol FROM usuario WHERE correoUsuario = :correoUsuario");
        $sql->bindparam(":correoUsuario", $this->correoUsuario);
        $sql->execute();
        return $sql->fetch(PDO::FETCH_OBJ);
        $objPDO = $objConexion::desconectar();
        } catch (\Throwable $error) {
          echo "ERROR:". $error->getMessage();
          die();
        }

    }
}
?>