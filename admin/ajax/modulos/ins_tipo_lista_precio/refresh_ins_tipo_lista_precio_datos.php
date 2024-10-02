<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
InsTipoListaPrecio::setSesPag($pag);

$criterio = new Criterio(InsTipoListaPrecio::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
InsTipoListaPrecio::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('ins_tipo_lista_precio');
$criterio->setCriteriosInicial();

$paginador = new Paginador(InsTipoListaPrecio::getSesPagCantidad(), InsTipoListaPrecio::getSesPag());
$ins_tipo_lista_precios = InsTipoListaPrecio::getInsTipoListaPreciosDesdeBackend($paginador, $criterio);

include 'ins_tipo_lista_precio_datos.php';
?>

