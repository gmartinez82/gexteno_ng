<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
CliSubcategoria::setSesPag($pag);

$criterio = new Criterio(CliSubcategoria::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
CliSubcategoria::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('cli_subcategoria');
$criterio->setCriteriosInicial();

$paginador = new Paginador(CliSubcategoria::getSesPagCantidad(), CliSubcategoria::getSesPag());
$cli_subcategorias = CliSubcategoria::getCliSubcategoriasDesdeBackend($paginador, $criterio);

include 'cli_subcategoria_datos.php';
?>

