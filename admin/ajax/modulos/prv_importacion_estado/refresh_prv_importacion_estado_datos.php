<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
PrvImportacionEstado::setSesPag($pag);

$criterio = new Criterio(PrvImportacionEstado::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PrvImportacionEstado::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('prv_importacion_estado');
$criterio->setCriteriosInicial();

$paginador = new Paginador(PrvImportacionEstado::getSesPagCantidad(), PrvImportacionEstado::getSesPag());
$prv_importacion_estados = PrvImportacionEstado::getPrvImportacionEstadosDesdeBackend($paginador, $criterio);

include 'prv_importacion_estado_datos.php';
?>

