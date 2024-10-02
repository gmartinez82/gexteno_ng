<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
GenWidget::setSesPag($pag);

$criterio = new Criterio(GenWidget::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
GenWidget::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('gen_widget');
$criterio->setCriteriosInicial();

$paginador = new Paginador(GenWidget::getSesPagCantidad(), GenWidget::getSesPag());
$gen_widgets = GenWidget::getGenWidgetsDesdeBackend($paginador, $criterio);

include 'gen_widget_datos.php';
?>

