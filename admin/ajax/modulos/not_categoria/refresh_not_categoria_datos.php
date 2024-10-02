<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
NotCategoria::setSesPag($pag);

$criterio = new Criterio(NotCategoria::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
NotCategoria::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('not_categoria');
$criterio->setCriteriosInicial();

$paginador = new Paginador(NotCategoria::getSesPagCantidad(), NotCategoria::getSesPag());
$not_categorias = NotCategoria::getNotCategoriasDesdeBackend($paginador, $criterio);

include 'not_categoria_datos.php';
?>

