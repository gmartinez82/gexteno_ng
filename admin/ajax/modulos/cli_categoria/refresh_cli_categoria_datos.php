<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
CliCategoria::setSesPag($pag);

$criterio = new Criterio(CliCategoria::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
CliCategoria::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('cli_categoria');
$criterio->setCriteriosInicial();

$paginador = new Paginador(CliCategoria::getSesPagCantidad(), CliCategoria::getSesPag());
$cli_categorias = CliCategoria::getCliCategoriasDesdeBackend($paginador, $criterio);

include 'cli_categoria_datos.php';
?>

