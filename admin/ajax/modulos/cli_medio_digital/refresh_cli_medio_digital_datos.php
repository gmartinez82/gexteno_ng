<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
CliMedioDigital::setSesPag($pag);

$criterio = new Criterio(CliMedioDigital::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
CliMedioDigital::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('cli_medio_digital');
$criterio->setCriteriosInicial();

$paginador = new Paginador(CliMedioDigital::getSesPagCantidad(), CliMedioDigital::getSesPag());
$cli_medio_digitals = CliMedioDigital::getCliMedioDigitalsDesdeBackend($paginador, $criterio);

include 'cli_medio_digital_datos.php';
?>

