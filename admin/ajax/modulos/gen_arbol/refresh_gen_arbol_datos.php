<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
GenArbol::setSesPag($pag);

$criterio = new Criterio(GenArbol::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
GenArbol::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('gen_arbol');
$criterio->setCriteriosInicial();

$paginador = new Paginador(GenArbol::getSesPagCantidad(), GenArbol::getSesPag());
$gen_arbols = GenArbol::getGenArbolsDesdeBackend($paginador, $criterio);

include 'gen_arbol_datos.php';
?>

