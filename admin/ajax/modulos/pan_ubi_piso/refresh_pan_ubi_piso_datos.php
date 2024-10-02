<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
PanUbiPiso::setSesPag($pag);

$criterio = new Criterio(PanUbiPiso::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PanUbiPiso::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('pan_ubi_piso');
$criterio->setCriteriosInicial();

$paginador = new Paginador(PanUbiPiso::getSesPagCantidad(), PanUbiPiso::getSesPag());
$pan_ubi_pisos = PanUbiPiso::getPanUbiPisosDesdeBackend($paginador, $criterio);

include 'pan_ubi_piso_datos.php';
?>

