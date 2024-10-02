<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
PanUbiPasillo::setSesPag($pag);

$criterio = new Criterio(PanUbiPasillo::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PanUbiPasillo::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('pan_ubi_pasillo');
$criterio->setCriteriosInicial();

$paginador = new Paginador(PanUbiPasillo::getSesPagCantidad(), PanUbiPasillo::getSesPag());
$pan_ubi_pasillos = PanUbiPasillo::getPanUbiPasillosDesdeBackend($paginador, $criterio);

include 'pan_ubi_pasillo_datos.php';
?>

