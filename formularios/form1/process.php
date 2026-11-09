<?php
    # Operador ternario
    $nombre = isset($_POST["txtNombre"]) ? $_POST["txtNombre"] : "";

    // Equivalente en condicionales
    if(isset($_POST["txtNombre"])) {
        $nombre = $_POST["txtNombre"];
    } else {
        $nombre = "";
    }

    $email = isset($_POST["txtEmail"]) ? $_POST["txtEmail"] : "";

    # Operador nulo seguro
    $telefono = $_POST["txtTelefono"] ?? 0;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main class="container">
        <div class="campo">
            <label>Nombre: <?php echo $nombre ?></label>
        </div>
        <div class="campo">
            <label>Email: <?php echo $email ?></label>
        </div>
        <div class="campo">
            <label>Telefono: <?php echo $telefono ?></label>
        </div>
    </main>
</body>
</html>