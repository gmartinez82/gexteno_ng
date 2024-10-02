<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
PanUbiEstante::setSesPag($pag);

$criterio = new Criterio(PanUbiEstante::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PanUbiEstante::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('pan_ubi_estante');
$criterio->setCriteriosInicial();

$paginador = new Paginador(PanUbiEstante::getSesPagCantidad(), PanUbiEstante::getSesPag());
$pan_ubi_estantes = PanUbiEstante::getPanUbiEstantesDesdeBackend($paginador, $criterio);

include 'pan_ubi_estante_datos.php';
?>

