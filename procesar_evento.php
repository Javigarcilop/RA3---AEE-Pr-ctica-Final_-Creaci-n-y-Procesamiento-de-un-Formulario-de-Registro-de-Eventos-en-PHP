<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $error = false;
    
        if (!isset($_POST['nombreCompleto']) || empty($_POST['nombreCompleto'])) {
            echo "El nombre completo es obligatorio.<br>";
            $error = true;
        }
    
        if (!isset($_POST['correoElectronico']) || empty($_POST['correoElectronico'])) {
            echo "El correo electrónico es obligatorio.<br>";
            $error = true;
        }
    
        if (!isset($_POST['numeroTelefono']) || empty($_POST['numeroTelefono'])) {
            echo "El número de teléfono es obligatorio.<br>";
            $error = true;
        }
    
        if (!isset($_POST['fechaNacimiento']) || empty($_POST['fechaNacimiento'])) {
            echo "La fecha de nacimiento es obligatoria.<br>";
            $error = true;
        }
    
        if (!isset($_POST['fechaEvento']) || empty($_POST['fechaEvento'])) {
            echo "La fecha del evento es obligatoria.<br>";
            $error = true;
        }
    
        if (!isset($_POST['tipoEvento']) || empty($_POST['tipoEvento'])) {
            echo "Debe seleccionar un tipo de entrada.<br>";
            $error = true;
        }
    
        if (!isset($_POST['nombreUsuario']) || empty($_POST['nombreUsuario'])) {
            echo "El nombre de usuario es obligatorio.<br>";
            $error = true;
        }

        
        if (!isset($_POST['contraseña']) || empty($_POST['contraseña'])) {
            echo "La contraseña es obligatoria.<br>";
            $error = true;
        }
        
        if (!isset($_POST['confirmacionContraseña']) || empty($_POST['confirmacionContraseña'])) {
            echo "La confirmación de la contraseña es obligatoria.<br>";
            $error = true;
        }
        
        if ($_POST['contraseña'] !== $_POST['confirmacionContraseña']) {
            echo "Las contraseñas no coinciden.<br>";
            $error = true;
        }
        
        
    
        if (!isset($_POST['acceptaTerminos'])) {
            echo "Debe aceptar los términos y condiciones.<br>";
            $error = true;
        }
    
        if (!isset($_POST['preferencias']) || empty($_POST['preferencias'])) {
            echo "Debe seleccionar al menos una preferencia alimentaria.<br>";
            $error = true;
        }
    
        if (!isset($_POST['contactoCorreo'])) {
            echo "Debe indicar si desea recibir notificaciones por correo electrónico.<br>";
            $error = true;
        }

    if (!$error) {
        echo "<h3>Datos del Usuario:</h3>";
        echo "Nombre Completo: " . htmlspecialchars($_POST['nombreCompleto']) . "<br>";
        echo "Correo Electrónico: " . htmlspecialchars($_POST['correoElectronico']) . "<br>";
        echo "Número de Teléfono: " . htmlspecialchars($_POST['numeroTelefono']) . "<br>";
        echo "Fecha de Nacimiento: " . htmlspecialchars($_POST['fechaNacimiento']) . "<br>";
        echo "Fecha del Evento: " . htmlspecialchars($_POST['fechaEvento']) . "<br>";
        echo "Tipo de Evento: " . htmlspecialchars($_POST['tipoEvento']) . "<br>";
        echo "Nombre de Usuario: " . htmlspecialchars($_POST['nombreUsuario']) . "<br>";
        echo "Contraseña: " . htmlspecialchars($_POST['confirmacionContraseña']) . "<br>";
    }
}
?>


