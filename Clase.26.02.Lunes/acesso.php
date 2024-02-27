<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Iniciar Sesión</title>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
<style>
    body {
        font-family: 'Roboto', sans-serif;
        background-color: #121212;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    .login-container {
        width: 300px;
        background-color: #1f1f1f;
        border-radius: 8px;
        padding: 20px;
        box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
    }

    .login-container h2 {
        text-align: center;
        margin-bottom: 20px;
        color: #fff;
    }

    .login-container input[type="text"],
    .login-container input[type="password"] {
        width: 100%;
        padding: 12px;
        margin-bottom: 15px;
        border: 1px solid #333;
        border-radius: 5px;
        box-sizing: border-box;
        background-color: #333;
        color: #fff;
    }

    .login-container input[type="submit"] {
        width: 100%;
        padding: 12px;
        border: none;
        background-color: #007bff;
        color: #fff;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .login-container input[type="submit"]:hover {
        background-color: #0056b3;
    }
</style>
</head>
<body>
<div class="login-container">
    <h2>Iniciar Sesión</h2>
    <form action="<?php echo htmlspecialchars('sesion.php');?>" method="post">
        <input type="text" id="username" name="txtUsuario" placeholder="Usuario">
        <input type="password" id="password" name="txtClave" placeholder="Contraseña">
        <input type="submit" value="Iniciar Sesión">
    </form>
</div>
</body>
</html>
