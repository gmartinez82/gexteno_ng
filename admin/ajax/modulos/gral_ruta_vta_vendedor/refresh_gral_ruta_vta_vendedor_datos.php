<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
GralRutaVtaVendedor::setSesPag($pag);

$criterio = new Criterio(GralRutaVtaVendedor::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
GralRutaVtaVendedor::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('gral_ruta_vta_vendedor');
$criterio->setCriteriosInicial();

$paginador = new Paginador(GralRutaVtaVendedor::getSesPagCantidad(), GralRutaVtaVendedor::getSesPag());
$gral_ruta_vta_vendedors = GralRutaVtaVendedor::getGralRutaVtaVendedorsDesdeBackend($paginador, $criterio);

include 'gral_ruta_vta_vendedor_datos.php';
?>

