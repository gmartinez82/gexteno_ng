<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
VtaComision::setSesPag($pag);

$criterio = new Criterio(VtaComision::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
VtaComision::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('vta_comision');
$criterio->setCriteriosInicial();

$paginador = new Paginador(VtaComision::getSesPagCantidad(), VtaComision::getSesPag());
$vta_comisions = VtaComision::getVtaComisionsDesdeBackend($paginador, $criterio);

include 'vta_comision_datos.php';
?>

