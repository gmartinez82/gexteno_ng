<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
EkuParamTipoOperacion::setSesPag($pag);

$criterio = new Criterio(EkuParamTipoOperacion::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
EkuParamTipoOperacion::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('eku_param_tipo_operacion');
$criterio->setCriteriosInicial();

$paginador = new Paginador(EkuParamTipoOperacion::getSesPagCantidad(), EkuParamTipoOperacion::getSesPag());
$eku_param_tipo_operacions = EkuParamTipoOperacion::getEkuParamTipoOperacionsDesdeBackend($paginador, $criterio);

include 'eku_param_tipo_operacion_datos.php';
?>

