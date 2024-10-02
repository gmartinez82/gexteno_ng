<?php
include "_autoload.php";

$insumo_id = Gral::getVars(2, 'insumo_id', 0);
$ins_insumo = InsInsumo::getOxId($insumo_id);

$insumo_similar = Gral::getVars(2, 'insumo_similar', 0);
$ins_insumo_similar = InsInsumo::getOxId($insumo_similar);

if($ins_insumo && $ins_insumo_similar){
    
    $array = array(
        array('campo' => 'ins_insumo_id', 'valor' => $insumo_id),
        array('campo' => 'ins_insumo_similar', 'valor' => $insumo_similar),
    );
    $ins_insumo_similar = InsInsumoSimilar::getOxArray($array);
    if($ins_insumo_similar){
        $ins_insumo_similar->delete();
    }
}

?>