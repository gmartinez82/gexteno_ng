<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
InsListaPrecio::setSesPag($pag);

$criterio = new Criterio(InsListaPrecio::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
InsListaPrecio::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('ins_lista_precio');
$criterio->setCriteriosInicial();

$paginador = new Paginador(InsListaPrecio::getSesPagCantidad(), InsListaPrecio::getSesPag());
$ins_lista_precios = InsListaPrecio::getInsListaPreciosDesdeBackend($paginador, $criterio);

include 'ins_lista_precio_datos.php';
?>

