<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
AltAlertaEnvioEmail::setSesPag($pag);

$criterio = new Criterio(AltAlertaEnvioEmail::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
AltAlertaEnvioEmail::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('alt_alerta_envio_email');
$criterio->setCriteriosInicial();

$paginador = new Paginador(AltAlertaEnvioEmail::getSesPagCantidad(), AltAlertaEnvioEmail::getSesPag());
$alt_alerta_envio_emails = AltAlertaEnvioEmail::getAltAlertaEnvioEmailsDesdeBackend($paginador, $criterio);

include 'alt_alerta_envio_email_datos.php';
?>

