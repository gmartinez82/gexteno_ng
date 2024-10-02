<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
VtaFacturaEnviado::setSesPag($pag);

$criterio = new Criterio(VtaFacturaEnviado::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
VtaFacturaEnviado::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('vta_factura_enviado');
$criterio->setCriteriosInicial();

$paginador = new Paginador(VtaFacturaEnviado::getSesPagCantidad(), VtaFacturaEnviado::getSesPag());
$vta_factura_enviados = VtaFacturaEnviado::getVtaFacturaEnviadosDesdeBackend($paginador, $criterio);

include 'vta_factura_enviado_datos.php';
?>

