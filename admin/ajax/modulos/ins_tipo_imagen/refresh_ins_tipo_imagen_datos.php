<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
InsTipoImagen::setSesPag($pag);

$criterio = new Criterio(InsTipoImagen::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
InsTipoImagen::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('ins_tipo_imagen');
$criterio->setCriteriosInicial();

$paginador = new Paginador(InsTipoImagen::getSesPagCantidad(), InsTipoImagen::getSesPag());
$ins_tipo_imagens = InsTipoImagen::getInsTipoImagensDesdeBackend($paginador, $criterio);

include 'ins_tipo_imagen_datos.php';
?>

