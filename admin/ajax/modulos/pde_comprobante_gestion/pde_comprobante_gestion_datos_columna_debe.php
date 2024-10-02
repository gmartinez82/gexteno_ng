<?php
include "set_pde_comprobante_ordenar_por_fecha_debe.php";
?>
<h3><?php Lang::_lang('Facturas y Notas de Debito') ?></h3>
<?php
if (count($pde_comprobantes) > 0) {
    ?>
    <table border='0' align='center' class='listado_adm_pde_comprobante_gestion' id='listado_adm_pde_comprobante_gestion_debe'>

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

        foreach ($pde_comprobantes as $pde_comprobante) {
            $estado = ($pde_comprobante->getEstado()) ? 'habilitado' : 'deshabilitado';

            $id_tr = get_class($pde_comprobante) . '_' . $pde_comprobante->getId();
            $importe_total_comprobante = $pde_comprobante->getImporteTotalComprobante();
            $saldo_imputable = $pde_comprobante->getSaldoImputable();

            $arr_comprobantes_vinculados_por_conciliacion = $pde_comprobante->getPdeComprobantesVinculadosPorConciliacion();
            $arr_orden_pago_comprobante_activas = $pde_comprobante->getPdeOrdenPagoPdeComprobanteActivas();

            $total_importe_total_comprobante += $importe_total_comprobante;
            $total_saldo_imputable += $saldo_imputable;
            ?>

            <tr 
                id="tr_pde_comprobante_uno_<?php Gral::_echo($id_tr) ?>" 
                class="uno <?php echo $arr_comprobantes_vinculados_por_conciliacion['CSS_VINCULACION'] ?>" 
                identificador="<?php Gral::_echo($pde_comprobante->getId()) ?>"
                codigo="<?php Gral::_echo($pde_comprobante->getCodigo()) ?>" 
                clase="<?php echo get_class($pde_comprobante); ?>"
                >
                    <?php include "pde_comprobante_gestion_debe_uno.php" ?>
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

