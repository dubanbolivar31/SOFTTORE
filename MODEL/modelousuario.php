<?php

require_once 'database.php';

class usuario
{
	private $pdo;
    public $idusuario;
    public $tipoIdUsuario;
    public $numIdUsuario;
	public $nombreUsuario;
	public $apellido;
	public $correoUsuario;
	public $claveUsuario;
	public $estadoUsuario;
    public $idRol;

	public function __CONSTRUCT()
{
    try
    {
        $database = new Database();        
        $this->pdo = $database->StartUp();     
    }
    catch(Exception $e)
    {
        die($e->getMessage());
    }
}
	public function Listar()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM usuario");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Obtener($idusuario)
	{
		try 
		{
			$stm = $this->pdo->prepare("SELECT * FROM usuario WHERE idusuario = ?");		
			$stm->execute(array($idusuario));
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Eliminar($idusuario)
	{
		try 
		{
			$stm = $this->pdo->prepare("DELETE FROM usuario WHERE idusuario = ?");			
			$stm->execute(array($idusuario));
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Actualizar($data) {
    try {
        $sql = "UPDATE usuario SET 
                    tipoIdUsuario = ?, 
                    numIdUsuario = ?,
                    nombreUsuario = ?,
                    apellido = ?,
                    correoUsuario = ?,
                    claveUsuario = ?,
                    estadoUsuario = ?,
                    idRol = ?
                WHERE idusuario = ?";

        $this->pdo->prepare($sql)
             ->execute(
                array(
                    $data->tipoIdUsuario, 
                    $data->numIdUsuario,
                    $data->nombreUsuario,
                    $data->apellido,
                    $data->correoUsuario,
                    $data->claveUsuario,
                    $data->estadoUsuario,
                    $data->idRol,
                    $data->idusuario
                )
            );
    } catch (Exception $e) {
        die($e->getMessage());
    }
}
	public function Registrar($data)
	{
		try 
		{
		$sql = "INSERT INTO usuario (tipoIdUsuario,numIdUsuario,nombreUsuario,apellido,correoUsuario,claveUsuario,estadoUsuario,idRol) 
		        VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

		$this->pdo->prepare($sql)
		     ->execute(
				array(
				   $data->tipoIdUsuario, 
                   $data->numIdUsuario,
				   $data->nombreUsuario,
				   $data->apellido,
				   $data->correoUsuario,
				   $data->claveUsuario,
				   $data->estadoUsuario,
				   $data->idRol,                        
                )
			);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
}

?>