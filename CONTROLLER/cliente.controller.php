<?php
require_once '../MODEL/database.php';
require_once '../MODEL/modelocliente.php';

class ClienteController {
    private $model;

    public function __CONSTRUCT() {
        $this->model = new cliente();
    }

    public function Index() {
        $clientes = $this->model->Listar();
        require '../VIEW/Cliente/cliente.php';
    }

    public function Guardar() {
        $alm = new cliente();
        $alm->id_cliente = $_REQUEST['id_cliente'];
        $alm->direccion = $_REQUEST['direccion'];
        $alm->telefono = $_REQUEST['telefono'];
        $alm->ciudad = $_REQUEST['ciudad'];
        $alm->idusuario = $_REQUEST['idusuario'];

        $alm->id_cliente > 0
            ? $this->model->Actualizar($alm)
            : $this->model->Registrar($alm);

        header('Location:../VIEW/menu_cliente.php');
    }

    public function Eliminar() {
        $this->model->Eliminar($_REQUEST['id_cliente']);
        header('Location:../VIEW/menu_cliente.php');
    }

    public function Editar() {
        $alm = isset($_REQUEST['id_cliente']) ? $this->model->Obtener($_REQUEST['id_cliente']) : new cliente();
        require '../VIEW/Cliente/Cliente-Editar.php';
    }
}
?>