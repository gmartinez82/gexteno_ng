<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
FndCajaTipoEstado::setSesPag($pag);

$criterio = new Criterio(FndCajaTipoEstado::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
FndCajaTipoEstado::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('fnd_caja_tipo_estado');
$criterio->setCriteriosInicial();

$paginador = new Paginador(FndCajaTipoEstado::getSesPagCantidad(), FndCajaTipoEstado::getSesPag());
$fnd_caja_tipo_estados = FndCajaTipoEstado::getFndCajaTipoEstadosDesdeBackend($paginador, $criterio);

include 'fnd_caja_tipo_estado_datos.php';
?>

