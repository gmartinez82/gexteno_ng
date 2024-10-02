<?php
include_once "_autoload.php";

//$pde_orden_pago_id = Gral::getVars(Gral::VARS_GET, 'pde_orden_pago_id', 0);
$pde_orden_pago_id = $param["pde_orden_pago_id"];

$pde_orden_pago = PdeOrdenPago::getOxId($pde_orden_pago_id);
$pde_orden_pago_pde_comprobantes = $pde_orden_pago->getPdeOrdenPagoPdeComprobantes(null, null, true);

$pde_orden_pago_pde_tributos     = $pde_orden_pago->getPdeOrdenPagoPdeTributos();

?>
<style>
    .listado{
        font-size: 8px;
    }
    .tabla{
        font-size: 8px;
    }
    .adm_tbl_orden {text-decoration: none; color:#FFFFFF;}
    .adm_tbl_orden:link {   text-decoration: none;  color:#FFFFFF;}
    .adm_tbl_orden:visited {    text-decoration: none;  color:#FFFFFF;}
    .adm_tbl_orden:hover {text-decoration: none;    color:#CCCCCC;}

    .adm_tbl_titulo{
        font-weight: normal;
        text-decoration: none;
        color: #274D20;
        font-weight:bold;
        border-bottom:#CCCCCC solid 1px;

    }
    .adm_tbl_encabezado{
        font-weight: normal;
        text-decoration: none;
        color: #FFFFFF;
        background-color:#999999;
        padding:5px;
        line-height:18px;
    }
    .adm_tbl_encabezado a{
        color:#FFFFFF;
        cursor:pointer;
    }
    .adm_tbl_encabezado img{
        float:right;
    }
    .ver_buscador img{
        float:none;
        cursor:pointer;
    }
    .adm_tbl_encabezado_gris{
        font-weight: normal;
        text-decoration: none;
        color: #333333;
        font-weight:bold;
        background-color:#CCCCCC;
        line-height:18px;
    }
    .adm_tbl_encabezado_gris_claro{
        font-weight: normal;
        text-decoration: none;
        color: #333333;
        font-weight:bold;
        background-color:#eeeeee;
        border: #000 solid 1px;
    }
    .adm_tbl_pie{
        font-weight: normal;
        text-decoration: none;
        color: #000;
        background-color:#f1f1f1;
        border-bottom:#999 solid 1px;
        line-height:20px;
        padding:5px;
    }

    .adm_tbl_lineas{
        font-weight: normal;
        text-decoration: none;
        color: #000;
        border-bottom:#CCCCCC solid 1px;
        line-height:18px;
    }

    .adm_tbl_lineas_par{
        background-color:#f4f4f4;
    }    
    .adm_tbl_lineas_impar{
        background-color:#ffffff;
    }    

</style>

Comprobantes afectados<br />

<table class="listado" id="listado_adm_pde_orden_pago_gestion" border="0" align="center">

    <tbody>
        <tr>
            <td class="adm_tbl_encabezado" width="52" align="center">
                Emision
            </td>

            <td class="adm_tbl_encabezado" width="30" align="center">
                Tipo
            </td>

            <td class="adm_tbl_encabezado" width="72" align="center">
                Comprobante
            </td>

            <td class="adm_tbl_encabezado" width="52" align="center">
                Venc
            </td>

            <td class="adm_tbl_encabezado" width="68" align="center">
                Imp Total
            </td>

            <td class="adm_tbl_encabezado" width="68" align="center">
                Saldo
            </td>

            <td class="adm_tbl_encabezado" width="68" align="center">
                NC/DF
            </td>
            
            <td class="adm_tbl_encabezado" width="68" align="center">
                En OP
            </td>

            <td class="adm_tbl_encabezado" width="68" align="center">
                Otras OP
            </td>

        </tr>

        <?php
        foreach ($pde_orden_pago_pde_comprobantes as $i => $pde_orden_pago_pde_comprobante) {
            $css_bg = (($i % 2) == 0) ? 'adm_tbl_lineas_impar' : 'adm_tbl_lineas_par';

            $pde_comprobante = $pde_orden_pago_pde_comprobante->getPdeComprobante();
            $importe_afectado = $pde_orden_pago_pde_comprobante->getImporteAfectado();

            $importe_total = $pde_comprobante->getImporteTotalComprobante();
            $importe_imputado = $pde_comprobante->getSaldoImputado();
            $importe_saldo = $pde_comprobante->getImporteDisponibleParaOrdenPago();

            $total_importe_imputado+= $importe_afectado;
            $importe_afectado_df = $pde_comprobante->getImporteDescuentoFinancieroAplicado();
            $importe_otras_op    = $pde_comprobante->getImporteEnOtrasOP($pde_orden_pago);
            
            $df_no_aplicado = 0;
            if($importe_afectado_df == 0){
                $prv_descuento_financiero = $pde_comprobante->getPrvDescuentoFinanciero();
                if($prv_descuento_financiero && $prv_descuento_financiero->getId() != 'null'){
                    $df_no_aplicado = 1;
                    $importe_factura = $pde_comprobante->getImporteTotalComprobante();
                    $importe_descuento_esperado = $importe_factura * ($prv_descuento_financiero->getPorcentajeDescuento() / 100);
                    $importe_afectado_df = $importe_descuento_esperado;
                }
            }

            ?>
            <tr id="tr_pde_orden_pago_pde_comprobante_gestion_uno_<?php echo $pde_orden_pago_pde_comprobante->getId() ?>" class="uno" identificador="<?php echo $pde_orden_pago_pde_comprobante->getId() ?>">

                <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="center">
                    <label class="fecha-emision"><?php Gral::_echo(Gral::getFechaToWEB($pde_comprobante->getFechaEmision())) ?></label>
                </td>   

                <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="center">
                    <label class="tipo"><?php Gral::_echo($pde_comprobante->getTipoComprobanteSiglas()) ?></label>
                </td>

                <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="center">
                    <label class="numero-comprobante"><?php Gral::_echo($pde_comprobante->getTipoComprobanteMin()) ?><?php Gral::_echo($pde_comprobante->getNumeroComprobanteCompleto()) ?></label>
                </td>   

                <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="center">
                    <label class="fecha-vencimiento"><?php Gral::_echo(Gral::getFechaToWEB($pde_comprobante->getFechaVencimiento())) ?></label>
                </td>
                <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="right">
                    <label class="importe-total">
                        <?php Gral::_echoImp($importe_total) ?>
                    </label>
                </td>   

                <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="right">
                    <label class="importe-total">
                        <?php Gral::_echoImp($importe_saldo) ?>
                    </label>
                </td>

                <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="right">
                    <?php if($df_no_aplicado): ?>
                    <label class="importe-afectado-df">
                        (*) <?php Gral::_echoImp($importe_afectado_df); ?>
                    </label>
                    <?php else: ?>
                        <label class="importe-afectado-df">
                        <?php Gral::_echoImp($importe_afectado_df); ?>
                    </label>
                    <?php endif; ?>
                </td>   

                <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="right" style="background-color:#ccc; font-weight: bold;">
                    <label class="importe-total">
                        <?php Gral::_echoImp($importe_afectado) ?>
                    </label>
                </td>

                <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="right">
                    <label class="importe-total">
                        <?php Gral::_echoImp($importe_otras_op) ?>
                    </label>
                </td>   

            </tr>
        <?php } ?>

        <tr>
            <td class="" align="center" colspan="7">&nbsp;</td>
            <td class="adm_tbl_encabezado" align="right">
                <?php Gral::_echoImp($total_importe_imputado) ?>                
            </td>
        </tr>

    </tbody>
</table>

<?php if($df_no_aplicado): ?>
<br />
<br />
<table cellpadding="3" class="tabla" id="listado_adm_pde_orden_pago_gestion" border="0" align="center">
    <tr>
        <th class="adm_tbl_encabezado_gris_claro" width="520" align="left">
           Descuento Financiero
        </th>
    </tr>

    <tr id="tr_leyenda">
        <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="left">
            <ul class="leyenda">
                <li>(*) Indica el valor del DF esperado, no afectado aun al comprobante.</li>
            </ul>
        </td>
    </tr>    
</table>
<?php endif; ?>