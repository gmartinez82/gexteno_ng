<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
GenWidgetModulo::setSesPag($pag);

$criterio = new Criterio(GenWidgetModulo::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
GenWidgetModulo::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('gen_widget_modulo');
$criterio->setCriteriosInicial();

$paginador = new Paginador(GenWidgetModulo::getSesPagCantidad(), GenWidgetModulo::getSesPag());
$gen_widget_modulos = GenWidgetModulo::getGenWidgetModulosDesdeBackend($paginador, $criterio);

include 'gen_widget_modulo_datos.php';
?>

