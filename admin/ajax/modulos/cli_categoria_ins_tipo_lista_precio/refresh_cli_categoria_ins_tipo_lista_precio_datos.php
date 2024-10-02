<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
CliCategoriaInsTipoListaPrecio::setSesPag($pag);

$criterio = new Criterio(CliCategoriaInsTipoListaPrecio::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
CliCategoriaInsTipoListaPrecio::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('cli_categoria_ins_tipo_lista_precio');
$criterio->setCriteriosInicial();

$paginador = new Paginador(CliCategoriaInsTipoListaPrecio::getSesPagCantidad(), CliCategoriaInsTipoListaPrecio::getSesPag());
$cli_categoria_ins_tipo_lista_precios = CliCategoriaInsTipoListaPrecio::getCliCategoriaInsTipoListaPreciosDesdeBackend($paginador, $criterio);

include 'cli_categoria_ins_tipo_lista_precio_datos.php';
?>

