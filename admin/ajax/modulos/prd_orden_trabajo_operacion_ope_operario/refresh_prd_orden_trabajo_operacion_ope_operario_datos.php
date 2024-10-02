<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
PrdOrdenTrabajoOperacionOpeOperario::setSesPag($pag);

$criterio = new Criterio(PrdOrdenTrabajoOperacionOpeOperario::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PrdOrdenTrabajoOperacionOpeOperario::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('prd_orden_trabajo_operacion_ope_operario');
$criterio->setCriteriosInicial();

$paginador = new Paginador(PrdOrdenTrabajoOperacionOpeOperario::getSesPagCantidad(), PrdOrdenTrabajoOperacionOpeOperario::getSesPag());
$prd_orden_trabajo_operacion_ope_operarios = PrdOrdenTrabajoOperacionOpeOperario::getPrdOrdenTrabajoOperacionOpeOperariosDesdeBackend($paginador, $criterio);

include 'prd_orden_trabajo_operacion_ope_operario_datos.php';
?>

