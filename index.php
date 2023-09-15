<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <style>
        body {
            background-color: #FFC0CB; /* Color rosa */
            text-align: center;
        }
        .login-container {
            margin-top: 100px;
        }
        img {
            width: 200px;
            height: 200px;
            border-radius: 50%;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <img src="https://olondriz.com/wp-content/uploads/2020/04/ambar-perrito-1-1024x899.jpg" alt="Perrito">
        <h1>INICIAR SESIÓN</h1>
        <h4>Proporcione sus credenciales</h4>
        
        <!-- Este es un formulario de inicio de sesión que no realiza ninguna verificación -->
        <form method="post" action="">
            <input type="text" name="username" placeholder="Usuario" required><br>
            <input type="password" name="password" placeholder="Contraseña" required><br><br>
            <input type="submit" style="color: purple" value="Iniciar Sesión">
        </form>
        <h6 style="color: red">No es funcional</h6>
    </div>
</body>
</html>
