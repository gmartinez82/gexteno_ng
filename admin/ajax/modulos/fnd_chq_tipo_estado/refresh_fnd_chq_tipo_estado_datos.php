<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
FndChqTipoEstado::setSesPag($pag);

$criterio = new Criterio(FndChqTipoEstado::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
FndChqTipoEstado::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('fnd_chq_tipo_estado');
$criterio->setCriteriosInicial();

$paginador = new Paginador(FndChqTipoEstado::getSesPagCantidad(), FndChqTipoEstado::getSesPag());
$fnd_chq_tipo_estados = FndChqTipoEstado::getFndChqTipoEstadosDesdeBackend($paginador, $criterio);

include 'fnd_chq_tipo_estado_datos.php';
?>

