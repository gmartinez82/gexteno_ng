<?php

include '_autoload.php';

$cmb_vta_recibo_item_conciliar = Gral::getVars(Gral::VARS_POST, 'cmb_vta_recibo_item_conciliar', -1);    
$vta_recibo_item_id            = Gral::getVars(Gral::VARS_POST, 'vta_recibo_item_id', 0);        
$vta_recibo_item_conciliado_id = Gral::getVars(Gral::VARS_POST, 'vta_recibo_item_conciliado_id', 0);
$txt_importe_conciliado        = Gral::getVars(Gral::VARS_POST, 'txt_importe_conciliado', 0);


$fecha_emision_validada = false;
$fecha_cobro_validada   = false;

$arr['error'] = false;

$txt_importe_conciliado = Gral::getImporteDesdePriceFormatToDB($txt_importe_conciliado);

$vta_recibo_item = VtaReciboItem::getOxId($vta_recibo_item_id);
if($vta_recibo_item)
{
    $vta_recibo_item_importe_unitario = $vta_recibo_item->getImporteUnitario();

    if($cmb_vta_recibo_item_conciliar == 1)
    {
        //Insert item_conciliado
        $vta_recibo_item_conciliado = new VtaReciboItemConciliado();
        $vta_recibo_item_conciliado->setVtaReciboItemId($vta_recibo_item_id);
        $vta_recibo_item_conciliado->setImporteOriginal($vta_recibo_item_importe_unitario);
        $vta_recibo_item_conciliado->setFecha(date('Y-m-d'));
        $vta_recibo_item_conciliado->setEstado(1);
        $vta_recibo_item_conciliado->save();
        
        $vta_recibo_item->setConciliado(1);
        $vta_recibo_item->save();
        
        $arr['vta_recibo_item_id']            = $vta_recibo_item->getId();
        $arr['vta_recibo_item_conciliado_id'] = $vta_recibo_item_conciliado->getId();
    }
    elseif($cmb_vta_recibo_item_conciliar == 0)
    {
        //update item_conciliado para cambiar estado
        $vta_recibo_item_conciliado = VtaReciboItemConciliado::getOxId($vta_recibo_item_conciliado_id);
        if($vta_recibo_item_conciliado)
        {
            $importe_diferencia = $vta_recibo_item_importe_unitario - $txt_importe_conciliado;

            //$vta_recibo_item_conciliado->setVtaReciboItemId($vta_recibo_item_id);
            //$vta_recibo_item_conciliado->setImporteOriginal($vta_recibo_item_importe_unitario);
            //$vta_recibo_item_conciliado->setImporteConciliado($txt_importe_conciliado);
            //$vta_recibo_item_conciliado->setImporteDiferencia($importe_diferencia);
            $vta_recibo_item_conciliado->setEstado(0);
            $vta_recibo_item_conciliado->save();
        }
        
        $arr['vta_recibo_item_id']            = $vta_recibo_item->getId();
        $arr['vta_recibo_item_conciliado_id'] = 0;
        
        $vta_recibo_item->setConciliado(0);
        $vta_recibo_item->save();    
    }
}


$arr_json = json_encode($arr);
echo $arr_json;

?>