<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
InsInsumoSimilar::setSesPag($pag);

$criterio = new Criterio(InsInsumoSimilar::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
InsInsumoSimilar::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('ins_insumo_similar');
$criterio->setCriteriosInicial();

$paginador = new Paginador(InsInsumoSimilar::getSesPagCantidad(), InsInsumoSimilar::getSesPag());
$ins_insumo_similars = InsInsumoSimilar::getInsInsumoSimilarsDesdeBackend($paginador, $criterio);

include 'ins_insumo_similar_datos.php';
?>

