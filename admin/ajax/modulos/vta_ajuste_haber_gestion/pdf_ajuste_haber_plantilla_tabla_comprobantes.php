<?php
include_once "_autoload.php";

//$vta_ajuste_haber_id = Gral::getVars(Gral::VARS_GET, 'vta_ajuste_haber_id', 0);
$vta_ajuste_haber_id = $param["vta_ajuste_haber_id"];

$vta_ajuste_haber = VtaAjusteHaber::getOxId($vta_ajuste_haber_id);
$arr_comprobantes_vinculados_por_conciliacion = $vta_ajuste_haber->getVtaComprobantesVinculadosPorConciliacion();
//Gral::prr($arr_comprobantes_vinculados_por_conciliacion);
?>
<style>
    .listado{
        font-size: 8px;
    }
    .adm_tbl_orden {text-decoration: none; color:#FFFFFF;}
    .adm_tbl_orden:link {	text-decoration: none;	color:#FFFFFF;}
    .adm_tbl_orden:visited {	text-decoration: none;	color:#FFFFFF;}
    .adm_tbl_orden:hover {text-decoration: none;	color:#CCCCCC;}

    .adm_tbl_titulo{
        text-align: left;
        color: #000;
        font-weight:bold;
        font-size: 10px;
        line-height: 22px;
    }
    .adm_tbl_encabezado{
        font-weight: normal;
        text-decoration: none;
        color: #FFFFFF;
        background-color:#999999;
        padding:5px;
        line-height: 18px;
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
        line-height: 18px;
    }
    .adm_tbl_pie{
        font-weight: normal;
        text-decoration: none;
        color: #000;
        background-color:#f1f1f1;
        border-bottom:#999 solid 1px;
        line-height: 18px;
        padding:5px;
    }

    .adm_tbl_lineas{
        font-weight: normal;
        text-decoration: none;
        color: #000;
        border-bottom:#CCCCCC solid 1px;
        line-height: 18px;
    }

    .adm_tbl_lineas_par{
        background-color:#f4f4f4;
    }    
    .adm_tbl_lineas_impar{
        background-color:#ffffff;
    }    

</style>

<?php if (is_array($arr_comprobantes_vinculados_por_conciliacion['INTERMEDIO']) && count($arr_comprobantes_vinculados_por_conciliacion['INTERMEDIO']) > 0) { ?>

    <div class="adm_tbl_titulo">
        Comprobantes Vinculados
    </div>

    <table class="listado" id="listado_adm_vta_ajuste_haber_gestion" border="0" align="center">

        <tr>

            <td class="adm_tbl_encabezado" width="60" align="center">
                Fecha
            </td>

            <td class="adm_tbl_encabezado" width="90" align="center">
                Tipo
            </td>

            <td class="adm_tbl_encabezado" width="100" align="center">
                Nro de Comprobante
            </td>

            <td class="adm_tbl_encabezado" width="120" align="center">
                Imp Total
            </td>

            <td class="adm_tbl_encabezado" width="160" align="center">
                Afectado por Ajuste Haber
            </td>
            
        </tr>

        <?php
        foreach ($arr_comprobantes_vinculados_por_conciliacion['INTERMEDIO'] as $i => $arr_comprobante_vinculado_por_conciliacion) {
            $css_bg = (($i % 2) == 0) ? 'adm_tbl_lineas_impar' : 'adm_tbl_lineas_par';

            $vta_comprobante = $arr_comprobante_vinculado_por_conciliacion->getVtaComprobanteDebe();
            $importe_total = $vta_comprobante->getImporteTotalComprobante();
            $importe_afectado = $arr_comprobante_vinculado_por_conciliacion->getImporteAfectado();

            $total_importe_total += $importe_total;
            $total_importe_afectado += $importe_afectado;

            if (get_class($vta_comprobante) == 'VtaFactura') {
                $vta_comprobante_vta_nota_creditos_vinculadas = $vta_comprobante->getVtaFacturaVtaNotaCreditos();
            }
            if (get_class($vta_comprobante) == 'VtaNotaDebito') {
                $vta_comprobante_vta_nota_creditos_vinculadas = $vta_comprobante->getVtaNotaDebitoVtaNotaCreditos();
            }
            ?>
            <tr id="tr_vta_presupuesto_gestion_uno_<?php echo $vta_comprobante->getId() ?>" class="uno" identificador="<?php echo $vta_comprobante->getId() ?>">

                <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="center">
                    <label class="insumo">
                        <?php Gral::_echo(Gral::getFechaToWEB($vta_comprobante->getFechaEmision())) ?>
                    </label>
                </td>

                <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="left">
                    <label class="insumo">
                        <?php Gral::_echo($vta_comprobante->getTipoComprobante()) ?>
                    </label>
                </td>

                <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="center">
                    <label class="gral-fp-forma-pago">
                        <?php Gral::_echo($vta_comprobante->getNumeroComprobanteCompleto()) ?>
                    </label>
                </td>	

                <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="right">
                    <label class="importe-unitario">
                        <?php Gral::_echoImp($importe_total) ?>
                    </label>
                </td>	

                <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="right">
                    <label class="importe-total">
                        <?php Gral::_echoImp($importe_afectado) ?> de <?php Gral::_echoImp($importe_total) ?> (<?php Gral::_echoFloat(($importe_afectado/$importe_total) * 100) ?>%)
                    </label>
                </td>
                
            </tr>

            <?php
            foreach ($vta_comprobante_vta_nota_creditos_vinculadas as $vta_comprobante_vta_nota_credito_vinculada) {
                $vta_nota_credito_vinculada = $vta_comprobante_vta_nota_credito_vinculada->getVtaNotaCredito();
                $importe_total = $vta_nota_credito_vinculada->getImporteTotalComprobante();
                $importe_afectado = $vta_comprobante_vta_nota_credito_vinculada->getImporteAfectado();

                $total_importe_total -= $importe_total;
                ?>
                <tr id="tr_vta_presupuesto_gestion_uno_<?php echo $vta_comprobante->getId() ?>" class="uno" identificador="<?php echo $vta_comprobante->getId() ?>">

                    <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="center">
                        <label class="insumo">
                            <?php Gral::_echo(Gral::getFechaToWEB($vta_nota_credito_vinculada->getFechaEmision())) ?>
                        </label>
                    </td>

                    <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="left">
                        <label class="insumo">
                            - <?php Gral::_echo($vta_nota_credito_vinculada->getTipoComprobante()) ?>
                        </label>
                    </td>

                    <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="center">
                        <label class="gral-fp-forma-pago">
                            <?php Gral::_echo($vta_nota_credito_vinculada->getNumeroComprobanteCompleto()) ?>
                        </label>
                    </td>	

                    <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="right">
                        <label class="importe-unitario">
                            - <?php Gral::_echoImp($importe_total) ?>
                        </label>
                    </td>	

                    <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="right">
                        <label class="importe-total">
                        <?php Gral::_echoImp($importe_afectado) ?> de <?php Gral::_echoImp($importe_total) ?> (<?php Gral::_echoFloat(($importe_afectado/$importe_total) * 100) ?>%)
                        </label>
                    </td>
                    
                </tr>

            <?php } ?>

        <?php } ?>
        <tr>
            <td class="adm_tbl_encabezado" align="center">&nbsp;</td>
            <td class="adm_tbl_encabezado" align="center">&nbsp;</td>
            <td class="adm_tbl_encabezado" align="center">&nbsp;</td>
            <td class="adm_tbl_encabezado" align="right">
                <?php Gral::_echoImp($total_importe_total) ?>
            </td>
            <td class="adm_tbl_encabezado" align="right">
                <?php Gral::_echoImp($total_importe_afectado) ?>
            </td>
        </tr>

    </table>
<?php } ?>