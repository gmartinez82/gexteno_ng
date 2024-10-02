<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
CliClienteInfoSifen::setSesPag($pag);

$criterio = new Criterio(CliClienteInfoSifen::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
CliClienteInfoSifen::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('cli_cliente_info_sifen');
$criterio->setCriteriosInicial();

$paginador = new Paginador(CliClienteInfoSifen::getSesPagCantidad(), CliClienteInfoSifen::getSesPag());
$cli_cliente_info_sifens = CliClienteInfoSifen::getCliClienteInfoSifensDesdeBackend($paginador, $criterio);

include 'cli_cliente_info_sifen_datos.php';
?>

