<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Courier Viajero - Nosotros</title>

    <link rel="icon" href="../img/LOGO.jpg">
    <!-- Se agrega ../ para salir de la carpeta "nosotros" y encontrar el CSS en la raíz -->
    <link rel="stylesheet" href="../estilos.css">
    <link rel="stylesheet" href="nosotros.css">
</head>
<body>

    <!-- CORREGIDO: Se agrega ../ para salir de "nosotros" y entrar a "include" -->
    <?php include '../include/header.php'; ?>

    <main>
        <h1 class="titulo-nosotros">NOSOTROS</h1>
        
        <section class="contenedor-nosotros">
            <div class="galeria-nosotros">
                <img src="../img/Tacna.jpg" alt="Carga de mercadería" class="img-1">
            </div>
            
            <div class="texto-nosotros">
                <h2>Envíos con seguridad<br>y confianza</h2>
                <p>En Viajero Courier somos líderes en el transporte de carga a nivel nacional...</p>
            </div>
        </section>

        <h1 class="titulo-nosotros">SERVICIOS DE TURISMO</h1>
        
        <section class="contenedor-nosotros">
            <div class="galeria-nosotros">
                <img src="../img/Tacna.jpg" alt="Carga de mercadería" class="img-1">
            </div>
            
            <div class="texto-nosotros">
                <h2>Envíos con seguridad<br>y confianza</h2>
                <p>En Viajero Courier somos líderes en el transporte de carga a nivel nacional...</p>
            </div>
        </section>


    </main>

    <!-- CORREGIDO: Se agrega ../ para el footer -->
    <?php include '../include/footer.php'; ?>

    <!-- Se agrega ../ para el script JS -->
    <script src="../script.js"></script>
</body>
</html>