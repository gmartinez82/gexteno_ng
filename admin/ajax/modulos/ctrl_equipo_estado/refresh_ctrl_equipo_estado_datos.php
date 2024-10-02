<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
CtrlEquipoEstado::setSesPag($pag);

$criterio = new Criterio(CtrlEquipoEstado::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
CtrlEquipoEstado::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('ctrl_equipo_estado');
$criterio->setCriteriosInicial();

$paginador = new Paginador(CtrlEquipoEstado::getSesPagCantidad(), CtrlEquipoEstado::getSesPag());
$ctrl_equipo_estados = CtrlEquipoEstado::getCtrlEquipoEstadosDesdeBackend($paginador, $criterio);

include 'ctrl_equipo_estado_datos.php';
?>

