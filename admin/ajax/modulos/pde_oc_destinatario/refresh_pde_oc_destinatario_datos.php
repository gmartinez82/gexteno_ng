<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
PdeOcDestinatario::setSesPag($pag);

$criterio = new Criterio(PdeOcDestinatario::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PdeOcDestinatario::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('pde_oc_destinatario');
$criterio->setCriteriosInicial();

$paginador = new Paginador(PdeOcDestinatario::getSesPagCantidad(), PdeOcDestinatario::getSesPag());
$pde_oc_destinatarios = PdeOcDestinatario::getPdeOcDestinatariosDesdeBackend($paginador, $criterio);

include 'pde_oc_destinatario_datos.php';
?>

