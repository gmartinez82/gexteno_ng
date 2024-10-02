<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
CtrlEquipoTipoEstado::setSesPag($pag);

$criterio = new Criterio(CtrlEquipoTipoEstado::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
CtrlEquipoTipoEstado::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('ctrl_equipo_tipo_estado');
$criterio->setCriteriosInicial();

$paginador = new Paginador(CtrlEquipoTipoEstado::getSesPagCantidad(), CtrlEquipoTipoEstado::getSesPag());
$ctrl_equipo_tipo_estados = CtrlEquipoTipoEstado::getCtrlEquipoTipoEstadosDesdeBackend($paginador, $criterio);

include 'ctrl_equipo_tipo_estado_datos.php';
?>

