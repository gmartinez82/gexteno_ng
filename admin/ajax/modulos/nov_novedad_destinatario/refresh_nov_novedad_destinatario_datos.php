<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
NovNovedadDestinatario::setSesPag($pag);

$criterio = new Criterio(NovNovedadDestinatario::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
NovNovedadDestinatario::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('nov_novedad_destinatario');
$criterio->setCriteriosInicial();

$paginador = new Paginador(NovNovedadDestinatario::getSesPagCantidad(), NovNovedadDestinatario::getSesPag());
$nov_novedad_destinatarios = NovNovedadDestinatario::getNovNovedadDestinatariosDesdeBackend($paginador, $criterio);

include 'nov_novedad_destinatario_datos.php';
?>

