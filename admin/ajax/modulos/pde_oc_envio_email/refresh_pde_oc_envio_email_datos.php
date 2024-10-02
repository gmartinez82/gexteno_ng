<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
PdeOcEnvioEmail::setSesPag($pag);

$criterio = new Criterio(PdeOcEnvioEmail::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PdeOcEnvioEmail::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('pde_oc_envio_email');
$criterio->setCriteriosInicial();

$paginador = new Paginador(PdeOcEnvioEmail::getSesPagCantidad(), PdeOcEnvioEmail::getSesPag());
$pde_oc_envio_emails = PdeOcEnvioEmail::getPdeOcEnvioEmailsDesdeBackend($paginador, $criterio);

include 'pde_oc_envio_email_datos.php';
?>

