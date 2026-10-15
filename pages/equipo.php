<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Equipo de trabajo – CePIIeS</title>
    <meta name="description" content="Conocé el equipo interdisciplinario del CePIIeS – UNRN Sede Andina.">
    <link rel="icon" href="../img/CePIIeS logo.ico">
    <link rel="stylesheet" href="../stylesheet.css">

<style>
    .seccion-postulacion {
        padding: 50px 20px;
        background-color: #f8fafc;
        margin-top: 50px;
        border-top: 1px solid var(--gris);
    }

    .form-postulacion-container {
        width: 100%;
        max-width: 1000px;
        margin: 0 auto;
        background: linear-gradient(180deg, #d4e6f7 0%, #ffffff 85%);
        padding: 35px 40px;
        border-radius: 10px;
        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.05);
        border: 2px solid #cbd5e1;
        box-sizing: border-box;
        transition: border-color 0.3s ease, box-shadow 0.3s ease;
    }

    .form-postulacion-container:hover {
        border-color: var(--celeste);
        box-shadow: 0 8px 25px rgba(0, 114, 206, 0.15);
    }

    .form-postulacion-header {
        text-align: center;
        margin-bottom: 30px;
    }

    .form-postulacion-header h2 {
        font-size: 22px;
        color: var(--azul-oscuro);
        margin-bottom: 16px;
    }

    .form-postulacion-header p {
        color: var(--texto-suave);
        font-size: 15px;
        max-width: 750px;
        margin: 0 auto;
        line-height: 1.5;
        text-align: justify;
    }

    .form-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 20px 24px;
    }

    .form-group.full-width,
    .form-actions {
        grid-column: span 2;
    }

    .form-group {
        display: flex;
        flex-direction: column;
    }

    .form-group label {
        font-weight: 600;
        margin-bottom: 6px;
        color: var(--azul-oscuro);
        font-size: 14px;
    }

    .form-group input, 
    .form-group select, 
    .form-group textarea {
        width: 100%;
        padding: 11px 14px;
        font-size: 14px;
        border: 1.5px solid #cbd5e1;
        border-radius: 5px;
        background-color: rgba(255, 255, 255, 0.92);
        transition: all 0.25s ease;
        font-family: inherit;
        box-sizing: border-box;
    }

    .form-group input:focus, 
    .form-group select:focus, 
    .form-group textarea:focus {
        outline: none;
        border-color: var(--celeste);
        background-color: #ffffff;
        box-shadow: 0 0 0 3px rgba(0, 114, 206, 0.15);
    }

    .form-group textarea {
        resize: vertical;
        min-height: 110px;
    }

    .form-actions {
        text-align: right;
        margin-top: 8px;
    }

    .btn-postular {
        background-color: var(--azul-oscuro);
        color: #ffffff;
        padding: 13px 30px;
        border: none;
        border-radius: 5px;
        font-size: 14.5px;
        font-weight: 600;
        cursor: pointer;
        transition: background-color 0.25s ease;
        display: inline-block;
    }

    .btn-postular:hover {
        background-color: #002244;
    }

    .alert-success,
    .alert-error {
        padding: 14px 18px;
        border-radius: 5px;
        margin-bottom: 25px;
        font-size: 14px;
        font-weight: 600;
        text-align: center;
    }

    .alert-success {
        color: #0f5132;
        background-color: #d1e7dd;
        border: 1px solid #badbcc;
    }

    .alert-error {
        color: #842029;
        background-color: #f8d7da;
        border: 1px solid #f5c2c7;
    }

    /* Responsive */
    @media (max-width: 868px) {
        .seccion-postulacion { padding: 40px 15px; }
        .form-postulacion-container { padding: 30px 25px; }
    }

    @media (max-width: 640px) {
        .form-grid {
            grid-template-columns: 1fr;
            gap: 16px;
        }
        .form-group.full-width,
        .form-actions {
            grid-column: span 1;
        }
        .form-actions { text-align: center; }
        .btn-postular { width: 100%; }
        .form-postulacion-container { padding: 22px 16px; }
        .form-postulacion-header h2 { 
            font-size: 20px;
            margin-bottom: 12px;
        }
        .form-postulacion-header p { font-size: 14px; text-align: left; }
    }
</style>

</head>
<body>

    <!-- HEADER -->
    <header>
        <div class="header-container">
            <a href="../index.php" class="header-logo-link">
                <img src="../img/Logo-Cepiies-marco-blanco-_1_.ico" alt="Logo CePIIeS">
            </a>
            <nav>
                <ul>
                    <li><a href="../index.php">Inicio</a></li>
                    <li><a href="sobreelcentro.html">Sobre el centro</a></li>
                    <li><a href="equipo.php" class="activo">Equipo de trabajo</a></li>
                    <li><a href="lineas.html">Líneas de investigación</a></li>
                    <li><a href="../index.php#contacto">Contacto</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- BANNER CON IMAGEN -->
    <section class="banner-sobre">
        <img src="../img/cepi6.jpg" alt="Equipo CePIIeS">
        <div class="banner-sobre-overlay">
            <h1>Equipo de trabajo</h1>
            <p>El CePIIeS está conformado por un equipo diverso de profesionales, docentes e investigadores comprometidos con la producción de conocimiento y la mejora de problemáticas vinculadas a la salud.</p>
        </div>
    </section>

    <!-- MAIN -->
    <main>

        <!-- Integrantes -->
        <section class="seccion-equipo">
            <h2>Integrantes del CePIIeS</h2>

            <div class="equipo-grid">

                <article class="integrante">
                    <div class="integrante-foto">
                        <img src="../img/MarielaB.jpg" alt="Foto Mariela Bellotti">
                    </div>
                    <h3>Mariela Bellotti
                        <a href="mailto:mibellotti@unrn.edu.ar" class="integrante-mail" title="Enviar mail">
                            <img src="../img/imagem.png" alt="Mail">
                        </a>
                    </h3>
                    <p>Directora</p>
                </article>

                <article class="integrante">
                    <div class="integrante-foto">
                        <img src="../img/Fernando t (1).jpg" alt="Foto integrante 2">
                    </div>
                    <h3>Fernando Tortosa
                        <a href="mailto:fgtortosa@unrn.edu.ar" class="integrante-mail" title="Enviar mail">
                            <img src="../img/imagem.png" alt="Mail">
                        </a>
                    </h3>
                    <p>Director LETIS</p>
                </article>

                <article class="integrante">
                    <div class="integrante-foto">
                        <img src="../img/perner.jpg" alt="Foto integrante 11">
                    </div>
                    <h3>Serena Perner
                        <a href="mailto:msperner@unrn.edu.ar" class="integrante-mail" title="Enviar mail">
                            <img src="../img/imagem.png" alt="Mail">
                        </a>
                    </h3>
                    <p>Investigadora</p>
                </article>

                <article class="integrante">
                    <div class="integrante-foto">
                        <img src="../img/German.jpg" alt="Foto integrante 7">
                    </div>
                    <h3>Germán Guaresti
                        <a href="mailto:ggguaresti@unrn.edu.ar" class="integrante-mail" title="Enviar mail">
                            <img src="../img/imagem.png" alt="Mail">
                        </a>
                    </h3>
                    <p>Investigador</p>
                </article>

                <article class="integrante">
                    <div class="integrante-foto">
                        <img src="../img/yimy.jpg" alt="Foto integrante 12">
                    </div>
                    <h3>Yimy Amarillo
                        <a href="mailto:yamarillogomez@unrn.edu.ar" class="integrante-mail" title="Enviar mail">
                            <img src="../img/imagem.png" alt="Mail">
                        </a>
                    </h3>
                    <p>Investigador</p>
                </article>

                <article class="integrante">
                    <div class="integrante-foto">
                        <img src="../img/Celia togg.jpg" alt="Foto integrante 5">
                    </div>
                    <h3>Celia Tognetti
                        <a href="mailto:ctognetti@unrn.edu.ar" class="integrante-mail" title="Enviar mail">
                            <img src="../img/imagem.png" alt="Mail">
                        </a>
                    </h3>
                    <p>Investigadora</p>
                </article>

                <article class="integrante">
                    <div class="integrante-foto">
                        <img src="../img/ceola.jpg" alt="Foto 3">
                    </div>
                    <h3>Isabella Ceola
                        <a href="mailto:iceola@unrn.edu.ar" class="integrante-mail" title="Enviar mail">
                            <img src="../img/imagem.png" alt="Mail">
                        </a>
                    </h3>
                    <p>Investigadora</p>
                </article>

                <article class="integrante">
                    <div class="integrante-foto">
                        <img src="../img/Buttó.jpg" alt="Foto integrante 4">
                    </div>
                    <h3>Betina Buttó
                        <a href="mailto:bbutto@unrn.edu.ar" class="integrante-mail" title="Enviar mail">
                            <img src="../img/imagem.png" alt="Mail">
                        </a>
                    </h3>
                    <p>Investigadora</p>
                </article>

                <article class="integrante">
                    <div class="integrante-foto">
                        <img src="../img/jsilvetti.jpg" alt="Foto integrante 6">
                    </div>
                    <h3>Juan C. Salvitti
                        <a href="mailto:jcsalvitti@unrn.edu.ar" class="integrante-mail" title="Enviar mail">
                            <img src="../img/imagem.png" alt="Mail">
                        </a>
                    </h3>
                    <p>Investigador</p>
                </article>

                <article class="integrante">
                    <div class="integrante-foto">
                        <img src="../img/paola.jpg" alt="Foto integrante 8">
                    </div>
                    <h3>Paola D'Adamo
                        <a href="mailto:pdadamo@unrn.edu.ar" class="integrante-mail" title="Enviar mail">
                            <img src="../img/imagem.png" alt="Mail">
                        </a>
                    </h3>
                    <p>Investigadora</p>
                </article>

                <article class="integrante">
                    <div class="integrante-foto">
                        <img src="../img/crisbarbaro.jpg" alt="Foto integrante 9">
                    </div>
                    <h3>Cristian Barbaro
                        <a href="mailto:crbarbaro@unrn.edu.ar" class="integrante-mail" title="Enviar mail">
                            <img src="../img/imagem.png" alt="Mail">
                        </a>
                    </h3>
                    <p>Investigador</p>
                </article>

                <article class="integrante">
                    <div class="integrante-foto">
                        <img src="../img/Agustin iglesias.jpg" alt="Foto integrante 10">
                    </div>
                    <h3>Agustín Iglesias
                        <a href="mailto:aiglesias@unrn.edu.ar" class="integrante-mail" title="Enviar mail">
                            <img src="../img/imagem.png" alt="Mail">
                        </a>
                    </h3>
                    <p>Investigador</p>
                </article>

                <article class="integrante">
                    <div class="integrante-foto">
                        <img src="../img/Nadie.jpg" alt="Foto integrante 13">
                    </div>
                    <h3>Mónica Quevedo
                        <a href="mailto:mbquevedo@unrn.edu.ar" class="integrante-mail" title="Enviar mail">
                            <img src="../img/imagem.png" alt="Mail">
                        </a>
                    </h3>
                    <p>Investigadora</p>
                </article>

                <article class="integrante">
                    <div class="integrante-foto">
                        <img src="../img/mompom.jpg" alt="Foto integrante 16">
                    </div>
                    <h3>Juan M. Mompó
                        <a href="mailto:jmmompo@unrn.edu.ar" class="integrante-mail" title="Enviar mail">
                            <img src="../img/imagem.png" alt="Mail">
                        </a>
                    </h3>
                    <p>Investigador concurrente</p>
                </article>

                <article class="integrante">
                    <div class="integrante-foto">
                        <img src="../img/tissone (1).jpg" alt="Foto integrante 17">
                    </div>
                    <h3>Ángela Tissone
                        <a href="mailto:aitissone@unrn.edu.ar" class="integrante-mail" title="Enviar mail">
                            <img src="../img/imagem.png" alt="Mail">
                        </a>
                    </h3>
                    <p>Investigadora concurrente</p>
                </article>

                <article class="integrante">
                    <div class="integrante-foto">
                        <img src="../img/Natalia.jpg" alt="Foto integrante 14">
                    </div>
                    <h3>Natalia Artola
                        <a href="mailto:nsartolavinciguerra@unrn.edu.ar" class="integrante-mail" title="Enviar mail">
                            <img src="../img/imagem.png" alt="Mail">
                        </a>
                    </h3>
                    <p>Investigadora concurrente</p>
                </article>

                <article class="integrante">
                    <div class="integrante-foto">
                        <img src="../img/Lucia.png" alt="Foto integrante 15">
                    </div>
                    <h3>Lucía Lossetti
                        <a href="mailto:lalossetti@unrn.edu.ar" class="integrante-mail" title="Enviar mail">
                            <img src="../img/imagem.png" alt="Mail">
                        </a>
                    </h3>
                    <p>Investigadora concurrente</p>
                </article>

                <article class="integrante">
                    <div class="integrante-foto">
                        <img src="../img/Nadie.jpg" alt="Foto integrante 18">
                    </div>
                    <h3>Mariana Raineri
                        <a href="mailto:mraineriandersen@unrn.edu.ar" class="integrante-mail" title="Enviar mail">
                            <img src="../img/imagem.png" alt="Mail">
                        </a>
                    </h3>
                    <p>Investigadora concurrente</p>
                </article>

                <article class="integrante">
                    <div class="integrante-foto">
                        <img src="../img/loreleive.jpg" alt="Foto integrante 19">
                    </div>
                    <h3>Lorena Leive
                        <a href="mailto:mlleive@unrn.edu.ar" class="integrante-mail" title="Enviar mail">
                            <img src="../img/imagem.png" alt="Mail">
                        </a>
                    </h3>
                    <p>Investigadora concurrente</p>
                </article>

            </div>
        </section>

       <!-- SECCIÓN: FORMULARIO PARA POSTULANTES -->
        <section class="seccion-postulacion" id="postularse">
            <div class="form-postulacion-container">
                <div class="form-postulacion-header">
                    <h2>¿Querés sumarte a nuestro equipo?</h2>
                    <p>Si sos docente, investigador o profesional interesado en postularte para integrar las líneas de trabajo del CePIIeS, completá el siguiente formulario:</p>
                </div>

                <?php if (isset($_GET['status']) && $_GET['status'] === 'success'): ?>
                    <div class="alert-success">¡Postulación enviada con éxito! Nos pondremos en contacto a la brevedad.</div>
                <?php elseif (isset($_GET['status']) && $_GET['status'] === 'error'): ?>
                    <div class="alert-error">Hubo un error al enviar la postulación. Por favor verificá los datos e intentalo de nuevo.</div>
                <?php endif; ?>

                <form action="../procesar_postulacion.php" method="POST" class="form-grid">
                    
                    <div class="form-group">
                        <label for="nombre">Nombre completo *</label>
                        <input type="text" id="nombre" name="nombre" required placeholder="Ej: Dra. María González">
                    </div>

                    <div class="form-group">
                        <label for="email">Correo electrónico *</label>
                        <input type="email" id="email" name="email" required placeholder="ejemplo@gmail.com">
                    </div>

                    <div class="form-group">
                        <label for="telefono">Teléfono de contacto</label>
                        <input type="tel" id="telefono" name="telefono" placeholder="+54 294 4000000">
                    </div>

                    <div class="form-group">
                        <label for="linea_interes">Línea de investigación de interés *</label>
                        <select id="linea_interes" name="linea_interes" required>
                            <option value="">-- Seleccionar línea --</option>
                            <option value="Salud ambiental">Salud ambiental</option>
                            <option value="Epidemiología regional">Epidemiología regional</option>
                            <option value="Políticas públicas en salud">Políticas públicas en salud</option>
                            <option value="Formación de profesionales de la salud">Formación de profesionales de la salud</option>
                            <option value="Enfermedades zoonóticas">Enfermedades zoonóticas</option>
                            <option value="Procesos salud-enfermedad">Procesos salud-enfermedad</option>
                            <option value="Otra / General">Otra / General</option>
                        </select>
                    </div>

                    <div class="form-group full-width">
                        <label for="antecedentes">Titulación y breve resumen de antecedentes *</label>
                        <textarea id="antecedentes" name="antecedentes" required placeholder="Indica tu profesión, títulos académicos y experiencia previa en investigación..."></textarea>
                    </div>

                    <div class="form-actions">
                        <button type="submit" class="btn-postular">Enviar Postulación</button>
                    </div>

                </form>
            </div>
        </section>

        <!-- Trabajo interdisciplinario -->
        <section class="seccion-interdisciplinario">
            <h2>Trabajo interdisciplinario</h2>
            <p>La diversidad de trayectorias y disciplines fortalece una mirada integral sobre los desafíos actuales en salud, promoviendo enfoques colaborativos y soluciones innovadoras.</p>

            <div class="interdisciplinario-cta">
                <p>¿Querés conocer las líneas de trabajo del centro o ponerte en contacto?</p>
                <div class="cta-botones">
                    <a href="lineas.html" class="btn-institucional-primario">Líneas de investigación</a>
                    <a href="../index.php#contacto" class="btn-institucional-secundario">Contacto</a>
                </div>
            </div>
        </section>

    </main>

    <!-- FOOTER -->
    <footer>
        <div class="footer-container">
            <div class="footer-logo">
                <img src="../img/Logo Cepiies marco blanco.jpg" alt="Logo CePIIeS">
                <p>Centro Patagónico Interdisciplinario de Investigaciones en Salud</p>
                <p>UNRN Sede Andina – Bariloche</p>
            </div>
            <div class="footer-contacto">
                <h4>Contacto</h4>
                <address>
                    <p>mibellotti@unrn.edu.ar</p>
                    <p>Mitre 630, Bariloche, Río Negro</p>
                </address>
            </div>
        </div>
        <div class="footer-fondo">
            <p>© 2026 CePIIeS – Universidad Nacional de Río Negro. Todos los derechos reservados.</p>
            <p>Sitio desarrollado por <a href="https://www.linkedin.com/in/nicasio-guaresti-669027424" target="_blank" class="footer-credit-link">Nicasio Guaresti</a></p>
        </div>
    </footer>

</body>
</html>