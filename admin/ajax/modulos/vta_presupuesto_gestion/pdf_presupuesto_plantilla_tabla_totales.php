<?php
include_once "_autoload.php";

$vta_presupuesto_id = $param["vta_presupuesto_id"];

$vta_presupuesto = VtaPresupuesto::getOxId($vta_presupuesto_id);
$vta_presupuesto_ins_insumos = $vta_presupuesto->getVtaPresupuestoInsInsumos();

$cli_cliente = $vta_presupuesto->getCliCliente();
if ($cli_cliente && $cli_cliente->getId() != 'null') {
    $gral_condicion_iva = $cli_cliente->getGralCondicionIva();
}
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


</style>

<br />
<br />
<br />

<table cellpadding="3" nobr="true">    
    <?php if ($gral_condicion_iva && $gral_condicion_iva->getCodigo() == GralCondicionIva::TIPO_RESPONSABLE_INSCRIPTO) { ?>
        <?php if ($vta_presupuesto->getImporteTotalDescuento() > 0) { ?>
            <tr>
                <td width="250"></td>
                <td width="160" class="adm_tbl_lineas adm_tbl_lineas_label">Subtotal Sin Desc:</td>
                <td width="125" class="adm_tbl_lineas adm_tbl_lineas_dato">
                    <label class=""><?php Gral::_echoImp($vta_presupuesto->getImporteTotalPresupuestoSinDescuentoSinIva()) ?></label>
                </td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td class="adm_tbl_lineas adm_tbl_lineas_label">Descuento:</td>
                <td class="adm_tbl_lineas adm_tbl_lineas_dato">
                    <label class=""><?php Gral::_echoImp($vta_presupuesto->getImporteTotalDescuento()) ?></label>
                </td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td class="adm_tbl_lineas adm_tbl_lineas_label">Subtotal Con Desc:</td>
                <td class="adm_tbl_lineas adm_tbl_lineas_dato">
                    <label class=""><?php Gral::_echoImp($vta_presupuesto->getImporteTotalPresupuestoConDescuentoSinIva()) ?></label>
                </td>
            </tr>

        <?php } else { ?>
            <tr>
                <td width="250"></td>
                <td width="160" class="adm_tbl_lineas adm_tbl_lineas_label">Subtotal:</td>
                <td width="125" class="adm_tbl_lineas adm_tbl_lineas_dato">
                    <label class=""><?php Gral::_echoImp($vta_presupuesto->getImporteSubtotalParaComprobante()) ?></label>
                </td>
            </tr>

        <?php } ?>

            <?php if ($vta_presupuesto->getIncluyeLogistica() && $vta_presupuesto->getImporteLogistica() > 0) { ?>
                <tr>
                    <td>&nbsp;</td>
                    <td class="adm_tbl_lineas adm_tbl_lineas_label">Logistica (<?php Gral::_echo($vta_presupuesto->getPorcentajeLogistica()) ?>%):</td>
                    <td class="adm_tbl_lineas adm_tbl_lineas_dato">
                        <label class=""><?php Gral::_echoImp($vta_presupuesto->getImporteLogisticaParaComprobante()) ?></label>
                    </td>
                </tr>
            <?php } ?>

            <?php if ($vta_presupuesto->getIncluyeRecargo()) { ?>
                <tr>
                    <td>&nbsp;</td>
                    <td class="adm_tbl_lineas adm_tbl_lineas_label"><?php Gral::_echo($vta_presupuesto->getTextoRecargo()) ?> (<?php Gral::_echo($vta_presupuesto->getPorcentajeRecargo()) ?>%):</td>
                    <td class="adm_tbl_lineas adm_tbl_lineas_dato">
                        <label class=""><?php Gral::_echoImp($vta_presupuesto->getImporteRecargoParaComprobante()) ?></label>
                    </td>
                </tr>
            <?php } ?>
                
        <?php foreach ($vta_presupuesto->getArrIvaPresupuesto() as $iva_tipo => $arr_iva_uno) { ?>
            <tr>
                <td>&nbsp;</td>
                <td class="adm_tbl_lineas adm_tbl_lineas_label">IVA (<?php echo $iva_tipo ?>%):</td>
                <td class="adm_tbl_lineas adm_tbl_lineas_dato">
                    <label class=""><?php Gral::_echoImp($arr_iva_uno) ?></label>
                </td>
            </tr>
        <?php } ?>

        <tr>
            <td>&nbsp;</td>
            <td class="adm_tbl_lineas adm_tbl_lineas_label">Total:</td>
            <td class="adm_tbl_lineas adm_tbl_lineas_dato">
                <label class=""><?php Gral::_echoImp($vta_presupuesto->getImporteTotalParaComprobante()) ?></label>
            </td>
        </tr>

    <?php } else { ?>
        <tr>
            <td width="250"></td>
            <td width="160" class="adm_tbl_lineas adm_tbl_lineas_label">Subtotal:</td>
            <td width="125" class="adm_tbl_lineas adm_tbl_lineas_dato">
                <label class=""><?php Gral::_echoImp($vta_presupuesto->getImporteSubtotalParaComprobante()) ?></label>
            </td>
        </tr>

        <?php if ($vta_presupuesto->getIncluyeLogistica() && $vta_presupuesto->getImporteLogistica() > 0) { ?>
            <tr>
                <td>&nbsp;</td>
                <td class="adm_tbl_lineas adm_tbl_lineas_label">Logistica (<?php Gral::_echo($vta_presupuesto->getPorcentajeLogistica()) ?>%):</td>
                <td class="adm_tbl_lineas adm_tbl_lineas_dato">
                    <label class=""><?php Gral::_echoImp($vta_presupuesto->getImporteLogisticaParaComprobante()) ?></label>
                </td>
            </tr>
        <?php } ?>

        <?php if ($vta_presupuesto->getIncluyeRecargo()) { ?>
            <tr>
                <td>&nbsp;</td>
                <td class="adm_tbl_lineas adm_tbl_lineas_label"><?php Gral::_echo($vta_presupuesto->getTextoRecargo()) ?> (<?php Gral::_echo($vta_presupuesto->getPorcentajeRecargo()) ?>%):</td>
                <td class="adm_tbl_lineas adm_tbl_lineas_dato">
                    <label class=""><?php Gral::_echoImp($vta_presupuesto->getImporteRecargoParaComprobante()) ?></label>
                </td>
            </tr>
        <?php } ?>
            
        <tr>
            <td>&nbsp;</td>
            <td class="adm_tbl_lineas adm_tbl_lineas_label">Total:</td>
            <td class="adm_tbl_lineas adm_tbl_lineas_dato">
                <label class=""><?php Gral::_echoImp($vta_presupuesto->getImporteTotalParaComprobante()) ?></label>
            </td>
        </tr>
    <?php } ?>

</table>
