<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
InsInsumoInstancia::setSesPag($pag);

$criterio = new Criterio(InsInsumoInstancia::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
InsInsumoInstancia::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('ins_insumo_instancia');
$criterio->setCriteriosInicial();

$paginador = new Paginador(InsInsumoInstancia::getSesPagCantidad(), InsInsumoInstancia::getSesPag());
$ins_insumo_instancias = InsInsumoInstancia::getInsInsumoInstanciasDesdeBackend($paginador, $criterio);

include 'ins_insumo_instancia_datos.php';
?>

