<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
PrvImportacionTipoEstado::setSesPag($pag);

$criterio = new Criterio(PrvImportacionTipoEstado::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PrvImportacionTipoEstado::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('prv_importacion_tipo_estado');
$criterio->setCriteriosInicial();

$paginador = new Paginador(PrvImportacionTipoEstado::getSesPagCantidad(), PrvImportacionTipoEstado::getSesPag());
$prv_importacion_tipo_estados = PrvImportacionTipoEstado::getPrvImportacionTipoEstadosDesdeBackend($paginador, $criterio);

include 'prv_importacion_tipo_estado_datos.php';
?>

