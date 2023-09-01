<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/secreta.css"> <!-- Agregamos el archivo CSS -->
    <title>Página Protegida</title>
</head>
<body>
<?php
session_start();

if (empty($_SESSION["usuario"])) {
    header("Location: formulario.html");
    exit();
}
?>

<div class="container">
    <div class="message">
        <?php echo "BIENVENIDO A NUESTRA WEB"; ?>
    </div>

    <p class="loggedin-message">
        Hola, solo pueden acceder los usuarios logueados.
    </p>
    
    <a href="index1.php"><button class="btn">Subir archivo</button></a>
    <a href="logout.php" class="logout-link"><button class="btn1">Cerrar sesión</button></a>
</div>

</body>
</html>


