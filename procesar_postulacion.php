<?php
// Configuración de la base de datos en XAMPP
$db_host = 'localhost';
$db_user = 'root';
$db_pass = ''; 
$db_name = 'contacto_cepiies'; 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    // Captura y sanitización de datos
    $nombre        = trim($_POST['nombre'] ?? '');
    $email         = filter_var(trim($_POST['email'] ?? ''), FILTER_SANITIZE_EMAIL);
    $telefono      = trim($_POST['telefono'] ?? '');
    $linea_interes = trim($_POST['linea_interes'] ?? '');
    $antecedentes  = trim($_POST['antecedentes'] ?? '');

    // Opciones válidas para validar la línea de interés
    $lineas_validas = [
        'Salud ambiental',
        'Epidemiología regional',
        'Políticas públicas en salud',
        'Formación de profesionales de la salud',
        'Enfermedades zoonóticas',
        'Procesos salud-enfermedad',
        'Otra / General'
    ];

    // Validación de campos obligatorios
    if (
        empty($nombre) || 
        empty($email) || 
        empty($linea_interes) || 
        empty($antecedentes) || 
        !filter_var($email, FILTER_VALIDATE_EMAIL) ||
        !in_array($linea_interes, $lineas_validas)
    ) {
        header('Location: pages/equipo.php?status=error#postularse');
        exit;
    }

    try {
        $pdo = new PDO("mysql:host=$db_host;dbname=$db_name;charset=utf8mb4", $db_user, $db_pass, [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);

        // Consulta preparada para insertar la postulación
        $sql = "INSERT INTO postulaciones_investigadores (nombre, email, telefono, linea_interes, antecedentes) 
                VALUES (:nombre, :email, :telefono, :linea_interes, :antecedentes)";
        
        $stmt = $pdo->prepare($sql);
        
        $stmt->execute([
            ':nombre'        => $nombre,
            ':email'         => $email,
            ':telefono'      => $telefono,
            ':linea_interes' => $linea_interes,
            ':antecedentes'  => $antecedentes
        ]);

        header('Location: pages/equipo.php?status=success#postularse');
        exit;

    } catch (PDOException $e) {
        error_log("Error de conexión/inserción en postulaciones: " . $e->getMessage());
        header('Location: pages/equipo.php?status=error#postularse');
        exit;
    }
} else {
    header('Location: pages/equipo.php');
    exit;
}