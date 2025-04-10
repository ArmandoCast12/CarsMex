<?php
session_start();

if (isset($_GET["logout"])) {
    session_destroy();
    header("Location: ../index.php");
    exit;
}
?>

<?php

echo '<header>
    <div class="logo">🚗 CarsMex</div>
    <nav>
        <ul>
        <li><a href="index.php">Inicio</a></li>
        <li><a href="modelos.html">Modelos</a></li>
        <li><a href="noticias.html">Noticias</a></li>';
?>
<?php

if (isset($_SESSION["nombre"]) && isset($_SESSION["apellido"])) {
    // Si el usuario ha iniciado sesión, mostrar su nombre y el botón de "Salir"
    echo '<li><div>' . "Hola! " . $_SESSION["nombre"] . " " . $_SESSION["apellido"] . '</div></li>';
    echo '<li><a class="nav-item nav-link text-justify ml-3 hover-primary" href="PHP_FUN/CerrarSesionCtrl.php">Cerrar sesion</a></li>';
} else {
    // Si el usuario no ha iniciado sesión, ocultar el nombre y mostrar el botón de inicio de sesión
    echo '<li style="display: none;"><div class="text-white bg-success p-2"></div></li>';
    echo '<li><a class="nav-item nav-link text-justify ml-3 hover-primary" href="login.php">Iniciar Sesión</a></li>';
    echo '<li><a class="nav-item nav-link text-justify ml-3 hover-primary" href="Registro.php">Registrate</a></li>';
}
echo '</nav>
</header>';
?>