<?php
// Ruta base de tu proyecto en XAMPP
$base = "/SistCourier26";
?>
<header>
    <!-- NUEVO CONTENEDOR AÑADIDO AQUÍ -->
    <div class="header-content">
        <div class="logo-container">
            <a href="<?php echo $base; ?>/index.php">
                <img src="<?php echo $base; ?>/img/LOGO.jpg" alt="Logo Viajero Courier">
            </a>
        </div>

        <nav class="navbar">
            <ul>
                <li><a href="<?php echo $base; ?>/nosotros/nosotros.php">NOSOTROS</a></li>
                <li><a href="<?php echo $base; ?>/rutas/ruta.php">RUTAS</a></li>
                <li><a href="<?php echo $base; ?>/servicio/servicios.php">SERVICIOS</a></li>
            </ul>
        </nav>
    </div>
</header>