<?php
namespace config;
class ConexionDB
{
    private $dsn = "mysql:host=localhost:3307;dbname=tienda_pedidos";
    private $usuario = "root";
    private $clave = "Kevin123";
    public $conexion;

    public function abrir(){
        $this->conexion = new \PDO($this->dsn, $this->usuario, $this->clave);
        return $this->conexion;
    }

    public function cerrar(){
        $this->conexion = null;
    }
}


