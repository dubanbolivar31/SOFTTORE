<?php

require_once 'database.php';

class producto
{
	private $pdo;
    public $id_producto;
    public $descripcion;
    public $precio;
	public $id_prov;
    public $id_cliente;

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

			$stm = $this->pdo->prepare("SELECT * FROM producto");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Obtener($id_producto)
	{
		try 
		{
			$stm = $this->pdo->prepare("SELECT * FROM producto WHERE id_producto = ?");		
			$stm->execute(array($id_producto));
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Eliminar($id_producto)
	{
		try 
		{
			$stm = $this->pdo->prepare("DELETE FROM producto WHERE id_producto = ?");			
			$stm->execute(array($id_producto));
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Actualizar($data) {
    try {
        $sql = "UPDATE producto SET 
                    descripcion = ?, 
                    precio = ?,
                    id_prov = ?,
                    id_cliente = ?
                WHERE id_producto = ?";

        $this->pdo->prepare($sql)
             ->execute(
                array(
                    $data->descripcion, 
                    $data->precio,
                    $data->id_prov,
                    $data->id_cliente,
                    $data->id_producto
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
		$sql = "INSERT INTO producto (descripcion,precio,id_prov,id_cliente) 
		        VALUES (?, ?, ?, ?)";

		$this->pdo->prepare($sql)
		     ->execute(
				array(
				   $data->descripcion, 
                   $data->precio,
				   $data->id_prov,
           		   $data->id_cliente
                         
                )
			);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
}

?>