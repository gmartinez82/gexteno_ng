<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
PrvConvenioDescuento::setSesPag($pag);

$criterio = new Criterio(PrvConvenioDescuento::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PrvConvenioDescuento::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('prv_convenio_descuento');
$criterio->setCriteriosInicial();

$paginador = new Paginador(PrvConvenioDescuento::getSesPagCantidad(), PrvConvenioDescuento::getSesPag());
$prv_convenio_descuentos = PrvConvenioDescuento::getPrvConvenioDescuentosDesdeBackend($paginador, $criterio);

include 'prv_convenio_descuento_datos.php';
?>

