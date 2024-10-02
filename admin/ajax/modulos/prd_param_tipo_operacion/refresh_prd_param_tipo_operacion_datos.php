<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
PrdParamTipoOperacion::setSesPag($pag);

$criterio = new Criterio(PrdParamTipoOperacion::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PrdParamTipoOperacion::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('prd_param_tipo_operacion');
$criterio->setCriteriosInicial();

$paginador = new Paginador(PrdParamTipoOperacion::getSesPagCantidad(), PrdParamTipoOperacion::getSesPag());
$prd_param_tipo_operacions = PrdParamTipoOperacion::getPrdParamTipoOperacionsDesdeBackend($paginador, $criterio);

include 'prd_param_tipo_operacion_datos.php';
?>

