<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
InsMarcaImagen::setSesPag($pag);

$criterio = new Criterio(InsMarcaImagen::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
InsMarcaImagen::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('ins_marca_imagen');
$criterio->setCriteriosInicial();

$paginador = new Paginador(InsMarcaImagen::getSesPagCantidad(), InsMarcaImagen::getSesPag());
$ins_marca_imagens = InsMarcaImagen::getInsMarcaImagensDesdeBackend($paginador, $criterio);

include 'ins_marca_imagen_datos.php';
?>

