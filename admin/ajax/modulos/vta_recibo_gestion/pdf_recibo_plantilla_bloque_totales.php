<?php
include_once "_autoload.php";

$vta_recibo_id = Gral::getVars(Gral::VARS_GET, 'vta_recibo_id', 0);
$vta_recibo = VtaRecibo::getOxId($vta_recibo_id);
//$vta_recibo_items = $vta_recibo->getVtaReciboItems();

?>
<style>
    .adm_tbl_lineas{
        font-weight: normal;
        font-size: 8px;
        text-decoration: none;
        color: #000;
        border-bottom:#CCCCCC dotted 1px;
        line-height: 18px;
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
        line-height: 20px;
        font-size: 10px;
    }

</style>

<table>
    

    <tr class="total">
        <td width="310">&nbsp;</td>
        <td width="100" class="adm_tbl_lineas adm_tbl_lineas_label">&nbsp;&nbsp;Total Recibido:</td>
        <td width="135" class="adm_tbl_lineas adm_tbl_lineas_dato">
            <label class=""><?php Gral::_echoImp($vta_recibo->getVtaReciboTotal()) ?>&nbsp;&nbsp;</label>
        </td>
    </tr>
</table>