<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
AltAlerta::setSesPag($pag);

$criterio = new Criterio(AltAlerta::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
AltAlerta::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('alt_alerta');
$criterio->setCriteriosInicial();

$paginador = new Paginador(AltAlerta::getSesPagCantidad(), AltAlerta::getSesPag());
$alt_alertas = AltAlerta::getAltAlertasDesdeBackend($paginador, $criterio);

include 'alt_alerta_datos.php';
?>

