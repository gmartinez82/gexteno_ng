<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
NotNoticiaLeida::setSesPag($pag);

$criterio = new Criterio(NotNoticiaLeida::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
NotNoticiaLeida::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('not_noticia_leida');
$criterio->setCriteriosInicial();

$paginador = new Paginador(NotNoticiaLeida::getSesPagCantidad(), NotNoticiaLeida::getSesPag());
$not_noticia_leidas = NotNoticiaLeida::getNotNoticiaLeidasDesdeBackend($paginador, $criterio);

include 'not_noticia_leida_datos.php';
?>

