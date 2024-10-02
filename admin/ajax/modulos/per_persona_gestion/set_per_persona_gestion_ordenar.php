<?php
include_once '_autoload.php';

$c = Gral::getVars(1, 'c');
$t = Gral::getVars(1, 't');
$criterio = new Criterio(PerPersona::SES_CRITERIOS);
$criterio->addTabla('per_persona');
$criterio->addOrden($c, $t);
$criterio->setOrden();

// se fuerza variable de buscador en 1 para no pisar el orden seleccionado en proxima primera carga
Gral::setSes(PerPersona::SES_CRITERIOS."_ACCION_BUSCAR", 1);
?>

