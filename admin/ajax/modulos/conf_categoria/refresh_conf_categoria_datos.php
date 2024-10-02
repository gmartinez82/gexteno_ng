<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
ConfCategoria::setSesPag($pag);

$criterio = new Criterio(ConfCategoria::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
ConfCategoria::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('conf_categoria');
$criterio->setCriteriosInicial();

$paginador = new Paginador(ConfCategoria::getSesPagCantidad(), ConfCategoria::getSesPag());
$conf_categorias = ConfCategoria::getConfCategoriasDesdeBackend($paginador, $criterio);

include 'conf_categoria_datos.php';
?>

