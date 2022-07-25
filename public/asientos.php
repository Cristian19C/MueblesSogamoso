<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"/>
    <title>Asientos | Sogamoso</title>
</head>
<body>

    <?php $url="http://".$_SERVER['HTTP_HOST']."/TiendaSogamoso"?>

    <header class="main-header">
        <div class="container container--flex">
        <div class="main-header__container">
            <span class="icon-menu" id="btn-menu"><i class="fa-solid fa-bars"></i></span>
            <div class="main-title">
            <a href="<?php echo $url;?>" class="main-header__link">
                <h1 class="main-header__txt">Muebles</h1>
            </a>
            </div>
            <div class="icons">
            <span class="icon-search"><i class="fa-brands fa-searchengin"></i></span>
            <span class="icon-cart"><i class="fa-solid fa-cart-plus"></i></span>
            </div>
            <nav class="main-nav">
                <li class="menu__item"><a href="<?php echo $url;?>" class="menu__link" data="Inicio">Inicio</a></li>
                <li class="menu__item"><a href="asientos.php" class="menu__link" data="Asientos">Asientos</a></li>
                <li class="menu__item"><a href="mesas.php" class="menu__link" data="Mesas">Mesas</a></li>
                <li class="menu__item"><a href="sofas.php" class="menu__link" data="Sofás">Sofás</a></li>
                <li class="menu__item"><a href="muebles.php" class="menu__link" data="Muebles">Muebles</a></li>
                <li class="menu__item"><a href="nosotros.php" class="menu__link" data="Nosotros">Nosotros</a></li>
                <li class="menu__item"><a href="contacto.php" class="menu__link" data="Contacto">Contacto</a></li>
            </nav>
        </div>
        </div> 
    </header>

    <script src="../js/menu.js"></script>
</body>
</html>