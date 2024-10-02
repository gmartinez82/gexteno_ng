<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
VtaRemito::setSesPag($pag);

$criterio = new Criterio(VtaRemito::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
VtaRemito::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('vta_remito');
$criterio->setCriteriosInicial();

$paginador = new Paginador(VtaRemito::getSesPagCantidad(), VtaRemito::getSesPag());
$vta_remitos = VtaRemito::getVtaRemitosDesdeBackend($paginador, $criterio);

include 'vta_remito_datos.php';
?>

