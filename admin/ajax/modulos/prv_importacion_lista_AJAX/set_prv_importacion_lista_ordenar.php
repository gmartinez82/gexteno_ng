<?php
include_once '_autoload.php';

$c = Gral::getVars(1, 'c');
$t = Gral::getVars(1, 't');
//$criterio = new Criterio(PrvImportacionListo::SES_CRITERIOS);
//$criterio->addTabla('prv_importacion');
//$criterio->addOrden($c, $t);
//$criterio->setOrden();

Gral::setSes('PRV_IMPORTACION_LISTA_ORDENAR_CAMPO', $c);
Gral::setSes('PRV_IMPORTACION_LISTA_ORDENAR_TIPO', $t);

?>

