<?php

require_once 'database.php';

class ventas
{
	private $pdo;
    public $id_ventas;
    public $cantidad;
    public $id_producto;
	public $id_admin;

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

			$stm = $this->pdo->prepare("SELECT * FROM ventas");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Obtener($id_ventas)
	{
		try 
		{
			$stm = $this->pdo->prepare("SELECT * FROM ventas WHERE id_ventas = ?");		
			$stm->execute(array($id_ventas));
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Eliminar($id_ventas)
	{
		try 
		{
			$stm = $this->pdo->prepare("DELETE FROM ventas WHERE id_ventas = ?");			
			$stm->execute(array($id_ventas));
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Actualizar($data) {
    try {
        $sql = "UPDATE ventas SET 
                    cantidad = ?, 
                    id_producto = ?,
                    id_admin = ?
                WHERE id_ventas = ?";

        $this->pdo->prepare($sql)
             ->execute(
                array(
                    $data->cantidad, 
                    $data->id_producto,
                    $data->id_admin,
                    $data->id_ventas
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
		$sql = "INSERT INTO ventas (cantidad,id_producto,id_admin) 
		        VALUES (?, ?, ?)";

		$this->pdo->prepare($sql)
		     ->execute(
				array(
				   $data->cantidad, 
                   $data->id_producto,
				   $data->id_admin,                         
                )
			);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
}

?>