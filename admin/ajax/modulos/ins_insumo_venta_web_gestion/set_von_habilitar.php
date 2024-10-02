<?php
include "_autoload.php";

$insumo_id = Gral::getVars(1, 'insumo_id', 0);
$habilitar = Gral::getVars(1, 'habilitar', 0);
$tipo = Gral::getVars(1, 'tipo', '');
$ins_insumo = InsInsumo::getOxId($insumo_id);

if($ins_insumo){
    if($tipo == 'tienda-online'){
        $ins_insumo->setVentaWeb($habilitar);
        $ins_insumo->save();
    }elseif($tipo == 'tienda-mayorista'){
        $ins_insumo->setVentaMayorista($habilitar);
        $ins_insumo->save();        
    }
}