<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
VtaComprador::setSesPag($pag);

$criterio = new Criterio(VtaComprador::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
VtaComprador::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('vta_comprador');
$criterio->setCriteriosInicial();

$paginador = new Paginador(VtaComprador::getSesPagCantidad(), VtaComprador::getSesPag());
$vta_compradors = VtaComprador::getVtaCompradorsDesdeBackend($paginador, $criterio);

include 'vta_comprador_datos.php';
?>

