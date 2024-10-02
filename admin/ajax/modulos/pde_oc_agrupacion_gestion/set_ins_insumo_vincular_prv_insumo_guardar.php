<?php

include "_autoload.php";

$dbsug_ins_insumo_id  = Gral::getVars(Gral::VARS_POST, 'dbsug_prv_insumo_id', 0);
$txt_codigo_proveedor = Gral::getVars(Gral::VARS_POST, 'txt_codigo_proveedor', '');
$ins_insumo_id        = Gral::getVars(Gral::VARS_POST, 'ins_insumo_id', 0);
$prv_proveedor_id     = Gral::getVars(Gral::VARS_POST, 'prv_proveedor_id', 0);

$ins_insumo    = InsInsumo::getOxId($ins_insumo_id);
$prv_proveedor = PrvProveedor::getOxId($prv_proveedor_id);

$arr["error"] = false;

if ($dbsug_ins_insumo_id == 0){
    if($txt_codigo_proveedor == ''){
        $arr["txt_codigo_proveedor"] = Lang::_lang("Debe indicar un codigo de proveedor", true);
        $arr["error"] = true;    
    }
}

if (!$arr["error"])
{

    $prv_insumo = PrvInsumo::getOxId($dbsug_ins_insumo_id);
    if($prv_insumo)
    {
        // -----------------------------------------------------------------
        // vincular prv insumo existente con ins insumo y proveedor
        // -----------------------------------------------------------------
        //$prv_insumo->setVincularInsInsumoYProveedor($ins_insumo_id);
        $prv_insumo = PrvInsumo::getOxId($dbsug_ins_insumo_id);
        if($prv_insumo)
        {
            $prv_insumo->setInsInsumoId($ins_insumo_id);
            if($prv_proveedor){
                $prv_insumo->setPrvProveedorId($prv_proveedor->getId());
            }
            $prv_insumo->save();
        }
    }
    else
    {
        // -----------------------------------------------------------------
        // crear prv insumo nuevo con ins insumo y proveedor
        // -----------------------------------------------------------------
        $prv_insumo = PrvInsumo::setPrvInsumoNuevo($prv_proveedor_id,
                                                $ins_insumo->getCodigoMarca(), 
                                                $codigo_pieza = '', 
                                                $codigo_proveedor = $txt_codigo_proveedor, 
                                                $ins_insumo->getDescripcion(),
                                                $observacion = 'Creación desde modal de vinculo #', 
                                                $ins_insumo_id = $ins_insumo->getId(), 
                                                $ins_marca_id = $ins_insumo->getInsMarcaId(), 
                                                $ins_marca_pieza = false, 
                                                $ins_matriz_id = false
                                                );
    }
}

// se retornan datos
$arr_json = json_encode($arr);
echo $arr_json;
?>