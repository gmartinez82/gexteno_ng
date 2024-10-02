<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
OsTipoEstado::setSesPag($pag);

$criterio = new Criterio(OsTipoEstado::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
OsTipoEstado::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('os_tipo_estado');
$criterio->setCriteriosInicial();

$paginador = new Paginador(OsTipoEstado::getSesPagCantidad(), OsTipoEstado::getSesPag());
$os_tipo_estados = OsTipoEstado::getOsTipoEstadosDesdeBackend($paginador, $criterio);

include 'os_tipo_estado_datos.php';
?>

