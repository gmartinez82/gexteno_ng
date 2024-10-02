<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
CliSubcategoriaInsTipoListaPrecio::setSesPag($pag);

$criterio = new Criterio(CliSubcategoriaInsTipoListaPrecio::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
CliSubcategoriaInsTipoListaPrecio::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('cli_subcategoria_ins_tipo_lista_precio');
$criterio->setCriteriosInicial();

$paginador = new Paginador(CliSubcategoriaInsTipoListaPrecio::getSesPagCantidad(), CliSubcategoriaInsTipoListaPrecio::getSesPag());
$cli_subcategoria_ins_tipo_lista_precios = CliSubcategoriaInsTipoListaPrecio::getCliSubcategoriaInsTipoListaPreciosDesdeBackend($paginador, $criterio);

include 'cli_subcategoria_ins_tipo_lista_precio_datos.php';
?>

