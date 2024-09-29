<?php
require_once '../MODEL/database.php';
require_once '../MODEL/modeloproducto.php';

class ProductoController {
    private $model;

    public function __CONSTRUCT() {
        $this->model = new producto();
    }

    public function Index() {
        $productos = $this->model->Listar();
        require '../VIEW/Producto/producto.php';
    }

    public function Guardar() {
        $alm = new producto();
        $alm->id_producto = $_REQUEST['id_producto'];
        $alm->descripcion = $_REQUEST['descripcion'];
        $alm->precio = $_REQUEST['precio'];
        $alm->id_prov = $_REQUEST['id_prov'];
        $alm->id_cliente = $_REQUEST['id_cliente'];

        $alm->id_producto > 0
            ? $this->model->Actualizar($alm)
            : $this->model->Registrar($alm);

        header('Location: ../VIEW/menu_productos.php');
    }

    public function Eliminar() {
        $this->model->Eliminar($_REQUEST['id_producto']);
        header('Location: ../VIEW/menu_productos.php');
    }

    public function Editar() {
        $alm = isset($_REQUEST['id_producto']) ? $this->model->Obtener($_REQUEST['id_producto']) : new producto();
        require '../VIEW/Producto/Producto-Editar.php';
    }
}
?>