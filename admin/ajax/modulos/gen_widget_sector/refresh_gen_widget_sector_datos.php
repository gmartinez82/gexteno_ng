<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
GenWidgetSector::setSesPag($pag);

$criterio = new Criterio(GenWidgetSector::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
GenWidgetSector::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('gen_widget_sector');
$criterio->setCriteriosInicial();

$paginador = new Paginador(GenWidgetSector::getSesPagCantidad(), GenWidgetSector::getSesPag());
$gen_widget_sectors = GenWidgetSector::getGenWidgetSectorsDesdeBackend($paginador, $criterio);

include 'gen_widget_sector_datos.php';
?>

