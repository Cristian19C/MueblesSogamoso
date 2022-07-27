<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/asientos.css">
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
    <main class="main">
        <div class="container">
            <div class="fondo__sillas">
                <img src="../img/Asientos/slider.jpg" alt="" class="fondo__img">
                <div class="description__fondo">
                    <a href="<?php echo $url; ?>" class="link__fondo prueba__efecto">Inicio</a>
                    <p class="txt">/</p>
                    <a href="asientos.php" class="link__fondo">Asientos</a>
                    <i class='bx bx-left-arrow-alt'></i>
                </div>
                <div class="subDescription__fondo">
                    <i class="fa-solid fa-arrow-left-long"></i>
                    <h4 class="fondo__txt">Asientos</h4>
                </div>

            </div>
        </div>

        <!-- Sección de productos -->
        <!-- <i class="fa-solid fa-bars menu__segundario"></i> -->
        <div class="container-btn">
            <div class="icon__subMenu"></div>
            <div class="icon__txt">Nuestros asientos</div>
        </div>
        <div class="container__general--asientos">
            <div class="container__productos">
                <div class="subMenu">
                    <nav class="sub__nav">
                        <li class="sub__item"><a href="/public/asientos.html" class="sub__link principal" data="Asientos">Asientos</a></li>
                        <li class="sub__item"><a href="/public/Asientos/asientosBarra.html" class="sub__link" data="Asientos de barra">Asientos de barra</a></li>
                        <li class="sub__item"><a href="/public/Asientos/asientosBancas.html" class="sub__link" data="Bancas">Bancas</a></li>
                        <li class="sub__item"><a href="/public/Asientos/asientosSillas.html" class="sub__link" data="Sillas">Sillas</a></li>
                        <li class="sub__item"><a href="/public/mesas.html" class="sub__link principal" data="Mesas">Mesas</a></li>
                        <li class="sub__item"><a href="/public/Mesas/mesasCentro.html" class="sub__link" data="Mesas de centro">Mesas de centro</a></li>
                        <li class="sub__item"><a href="/public/Mesas/escritorios.html" class="sub__link" data="Escritorios">Escritorios</a></li>
                        <li class="sub__item"><a href="/public/Mesas/mesasComedor.html" class="sub__link" data="Mesas de comedor">Mesas de comedor</a></li>
                        <li class="sub__item"><a href="/public/sofas.html" class="sub__link principal" data="Sófas">Sófas</a></li>
                        <li class="sub__item"><a href="/public/muebles.html" class="sub__link principal" data="Muebles">Muebles</a></li>
                    </nav>
                </div>
            </div>
    
            <section class="container__asientos">
                <!-- Asientos -->
                <!-- 1 -->
                <div class="favoritos">
                    <img id="efecto" src="/img/Asientos/imagen_1.jpg" alt="" onmousemove="productosCambio(1)" onmouseleave="productosCambio(2)" class="caja__img">
                    <div class="favoritos__descripcion">
                        <p class="asientos__nombre">Silla Vick</p>
                        <p class="asientos__precio">$100.000</p>
                    </div>
                </div>
                <!-- 2 -->
                <div class="favoritos">
                    <img id="efecto1" src="/img/Asientos/imagen_2.jpg" alt="" onmousemove="productosCambio(3)" onmouseleave="productosCambio(4)" class="caja__img">
                    <div class="favoritos__descripcion">
                        <p class="asientos__nombre">Silla Vick</p>
                        <p class="asientos__precio">$100.000</p>
                    </div>
                </div>
                <!-- 3 -->
                <div class="favoritos">
                    <img id="efecto2" src="/img/Asientos/imagen_3.jpg" alt="" onmousemove="productosCambio(5)" onmouseleave="productosCambio(6)" class="caja__img">
                    <div class="favoritos__descripcion">
                        <p class="asientos__nombre">Silla Vick</p>
                        <p class="asientos__precio">$100.000</p>
                    </div>
                </div>
                <!-- 4 -->
                <div class="favoritos">
                    <img id="efecto3" src="/img/Asientos/imagen_4.jpg" alt="" onmousemove="productosCambio(7)" onmouseleave="productosCambio(8)" class="caja__img">
                    <div class="favoritos__descripcion">
                        <p class="asientos__nombre">Silla Vick</p>
                        <p class="asientos__precio">$100.000</p>
                    </div>
                </div>
                

            </section>
        </div>
    </main>



    <script src="../js/menu.js"></script>
</body>
</html>