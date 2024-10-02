<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
PrdParamOperacionPrdEquipo::setSesPag($pag);

$criterio = new Criterio(PrdParamOperacionPrdEquipo::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PrdParamOperacionPrdEquipo::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('prd_param_operacion_prd_equipo');
$criterio->setCriteriosInicial();

$paginador = new Paginador(PrdParamOperacionPrdEquipo::getSesPagCantidad(), PrdParamOperacionPrdEquipo::getSesPag());
$prd_param_operacion_prd_equipos = PrdParamOperacionPrdEquipo::getPrdParamOperacionPrdEquiposDesdeBackend($paginador, $criterio);

include 'prd_param_operacion_prd_equipo_datos.php';
?>

