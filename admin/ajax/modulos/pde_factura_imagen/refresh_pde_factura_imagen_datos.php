<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
PdeFacturaImagen::setSesPag($pag);

$criterio = new Criterio(PdeFacturaImagen::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PdeFacturaImagen::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('pde_factura_imagen');
$criterio->setCriteriosInicial();

$paginador = new Paginador(PdeFacturaImagen::getSesPagCantidad(), PdeFacturaImagen::getSesPag());
$pde_factura_imagens = PdeFacturaImagen::getPdeFacturaImagensDesdeBackend($paginador, $criterio);

include 'pde_factura_imagen_datos.php';
?>

