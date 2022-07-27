<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"/>
    <title>Tienda</title>
</head>
<body>
    <header class="main-header">
        <div class="container container--flex">
        <div class="main-header__container">
            <span class="icon-menu" id="btn-menu"><i class="fa-solid fa-bars"></i></span>
            <div class="main-title">
            <a href="index.php" class="main-header__link">
                <h1 class="main-header__txt">Muebles</h1>
            </a>
            </div>
            <div class="icons">
            <span class="icon-search"><i class="fa-brands fa-searchengin"></i></span>
            <span class="icon-cart"><i class="fa-solid fa-cart-plus"></i></span>
            </div>
            <nav class="main-nav">
                <li class="menu__item"><a href="index.php" class="menu__link" data="Inicio">Inicio</a></li>
                <li class="menu__item"><a href="public/asientos.php" class="menu__link" data="Asientos">Asientos</a></li>
                <li class="menu__item"><a href="public/mesas.php" class="menu__link" data="Mesas">Mesas</a></li>
                <li class="menu__item"><a href="public/sofas.php" class="menu__link" data="Sofás">Sofás</a></li>
                <li class="menu__item"><a href="public/muebles.php" class="menu__link" data="Muebles">Muebles</a></li>
                <li class="menu__item"><a href="public/nosotros.php" class="menu__link" data="Nosotros">Nosotros</a></li>
                <li class="menu__item"><a href="public/contacto.php" class="menu__link" data="Contacto">Contacto</a></li>
            </nav>
        </div>
        </div> 
    </header>

     <!-- Slider -->
    <div class="container-slider">
        <div class="slider" id="slider">
            <div class="slider__section">
                <img src="img/slider_1.jpg" alt="" class="slider__img">
                <div class="slider__content">
                    <p class="slider__txt">¡Vive los espacios!</p>
                </div>
            </div>
            <div class="slider__section">
                <img src="img/slider_2.jpg" alt="" class="slider__img">
                <div class="slider__content">
                    <p class="slider__txt">¡Vive los espacios!</p>
                </div>
            </div>
            <div class="slider__section">
                <img src="img/slider_3.jpg" alt="" class="slider__img">
                <div class="slider__content">
                    <p class="slider__txt">¡Vive los espacios!</p>
                </div>
            </div>
        </div>
        <div class="slider__btn slider__btn-right" id="btn-right">&#62;</div>
        <div class="slider__btn slider__btn-left" id="btn-left">&#60;</div>
    </div>

    <script src="./js/menu.js"></script>
    <script src="./js/slider.js"></script>
</body>
</html>