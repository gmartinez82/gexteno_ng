<?php
include "_autoload.php";

$vta_comprobante_id = Gral::getVars(Gral::VARS_POST, 'vta_comprobante_id', 0);
$clase = Gral::getVars(Gral::VARS_POST, 'clase', '');

if ($clase == 'VtaNotaCredito') {
    $vta_nota_credito = VtaNotaCredito::getOxId($vta_comprobante_id);
    $vta_comprobante_seleccionado = $vta_nota_credito;
}

if ($clase == 'VtaRecibo') {
    $vta_recibo = VtaRecibo::getOxId($vta_comprobante_id);
    $vta_comprobante_seleccionado = $vta_recibo;
}

if ($clase == 'VtaAjusteHaber') {
    $vta_ajuste_haber = VtaAjusteHaber::getOxId($vta_comprobante_id);
    $vta_comprobante_seleccionado = $vta_ajuste_haber;
}

$cli_cliente_id = $vta_comprobante_seleccionado->getCliClienteId();
$gral_empresa_id = $vta_comprobante_seleccionado->getGralEmpresaId();

$vta_nota_debitos = VtaNotaDebito::getVtaNotaDebitosImputables($cli_cliente_id, $gral_empresa_id);
$vta_facturas = VtaFactura::getVtaFacturasImputables($cli_cliente_id, $gral_empresa_id, $vta_comprobante_seleccionado);

// -----------------------------------------------------------------------------
// solo se incluyen los ajustes, si el usuario opera con ajustes
// -----------------------------------------------------------------------------
$filtro_incluir_ajustes = Gral::getSes(VtaComprobante::SES_INCLUIR_AJUSTES);
if ($filtro_incluir_ajustes == 1) {
    $vta_ajuste_debes  = VtaAjusteDebe::getVtaAjusteDebesImputables($cli_cliente_id, $gral_empresa_id, VtaTipoAjusteDebe::TIPO_AJUSTE_X_DEBE);
}

include "set_vta_comprobante_ordenar_por_fecha_debe.php";

include "modal_vta_comprobante_gestion_vincular_comprobante_haber_top.php"
?>

<div class="div_listado_datos comprobantes" clase="<?php echo $clase ?>" vta_comprobante_id="<?php echo $vta_comprobante_seleccionado->getId() ?>">
    <div class="col col1">
        <form id='form_vta_comprobante_gestion_generar_vinculo_haber' name='form_vta_comprobante_gestion_generar_vinculo_haber' method='POST' action='' clase="<?php echo $clase ?>" vta_comprobante_id="<?php echo $vta_comprobante_seleccionado->getId() ?>">

            <h3><?php Lang::_lang('Facturas y Notas de Debito') ?> <?php Lang::_lang('Saldables') ?></h3>
            <?php
            if (count($vta_comprobantes) > 0) {
                ?>
                <table border='0' align='center' class='listado_adm_vta_comprobante_gestion' id='listado_adm_vta_comprobante_gestion_haber'>

                    <tr>
                        <td align='center' class='adm_tbl_encabezado'>
                            <input type="checkbox" name="chk_vta_comprobante_haber_select_all" id="chk_vta_comprobante_haber_select_all" >
                        </td>

                        <td width='30' align='center' class='adm_tbl_encabezado'>
                            <?php Lang::_lang('Tipo') ?>
                        </td>

                        <td width='110' align='center' class='adm_tbl_encabezado'>
                            <?php Lang::_lang('Estado') ?>
                        </td>

                        <td width='170' align='center' class='adm_tbl_encabezado'>
                            <?php Lang::_lang('Codigo') ?>
                        </td>

                        <td width='100' align='center' class='adm_tbl_encabezado'>
                            <?php Lang::_lang('Importe') ?>
                        </td>

                        <td width='100' align='center' class='adm_tbl_encabezado'>
                            <?php Lang::_lang('Saldo') ?>
                        </td>

                    </tr>


                    <?php
                    foreach ($vta_comprobantes as $vta_comprobante) {
                        $estado = ($vta_comprobante->getEstado()) ? 'habilitado' : 'deshabilitado';

                        $id_tr = get_class($vta_comprobante) . '_' . $vta_comprobante->getId();
                        ?>

                        <tr id="tr_vta_comprobante_uno_<?php Gral::_echo($id_tr) ?>" class="uno" identificador="<?php Gral::_echo($vta_comprobante->getId()) ?>">
                            <?php include "vta_comprobante_gestion_vinculacion_haber_uno.php" ?>
                        </tr>
                    <?php } ?>

                </table>

            <?php } else { ?>

                <div class="mensaje-sin-resultado">
                    <div class="mensaje"><?php Lang::_lang('No se encontraron datos para los criterios de comprobantes elegidos') ?></div>
                </div>

            <?php } ?>

        </form>
    </div>
    <div class="col col2" id="vta_comprobante_gestion_totales">
        <?php include 'bloque_vta_comprobante_gestion_totales_haber.php'; ?>
    </div>
</div>


<script>
    setInit();
    setInitVtaComprobanteGestion();
</script>