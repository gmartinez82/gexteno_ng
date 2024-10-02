<?php
include_once '_autoload.php';

$pag = Gral::getVars(2, 'pag', 1);
InsInsumo::setSesPag($pag);

$criterio = new Criterio(InsInsumo::SES_CRITERIOS);
$criterio->addTabla('ins_insumo');
$criterio->setCriteriosInicial();

$paginador = new Paginador(InsInsumo::getSesPagCantidad(), InsInsumo::getSesPag());
$ins_insumos = InsInsumo::getInsInsumos($paginador, $criterio);

$ins_tipo_lista_precio_venta_online = InsTipoListaPrecio::getOxCodigo(InsTipoListaPrecio::TIPO_PRECIO_VENTA_ONLINE);
$ins_tipo_lista_precio_mayorista = InsTipoListaPrecio::getOxCodigo(InsTipoListaPrecio::TIPO_PRECIO_MAYORISTA);

include 'ins_insumo_venta_web_gestion_datos.php';
?>
<script>
    setInitInsInsumoVentaWebGestion();
    setInit();
</script>