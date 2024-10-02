<?php
include_once '_autoload.php';

$id = Gral::getVars(2, 'id');
$nov_novedad = NovNovedad::getOxId($id);

$estado = ($nov_novedad->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'nov_novedad_gestion_uno.php';
?>

