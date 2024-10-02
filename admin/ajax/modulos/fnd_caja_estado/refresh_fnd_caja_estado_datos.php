<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
FndCajaEstado::setSesPag($pag);

$criterio = new Criterio(FndCajaEstado::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
FndCajaEstado::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('fnd_caja_estado');
$criterio->setCriteriosInicial();

$paginador = new Paginador(FndCajaEstado::getSesPagCantidad(), FndCajaEstado::getSesPag());
$fnd_caja_estados = FndCajaEstado::getFndCajaEstadosDesdeBackend($paginador, $criterio);

include 'fnd_caja_estado_datos.php';
?>

