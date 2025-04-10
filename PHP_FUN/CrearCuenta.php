<?php
include('conexion.php');

class Cuenta {
    private $Nombre;
    private $Apellido;
    private $Passwor;
    private $Email;
    private $conexion;

    public function __construct() {
        $this->conexion = new Conexion();
    }

    public function inicializar($Nombre, $Apellido, $Passwor, $Email) {
        // Elimina espacios al inicio y final
        $this->Nombre   = trim($Nombre);
        $this->Apellido = trim($Apellido);
        $this->Email    = trim($Email);
        $this->Passwor  = trim($Passwor);
    }

    // Valida datos y devuelve mensaje de error (vacío si es correcto)
    public function validarCuenta() {
        $errorMessage = "";

        if (!preg_match("/^[A-Za-zÁáÉéÍíÓóÚúÑñ\s]+$/", $this->Nombre)) {
            $errorMessage .= "El nombre solo debe contener letras.<br>";
        }

        if (!preg_match("/^[A-Za-zÁáÉéÍíÓóÚúÑñ\s]+$/", $this->Apellido)) {
            $errorMessage .= "El apellido solo debe contener letras.<br>";
        }


        return $errorMessage;
    }

    // Comprueba si el correo ya existe
    private function existeCorreo($email) {
        $con = $this->conexion->conectar();
        $sql = "SELECT * FROM usuarios WHERE Email = '$email'";
        $result = $con->query($sql);
        $this->conexion->cerrar();
        return $result->num_rows > 0;
    }

    public function registrarCuenta() {
        $errorMessage = $this->validarCuenta();

        if (!empty($errorMessage)) {
            return $errorMessage;
        }

        if ($this->existeCorreo($this->Email)) {
            return "Este correo ya esta registrado. Por favor, utiliza otro correo.<br>";
        }
        
        $con = $this->conexion->conectar();
        $sql = "INSERT INTO usuarios (Nombre, Apellido, Passwor, Email) VALUES ('$this->Nombre', '$this->Apellido', '$this->Passwor', '$this->Email')";
        if ($con->query($sql) === TRUE) {
            $this->conexion->cerrar();
            return true;
        } else {
            $error = $con->error;
            $this->conexion->cerrar();
            return "Error al registrar: " . $error;
        }
    }
}
?>
