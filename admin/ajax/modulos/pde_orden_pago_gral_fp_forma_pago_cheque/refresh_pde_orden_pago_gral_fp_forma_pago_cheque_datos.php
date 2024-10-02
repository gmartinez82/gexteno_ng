<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
PdeOrdenPagoGralFpFormaPagoCheque::setSesPag($pag);

$criterio = new Criterio(PdeOrdenPagoGralFpFormaPagoCheque::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PdeOrdenPagoGralFpFormaPagoCheque::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('pde_orden_pago_gral_fp_forma_pago_cheque');
$criterio->setCriteriosInicial();

$paginador = new Paginador(PdeOrdenPagoGralFpFormaPagoCheque::getSesPagCantidad(), PdeOrdenPagoGralFpFormaPagoCheque::getSesPag());
$pde_orden_pago_gral_fp_forma_pago_cheques = PdeOrdenPagoGralFpFormaPagoCheque::getPdeOrdenPagoGralFpFormaPagoChequesDesdeBackend($paginador, $criterio);

include 'pde_orden_pago_gral_fp_forma_pago_cheque_datos.php';
?>

