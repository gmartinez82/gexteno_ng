<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
PrvProveedorInsMarca::setSesPag($pag);

$criterio = new Criterio(PrvProveedorInsMarca::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PrvProveedorInsMarca::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('prv_proveedor_ins_marca');
$criterio->setCriteriosInicial();

$paginador = new Paginador(PrvProveedorInsMarca::getSesPagCantidad(), PrvProveedorInsMarca::getSesPag());
$prv_proveedor_ins_marcas = PrvProveedorInsMarca::getPrvProveedorInsMarcasDesdeBackend($paginador, $criterio);

include 'prv_proveedor_ins_marca_datos.php';
?>

