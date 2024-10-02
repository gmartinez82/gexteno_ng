<?php

include_once '_autoload.php';

$vta_hoja_ruta_id = Gral::getVars(Gral::VARS_POST, 'vta_hoja_ruta_id', 0, Gral::TIPO_INTEGER);

$txt_buscador = Gral::getVars(Gral::VARS_POST, 'txt_buscador', '', Gral::TIPO_STRING);
$txt_filtro_desde = Gral::getVars(Gral::VARS_POST, 'txt_filtro_comprobante_desde', '', Gral::TIPO_STRING);
$txt_filtro_hasta = Gral::getVars(Gral::VARS_POST, 'txt_filtro_comprobante_hasta', '', Gral::TIPO_STRING);
$cmb_filtro_geo_localidad_id = Gral::getVars(Gral::VARS_POST, 'cmb_filtro_geo_localidad_id', 0, Gral::TIPO_INTEGER);


$arr_filtros['vta_hoja_ruta_id'] = $vta_hoja_ruta_id;
$arr_filtros['fecha_desde'] = $txt_filtro_desde;
$arr_filtros['fecha_hasta'] = $txt_filtro_hasta;
$arr_filtros['geo_localidad_id'] = $cmb_filtro_geo_localidad_id;
$arr_filtros['buscador'] = $txt_buscador;

//Gral::prr($arr_filtros);

$vta_remitos = VtaRemito::getVtaRemitosVinculablesAVtaHojaRuta($arr_filtros);
$vta_remito_ajustes = VtaRemitoAjuste::getVtaRemitoAjustesVinculablesAVtaHojaRuta($arr_filtros);
//Gral::pr($txt_filtro_desde, 'txt_filtro_desde');
//Gral::pr($txt_filtro_hasta, 'txt_filtro_hasta');

$vta_hoja_ruta = VtaHojaRuta::getOxId($vta_hoja_ruta_id);
$gral_ruta = $vta_hoja_ruta->getGralRuta();

include 'bloque_modal_agregar_comprobante_tabs.php';
?>


<script>
    setInit();
    setInitVtaHojaRutaGestion();
</script>