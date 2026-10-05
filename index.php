<?php include 'conexion.php';?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Courier Viajero - Inicio</title>
    <link rel="icon" href="img/LOGO.jpg">
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    
    <!-- LLAMAMOS AL ENCABEZADO -->
    <?php include 'include/header.php'; ?>

    <main>
        <!-- SECCIÓN BANNER / HERO CON IMAGEN DE FONDO -->
        <section class="img-container">
            <img src="img/fondo_courier.jpg" alt="Fondo de camioneta de envíos" class="image">
            <div class="overlay"></div>
        </section>

        <!-- SECCIÓN DE DESTINOS (CARRUSEL) -->
        <section class="destinos-section">
            <h2 class="destinos-title">Nuestras Agencias</h2>
            
            <div class="carrusel-container">
                <button type="button" class="carrusel-btn prev-btn" id="prevBtn">&#10094;</button>
                
                <div class="carrusel-track-wrapper">
                    <div class="carrusel-track" id="carruselTrack">
                        <div class="carrusel-item">
                            <img src="img/Tacna.jpg" alt="Tacna">
                            <h3>Tacna</h3>
                        </div>
                        <div class="carrusel-item">
                            <img src="img/arequipa.jpg" alt="Arequipa">
                            <h3>Arequipa</h3>
                        </div>
                        <div class="carrusel-item">
                            <img src="img/Ilo.png" alt="Ilo">
                            <h3>Ilo</h3>
                        </div>
                        <div class="carrusel-item">
                            <img src="img/Moquegua.jpg" alt="Moquegua">
                            <h3>Moquegua</h3>
                        </div>
                    </div>
                </div>

                <button type="button" class="carrusel-btn next-btn" id="nextBtn">&#10095;</button>
            </div>
        </section>
    </main>

    <!-- LLAMAMOS AL PIE DE PÁGINA -->
    <?php include 'include/footer.php'; ?>

    <!-- Lógica JavaScript externa -->
    <script src="script.js"></script>
</body>
</html>