<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
GralSucursalTipo::setSesPag($pag);

$criterio = new Criterio(GralSucursalTipo::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
GralSucursalTipo::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('gral_sucursal_tipo');
$criterio->setCriteriosInicial();

$paginador = new Paginador(GralSucursalTipo::getSesPagCantidad(), GralSucursalTipo::getSesPag());
$gral_sucursal_tipos = GralSucursalTipo::getGralSucursalTiposDesdeBackend($paginador, $criterio);

include 'gral_sucursal_tipo_datos.php';
?>

