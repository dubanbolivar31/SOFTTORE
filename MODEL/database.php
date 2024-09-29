<?php
class Database
{
// crea instancias para generar el llamado de los objetos de la bd
    private $bdhost = 'localhost';
    private $bdname = 'SOFTTORE';
    private $bdUsuario = 'root';
    private $bdContra = '';
    private $objPDO;

    public function StartUp()
    {
        $this->objPDO = new PDO('mysql:host=localhost;dbname=SOFTTORE;charset=utf8','root','');
        $this->objPDO->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        return $this->objPDO;
    }

    public function desconectar()
    {
        $this->objPDO = null;
echo "Conexión cerrada exitosamente.";
    }
}
?>