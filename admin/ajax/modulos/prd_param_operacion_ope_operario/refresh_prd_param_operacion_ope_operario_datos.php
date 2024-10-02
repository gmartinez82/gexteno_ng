<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
PrdParamOperacionOpeOperario::setSesPag($pag);

$criterio = new Criterio(PrdParamOperacionOpeOperario::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PrdParamOperacionOpeOperario::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('prd_param_operacion_ope_operario');
$criterio->setCriteriosInicial();

$paginador = new Paginador(PrdParamOperacionOpeOperario::getSesPagCantidad(), PrdParamOperacionOpeOperario::getSesPag());
$prd_param_operacion_ope_operarios = PrdParamOperacionOpeOperario::getPrdParamOperacionOpeOperariosDesdeBackend($paginador, $criterio);

include 'prd_param_operacion_ope_operario_datos.php';
?>

