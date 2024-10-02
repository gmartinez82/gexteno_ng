<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
CtrlEquipo::setSesPag($pag);

$criterio = new Criterio(CtrlEquipo::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
CtrlEquipo::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('ctrl_equipo');
$criterio->setCriteriosInicial();

$paginador = new Paginador(CtrlEquipo::getSesPagCantidad(), CtrlEquipo::getSesPag());
$ctrl_equipos = CtrlEquipo::getCtrlEquiposDesdeBackend($paginador, $criterio);

include 'ctrl_equipo_datos.php';
?>

