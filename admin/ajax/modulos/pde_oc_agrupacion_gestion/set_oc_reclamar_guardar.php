<?php

include '_autoload.php';

$pde_oc_id             = Gral::getVars(Gral::VARS_POST, 'oc_id', null);
$cmb_reclamo_motivo_id = Gral::getVars(Gral::VARS_POST, 'pde_oc_cmb_reclamo_motivo_id', null);
$txa_observacion       = Gral::getVars(Gral::VARS_POST, 'pde_oc_txa_observacion', null);

$arr['error'] = false;

if ($cmb_reclamo_motivo_id == 0)
{
    $arr['pde_oc_cmb_reclamo_motivo_id'] = Lang::_lang('Debe indicar un motivo', true);
    $arr['error'] = true;    
}

if($txa_observacion == '')
{
    $arr['pde_oc_txa_observacion'] = Lang::_lang('Debe indicar una observacion', true);
    $arr['error'] = true;    
}

if (!$arr['error'])
{
    $pde_oc = PdeOc::getOxId($pde_oc_id);
    if($pde_oc)
    {
        $pde_oc_reclamo = $pde_oc->addPdeOcReclamo($cmb_reclamo_motivo_id, $txa_observacion);    
    }
}

$arr_json = json_encode($arr);
echo $arr_json;
?>