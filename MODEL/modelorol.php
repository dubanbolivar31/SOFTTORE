<?php

require_once 'database.php';

class rol
{
	private $pdo;
    public $idRol;
    public $Descripción;
 
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

			$stm = $this->pdo->prepare("SELECT * FROM rol");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Obtener($idRol)
	{
		try 
		{
			$stm = $this->pdo->prepare("SELECT * FROM rol WHERE idRol = ?");		
			$stm->execute(array($idRol));
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Eliminar($idRol)
	{
		try 
		{
			$stm = $this->pdo->prepare("DELETE FROM rol WHERE idRol = ?");			
			$stm->execute(array($idRol));
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Actualizar($data) {
    try {
        $sql = "UPDATE rol SET 
                    Descripción = ? 
                WHERE idRol = ?";

        $this->pdo->prepare($sql)
             ->execute(
                array(
                    $data->Descripción, 
                    $data->idRol
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
		$sql = "INSERT INTO rol (Descripción) 
		        VALUES (?)";

		$this->pdo->prepare($sql)
		     ->execute(
				array(
				   $data->Descripción         
                )
			);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
}

?>