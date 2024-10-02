<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
InsInsumoInsEtiqueta::setSesPag($pag);

$criterio = new Criterio(InsInsumoInsEtiqueta::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
InsInsumoInsEtiqueta::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('ins_insumo_ins_etiqueta');
$criterio->setCriteriosInicial();

$paginador = new Paginador(InsInsumoInsEtiqueta::getSesPagCantidad(), InsInsumoInsEtiqueta::getSesPag());
$ins_insumo_ins_etiquetas = InsInsumoInsEtiqueta::getInsInsumoInsEtiquetasDesdeBackend($paginador, $criterio);

include 'ins_insumo_ins_etiqueta_datos.php';
?>

