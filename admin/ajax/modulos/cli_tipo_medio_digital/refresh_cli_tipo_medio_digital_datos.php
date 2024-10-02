<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
CliTipoMedioDigital::setSesPag($pag);

$criterio = new Criterio(CliTipoMedioDigital::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
CliTipoMedioDigital::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('cli_tipo_medio_digital');
$criterio->setCriteriosInicial();

$paginador = new Paginador(CliTipoMedioDigital::getSesPagCantidad(), CliTipoMedioDigital::getSesPag());
$cli_tipo_medio_digitals = CliTipoMedioDigital::getCliTipoMedioDigitalsDesdeBackend($paginador, $criterio);

include 'cli_tipo_medio_digital_datos.php';
?>

