<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
AltControlUsGrupo::setSesPag($pag);

$criterio = new Criterio(AltControlUsGrupo::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
AltControlUsGrupo::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('alt_control_us_grupo');
$criterio->setCriteriosInicial();

$paginador = new Paginador(AltControlUsGrupo::getSesPagCantidad(), AltControlUsGrupo::getSesPag());
$alt_control_us_grupos = AltControlUsGrupo::getAltControlUsGruposDesdeBackend($paginador, $criterio);

include 'alt_control_us_grupo_datos.php';
?>

