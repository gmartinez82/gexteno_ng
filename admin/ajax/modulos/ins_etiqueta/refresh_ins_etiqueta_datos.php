<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
InsEtiqueta::setSesPag($pag);

$criterio = new Criterio(InsEtiqueta::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
InsEtiqueta::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('ins_etiqueta');
$criterio->setCriteriosInicial();

$paginador = new Paginador(InsEtiqueta::getSesPagCantidad(), InsEtiqueta::getSesPag());
$ins_etiquetas = InsEtiqueta::getInsEtiquetasDesdeBackend($paginador, $criterio);

include 'ins_etiqueta_datos.php';
?>

