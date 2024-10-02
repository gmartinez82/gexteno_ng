<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
AfipCitiComprasImportaciones::setSesPag($pag);

$criterio = new Criterio(AfipCitiComprasImportaciones::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
AfipCitiComprasImportaciones::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('afip_citi_compras_importaciones');
$criterio->setCriteriosInicial();

$paginador = new Paginador(AfipCitiComprasImportaciones::getSesPagCantidad(), AfipCitiComprasImportaciones::getSesPag());
$afip_citi_compras_importacioness = AfipCitiComprasImportaciones::getAfipCitiComprasImportacionessDesdeBackend($paginador, $criterio);

include 'afip_citi_compras_importaciones_datos.php';
?>

