<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
CliClienteTienda::setSesPag($pag);

$criterio = new Criterio(CliClienteTienda::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
CliClienteTienda::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('cli_cliente_tienda');
$criterio->setCriteriosInicial();

$paginador = new Paginador(CliClienteTienda::getSesPagCantidad(), CliClienteTienda::getSesPag());
$cli_cliente_tiendas = CliClienteTienda::getCliClienteTiendasDesdeBackend($paginador, $criterio);

include 'cli_cliente_tienda_gestion_datos.php';
?>

