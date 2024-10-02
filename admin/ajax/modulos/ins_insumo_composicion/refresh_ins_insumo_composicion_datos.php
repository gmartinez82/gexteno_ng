<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
InsInsumoComposicion::setSesPag($pag);

$criterio = new Criterio(InsInsumoComposicion::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
InsInsumoComposicion::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('ins_insumo_composicion');
$criterio->setCriteriosInicial();

$paginador = new Paginador(InsInsumoComposicion::getSesPagCantidad(), InsInsumoComposicion::getSesPag());
$ins_insumo_composicions = InsInsumoComposicion::getInsInsumoComposicionsDesdeBackend($paginador, $criterio);

include 'ins_insumo_composicion_datos.php';
?>

