<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <?php include 'header.php'; ?>
        <!-- "include" continua apesar de no encontrar el archivo
        "require" al no encontrar el archivo se detiene la aplicacion -->
    </header>
    <h1>Listado de productos</h1>
    <div class="productos">
        <img src="/img/productos/crema_manos" alt="">
        <h2>Crema de manos</h2>
        <p>Emulsion hidratante 200ml envase</p>
        <button class="compra">Comprar</button>
    </div>
    <div class="productos">
        <h2>Crema de manos</h2>
        <p>Emulsion hidratante 200ml envase</p>
        <button class="compra">Comprar</button>
    </div>
    <div class="productos">
        <h2>Crema de manos</h2>
        <p>Emulsion hidratante 200ml envase</p>
        <button class="compra">Comprar</button>
    </div>
    <footer>
        <?php include 'footer.php' ?>
    </footer>
</body>
</html>