<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
PdeNotaCreditoImagen::setSesPag($pag);

$criterio = new Criterio(PdeNotaCreditoImagen::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PdeNotaCreditoImagen::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('pde_nota_credito_imagen');
$criterio->setCriteriosInicial();

$paginador = new Paginador(PdeNotaCreditoImagen::getSesPagCantidad(), PdeNotaCreditoImagen::getSesPag());
$pde_nota_credito_imagens = PdeNotaCreditoImagen::getPdeNotaCreditoImagensDesdeBackend($paginador, $criterio);

include 'pde_nota_credito_imagen_datos.php';
?>

