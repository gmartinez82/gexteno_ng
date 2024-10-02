<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
InsNivelAprovisionamiento::setSesPag($pag);

$criterio = new Criterio(InsNivelAprovisionamiento::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
InsNivelAprovisionamiento::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('ins_nivel_aprovisionamiento');
$criterio->setCriteriosInicial();

$paginador = new Paginador(InsNivelAprovisionamiento::getSesPagCantidad(), InsNivelAprovisionamiento::getSesPag());
$ins_nivel_aprovisionamientos = InsNivelAprovisionamiento::getInsNivelAprovisionamientosDesdeBackend($paginador, $criterio);

include 'ins_nivel_aprovisionamiento_datos.php';
?>

