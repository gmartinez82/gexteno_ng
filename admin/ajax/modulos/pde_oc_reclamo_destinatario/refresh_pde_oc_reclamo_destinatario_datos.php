<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
PdeOcReclamoDestinatario::setSesPag($pag);

$criterio = new Criterio(PdeOcReclamoDestinatario::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PdeOcReclamoDestinatario::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('pde_oc_reclamo_destinatario');
$criterio->setCriteriosInicial();

$paginador = new Paginador(PdeOcReclamoDestinatario::getSesPagCantidad(), PdeOcReclamoDestinatario::getSesPag());
$pde_oc_reclamo_destinatarios = PdeOcReclamoDestinatario::getPdeOcReclamoDestinatariosDesdeBackend($paginador, $criterio);

include 'pde_oc_reclamo_destinatario_datos.php';
?>

