<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
EkuParamTipoImpuesto::setSesPag($pag);

$criterio = new Criterio(EkuParamTipoImpuesto::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
EkuParamTipoImpuesto::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('eku_param_tipo_impuesto');
$criterio->setCriteriosInicial();

$paginador = new Paginador(EkuParamTipoImpuesto::getSesPagCantidad(), EkuParamTipoImpuesto::getSesPag());
$eku_param_tipo_impuestos = EkuParamTipoImpuesto::getEkuParamTipoImpuestosDesdeBackend($paginador, $criterio);

include 'eku_param_tipo_impuesto_datos.php';
?>

