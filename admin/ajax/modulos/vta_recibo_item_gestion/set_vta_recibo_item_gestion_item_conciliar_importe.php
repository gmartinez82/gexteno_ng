<?php

include '_autoload.php';

$vta_recibo_item_conciliado_id = Gral::getVars(Gral::VARS_POST, 'vta_recibo_item_conciliado_id', 0);        
$vta_recibo_item_id            = Gral::getVars(Gral::VARS_POST, 'vta_recibo_item_id', 0);        
$txt_importe_conciliado        = Gral::getVars(Gral::VARS_POST, 'txt_importe_conciliado', 0);

$arr['error'] = false;

$txt_importe_conciliado = Gral::getImporteDesdePriceFormatToDB($txt_importe_conciliado);

if($vta_recibo_item_conciliado_id)
{
    $vta_recibo_item                  = VtaReciboItem::getOxId($vta_recibo_item_id);
    $vta_recibo_item_importe_unitario = $vta_recibo_item->getImporteUnitario();
    
    $vta_recibo_item_conciliado = VtaReciboItemConciliado::getOxId($vta_recibo_item_conciliado_id);
    if($vta_recibo_item_conciliado)
    {
        $importe_diferencia = $vta_recibo_item_importe_unitario - $txt_importe_conciliado;
        
        //$vta_recibo_item_conciliado->setVtaReciboItemId($vta_recibo_item_id);
        //$vta_recibo_item_conciliado->setImporteOriginal($vta_recibo_item_importe_unitario);
        $vta_recibo_item_conciliado->setImporteConciliado($txt_importe_conciliado);
        $vta_recibo_item_conciliado->setImporteDiferencia($importe_diferencia);
        $vta_recibo_item_conciliado->setEstado(1);
        $vta_recibo_item_conciliado->save();
    }
    
    $arr['vta_recibo_item_id']            = $vta_recibo_item->getId();
    $arr['vta_recibo_item_conciliado_id'] = $vta_recibo_item_conciliado->getId();
    $arr['vta_recibo_item_id']            = $vta_recibo_item->getId();
}


$arr_json = json_encode($arr);
echo $arr_json;

?>