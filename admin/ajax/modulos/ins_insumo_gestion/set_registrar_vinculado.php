<?php
include "_autoload.php";

$insumo_id = Gral::getVars(2, 'insumo_id', 0);
$ins_insumo = InsInsumo::getOxId($insumo_id);

$insumo_vinculado = Gral::getVars(2, 'insumo_vinculado', 0);
$ins_insumo_vinculado = InsInsumo::getOxId($insumo_vinculado);

if($ins_insumo && $ins_insumo_vinculado){

    $array = array(
        array('campo' => 'ins_insumo_id', 'valor' => $insumo_id),
        array('campo' => 'ins_insumo_vinculado', 'valor' => $insumo_vinculado),
    );
    $ins_insumo_vinculado = InsInsumoVinculado::getOxArray($array);
    if(!$ins_insumo_vinculado){    
        // se genera el vinculo entre ambos
        $ins_insumo_vinculado = new InsInsumoVinculado();
        $ins_insumo_vinculado->setInsInsumoId($insumo_id);
        $ins_insumo_vinculado->setInsInsumoVinculado($insumo_vinculado);
        $ins_insumo_vinculado->save();
    }
}

?>