<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
PdeOcReclamoEnvioEmail::setSesPag($pag);

$criterio = new Criterio(PdeOcReclamoEnvioEmail::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PdeOcReclamoEnvioEmail::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('pde_oc_reclamo_envio_email');
$criterio->setCriteriosInicial();

$paginador = new Paginador(PdeOcReclamoEnvioEmail::getSesPagCantidad(), PdeOcReclamoEnvioEmail::getSesPag());
$pde_oc_reclamo_envio_emails = PdeOcReclamoEnvioEmail::getPdeOcReclamoEnvioEmailsDesdeBackend($paginador, $criterio);

include 'pde_oc_reclamo_envio_email_datos.php';
?>

