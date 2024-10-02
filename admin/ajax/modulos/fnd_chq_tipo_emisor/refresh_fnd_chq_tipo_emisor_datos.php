<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
FndChqTipoEmisor::setSesPag($pag);

$criterio = new Criterio(FndChqTipoEmisor::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
FndChqTipoEmisor::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('fnd_chq_tipo_emisor');
$criterio->setCriteriosInicial();

$paginador = new Paginador(FndChqTipoEmisor::getSesPagCantidad(), FndChqTipoEmisor::getSesPag());
$fnd_chq_tipo_emisors = FndChqTipoEmisor::getFndChqTipoEmisorsDesdeBackend($paginador, $criterio);

include 'fnd_chq_tipo_emisor_datos.php';
?>

