<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ciclos en PHP</title>
</head>
<body>
    <?php
    $limite = 50;
    // Ciclo for
    for ($i=0; $i <$limite; $i++) {
        # Impresión de los númeos del 0 al 50
        echo "Numero: $i<br>";
    }

    // Ciclo while 
    $limite = rand(50, 100);
    $inicio = 1;
    # Impresión de los números de 1 al limte aleatorio (entre 50 y 100)
    while ($inicio <= $limite) {
        echo "[WHILE] Número: ".$inicio."<br>";
        $inicio++;
    }

    // DO WHILE
    $dia = date("d");
    $inicio = rand(10, 20);
    # Mostrar los números de un número random (entre 10 y 20) a la fecha actual
    do {
        echo "[DO..WHILE] Número: $inicio";
    } while ($inicio <= $dia);
    
    # Mostrar la tabla de multiplicar del 2
    for ($i = 1; $i <= 10; $i++) {
        $resultado = 2 * $i;
        echo "2 x $i = $resultado<br>";
    }
    ?>
    
</body>
</html>