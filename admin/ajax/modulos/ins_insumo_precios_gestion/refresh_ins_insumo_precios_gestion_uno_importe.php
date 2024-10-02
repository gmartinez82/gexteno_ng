<?php
include_once '_autoload.php';

$insumo_id = Gral::getVars(2, 'insumo_id', 0);
$ins_insumo = InsInsumo::getOxId($insumo_id);

$tipo_lista_precio_id = Gral::getVars(2, 'tipo_lista_precio_id', 0);
$ins_tipo_lista_precio = InsTipoListaPrecio::getOxId($tipo_lista_precio_id);

$criterio = new Criterio(InsInsumo::SES_CRITERIOS);
$criterio->addTabla('ins_insumo');
$criterio->setCriteriosInicial();

$ins_lista_precio = $ins_insumo->getInsInsumoListaPrecioXTipoLista($ins_tipo_lista_precio);
$porcentaje_incremento_propio = ($ins_lista_precio && $ins_lista_precio->getPorcentajeIncremento() != 0) ? true : false;
$porcentaje_descuento_propio = ($ins_lista_precio && $ins_lista_precio->getPorcentajeDescuento() != 0) ? true : false;
$importe_propio = ($ins_lista_precio && $ins_lista_precio->getImporteManual() != 0) ? true : false;

$ins_insumo_costo = $ins_insumo->getInsInsumoCostoActual();
$gral_tipo_iva_venta = $ins_insumo->getGralTipoIvaVentaObj();

if($ins_insumo_costo){
    include 'ins_insumo_precios_gestion_uno_importe.php';
}
?>
<script>
    setInitInsInsumoPreciosGestion();
    setInit();
</script>