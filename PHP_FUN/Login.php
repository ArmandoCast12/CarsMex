<?php
session_start();
include('Conexion.php');

header('Content-Type: application/json');

$conexion = new Conexion();
$conn = $conexion->conectar();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = trim($_POST["Email"]);
    $password = trim($_POST["Passwor"]);

    if (!$conn) {
        echo json_encode(["status" => "error", "message" => "Error de conexión a la base de datos."]);
        exit();
    }

    $stmt = $conn->prepare("SELECT * FROM usuarios WHERE Email=? AND Passwor=?");
    $stmt->bind_param("ss", $email, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result && $result->num_rows == 1) {
        $user = $result->fetch_assoc();
        $_SESSION["id"] = $user["id"];
        $_SESSION["nombre"] = $user["Nombre"];
        $_SESSION["apellido"] = $user["Apellido"];

        echo json_encode(["status" => "success", "url" => "index.php"]);
        exit();
    } else {
        echo json_encode(["status" => "error", "message" => "Correo o contraseña incorrectos."]);
        exit();
    }
}

$conexion->cerrar();
?>
