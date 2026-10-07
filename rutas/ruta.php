<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Courier Viajero - Ruta</title>

    <link rel="icon" href="../img/LOGO.jpg">
    <!-- Llamamos al CSS principal de la raíz -->
    <link rel="stylesheet" href="../estilos.css">
    <link rel="stylesheet" href="ruta.css"

</head>

<body>

    <!-- Llamamos al encabezado -->
    <?php include '../include/header.php'; ?>

    <main class="main-rutas">
        <section class="contenedor-ruta">
            
            <!-- COLUMNA IZQUIERDA: IMAGEN DEL MAPA -->
            <div class="mapa-ruta">
                <!-- Debes guardar la imagen del mapa en tu carpeta img y poner su nombre aquí -->
                <img src="../img/mapa_lima_tacna.png" alt="Tacna">
            </div>

            <!-- COLUMNA DERECHA: INFORMACIÓN DE LA RUTA -->
            <div class="info-ruta">
                <h2 class="titulo-ruta">RUTAS</h2>
                
                

                <!-- Sección de Envíos -->
                <div class="info-item">
                    <div class="info-titulo">
                        <!-- Puedes usar una imagen de una cajita aquí -->
                        <img src="../img/icono_caja.png" alt="Icono envío" class="icono-pequeno">
                        <h3>Envíos desde Tacna:</h3>
                    </div>
                    <div class="info-direccion">
                        <strong>TACNA</strong>
                        <p>Av. Vigil 1030 - Tacna</p>
                    </div>
                </div>

                <!-- Sección de Destinos -->
                <div class="info-item">
                    <div class="info-titulo">
                        <!-- Puedes usar una imagen de un pin de mapa aquí -->
                        <img src="../img/icono_destino.png" alt="Icono destino" class="icono-pequeno"> 
                        <h3>Destinos:</h3>
                    </div>
                    <p>ILO - MOQUEGUA - AREQUIPA.</p>
                </div>
             
                <!-- Botones de Acción 
                <div class="botones-ruta">
                    <a href="https://wa.me/" target="_blank" class="btn-ruta btn-whatsapp">
                        
                        <img src="../img/whatsapp.png" alt="WhatsApp"> WhatsApp
                    </a>
                    <a href="#" class="btn-ruta btn-llegar">
                        
                        <img src="../img/icono_llegar.png" alt="Cómo llegar"> Cómo llegar
                    </a>
                </div>
                -->
            </div>
            
        </section>
    </main>

    <!-- Llamamos al pie de página -->
    <?php include '../include/footer.php'; ?>

    <script src="../script.js"></script>
</body>
</html>