<?php
require_once '../MODEL/database.php';
require_once '../MODEL/modeloadmin.php';

class AdministradorController {
    private $model;

    public function __CONSTRUCT() {
        $this->model = new administrador();
    }

    public function Index() {
        $administradores = $this->model->Listar();
        require '../VIEW/Administrador/admin.php';
    }

    public function Guardar() {
        $alm = new administrador();
        $alm->id_admin = $_REQUEST['id_admin'];
        $alm->tipocontrato_admin = $_REQUEST['tipocontrato_admin'];
        $alm->edad_admin = $_REQUEST['edad_admin'];
        $alm->idusuario = $_REQUEST['idusuario'];

        $alm->id_admin > 0
            ? $this->model->Actualizar($alm)
            : $this->model->Registrar($alm);

        header('Location: ../VIEW/menu_admin.php');
    }

    public function Eliminar() {
        $this->model->Eliminar($_REQUEST['id_admin']);
        header('Location: ../VIEW/menu_admin.php');
    }

    public function Editar() {
        $alm = isset($_REQUEST['id_admin']) ? $this->model->Obtener($_REQUEST['id_admin']) : new administrador();
        require '../VIEW/Administrador/Admin-Editar.php';
    }
}
?>