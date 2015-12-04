<?php
    $name = $_GET['name'];
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div id="map-canvas"></div>
<div id="data">
    <h1>Tu posición</h1>
    <h3 id="latitude">Latitud:</h3>
    <h3 id="longitude">Longitud:</h3>
</div>
<div id="form">
    <h1>Envía tus coordenadas a Asore</h1>
    <form action="php/send.php" method="post">
        Ingresa tu nombre:
        <input type="text" name="name" id="name" value="<?= $name ?>"/> <br />
        <input type="hidden" name="input_latitude" id="input_latitude"/>
        <input type="hidden" name="input_longitude" id="input_longitude"/>
        <input id="submit" type="submit" value="Enviar coordenadas" />
    </form>
</div>
</body>
<script src="js/map.js"></script>
</html>