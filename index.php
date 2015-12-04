<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <div id="buttons">
        <h1>Iniciar sesión en FB para enviar tu ubicación</h1>
        <fb:login-button scope="public_profile,email" onlogin="checkLoginState();">
        </fb:login-button>
    </div>
</body>
<script src="js/facebook.js"></script>
</html>