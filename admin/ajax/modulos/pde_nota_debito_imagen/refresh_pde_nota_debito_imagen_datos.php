<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
PdeNotaDebitoImagen::setSesPag($pag);

$criterio = new Criterio(PdeNotaDebitoImagen::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PdeNotaDebitoImagen::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('pde_nota_debito_imagen');
$criterio->setCriteriosInicial();

$paginador = new Paginador(PdeNotaDebitoImagen::getSesPagCantidad(), PdeNotaDebitoImagen::getSesPag());
$pde_nota_debito_imagens = PdeNotaDebitoImagen::getPdeNotaDebitoImagensDesdeBackend($paginador, $criterio);

include 'pde_nota_debito_imagen_datos.php';
?>

