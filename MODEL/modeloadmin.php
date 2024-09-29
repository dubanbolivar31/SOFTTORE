<?php

require_once 'database.php';

class administrador
{
	private $pdo;
    public $id_admin;
    public $tipocontrato_admin;
    public $edad_admin;
	public $idusuario;

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

			$stm = $this->pdo->prepare("SELECT * FROM administrador");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Obtener($id_admin)
	{
		try 
		{
			$stm = $this->pdo->prepare("SELECT * FROM administrador WHERE id_admin = ?");		
			$stm->execute(array($id_admin));
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Eliminar($id_admin)
	{
		try 
		{
			$stm = $this->pdo->prepare("DELETE FROM administrador WHERE id_admin = ?");			
			$stm->execute(array($id_admin));
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Actualizar($data) {
    try {
        $sql = "UPDATE administrador SET 
                    tipocontrato_admin = ?, 
                    edad_admin = ?,
                    idusuario = ?
                WHERE id_admin = ?";

        $this->pdo->prepare($sql)
             ->execute(
                array(
                    $data->tipocontrato_admin, 
                    $data->edad_admin,
                    $data->idusuario,
                    $data->id_admin
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
		$sql = "INSERT INTO administrador (tipocontrato_admin,edad_admin,idusuario) 
		        VALUES (?, ?, ?)";

		$this->pdo->prepare($sql)
		     ->execute(
				array(
				   $data->tipocontrato_admin, 
                   $data->edad_admin,
				   $data->idusuario      
                )
			);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
}

?>