<?php
// Iniciar sesión (si no está ya iniciada)
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

include 'conexion_b.php';

// Validar que los campos no estén vacíos
if (empty($_POST['correo']) || empty($_POST['contrasena'])) {
    echo '<script>
            alert("Por favor, complete todos los campos");
            window.location="../index.php";
          </script>';
    exit;
}

$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];



// Consulta preparada para evitar inyección SQL
$query = "SELECT * FROM usuarios WHERE Correo = ?";
$stmt = mysqli_prepare($conexion, $query);

if (!$stmt) {
    echo '<script>
            alert("Error en la consulta: ' . mysqli_error($conexion) . '");
            window.location="../index.php";
          </script>';
    exit;
}

mysqli_stmt_bind_param($stmt, "s", $correo);
mysqli_stmt_execute($stmt);
$resultado = mysqli_stmt_get_result($stmt);

if (mysqli_num_rows($resultado) > 0) {
    $fila = mysqli_fetch_assoc($resultado);
    $contrasena_hash = $fila['Password'];

    // Verificar la contraseña
    if (password_verify($contrasena, $contrasena_hash)) {
        // Iniciar sesión
        $_SESSION['usuario'] = $correo;
        echo '<script>
                alert("Inicio de sesión exitoso");
                window.location="../Principal.php";
              </script>';
    } else {
        echo '<script>
                alert("Contraseña incorrecta");
                window.location="../index.php";
              </script>';
    }
} else {
    echo '<script>
            alert("El usuario no existe, por favor verifique los datos");
            window.location="../index.php";
          </script>';
}

// Cerrar la conexión y liberar recursos
mysqli_stmt_close($stmt);
mysqli_close($conexion);
?>