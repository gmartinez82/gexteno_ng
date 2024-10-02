<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
PrvCategoria::setSesPag($pag);

$criterio = new Criterio(PrvCategoria::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PrvCategoria::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('prv_categoria');
$criterio->setCriteriosInicial();

$paginador = new Paginador(PrvCategoria::getSesPagCantidad(), PrvCategoria::getSesPag());
$prv_categorias = PrvCategoria::getPrvCategoriasDesdeBackend($paginador, $criterio);

include 'prv_categoria_datos.php';
?>

