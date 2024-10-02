<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
PdeReciboItemCheque::setSesPag($pag);

$criterio = new Criterio(PdeReciboItemCheque::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PdeReciboItemCheque::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('pde_recibo_item_cheque');
$criterio->setCriteriosInicial();

$paginador = new Paginador(PdeReciboItemCheque::getSesPagCantidad(), PdeReciboItemCheque::getSesPag());
$pde_recibo_item_cheques = PdeReciboItemCheque::getPdeReciboItemChequesDesdeBackend($paginador, $criterio);

include 'pde_recibo_item_cheque_datos.php';
?>

