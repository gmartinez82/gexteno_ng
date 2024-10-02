<?php
include_once "_autoload.php";

//$pde_orden_pago_id = Gral::getVars(Gral::VARS_GET, 'pde_orden_pago_id', 0);
$pde_orden_pago_id = $param["pde_orden_pago_id"];

$pde_orden_pago = PdeOrdenPago::getOxId($pde_orden_pago_id);
$pde_orden_pago_pde_comprobantes = $pde_orden_pago->getPdeOrdenPagoPdeComprobantes();
$pde_orden_pago_gral_forma_pagos = $pde_orden_pago->getPdeOrdenPagoGralFpFormaPagos();

$total_importe_pago = $pde_orden_pago->getPdeOrdenPagoTotal();
$total_importe_comprobantes_afectados = $pde_orden_pago->getPdeOrdenPagoTotalComprobantes();


$total_importe_retenciones = 0;
$pde_orden_pago_pde_tributos     = $pde_orden_pago->getPdeOrdenPagoPdeTributos();
foreach ($pde_orden_pago_pde_tributos as $pde_orden_pago_pde_tributo)
{
    $importe_comprobante_tributo = $pde_orden_pago_pde_tributo->getImporteTributo();
    //Gral::pr($importe_comprobante_tributo, 'importe_comprobante_tributo1');
    //$importe_comprobante_tributo = Gral::getImporteDesdePriceFormatToDB($importe_comprobante_tributo);
    //Gral::pr($importe_comprobante_tributo, 'importe_comprobante_tributo2');
    $total_importe_retenciones += $importe_comprobante_tributo;
    //Gral::pr($importe_comprobante_tributo, 'importe_comprobante_tributo3');
}


$saldo_importe = ($total_importe_pago + $total_importe_retenciones) - $total_importe_comprobantes_afectados;

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
        line-height:16px;
    }

    .adm_tbl_lineas_dato{
        font-weight:bold;
        text-align: right;
        line-height:16px;
    }
    .saldo-acreedor td.adm_tbl_lineas{
        background-color: #f4f4f4;
        line-height:16px;
        font-size: 8px;
    }
    .saldo-deudor td.adm_tbl_lineas{
        background-color: #E8D77B;
        line-height:16px;
        font-size: 8px;
    }
    
</style>


<table>
    <tr>
        <td width="220">&nbsp;</td>
        <td width="180" class="adm_tbl_lineas adm_tbl_lineas_label">
            Total del Pago
        </td>
        <td width="125" class="adm_tbl_lineas adm_tbl_lineas_dato">
            <label class="">
                <?php Gral::_echoImp($total_importe_pago) ?>
            </label>
        </td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td class="adm_tbl_lineas adm_tbl_lineas_label">
            Total Retenciones
        </td>
        <td class="adm_tbl_lineas adm_tbl_lineas_dato">
            <label class="">
                <?php Gral::_echoImp($total_importe_retenciones) ?>
            </label>
        </td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td class="adm_tbl_lineas adm_tbl_lineas_label">
            Total Comprobantes Afectados
        </td>
        <td class="adm_tbl_lineas adm_tbl_lineas_dato">
            <label class="">
                <?php Gral::_echoImp($total_importe_comprobantes_afectados) ?>
            </label>
        </td>
    </tr>

    <?php if(round($saldo_importe, 2) > 0){ ?>
    <tr class="saldo-deudor">
        <td>&nbsp;</td>
        <td class="adm_tbl_lineas adm_tbl_lineas_label">
            Saldo a favor de <?php Gral::_echo($pde_orden_pago->getGralEmpresa()->getDescripcion()) ?>
        </td>
        <td class="adm_tbl_lineas adm_tbl_lineas_dato">
            <label class="">
                <?php Gral::_echoImp($saldo_importe) ?>
            </label>
        </td>
    </tr>
    <?php }elseif(round($saldo_importe, 2) < 0){ ?>
    <tr class="saldo-acreedor">
        <td>&nbsp;</td>
        <td class="adm_tbl_lineas adm_tbl_lineas_label">
            Saldo a favor de <?php Gral::_echo($pde_orden_pago->getPersonaDescripcion()) ?>
        </td>
        <td class="adm_tbl_lineas adm_tbl_lineas_dato">
            <label class="">
                <?php Gral::_echoImp($saldo_importe) ?>
            </label>
        </td>
    </tr>
    <?php } ?>
    
    
</table>