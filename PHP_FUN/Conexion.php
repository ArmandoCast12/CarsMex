<?php 

class Conexion{
    private $host = "localhost";
    private $usuario = "root";
    private $password = "";
    private $base_datos = "CARMEX";
    public $conexion;

    public function conectar() {
        $this->conexion = new mysqli($this->host, $this->usuario, $this->password, $this->base_datos);

        if ($this->conexion->connect_error) {
            die("Error en la conexión: " . $this->conexion->connect_error);
        }

        return $this->conexion;
    }

    public function cerrar() {
        $this->conexion->close();
    }

}

?>