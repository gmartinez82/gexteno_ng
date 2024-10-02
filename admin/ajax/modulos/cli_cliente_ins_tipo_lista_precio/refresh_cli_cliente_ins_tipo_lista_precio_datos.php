<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
CliClienteInsTipoListaPrecio::setSesPag($pag);

$criterio = new Criterio(CliClienteInsTipoListaPrecio::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
CliClienteInsTipoListaPrecio::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('cli_cliente_ins_tipo_lista_precio');
$criterio->setCriteriosInicial();

$paginador = new Paginador(CliClienteInsTipoListaPrecio::getSesPagCantidad(), CliClienteInsTipoListaPrecio::getSesPag());
$cli_cliente_ins_tipo_lista_precios = CliClienteInsTipoListaPrecio::getCliClienteInsTipoListaPreciosDesdeBackend($paginador, $criterio);

include 'cli_cliente_ins_tipo_lista_precio_datos.php';
?>

