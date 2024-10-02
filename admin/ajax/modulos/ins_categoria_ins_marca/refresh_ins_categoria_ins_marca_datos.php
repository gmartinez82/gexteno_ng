<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
InsCategoriaInsMarca::setSesPag($pag);

$criterio = new Criterio(InsCategoriaInsMarca::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
InsCategoriaInsMarca::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('ins_categoria_ins_marca');
$criterio->setCriteriosInicial();

$paginador = new Paginador(InsCategoriaInsMarca::getSesPagCantidad(), InsCategoriaInsMarca::getSesPag());
$ins_categoria_ins_marcas = InsCategoriaInsMarca::getInsCategoriaInsMarcasDesdeBackend($paginador, $criterio);

include 'ins_categoria_ins_marca_datos.php';
?>

