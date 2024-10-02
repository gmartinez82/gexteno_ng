<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
InsInsumoPrvProveedor::setSesPag($pag);

$criterio = new Criterio(InsInsumoPrvProveedor::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
InsInsumoPrvProveedor::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('ins_insumo_prv_proveedor');
$criterio->setCriteriosInicial();

$paginador = new Paginador(InsInsumoPrvProveedor::getSesPagCantidad(), InsInsumoPrvProveedor::getSesPag());
$ins_insumo_prv_proveedors = InsInsumoPrvProveedor::getInsInsumoPrvProveedorsDesdeBackend($paginador, $criterio);

include 'ins_insumo_prv_proveedor_datos.php';
?>

