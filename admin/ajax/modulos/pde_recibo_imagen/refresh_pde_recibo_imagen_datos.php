<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
PdeReciboImagen::setSesPag($pag);

$criterio = new Criterio(PdeReciboImagen::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PdeReciboImagen::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('pde_recibo_imagen');
$criterio->setCriteriosInicial();

$paginador = new Paginador(PdeReciboImagen::getSesPagCantidad(), PdeReciboImagen::getSesPag());
$pde_recibo_imagens = PdeReciboImagen::getPdeReciboImagensDesdeBackend($paginador, $criterio);

include 'pde_recibo_imagen_datos.php';
?>

