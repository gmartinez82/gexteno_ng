<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
InsInsumoImagen::setSesPag($pag);

$criterio = new Criterio(InsInsumoImagen::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
InsInsumoImagen::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('ins_insumo_imagen');
$criterio->setCriteriosInicial();

$paginador = new Paginador(InsInsumoImagen::getSesPagCantidad(), InsInsumoImagen::getSesPag());
$ins_insumo_imagens = InsInsumoImagen::getInsInsumoImagensDesdeBackend($paginador, $criterio);

include 'ins_insumo_imagen_datos.php';
?>

