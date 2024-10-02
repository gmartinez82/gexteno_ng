<?php

include "_autoload.php";
include Gral::getPathAbs()."admin/control/init.php";

$tipo = Gral::getVars(Gral::VARS_POST, "tipo", '');


$txt_vta_recibo_item_generico_importe_unitario_reals = Gral::getVars(Gral::VARS_POST, "txt_vta_recibo_item_generico_importe_unitario_real", 0);
$txt_vta_recibo_item_generico_importe_unitarios = Gral::getVars(Gral::VARS_POST, "txt_vta_recibo_item_generico_importe_unitario", 0);
$cmb_vta_recibo_item_generico_gral_moneda_ids = Gral::getVars(Gral::VARS_POST, "cmb_vta_recibo_item_generico_gral_moneda_id", 0);

$importe_total = 0;

if (is_array($txt_vta_recibo_item_generico_importe_unitario_reals) && count($txt_vta_recibo_item_generico_importe_unitario_reals) > 0)
{
    foreach ($txt_vta_recibo_item_generico_importe_unitario_reals as $i => $txt_vta_recibo_item_generico_importe_unitario_real) {
        
        $cmb_vta_recibo_item_generico_gral_moneda_id = $cmb_vta_recibo_item_generico_gral_moneda_ids[$i];
        $txt_vta_recibo_item_generico_importe_unitario_real = Gral::getImporteDesdePriceFormatToDB($txt_vta_recibo_item_generico_importe_unitario_real);
                
        if($cmb_vta_recibo_item_generico_gral_moneda_id != ''){
            $gral_moneda_registrada = GralMoneda::getOxId($cmb_vta_recibo_item_generico_gral_moneda_id);
            $tipo_cambio_real = $gral_moneda_base->getGralMonedaTipoCambioValorActual($gral_moneda_registrada);            
        }else{
            $tipo_cambio_real = 1;
        }

        $importe_unitario = $txt_vta_recibo_item_generico_importe_unitario_real;
        $importe_unitario_moneda_base = $importe_unitario / $tipo_cambio_real;
        
        $importe_total += $importe_unitario_moneda_base;
        
        if($gral_moneda_registrada && $gral_moneda_registrada->getId() != $gral_moneda_base->getId()){
            $arr['comentarios']['txt_vta_recibo_item_generico_importe_unitario_'.$i.'_comentario'] = Gral::_echoImp($importe_unitario_moneda_base, $gral_moneda_base, $return = true);
        }else{
            $arr['comentarios']['txt_vta_recibo_item_generico_importe_unitario_'.$i.'_comentario'] = '';            
        }
        
        $arr['inputs']['txt_vta_recibo_item_generico_importe_unitario_'.$i] = Gral::getImporteDesdeDbToPriceFormat($importe_unitario_moneda_base);        
    }
    

    $arr['VTA_RECIBO_ITEM_GENERICO_TOTAL'] = $importe_total;
    $arr['VTA_RECIBO_ITEM_GENERICO_TOTAL_FORMATEADO'] = Gral::_echoImp($importe_total, false, true);

    
} else {
    $arr['VTA_RECIBO_ITEM_GENERICO_TOTAL'] = 0;
    $arr['VTA_RECIBO_ITEM_GENERICO_TOTAL_FORMATEADO'] = Gral::_echoImp(0, false, true);

    
}

// se retornan datos
$arr_json = json_encode($arr);
echo $arr_json;
?>