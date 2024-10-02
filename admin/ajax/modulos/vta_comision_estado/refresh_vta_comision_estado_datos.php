<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
VtaComisionEstado::setSesPag($pag);

$criterio = new Criterio(VtaComisionEstado::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
VtaComisionEstado::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('vta_comision_estado');
$criterio->setCriteriosInicial();

$paginador = new Paginador(VtaComisionEstado::getSesPagCantidad(), VtaComisionEstado::getSesPag());
$vta_comision_estados = VtaComisionEstado::getVtaComisionEstadosDesdeBackend($paginador, $criterio);

include 'vta_comision_estado_datos.php';
?>

