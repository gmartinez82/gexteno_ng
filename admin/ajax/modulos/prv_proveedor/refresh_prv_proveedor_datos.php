<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
PrvProveedor::setSesPag($pag);

$criterio = new Criterio(PrvProveedor::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PrvProveedor::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('prv_proveedor');
$criterio->setCriteriosInicial();

$paginador = new Paginador(PrvProveedor::getSesPagCantidad(), PrvProveedor::getSesPag());
$prv_proveedors = PrvProveedor::getPrvProveedorsDesdeBackend($paginador, $criterio);

include 'prv_proveedor_datos.php';
?>

