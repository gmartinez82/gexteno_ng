<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
PrvGrupo::setSesPag($pag);

$criterio = new Criterio(PrvGrupo::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PrvGrupo::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('prv_grupo');
$criterio->setCriteriosInicial();

$paginador = new Paginador(PrvGrupo::getSesPagCantidad(), PrvGrupo::getSesPag());
$prv_grupos = PrvGrupo::getPrvGruposDesdeBackend($paginador, $criterio);

include 'prv_grupo_datos.php';
?>

