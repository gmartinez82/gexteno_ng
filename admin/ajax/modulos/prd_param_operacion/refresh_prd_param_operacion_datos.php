<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
PrdParamOperacion::setSesPag($pag);

$criterio = new Criterio(PrdParamOperacion::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PrdParamOperacion::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('prd_param_operacion');
$criterio->setCriteriosInicial();

$paginador = new Paginador(PrdParamOperacion::getSesPagCantidad(), PrdParamOperacion::getSesPag());
$prd_param_operacions = PrdParamOperacion::getPrdParamOperacionsDesdeBackend($paginador, $criterio);

include 'prd_param_operacion_datos.php';
?>

