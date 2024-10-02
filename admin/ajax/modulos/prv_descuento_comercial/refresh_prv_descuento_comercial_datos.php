<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
PrvDescuentoComercial::setSesPag($pag);

$criterio = new Criterio(PrvDescuentoComercial::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PrvDescuentoComercial::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('prv_descuento_comercial');
$criterio->setCriteriosInicial();

$paginador = new Paginador(PrvDescuentoComercial::getSesPagCantidad(), PrvDescuentoComercial::getSesPag());
$prv_descuento_comercials = PrvDescuentoComercial::getPrvDescuentoComercialsDesdeBackend($paginador, $criterio);

include 'prv_descuento_comercial_datos.php';
?>

