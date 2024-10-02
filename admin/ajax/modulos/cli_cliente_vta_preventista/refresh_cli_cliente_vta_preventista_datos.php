<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
CliClienteVtaPreventista::setSesPag($pag);

$criterio = new Criterio(CliClienteVtaPreventista::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
CliClienteVtaPreventista::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('cli_cliente_vta_preventista');
$criterio->setCriteriosInicial();

$paginador = new Paginador(CliClienteVtaPreventista::getSesPagCantidad(), CliClienteVtaPreventista::getSesPag());
$cli_cliente_vta_preventistas = CliClienteVtaPreventista::getCliClienteVtaPreventistasDesdeBackend($paginador, $criterio);

include 'cli_cliente_vta_preventista_datos.php';
?>

