<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
VtaReciboItemRetencion::setSesPag($pag);

$criterio = new Criterio(VtaReciboItemRetencion::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
VtaReciboItemRetencion::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('vta_recibo_item_retencion');
$criterio->setCriteriosInicial();

$paginador = new Paginador(VtaReciboItemRetencion::getSesPagCantidad(), VtaReciboItemRetencion::getSesPag());
$vta_recibo_item_retencions = VtaReciboItemRetencion::getVtaReciboItemRetencionsDesdeBackend($paginador, $criterio);

include 'vta_recibo_item_retencion_datos.php';
?>

