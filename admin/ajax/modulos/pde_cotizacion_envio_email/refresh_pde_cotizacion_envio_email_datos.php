<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
PdeCotizacionEnvioEmail::setSesPag($pag);

$criterio = new Criterio(PdeCotizacionEnvioEmail::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PdeCotizacionEnvioEmail::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('pde_cotizacion_envio_email');
$criterio->setCriteriosInicial();

$paginador = new Paginador(PdeCotizacionEnvioEmail::getSesPagCantidad(), PdeCotizacionEnvioEmail::getSesPag());
$pde_cotizacion_envio_emails = PdeCotizacionEnvioEmail::getPdeCotizacionEnvioEmailsDesdeBackend($paginador, $criterio);

include 'pde_cotizacion_envio_email_datos.php';
?>

