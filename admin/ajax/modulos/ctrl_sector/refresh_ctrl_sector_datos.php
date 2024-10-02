<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
CtrlSector::setSesPag($pag);

$criterio = new Criterio(CtrlSector::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
CtrlSector::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('ctrl_sector');
$criterio->setCriteriosInicial();

$paginador = new Paginador(CtrlSector::getSesPagCantidad(), CtrlSector::getSesPag());
$ctrl_sectors = CtrlSector::getCtrlSectorsDesdeBackend($paginador, $criterio);

include 'ctrl_sector_datos.php';
?>

