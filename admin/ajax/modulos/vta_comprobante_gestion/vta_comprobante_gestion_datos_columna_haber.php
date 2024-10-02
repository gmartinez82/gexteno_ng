<?php
include "set_vta_comprobante_ordenar_por_fecha_haber.php";
?>
<h3><?php Lang::_lang('Notas de Credito y Recibos') ?></h3>
<?php
if (count($vta_comprobantes) > 0) {
    ?>
    <table border='0' align='center' class='listado_adm_vta_comprobante_gestion' id='listado_adm_vta_comprobante_gestion_haber'>

        <tr>

            <td width='30' align='center' class='adm_tbl_encabezado'>
                <?php Lang::_lang('Tipo') ?>
            </td>

            <td width='210' align='center' class='adm_tbl_encabezado'>
                <?php Lang::_lang('Estado') ?>
            </td>

            <td width='110' align='center' class='adm_tbl_encabezado'>
                <?php Lang::_lang('Importe') ?>
            </td>

            <td width='140' align='center' class='adm_tbl_encabezado'>
                <?php Lang::_lang('Saldo') ?>
            </td>

            <td width='90' align='center' class='adm_tbl_encabezado'>
                &nbsp;
            </td>

        </tr>

        <?php
        $importe_total_comprobante = 0;
        $saldo_total_imputable = 0;
        
        $total_importe_total_comprobante = 0;
        $total_saldo_imputable = 0;

        foreach ($vta_comprobantes as $vta_comprobante) {
            $estado = ($vta_comprobante->getEstado()) ? 'habilitado' : 'deshabilitado';

            $id_tr = get_class($vta_comprobante) . '_' . $vta_comprobante->getId();
            $importe_total_comprobante = $vta_comprobante->getImporteTotalComprobante();
            $saldo_imputable = $vta_comprobante->getSaldoImputable();

            $arr_comprobantes_vinculados_por_conciliacion = $vta_comprobante->getVtaComprobantesVinculadosPorConciliacion();
            $es_comprobante_desvinculable = $vta_comprobante->esComprobanteDesvinculable();

            $total_importe_total_comprobante += $importe_total_comprobante;
            $total_saldo_imputable += $saldo_imputable;
            ?>

            <tr 
                id="tr_vta_comprobante_uno_<?php Gral::_echo($id_tr) ?>" 
                class="uno <?php echo $arr_comprobantes_vinculados_por_conciliacion['CSS_VINCULACION'] ?>" 
                identificador="<?php Gral::_echo($vta_comprobante->getId()) ?>" 
                codigo="<?php Gral::_echo($vta_comprobante->getCodigo()) ?>"
                clase="<?php echo get_class($vta_comprobante); ?>"
                >
                    <?php include "vta_comprobante_gestion_haber_uno.php" ?>
            </tr>
        <?php } ?>

        <tr>
            <td align='center' class=''></td>
            <td align='center' class=''></td>

            <td align='center' class='adm_tbl_encabezado'>
                <?php Gral::_echoImp($total_importe_total_comprobante) ?>
            </td>

            <td align='center' class='adm_tbl_encabezado'>
                <?php Gral::_echoImp($total_saldo_imputable) ?>
            </td>

            <td align='center' class=''></td>
        </tr>

    </table>

<?php } else { ?>

    <div class="mensaje-sin-resultado">
        <div class="mensaje"><?php Lang::_lang('No se encontraron datos para los criterios de comprobantes elegidos') ?></div>
    </div>

<?php } ?>

