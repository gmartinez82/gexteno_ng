<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
InsTipoConsumo::setSesPag($pag);

$criterio = new Criterio(InsTipoConsumo::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
InsTipoConsumo::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('ins_tipo_consumo');
$criterio->setCriteriosInicial();

$paginador = new Paginador(InsTipoConsumo::getSesPagCantidad(), InsTipoConsumo::getSesPag());
$ins_tipo_consumos = InsTipoConsumo::getInsTipoConsumosDesdeBackend($paginador, $criterio);

include 'ins_tipo_consumo_datos.php';
?>

