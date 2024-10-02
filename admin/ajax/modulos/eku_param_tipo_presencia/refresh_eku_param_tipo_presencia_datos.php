<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
EkuParamTipoPresencia::setSesPag($pag);

$criterio = new Criterio(EkuParamTipoPresencia::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
EkuParamTipoPresencia::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('eku_param_tipo_presencia');
$criterio->setCriteriosInicial();

$paginador = new Paginador(EkuParamTipoPresencia::getSesPagCantidad(), EkuParamTipoPresencia::getSesPag());
$eku_param_tipo_presencias = EkuParamTipoPresencia::getEkuParamTipoPresenciasDesdeBackend($paginador, $criterio);

include 'eku_param_tipo_presencia_datos.php';
?>

