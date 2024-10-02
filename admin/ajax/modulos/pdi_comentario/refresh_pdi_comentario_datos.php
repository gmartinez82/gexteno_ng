<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
PdiComentario::setSesPag($pag);

$criterio = new Criterio(PdiComentario::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PdiComentario::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('pdi_comentario');
$criterio->setCriteriosInicial();

$paginador = new Paginador(PdiComentario::getSesPagCantidad(), PdiComentario::getSesPag());
$pdi_comentarios = PdiComentario::getPdiComentariosDesdeBackend($paginador, $criterio);

include 'pdi_comentario_datos.php';
?>

