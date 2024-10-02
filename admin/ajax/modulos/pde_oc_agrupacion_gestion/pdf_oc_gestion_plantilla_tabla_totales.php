<?php
include_once "_autoload.php";

$pde_oc_agrupacion_id = $param["pde_oc_agrupacion_id"];

$pde_oc_agrupacion = PdeOcAgrupacion::getOxId($pde_oc_agrupacion_id);
$pde_ocs = $pde_oc_agrupacion->getPdeOcs();
$pde_oc_agrupacion_items = $pde_oc_agrupacion->getPdeOcAgrupacionItems();
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

    <?php if ($pde_oc_agrupacion->getIvaIncluido()) { ?>
        <tr>
            <td width="280">&nbsp;</td>
            <td width="120" class="adm_tbl_lineas adm_tbl_lineas_label">Total con IVA Incluido:</td>
            <td width="125" class="adm_tbl_lineas adm_tbl_lineas_dato">
                <label class=""><?php Gral::_echoImp($pde_oc_agrupacion->getImporteTotalConIva()) ?></label>
            </td>
        </tr>
    <?php }
    else { ?>
        <tr>
            <td width="280">&nbsp;</td>
            <td width="120" class="adm_tbl_lineas adm_tbl_lineas_label">Subtotal:</td>
            <td width="125" class="adm_tbl_lineas adm_tbl_lineas_dato">
                <label class=""><?php Gral::_echoImp($pde_oc_agrupacion->getImporteSubtotal()) ?></label>
            </td>
        </tr>

        <?php foreach ($pde_oc_agrupacion->getArrTipoIvas() as $iva_tipo => $arr_iva_uno) { ?>
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
                <label class=""><?php Gral::_echoImp($pde_oc_agrupacion->getImporteTotalConIva()) ?></label>
            </td>
        </tr>
<?php } ?>


</table>
