<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
CliTelefonoTipo::setSesPag($pag);

$criterio = new Criterio(CliTelefonoTipo::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
CliTelefonoTipo::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('cli_telefono_tipo');
$criterio->setCriteriosInicial();

$paginador = new Paginador(CliTelefonoTipo::getSesPagCantidad(), CliTelefonoTipo::getSesPag());
$cli_telefono_tipos = CliTelefonoTipo::getCliTelefonoTiposDesdeBackend($paginador, $criterio);

include 'cli_telefono_tipo_datos.php';
?>

