<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
EkuParamTransporteTipo::setSesPag($pag);

$criterio = new Criterio(EkuParamTransporteTipo::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
EkuParamTransporteTipo::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('eku_param_transporte_tipo');
$criterio->setCriteriosInicial();

$paginador = new Paginador(EkuParamTransporteTipo::getSesPagCantidad(), EkuParamTransporteTipo::getSesPag());
$eku_param_transporte_tipos = EkuParamTransporteTipo::getEkuParamTransporteTiposDesdeBackend($paginador, $criterio);

include 'eku_param_transporte_tipo_datos.php';
?>

