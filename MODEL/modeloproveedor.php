<?php

require_once 'database.php';

class proveedor
{
	private $pdo;
    public $id_prov;
    public $tipoId_prov;
    public $direccion_prov;
	public $numero_prov;
    public $edad_prov;
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

			$stm = $this->pdo->prepare("SELECT * FROM proveedor");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Obtener($id_prov)
	{
		try 
		{
			$stm = $this->pdo->prepare("SELECT * FROM proveedor WHERE id_prov = ?");		
			$stm->execute(array($id_prov));
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Eliminar($id_prov)
	{
		try 
		{
			$stm = $this->pdo->prepare("DELETE FROM proveedor WHERE id_prov = ?");			
			$stm->execute(array($id_prov));
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Actualizar($data) {
    try {
        $sql = "UPDATE proveedor SET 
                    tipoId_prov = ?, 
                    direccion_prov = ?,
                    numero_prov = ?,
                    edad_prov = ?,
                    idusuario = ?
                WHERE id_prov = ?";

        $this->pdo->prepare($sql)
             ->execute(
                array(
                    $data->tipoId_prov, 
                    $data->direccion_prov,
                    $data->numero_prov,
                    $data->edad_prov,
                    $data->idusuario,
                    $data->id_prov
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
		$sql = "INSERT INTO proveedor (tipoId_prov,direccion_prov,numero_prov,edad_prov,idusuario) 
	        VALUES (?, ?, ?, ?, ?)";

		$this->pdo->prepare($sql)
		     ->execute(
				array(
				   $data->tipoId_prov, 
                   $data->direccion_prov,
				   $data->numero_prov,
           		   $data->edad_prov,
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