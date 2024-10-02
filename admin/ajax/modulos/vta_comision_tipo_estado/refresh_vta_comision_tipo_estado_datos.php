<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
VtaComisionTipoEstado::setSesPag($pag);

$criterio = new Criterio(VtaComisionTipoEstado::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
VtaComisionTipoEstado::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('vta_comision_tipo_estado');
$criterio->setCriteriosInicial();

$paginador = new Paginador(VtaComisionTipoEstado::getSesPagCantidad(), VtaComisionTipoEstado::getSesPag());
$vta_comision_tipo_estados = VtaComisionTipoEstado::getVtaComisionTipoEstadosDesdeBackend($paginador, $criterio);

include 'vta_comision_tipo_estado_datos.php';
?>

