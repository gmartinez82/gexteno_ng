<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
EkuParamUnidadMedida::setSesPag($pag);

$criterio = new Criterio(EkuParamUnidadMedida::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
EkuParamUnidadMedida::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('eku_param_unidad_medida');
$criterio->setCriteriosInicial();

$paginador = new Paginador(EkuParamUnidadMedida::getSesPagCantidad(), EkuParamUnidadMedida::getSesPag());
$eku_param_unidad_medidas = EkuParamUnidadMedida::getEkuParamUnidadMedidasDesdeBackend($paginador, $criterio);

include 'eku_param_unidad_medida_datos.php';
?>

