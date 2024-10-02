<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
VtaReciboVtaTributo::setSesPag($pag);

$criterio = new Criterio(VtaReciboVtaTributo::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
VtaReciboVtaTributo::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('vta_recibo_vta_tributo');
$criterio->setCriteriosInicial();

$paginador = new Paginador(VtaReciboVtaTributo::getSesPagCantidad(), VtaReciboVtaTributo::getSesPag());
$vta_recibo_vta_tributos = VtaReciboVtaTributo::getVtaReciboVtaTributosDesdeBackend($paginador, $criterio);

include 'vta_recibo_vta_tributo_datos.php';
?>

