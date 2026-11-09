<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario 1</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main class="container">
        <form id="form1" action="process.php" method="post">
            <h2>Registro usuario</h2>
            <div class="campo">
                <label for="txtNombre">Nombre</label>
                <input type="text" name="txtNombre" id="txtNombre">
            </div>
            <div class="campo">
                <label for="txtEmail">Email</label>
                <input type="email" name="txtEmail" id="txtEmail">
            </div>
            <div class="campo">
                <label for="txtTelefono">Telefono</label>
                <input type="tel" name="txtTelefono" id="txtTelefono">
            </div>
            <button type="submit">Enviar</button>
        </form>
    </main>
</body>
</html>