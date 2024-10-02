<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
EkuParamTipoMotivoEmisionCreditoDebito::setSesPag($pag);

$criterio = new Criterio(EkuParamTipoMotivoEmisionCreditoDebito::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
EkuParamTipoMotivoEmisionCreditoDebito::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('eku_param_tipo_motivo_emision_credito_debito');
$criterio->setCriteriosInicial();

$paginador = new Paginador(EkuParamTipoMotivoEmisionCreditoDebito::getSesPagCantidad(), EkuParamTipoMotivoEmisionCreditoDebito::getSesPag());
$eku_param_tipo_motivo_emision_credito_debitos = EkuParamTipoMotivoEmisionCreditoDebito::getEkuParamTipoMotivoEmisionCreditoDebitosDesdeBackend($paginador, $criterio);

include 'eku_param_tipo_motivo_emision_credito_debito_datos.php';
?>

