<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
EkuParamTipoRegimen::setSesPag($pag);

$criterio = new Criterio(EkuParamTipoRegimen::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
EkuParamTipoRegimen::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('eku_param_tipo_regimen');
$criterio->setCriteriosInicial();

$paginador = new Paginador(EkuParamTipoRegimen::getSesPagCantidad(), EkuParamTipoRegimen::getSesPag());
$eku_param_tipo_regimens = EkuParamTipoRegimen::getEkuParamTipoRegimensDesdeBackend($paginador, $criterio);

include 'eku_param_tipo_regimen_datos.php';
?>

