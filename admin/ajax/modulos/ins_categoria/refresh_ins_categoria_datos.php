<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
InsCategoria::setSesPag($pag);

$criterio = new Criterio(InsCategoria::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
InsCategoria::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('ins_categoria');
$criterio->setCriteriosInicial();

$paginador = new Paginador(InsCategoria::getSesPagCantidad(), InsCategoria::getSesPag());
$ins_categorias = InsCategoria::getInsCategoriasDesdeBackend($paginador, $criterio);

include 'ins_categoria_datos.php';
?>

