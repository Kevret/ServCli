<?php
include 'conexion_b.php';

// Validar que los campos no estén vacíos
if (empty($_POST['nombre_completo']) || empty($_POST['correo']) || empty($_POST['usuario']) || empty($_POST['contrasena'])) {
    echo '<script>
            alert("Por favor, complete todos los campos");
            window.location="../index.php";
          </script>';
    exit;
}

$nombre_completo = $_POST['nombre_completo'];
$correo = $_POST['correo'];
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];

// Generar el hash de la contraseña
$contrasena = password_hash($contrasena, PASSWORD_DEFAULT);

// Verificar si el correo ya está registrado
$query_verificar_correo = "SELECT * FROM usuarios WHERE Correo = ?";
$stmt_verificar_correo = mysqli_prepare($conexion, $query_verificar_correo);
mysqli_stmt_bind_param($stmt_verificar_correo, "s", $correo);
mysqli_stmt_execute($stmt_verificar_correo);
mysqli_stmt_store_result($stmt_verificar_correo);

if (mysqli_stmt_num_rows($stmt_verificar_correo) > 0) {
    echo '<script>
            alert("Este correo ya está registrado, intenta con otro");
            window.location="../index.php";
          </script>';
    mysqli_stmt_close($stmt_verificar_correo);
    exit;
}

// Verificar si el usuario ya está registrado
$query_verificar_usuario = "SELECT * FROM usuarios WHERE Usuario = ?";
$stmt_verificar_usuario = mysqli_prepare($conexion, $query_verificar_usuario);
mysqli_stmt_bind_param($stmt_verificar_usuario, "s", $usuario);
mysqli_stmt_execute($stmt_verificar_usuario);
mysqli_stmt_store_result($stmt_verificar_usuario);

if (mysqli_stmt_num_rows($stmt_verificar_usuario) > 0) {
    echo '<script>
            alert("Este usuario ya está registrado, intenta con otro");
            window.location="../index.php";
          </script>';
    mysqli_stmt_close($stmt_verificar_usuario);
    exit;
}

// Insertar el nuevo usuario
$query_insertar = "INSERT INTO usuarios (Nombre_completo, Correo, Usuario, Password) VALUES (?, ?, ?, ?)";
$stmt_insertar = mysqli_prepare($conexion, $query_insertar);
mysqli_stmt_bind_param($stmt_insertar, "ssss", $nombre_completo, $correo, $usuario, $contrasena);

if (mysqli_stmt_execute($stmt_insertar)) {
    echo '<script>
            alert("Usuario registrado exitosamente");
            window.location="../index.php";
          </script>';
} else {
    echo '<script>
            alert("Error al registrar el usuario");
            window.location="../index.php";
          </script>';
}

// Cerrar las consultas preparadas y la conexión
mysqli_stmt_close($stmt_verificar_correo);
mysqli_stmt_close($stmt_verificar_usuario);
mysqli_stmt_close($stmt_insertar);
mysqli_close($conexion);
?>