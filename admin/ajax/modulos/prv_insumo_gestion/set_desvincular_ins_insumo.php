<?php
/**
 * @creado_por Esteban Martinez
 * @creado 14/03/2017
 */
include_once '_autoload.php';

$id = Gral::getVars(1, "id", 0);

$prv_insumo = PrvInsumo::getOxId($id);

if($prv_insumo)
{
    $prv_insumo->setInsInsumoId("null");
    
    $prv_insumo->setInsMarcaId("null");
    $prv_insumo->setCodigoMarca("");
    
    $prv_insumo->setInsMarcaPieza("null");
    $prv_insumo->setCodigoPieza("");
    
    $prv_insumo->save();
}

?>