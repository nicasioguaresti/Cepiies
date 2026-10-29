<?php
session_start();

// Control de acceso: Si no hay sesión válida, bloquea el paso
if (!isset($_SESSION['admin_logueado']) || $_SESSION['admin_logueado'] !== true) {
    header('Location: login.php');
    exit;
}

// Conexión para leer los mensajes guardados en MySQL
$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';
$db_name = 'contacto_cepiies';

$mensajes = [];

try {
    $pdo = new PDO("mysql:host=$db_host;dbname=$db_name;charset=utf8mb4", $db_user, $db_pass, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]);

    $stmt = $pdo->query("SELECT * FROM contactos ORDER BY fecha_envio DESC");
    $mensajes = $stmt->fetchAll();

} catch (PDOException $e) {
    error_log("Error al consultar mensajes: " . $e->getMessage());
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Panel de Administración - CePIIeS</title>
    <style>
        body { font-family: system-ui, -apple-system, sans-serif; max-width: 1000px; margin: 40px auto; padding: 0 20px; color: #333; }
        .header-panel { display: flex; justify-content: space-between; align-items: center; border-bottom: 2px solid #0f2642; padding-bottom: 15px; margin-bottom: 30px; }
        .btn-logout { background-color: #c62828; color: white; padding: 8px 15px; border-radius: 4px; text-decoration: none; font-size: 0.9rem; }
        table { width: 100%; border-collapse: collapse; margin-top: 10px; }
        th, td { border: 1px solid #ddd; padding: 12px; text-align: left; }
        th { background-color: #f4f6f9; color: #0f2642; }
        tr:nth-child(even) { background-color: #f9f9f9; }
    </style>
</head>
<body>

    <div class="header-panel">
        <div>
            <h2>Mensajes de Contacto Recibidos</h2>
            <p>Sesión activa: <strong><?php echo htmlspecialchars($_SESSION['nombre_usuario']); ?></strong></p>
        </div>
        <a href="logout.php" class="btn-logout">Cerrar Sesión</a>
    </div>

    <?php if (count($mensajes) > 0): ?>
        <table>
            <thead>
                <tr>
                    <th>Fecha</th>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Asunto</th>
                    <th>Mensaje</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($mensajes as $m): ?>
                    <tr>
                        <td style="white-space: nowrap;"><?php echo htmlspecialchars($m['fecha_envio']); ?></td>
                        <td><?php echo htmlspecialchars($m['nombre']); ?></td>
                        <td><?php echo htmlspecialchars($m['email']); ?></td>
                        <td><strong><?php echo htmlspecialchars($m['asunto']); ?></strong></td>
                        <td><?php echo nl2br(htmlspecialchars($m['mensaje'])); ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p>No hay mensajes recibidos hasta el momento.</p>
    <?php endif; ?>

    <p style="margin-top: 30px;"><a href="index.php">← Ir a la portada del sitio</a></p>

</body>
</html>