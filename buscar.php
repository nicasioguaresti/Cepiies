<?php
$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';
$db_name = 'contacto_cepiies';

$busqueda = trim($_GET['q'] ?? '');
$resultados = [];

if (!empty($busqueda)) {
    try {
        $pdo = new PDO("mysql:host=$db_host;dbname=$db_name;charset=utf8mb4", $db_user, $db_pass, [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);

        // La cláusula LIKE busca coincidencias en el título o en el resumen
        $sql = "SELECT titulo, tipo, resumen, url_destino 
                FROM contenidos 
                WHERE titulo LIKE :busqueda OR resumen LIKE :busqueda";
                
        $stmt = $pdo->prepare($sql);
        $stmt->execute([':busqueda' => '%' . $busqueda . '%']);
        $resultados = $stmt->fetchAll();

    } catch (PDOException $e) {
        error_log("Error de búsqueda: " . $e->getMessage());
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultados de búsqueda - CePIIeS</title>
    <style>
        body { font-family: system-ui, -apple-system, sans-serif; max-width: 800px; margin: 40px auto; padding: 0 20px; color: #333; }
        .item-resultado { border-bottom: 1px solid #eee; padding: 15px 0; }
        .item-resultado h3 { margin: 0 0 5px 0; }
        .item-resultado a { color: #0056b3; text-decoration: none; }
        .item-resultado a:hover { text-decoration: underline; }
        .etiqueta { font-size: 0.8rem; background: #e0e0e0; padding: 2px 8px; border-radius: 4px; text-transform: uppercase; }
        .sin-resultados { background: #f8f9fa; padding: 20px; border-radius: 6px; text-align: center; }
    </style>
</head>
<body>

    <h2>Resultados de búsqueda</h2>
    <p>Término buscado: <strong><?php echo htmlspecialchars($busqueda); ?></strong></p>

    <?php if (!empty($busqueda) && count($resultados) > 0): ?>
        <p>Se encontraron <?php echo count($resultados); ?> resultado(s):</p>
        <?php foreach ($resultados as $row): ?>
            <div class="item-resultado">
                <span class="etiqueta"><?php echo htmlspecialchars($row['tipo']); ?></span>
                <h3>
                    <a href="<?php echo htmlspecialchars($row['url_destino']); ?>">
                        <?php echo htmlspecialchars($row['titulo']); ?> →
                    </a>
                </h3>
                <p><?php echo htmlspecialchars($row['resumen']); ?></p>
            </div>
        <?php endforeach; ?>
    <?php else: ?>
        <div class="sin-resultados">
            <p>No se encontraron resultados para <strong>"<?php echo htmlspecialchars($busqueda); ?>"</strong>.</p>
            <p>Sugerencia: Probá buscando términos como <em>"Novedades"</em>, <em>"Vinculaciones"</em> o el nombre de un investigador.</p>
        </div>
    <?php endif; ?>

    <p><a href="./index.php">← Volver al sitio principal</a></p>

        <section id="novedades"><!-- Contenido de Novedades --></section>
        <section id="vinculaciones"><!-- Contenido de Vinculaciones --></section>
        <section id="letis"><!-- Contenido de LETIS / Laboratorio --></section>
        <section id="contacto"><!-- Contenido de Contacto --></section>

</body>
</html>