<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro - CARMEX</title>
    <link rel="stylesheet" href="css/estilos.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        .registro-wrapper {
            max-width: 600px;
            margin: 5% auto;
            background: rgba(31, 31, 31, 0.9);
            padding: 2rem;
            border-radius: 12px;
            box-shadow: 0 0 10px rgba(0,0,0,0.6);
            color: white;
        }

        .registro-wrapper h2 {
            margin-bottom: 0.5rem;
        }

        .registro-wrapper p {
            margin-bottom: 1.5rem;
        }

        .field label {
            display: block;
            margin-bottom: 0.5rem;
            text-align: left;
        }

        .field input {
            width: 100%;
            padding: 0.75rem;
            border-radius: 8px;
            border: none;
            margin-bottom: 0.5rem;
            background: #2e2e2e;
            color: #fff;
        }

        .actions input[type="submit"] {
            background-color: #d10000;
            color: white;
            border: none;
            padding: 0.75rem 1.5rem;
            border-radius: 8px;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        .actions input[type="submit"]:hover {
            background-color: #ff1e1e;
        }

        .acciones__enlace {
            color: #fff;
            text-decoration: underline;
        }

        .error-message {
            color: #ff4d4d;
            font-size: 0.9em;
            margin-top: -0.3rem;
            margin-bottom: 1rem;
            display: none;
        }

        #general-error,
        #registro-success {
            padding: 1rem;
            border-radius: 8px;
            margin-bottom: 1rem;
            display: none;
        }

        #general-error {
            background: #ff4d4d;
            color: white;
        }

        #registro-success {
            background: #2ecc71;
            color: white;
        }
    </style>
</head>
<body>
<?php include 'php/header.php'; ?>

<section class="registro-wrapper">
    <div class="inner">
        <h2>Crea tu cuenta en CARMEX</h2>
        <p>Únete a nuestra comunidad y comienza a explorar un mundo de posibilidades.</p>

        <div id="general-error"></div>
        <div id="registro-success"></div>

        <form id="registroForm" method="post" action="PHP_FUN/CrearCuentaCtrl.php" class="registro-form">
            <div class="fields">
                <div class="field">
                    <label for="Nombre">Nombre</label>
                    <input type="text" name="Nombre" id="Nombre" required />
                    <div class="error-message" id="Nombre-error"></div>
                </div>
                <div class="field">
                    <label for="Apellido">Apellido</label>
                    <input type="text" name="Apellido" id="Apellido" required />
                    <div class="error-message" id="Apellido-error"></div>
                </div>
                <div class="field">
                    <label for="Email">Correo</label>
                    <input type="email" name="Email" id="Email" required />
                    <div class="error-message" id="Email-error"></div>
                </div>
                <div class="field">
                    <label for="Passwor">Contraseña</label>
                    <input type="password" name="Passwor" id="Passwor" required />
                    <div class="error-message" id="Passwor-error"></div>
                </div>
            </div><br>
            <ul class="actions">
                <input type="submit" value="Regístrate" /><br><br>
                <a href="login.php" class="acciones__enlace">¿Ya tienes una cuenta? Inicia sesión</a>
            </ul>
        </form>
    </div>
</section>

<script>
$(document).ready(function () {
    $('input').on('input', function () {
        if ($(this).val().trim() !== '') {
            $(this).css("border-color", "#D1D1D1");
            $('#' + $(this).attr('id') + '-error').hide().text('');
        }
    });

    $('#registroForm').submit(function (event) {
        event.preventDefault();

        $('#general-error').hide().text('');
        $('#registro-success').hide().text('');
        $('.error-message').hide().text('');
        $('input').css("border-color", "#D1D1D1");

        var nombre = $('#Nombre').val().trim();
        var apellido = $('#Apellido').val().trim();
        var email = $('#Email').val().trim();
        var password = $('#Passwor').val().trim();
        var errores = false;

        if (nombre === '') {
            errores = true;
            $('#Nombre').css("border-color", "#F14B4B");
            $('#Nombre-error').text("El nombre no puede estar vacío.").fadeIn();
        }

        if (apellido === '') {
            errores = true;
            $('#Apellido').css("border-color", "#F14B4B");
            $('#Apellido-error').text("El apellido no puede estar vacío.").fadeIn();
        }

        var regexEmail = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
        if (email === '' || !regexEmail.test(email)) {
            errores = true;
            $('#Email').css("border-color", "#F14B4B");
            $('#Email-error').text("Introduce un correo electrónico válido.").fadeIn();
        }


        if (errores) return;

        $.ajax({
            url: $('#registroForm').attr('action'),
            type: 'POST',
            data: {
                Nombre: nombre,
                Apellido: apellido,
                Email: email,
                Passwor: password,
            },
            dataType: 'json',
            success: function (response) {
                if (response.status === "success") {
                    $('#registro-success').html(response.message).fadeIn();
                    setTimeout(function(){
                        window.location.href = response.redirect;
                    }, 1000);
                } else {
                    if (response.field && response.field === "Email") {
                        $('#Email').css("border-color", "#F14B4B");
                        $('#Email-error').html(response.message).fadeIn();
                    } else {
                        $('#general-error').html(response.message).fadeIn();
                    }
                }
            },
            error: function () {
                $('#general-error').html("Error en la comunicación con el servidor.").fadeIn();
            }
        });
    });
});
</script>

</body>
</html>
