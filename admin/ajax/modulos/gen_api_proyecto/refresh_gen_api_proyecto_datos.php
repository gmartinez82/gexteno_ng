<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
GenApiProyecto::setSesPag($pag);

$criterio = new Criterio(GenApiProyecto::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
GenApiProyecto::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('gen_api_proyecto');
$criterio->setCriteriosInicial();

$paginador = new Paginador(GenApiProyecto::getSesPagCantidad(), GenApiProyecto::getSesPag());
$gen_api_proyectos = GenApiProyecto::getGenApiProyectosDesdeBackend($paginador, $criterio);

include 'gen_api_proyecto_datos.php';
?>

