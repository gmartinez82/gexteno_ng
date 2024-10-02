<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
NotNoticia::setSesPag($pag);

$criterio = new Criterio(NotNoticia::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
NotNoticia::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('not_noticia');
$criterio->setCriteriosInicial();

$paginador = new Paginador(NotNoticia::getSesPagCantidad(), NotNoticia::getSesPag());
$not_noticias = NotNoticia::getNotNoticiasDesdeBackend($paginador, $criterio);

include 'not_noticia_datos.php';
?>

