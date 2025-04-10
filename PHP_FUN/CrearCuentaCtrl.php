<?php
session_start();
header('Content-Type: application/json');
include('CrearCuenta.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cuen = new Cuenta();
    $cuen->inicializar($_POST['Nombre'], $_POST['Apellido'], $_POST['Passwor'], $_POST['Email']);
    $resultado = $cuen->registrarCuenta();

    if ($resultado === true) {
    echo json_encode([
        "status" => "success",
        "message" => "Registro realizado con éxito. ¡Bienvenido a MindSphere!.",
        "redirect" => "login.php"
    ]);
} else {
        // Si el mensaje de error contiene "correo", lo asignamos al campo Email
        if (strpos($resultado, "correo") !== false) {
            echo json_encode([
                "status" => "error",
                "field" => "Email",
                "message" => $resultado
            ]);
        } else {
            // Error general
            echo json_encode([
                "status" => "error",
                "message" => $resultado
            ]);
        }
    }
    exit();
}
?>
