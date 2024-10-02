<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
CtrlEquipoCtrlSector::setSesPag($pag);

$criterio = new Criterio(CtrlEquipoCtrlSector::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
CtrlEquipoCtrlSector::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('ctrl_equipo_ctrl_sector');
$criterio->setCriteriosInicial();

$paginador = new Paginador(CtrlEquipoCtrlSector::getSesPagCantidad(), CtrlEquipoCtrlSector::getSesPag());
$ctrl_equipo_ctrl_sectors = CtrlEquipoCtrlSector::getCtrlEquipoCtrlSectorsDesdeBackend($paginador, $criterio);

include 'ctrl_equipo_ctrl_sector_datos.php';
?>

