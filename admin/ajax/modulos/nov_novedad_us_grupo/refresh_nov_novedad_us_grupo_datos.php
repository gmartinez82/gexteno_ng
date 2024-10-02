<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
NovNovedadUsGrupo::setSesPag($pag);

$criterio = new Criterio(NovNovedadUsGrupo::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
NovNovedadUsGrupo::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('nov_novedad_us_grupo');
$criterio->setCriteriosInicial();

$paginador = new Paginador(NovNovedadUsGrupo::getSesPagCantidad(), NovNovedadUsGrupo::getSesPag());
$nov_novedad_us_grupos = NovNovedadUsGrupo::getNovNovedadUsGruposDesdeBackend($paginador, $criterio);

include 'nov_novedad_us_grupo_datos.php';
?>

