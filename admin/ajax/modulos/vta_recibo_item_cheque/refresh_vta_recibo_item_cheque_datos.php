<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
VtaReciboItemCheque::setSesPag($pag);

$criterio = new Criterio(VtaReciboItemCheque::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
VtaReciboItemCheque::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('vta_recibo_item_cheque');
$criterio->setCriteriosInicial();

$paginador = new Paginador(VtaReciboItemCheque::getSesPagCantidad(), VtaReciboItemCheque::getSesPag());
$vta_recibo_item_cheques = VtaReciboItemCheque::getVtaReciboItemChequesDesdeBackend($paginador, $criterio);

include 'vta_recibo_item_cheque_datos.php';
?>

