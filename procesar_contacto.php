<?php
// Configuracion de la base de datos en XAMPP
$db_host = 'localhost';
$db_user = 'root';
$db_pass = ''; 
$db_name = 'contacto_cepiies'; 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    // Captura y sanitización de datos
    $nombre  = trim($_POST['nombre'] ?? '');
    $email   = filter_var(trim($_POST['email'] ?? ''), FILTER_SANITIZE_EMAIL);
    $asunto  = trim($_POST['asunto'] ?? '');
    $mensaje = trim($_POST['comentario'] ?? '');

    // Opciones válidas para validar el asunto desde el servidor
    $asuntos_validos = [
        'Consulta general',
        'Propuesta de colaboración institucional',
        'Prensa y medios',
        'Consulta académica / estudiantes',
        'Otro'
    ];

    // Validación
    if (
        empty($nombre) || 
        empty($email) || 
        empty($asunto) || 
        empty($mensaje) || 
        !filter_var($email, FILTER_VALIDATE_EMAIL) ||
        !in_array($asunto, $asuntos_validos)
    ) {
        header('Location: index.php?status=error#contacto');
        exit;
    }

    try {
        $pdo = new PDO("mysql:host=$db_host;dbname=$db_name;charset=utf8mb4", $db_user, $db_pass, [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);

        // Insertamos nombre, email, asunto y mensaje (la fecha la asigna MySQL sola)
        $sql = "INSERT INTO contactos (nombre, email, asunto, mensaje) VALUES (:nombre, :email, :asunto, :mensaje)";
        $stmt = $pdo->prepare($sql);
        
        $stmt->execute([
            ':nombre'  => $nombre,
            ':email'   => $email,
            ':asunto'  => $asunto,
            ':mensaje' => $mensaje
        ]);

        header('Location: index.php?status=success#contacto');
        exit;

    } catch (PDOException $e) {
        error_log("Error de conexión/inserción: " . $e->getMessage());
        header('Location: index.php?status=error#contacto');
        exit;
    }
} else {
    header('Location: index.php');
    exit;
}