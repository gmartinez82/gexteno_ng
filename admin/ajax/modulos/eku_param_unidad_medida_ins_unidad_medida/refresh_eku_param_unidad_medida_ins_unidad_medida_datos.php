<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
EkuParamUnidadMedidaInsUnidadMedida::setSesPag($pag);

$criterio = new Criterio(EkuParamUnidadMedidaInsUnidadMedida::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
EkuParamUnidadMedidaInsUnidadMedida::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('eku_param_unidad_medida_ins_unidad_medida');
$criterio->setCriteriosInicial();

$paginador = new Paginador(EkuParamUnidadMedidaInsUnidadMedida::getSesPagCantidad(), EkuParamUnidadMedidaInsUnidadMedida::getSesPag());
$eku_param_unidad_medida_ins_unidad_medidas = EkuParamUnidadMedidaInsUnidadMedida::getEkuParamUnidadMedidaInsUnidadMedidasDesdeBackend($paginador, $criterio);

include 'eku_param_unidad_medida_ins_unidad_medida_datos.php';
?>

