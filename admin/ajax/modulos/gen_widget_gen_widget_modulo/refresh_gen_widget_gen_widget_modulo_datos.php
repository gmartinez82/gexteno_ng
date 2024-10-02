<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
GenWidgetGenWidgetModulo::setSesPag($pag);

$criterio = new Criterio(GenWidgetGenWidgetModulo::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
GenWidgetGenWidgetModulo::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('gen_widget_gen_widget_modulo');
$criterio->setCriteriosInicial();

$paginador = new Paginador(GenWidgetGenWidgetModulo::getSesPagCantidad(), GenWidgetGenWidgetModulo::getSesPag());
$gen_widget_gen_widget_modulos = GenWidgetGenWidgetModulo::getGenWidgetGenWidgetModulosDesdeBackend($paginador, $criterio);

include 'gen_widget_gen_widget_modulo_datos.php';
?>

