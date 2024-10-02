<?php
include_once "_autoload.php";

//$vta_comision_id = Gral::getVars(Gral::VARS_GET, 'vta_comision_id', 0);
$vta_comision_id = $param["vta_comision_id"];

$vta_comision = VtaComision::getOxId($vta_comision_id);
$vta_comision_vta_comprobantes = $vta_comision->getVtaComisionVtaComprobantes();
$vta_comision_gral_forma_pagos = $vta_comision->getVtaComisionGralFpFormaPagos();

?>
<style>
    .adm_tbl_lineas{
        font-weight: normal;
        font-size: 8px;
        text-decoration: none;
        color: #000;
        border-bottom:#CCCCCC dotted 1px;
    }

    .adm_tbl_lineas_label{
        font-weight:normal;
    }

    .adm_tbl_lineas_dato{
        font-weight:bold;
        text-align: right;
    }
    .total td.adm_tbl_lineas{
        background-color: #ddd;
        height: 16px;
        font-size: 10px;
    }
    
</style>


<table>
    <tr>
        <td width="330"></td>
        <td width="80" class="adm_tbl_lineas adm_tbl_lineas_label">Subtotal:</td>
        <td width="125" class="adm_tbl_lineas adm_tbl_lineas_dato">
            <label class=""><?php Gral::_echoImp($vta_comision->getVtaComisionTotal()) ?></label>
        </td>
    </tr>

    <tr class="total">
        <td>&nbsp;</td>
        <td class="adm_tbl_lineas adm_tbl_lineas_label">Total:</td>
        <td class="adm_tbl_lineas adm_tbl_lineas_dato">
            <label class=""><?php Gral::_echoImp($vta_comision->getVtaComisionTotal()) ?></label>
        </td>
    </tr>
</table>