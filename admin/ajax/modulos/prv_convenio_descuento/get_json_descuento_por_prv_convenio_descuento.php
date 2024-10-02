<?php
include "_autoload.php";

$convenio_descuento_id = Gral::getVars(2, 'convenio_descuento_id', 0);
$prv_convenio_descuento = PrvConvenioDescuento::getOxId($convenio_descuento_id);

$arr = array();

if($prv_convenio_descuento){
    $arr['descuento'] = $prv_convenio_descuento->getPorcentajeDescuento();        
}else{
    $arr['descuento'] = 0;    
}

$arr_json = json_encode($arr);
echo $arr_json;
?>