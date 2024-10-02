<?php
include_once '_autoload.php';

$id = Gral::getVars(2, 'id');
$ins_insumo = InsInsumo::getOxId($id);

$criterio = new Criterio(InsInsumo::SES_CRITERIOS);
$criterio->addTabla('ins_insumo');
$criterio->setCriteriosInicial();

$ins_tipo_lista_precio_venta_online = InsTipoListaPrecio::getOxCodigo(InsTipoListaPrecio::TIPO_PRECIO_VENTA_ONLINE);
$ins_tipo_lista_precio_mayorista = InsTipoListaPrecio::getOxCodigo(InsTipoListaPrecio::TIPO_PRECIO_MAYORISTA);

$estado = ($ins_insumo->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'ins_insumo_venta_web_gestion_uno.php';
?>
<script>
    setInitInsInsumoVentaWebGestion();
    setInit();
</script>