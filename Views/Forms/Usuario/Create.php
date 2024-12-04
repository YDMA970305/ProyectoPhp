<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Registro de Usuario</title>
    <link rel="stylesheet" href="../../Css/Style.css">
</head>

<body>
    <div>
        <h1>Registro de Usuario</h1>
        <form action="" method="post">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required>

            <label for="apellidos">Apellidos:</label>
            <input type="text" id="apellidos" name="apellidos" required>

            <label for="email">Correo electrónico:</label>
            <input type="email" id="email" name="email" required>

            <label for="telefono">Teléfono:</label>
            <input type="tel" id="telefono" name="telefono" required>

            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="password" required>

            <label for="rol">Rol:</label>
            <select id="rol" name="rol" required>
                <option value="admin">Administrador</option>
                <option value="user">Usuario</option>
            </select>

            <label for="estado">Estado:</label>
            <select id="estado" name="estado" required>
                <option value="active">Activo</option>
                <option value="inactive">Inactivo</option>
            </select>

            <button type="submit" name="action">Registrar</button>
        </form>
    </div>

    <span style="color: red"><?= @$_REQUEST['message'] ?></span>

</body>

</html>