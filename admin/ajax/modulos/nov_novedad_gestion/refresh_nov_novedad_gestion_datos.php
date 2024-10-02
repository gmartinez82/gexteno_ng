<?php
include_once '_autoload.php';

$pag = Gral::getVars(2, 'pag', 1);
NovNovedad::setSesPag($pag);

$criterio = new Criterio(NovNovedad::SES_CRITERIOS);
$criterio->addTabla('nov_novedad');
$criterio->setCriteriosInicial();

$paginador = new Paginador(NovNovedad::getSesPagCantidad(), NovNovedad::getSesPag());
$nov_novedads = NovNovedad::getNovNovedads($paginador, $criterio);

include 'nov_novedad_gestion_datos.php';
?>

