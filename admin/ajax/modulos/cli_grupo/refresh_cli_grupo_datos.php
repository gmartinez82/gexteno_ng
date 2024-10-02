<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
CliGrupo::setSesPag($pag);

$criterio = new Criterio(CliGrupo::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
CliGrupo::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('cli_grupo');
$criterio->setCriteriosInicial();

$paginador = new Paginador(CliGrupo::getSesPagCantidad(), CliGrupo::getSesPag());
$cli_grupos = CliGrupo::getCliGruposDesdeBackend($paginador, $criterio);

include 'cli_grupo_datos.php';
?>

