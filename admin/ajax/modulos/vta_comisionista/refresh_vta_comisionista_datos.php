<?php
include_once '_autoload.php';

$pag = Gral::getVars(2, 'pag', 1);
VtaComisionista::setSesPag($pag);

$criterio = new Criterio(VtaComisionista::SES_CRITERIOS);
$criterio->addTabla('vta_comisionista');
$criterio->setCriteriosInicial();

$paginador = new Paginador(VtaComisionista::getSesPagCantidad(), VtaComisionista::getSesPag());
$vta_comisionistas = VtaComisionista::getVtaComisionistas($paginador, $criterio);

include 'vta_comisionista_datos.php';
?>

