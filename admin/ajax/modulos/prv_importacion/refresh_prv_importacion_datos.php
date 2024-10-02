<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
PrvImportacion::setSesPag($pag);

$criterio = new Criterio(PrvImportacion::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PrvImportacion::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('prv_importacion');
$criterio->setCriteriosInicial();

$paginador = new Paginador(PrvImportacion::getSesPagCantidad(), PrvImportacion::getSesPag());
$prv_importacions = PrvImportacion::getPrvImportacionsDesdeBackend($paginador, $criterio);

include 'prv_importacion_datos.php';
?>

