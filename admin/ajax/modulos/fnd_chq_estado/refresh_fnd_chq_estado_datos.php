<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
FndChqEstado::setSesPag($pag);

$criterio = new Criterio(FndChqEstado::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
FndChqEstado::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('fnd_chq_estado');
$criterio->setCriteriosInicial();

$paginador = new Paginador(FndChqEstado::getSesPagCantidad(), FndChqEstado::getSesPag());
$fnd_chq_estados = FndChqEstado::getFndChqEstadosDesdeBackend($paginador, $criterio);

include 'fnd_chq_estado_datos.php';
?>

