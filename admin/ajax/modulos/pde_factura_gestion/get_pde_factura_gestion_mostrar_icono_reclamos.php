<?php
include "_autoload.php";

$pde_oc_id = Gral::getVars(Gral::VARS_POST, "pde_oc_id", null);

$arr['COMPROBANTE_OC'][$pde_oc_id]['TIENE_RECLAMOS'] = 0;

$pde_oc = PdeOc::getOxId($pde_oc_id);
if($pde_oc)
{
    $pde_oc_reclamos = $pde_oc->getPdeOcReclamos();
    if(count($pde_oc_reclamos) > 0)
    {
        $arr['COMPROBANTE_OC'][$pde_oc_id]['TIENE_RECLAMOS'] = 1;
        foreach($pde_oc_reclamos as $pde_oc_reclamo){
            $arr['COMPROBANTE_OC'][$pde_oc_id]['RECLAMOS'][] = $pde_oc_reclamo->getId();
        }
    }
}

$arr_json = json_encode($arr);
echo $arr_json;
?>