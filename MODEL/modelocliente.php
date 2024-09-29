<?php

require_once 'database.php';

class cliente
{
	private $pdo;
    public $id_cliente;
    public $direccion;
    public $telefono;
	public $ciudad;
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

			$stm = $this->pdo->prepare("SELECT * FROM cliente");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Obtener($id_cliente)
	{
		try 
		{
			$stm = $this->pdo->prepare("SELECT * FROM cliente WHERE id_cliente = ?");		
			$stm->execute(array($id_cliente));
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Eliminar($id_cliente)
	{
		try 
		{
			$stm = $this->pdo->prepare("DELETE FROM cliente WHERE id_cliente = ?");			
			$stm->execute(array($id_cliente));
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Actualizar($data) {
    try {
        $sql = "UPDATE cliente SET 
                    direccion = ?, 
                    telefono = ?,
                    ciudad = ?,
                    idusuario = ?
                WHERE id_cliente = ?";

        $this->pdo->prepare($sql)
             ->execute(
                array(
                    $data->direccion, 
                    $data->telefono,
                    $data->ciudad,
                    $data->idusuario,
                    $data->id_cliente
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
		$sql = "INSERT INTO cliente (direccion,telefono,ciudad,idusuario) 
		        VALUES (?, ?, ?, ?)";

		$this->pdo->prepare($sql)
		     ->execute(
				array(
				   $data->direccion, 
                   $data->telefono,
				   $data->ciudad,
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