<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
FndChqTipoEmision::setSesPag($pag);

$criterio = new Criterio(FndChqTipoEmision::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
FndChqTipoEmision::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('fnd_chq_tipo_emision');
$criterio->setCriteriosInicial();

$paginador = new Paginador(FndChqTipoEmision::getSesPagCantidad(), FndChqTipoEmision::getSesPag());
$fnd_chq_tipo_emisions = FndChqTipoEmision::getFndChqTipoEmisionsDesdeBackend($paginador, $criterio);

include 'fnd_chq_tipo_emision_datos.php';
?>

