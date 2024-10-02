<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
AltNivel::setSesPag($pag);

$criterio = new Criterio(AltNivel::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
AltNivel::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('alt_nivel');
$criterio->setCriteriosInicial();

$paginador = new Paginador(AltNivel::getSesPagCantidad(), AltNivel::getSesPag());
$alt_nivels = AltNivel::getAltNivelsDesdeBackend($paginador, $criterio);

include 'alt_nivel_datos.php';
?>

