<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
PrvProveedorPrvRubro::setSesPag($pag);

$criterio = new Criterio(PrvProveedorPrvRubro::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PrvProveedorPrvRubro::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('prv_proveedor_prv_rubro');
$criterio->setCriteriosInicial();

$paginador = new Paginador(PrvProveedorPrvRubro::getSesPagCantidad(), PrvProveedorPrvRubro::getSesPag());
$prv_proveedor_prv_rubros = PrvProveedorPrvRubro::getPrvProveedorPrvRubrosDesdeBackend($paginador, $criterio);

include 'prv_proveedor_prv_rubro_datos.php';
?>

