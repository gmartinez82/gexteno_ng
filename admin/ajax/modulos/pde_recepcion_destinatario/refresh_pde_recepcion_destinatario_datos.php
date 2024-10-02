<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
PdeRecepcionDestinatario::setSesPag($pag);

$criterio = new Criterio(PdeRecepcionDestinatario::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PdeRecepcionDestinatario::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('pde_recepcion_destinatario');
$criterio->setCriteriosInicial();

$paginador = new Paginador(PdeRecepcionDestinatario::getSesPagCantidad(), PdeRecepcionDestinatario::getSesPag());
$pde_recepcion_destinatarios = PdeRecepcionDestinatario::getPdeRecepcionDestinatariosDesdeBackend($paginador, $criterio);

include 'pde_recepcion_destinatario_datos.php';
?>

