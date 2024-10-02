<?php
include_once '_autoload.php';

$id = Gral::getVars(2, 'id');
$ins_insumo = InsInsumo::getOxId($id);

$criterio = new Criterio(InsInsumo::SES_CRITERIOS);
$criterio->addTabla('ins_insumo');
$criterio->setCriteriosInicial();

$ins_tipo_lista_precios = InsTipoListaPrecio::getInsTipoListaPrecios(null, null, true);
$gral_tipo_iva_venta = $ins_insumo->getGralTipoIvaVentaObj();

$estado = ($ins_insumo->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'ins_insumo_precios_gestion_uno.php';
?>
<script>
    setInitInsInsumoPreciosGestion();
    setInit();
</script>