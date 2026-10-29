<?php
session_start();

if (isset($_SESSION['admin_logueado']) && $_SESSION['admin_logueado'] === true) {
    header('Location: admin.php');
    exit;
}

$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario_ingresado  = trim($_POST['usuario'] ?? '');
    $password_ingresada = trim($_POST['password'] ?? '');

    if (!empty($usuario_ingresado) && !empty($password_ingresada)) {
        $db_host = 'localhost';
        $db_user = 'root';
        $db_pass = '';
        $db_name = 'contacto_cepiies';

        try {
            $pdo = new PDO("mysql:host=$db_host;dbname=$db_name;charset=utf8mb4", $db_user, $db_pass, [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
            ]);

            // Consulta directa a la nueva tabla admin_usuarios en texto plano
            $sql = "SELECT id, usuario, nombre FROM admin_usuarios WHERE usuario = :usuario AND password = :password";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([
                ':usuario'  => $usuario_ingresado,
                ':password' => $password_ingresada
            ]);
            $user = $stmt->fetch();

            if ($user) {
                $_SESSION['admin_logueado'] = true;
                $_SESSION['usuario_id']     = $user['id'];
                $_SESSION['nombre_usuario'] = $user['nombre'];

                header('Location: admin.php');
                exit;
            } else {
                $error = 'Usuario o contraseña incorrectos.';
            }

        } catch (PDOException $e) {
            error_log("Error en el login: " . $e->getMessage());
            $error = 'Error de conexión con la base de datos.';
        }
    } else {
        $error = 'Por favor, completá todos los campos.';
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Acceso Institucional - CePIIeS</title>
    <link rel="stylesheet" href="estilos.css?v=1.2">
    <style>
        .login-container { max-width: 400px; margin: 80px auto; padding: 30px; background: #fff; border-radius: 8px; box-shadow: 0 4px 10px rgba(0,0,0,0.1); }
        .login-container h2 { text-align: center; color: #0f2642; margin-bottom: 20px; }
        .error-msg { color: #c62828; background: #ffebee; padding: 10px; border-radius: 4px; margin-bottom: 15px; text-align: center; font-size: 0.9rem; }
    </style>
</head>
<body style="background-color: #f4f6f9;">

    <div class="login-container">
        <h2>Panel CePIIeS</h2>
        
        <?php if (!empty($error)): ?>
            <div class="error-msg"><?php echo htmlspecialchars($error); ?></div>
        <?php endif; ?>

        <form action="login.php" method="POST">
            <div class="form-grupo" style="margin-bottom: 15px;">
                <label for="usuario">Usuario</label>
                <input type="text" id="usuario" name="usuario" required style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px;">
            </div>
            <div class="form-grupo" style="margin-bottom: 20px;">
                <label for="password">Contraseña</label>
                <input type="password" id="password" name="password" required style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px;">
            </div>
            <button type="submit" class="btn-enviar" style="width: 100%; background-color: #4482CB; color: white; padding: 10px; border: none; border-radius: 4px; cursor: pointer;">Ingresar</button>
        </form>
        <p style="text-align: center; margin-top: 15px;"><a href="index.php" style="color: #666; font-size: 0.9rem;">← Volver al sitio</a></p>
    </div>

</body>
</html>