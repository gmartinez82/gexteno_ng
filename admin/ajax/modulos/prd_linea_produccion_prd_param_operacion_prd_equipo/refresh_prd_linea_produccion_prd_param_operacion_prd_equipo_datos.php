<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
PrdLineaProduccionPrdParamOperacionPrdEquipo::setSesPag($pag);

$criterio = new Criterio(PrdLineaProduccionPrdParamOperacionPrdEquipo::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PrdLineaProduccionPrdParamOperacionPrdEquipo::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('prd_linea_produccion_prd_param_operacion_prd_equipo');
$criterio->setCriteriosInicial();

$paginador = new Paginador(PrdLineaProduccionPrdParamOperacionPrdEquipo::getSesPagCantidad(), PrdLineaProduccionPrdParamOperacionPrdEquipo::getSesPag());
$prd_linea_produccion_prd_param_operacion_prd_equipos = PrdLineaProduccionPrdParamOperacionPrdEquipo::getPrdLineaProduccionPrdParamOperacionPrdEquiposDesdeBackend($paginador, $criterio);

include 'prd_linea_produccion_prd_param_operacion_prd_equipo_datos.php';
?>

