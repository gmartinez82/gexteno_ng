<?php
include_once "_autoload.php";

$vta_ajuste_haber_id = Gral::getVars(Gral::VARS_GET, 'vta_ajuste_haber_id', 0);
$vta_ajuste_haber = VtaAjusteHaber::getOxId($vta_ajuste_haber_id);
//$vta_ajuste_haber_items = $vta_ajuste_haber->getVtaAjusteHaberItems();

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
        <td width="330">&nbsp;</td>
        <td width="80" class="adm_tbl_lineas adm_tbl_lineas_label">Total Recibido:</td>
        <td width="125" class="adm_tbl_lineas adm_tbl_lineas_dato">
            <label class=""><?php Gral::_echoImp($vta_ajuste_haber->getVtaAjusteHaberTotal()) ?></label>
        </td>
    </tr>
</table>