<?php
// Imprimir en PHP -> echo
// http://localhost/adso3410390/fechas_test.php
echo "Fecha Actual: " . "</br>";
echo date('Y-m-d- H:i:s');
echo "</br>";

$fecha = new DateTime(); // Hora actual

// Mostrar en formato específico
echo $fecha->format('Y-m-d H:i:s');

// Crear una fecha personalizada y darle formato
$otraFecha = DateTime::createFromFormat('d/m/Y', '15/08/2026');
echo "</br>";
echo $otraFecha->format('Y-m-d'); // Imprime: 2026-08-15
echo "</br>";

// Convertir texto relativo a fecha
echo date('Y-m-d', strtotime('next Sunday'));
echo "</br>";
echo date('Y-m-d', strtotime('+1 week'));
echo "</br>";
echo "</br>";


// 1. Configurar la zona horaria (ajusta según tu país)
date_default_timezone_set('America/Bogota');

// 2. Arrays de traducción al español
$dias = ['domingo', 'lunes', 'martes', 'miércoles', 'jueves', 'viernes', 'sábado'];
$meses = ['', 'enero', 'febrero', 'marzo', 'abril', 'mayo', 'junio', 'julio', 'agosto', 'septiembre', 'octubre', 'noviembre', 'diciembre'];

// 3. Obtener los datos de la fecha actual
$numeroDiaSemana = date('w'); // 0 para domingo, 6 para sábado
$diaMes = date('d');
$numeroMes = date('n'); // 1 para enero, 12 para diciembre
$ano = date('Y');
$hora = date('h:i:s');
$am_pm = strtolower(date('a')); // 'am' o 'pm'

// 4. Armar y mostrar la frase exacta
echo "Hoy es " . $dias[$numeroDiaSemana] . " " . $diaMes . " de " . $meses[$numeroMes] . " de " . $ano . " y son las " . $hora . " " . $am_pm;

?>