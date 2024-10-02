<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
FndChqTipoEmisorFndChqTipoEstado::setSesPag($pag);

$criterio = new Criterio(FndChqTipoEmisorFndChqTipoEstado::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
FndChqTipoEmisorFndChqTipoEstado::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('fnd_chq_tipo_emisor_fnd_chq_tipo_estado');
$criterio->setCriteriosInicial();

$paginador = new Paginador(FndChqTipoEmisorFndChqTipoEstado::getSesPagCantidad(), FndChqTipoEmisorFndChqTipoEstado::getSesPag());
$fnd_chq_tipo_emisor_fnd_chq_tipo_estados = FndChqTipoEmisorFndChqTipoEstado::getFndChqTipoEmisorFndChqTipoEstadosDesdeBackend($paginador, $criterio);

include 'fnd_chq_tipo_emisor_fnd_chq_tipo_estado_datos.php';
?>

