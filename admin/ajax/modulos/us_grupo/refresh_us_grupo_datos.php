<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
UsGrupo::setSesPag($pag);

$criterio = new Criterio(UsGrupo::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
UsGrupo::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('us_grupo');
$criterio->setCriteriosInicial();

$paginador = new Paginador(UsGrupo::getSesPagCantidad(), UsGrupo::getSesPag());
$us_grupos = UsGrupo::getUsGruposDesdeBackend($paginador, $criterio);

include 'us_grupo_datos.php';
?>

