<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
VtaComisionGralFpFormaPagoCheque::setSesPag($pag);

$criterio = new Criterio(VtaComisionGralFpFormaPagoCheque::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
VtaComisionGralFpFormaPagoCheque::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('vta_comision_gral_fp_forma_pago_cheque');
$criterio->setCriteriosInicial();

$paginador = new Paginador(VtaComisionGralFpFormaPagoCheque::getSesPagCantidad(), VtaComisionGralFpFormaPagoCheque::getSesPag());
$vta_comision_gral_fp_forma_pago_cheques = VtaComisionGralFpFormaPagoCheque::getVtaComisionGralFpFormaPagoChequesDesdeBackend($paginador, $criterio);

include 'vta_comision_gral_fp_forma_pago_cheque_datos.php';
?>

