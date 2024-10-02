<?php
include_once "_autoload.php";

$pde_recibo_id = Gral::getVars(Gral::VARS_GET, 'pde_recibo_id', 0);
$pde_recibo = PdeRecibo::getOxId($pde_recibo_id);
//$pde_recibo_items = $pde_recibo->getPdeReciboItems();

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
            <label class=""><?php Gral::_echoImp($pde_recibo->getPdeReciboSubtotalParaComprobante()) ?></label>
        </td>
    </tr>

    <?php if ($pde_recibo->getPdeTipoRecibo()->getCodigo() == PdeTipoRecibo::TIPO_RECIBO_A) { ?>
        <?php foreach ($pde_recibo->getArrIvaRecibo() as $iva_tipo => $arr_iva_uno) { ?>
            <tr>
                <td>&nbsp;</td>
                <td class="adm_tbl_lineas adm_tbl_lineas_label">IVA (<?php echo $iva_tipo ?>%):</td>
                <td class="adm_tbl_lineas adm_tbl_lineas_dato">
                    <label class=""><?php Gral::_echoImp($arr_iva_uno) ?></label>
                </td>
            </tr>
        <?php } ?>
    <?php } ?>

    <?php foreach ($pde_recibo->getArrPdeTributosAplicados() as $pde_tributo_id => $arr_tributo) { ?>
        <tr>
            <td>&nbsp;</td>
            <td class="adm_tbl_lineas adm_tbl_lineas_label"><?php Gral::_echo($arr_tributo['pde_tributo_descripcion']) ?>:</td>
            <td class="adm_tbl_lineas adm_tbl_lineas_dato">
                <label class=""><?php Gral::_echoImp($arr_tributo['importe']) ?></label>
            </td>
        </tr>
    <?php } ?>

    <tr class="total">
        <td>&nbsp;</td>
        <td class="adm_tbl_lineas adm_tbl_lineas_label">Total:</td>
        <td class="adm_tbl_lineas adm_tbl_lineas_dato">
            <label class=""><?php Gral::_echoImp($pde_recibo->getPdeReciboTotal()) ?></label>
        </td>
    </tr>
</table>