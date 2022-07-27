<?php
    if($_POST){
        //funcion de php
        header('Location:inico.php');
    }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
    <link rel="stylesheet" href="./css/login.css">
    <title>Administrador</title>
</head>
<body>
    <div class="container__login">
        <form method="POST" class="form--box animate__animated animate__pulse">
            <h1 class="form-title">Login</h1>
            <input type="text" placeholder="Usuario" name="usuario" required>
            <input type="password" placeholder="Contraseña" name="contrasenia" required>
            <button type="submit">
                Login
            </button>

        </form>
    </div>
</body>
</html>