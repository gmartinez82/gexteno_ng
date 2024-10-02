<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
PrvEmail::setSesPag($pag);

$criterio = new Criterio(PrvEmail::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PrvEmail::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('prv_email');
$criterio->setCriteriosInicial();

$paginador = new Paginador(PrvEmail::getSesPagCantidad(), PrvEmail::getSesPag());
$prv_emails = PrvEmail::getPrvEmailsDesdeBackend($paginador, $criterio);

include 'prv_email_datos.php';
?>

