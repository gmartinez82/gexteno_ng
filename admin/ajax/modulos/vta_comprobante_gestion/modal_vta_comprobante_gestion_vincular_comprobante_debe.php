<?php
include "_autoload.php";

$vta_comprobante_id = Gral::getVars(Gral::VARS_POST, 'vta_comprobante_id', 0);
$clase = Gral::getVars(Gral::VARS_POST, 'clase', '');

if ($clase == 'VtaNotaDebito') {
    $vta_nota_debito = VtaNotaDebito::getOxId($vta_comprobante_id);
    $vta_comprobante_seleccionado = $vta_nota_debito;
}

if ($clase == 'VtaFactura') {
    $vta_factura = VtaFactura::getOxId($vta_comprobante_id);
    $vta_comprobante_seleccionado = $vta_factura;
}

if ($clase == 'VtaAjusteDebe') {
    $vta_ajuste_debe = VtaAjusteDebe::getOxId($vta_comprobante_id);
    $vta_comprobante_seleccionado = $vta_ajuste_debe;
}

$cli_cliente_id = $vta_comprobante_seleccionado->getCliClienteId();
$gral_empresa_id = $vta_comprobante_seleccionado->getGralEmpresaId();

$vta_nota_creditos = VtaNotaCredito::getVtaNotaCreditosImputables($cli_cliente_id, $gral_empresa_id);
$vta_recibos = VtaRecibo::getVtaRecibosImputables($cli_cliente_id, $gral_empresa_id, $vta_comprobante_seleccionado);

// -----------------------------------------------------------------------------
// solo se incluyen los ajustes, si el usuario opera con ajustes
// -----------------------------------------------------------------------------
$filtro_incluir_ajustes = Gral::getSes(VtaComprobante::SES_INCLUIR_AJUSTES);
if ($filtro_incluir_ajustes == 1) {
    $vta_ajuste_habers = VtaAjusteHaber::getVtaAjusteHabersImputables($cli_cliente_id, $gral_empresa_id, VtaTipoAjusteHaber::TIPO_AJUSTE_X_HABER);
}

include "set_vta_comprobante_ordenar_por_fecha_haber.php";

include "modal_vta_comprobante_gestion_vincular_comprobante_debe_top.php";
?>

<div class="div_listado_datos comprobantes" clase="<?php echo $clase ?>" vta_comprobante_id="<?php echo $vta_comprobante_seleccionado->getId() ?>">
    <div class="col col1">
        <form id='form_vta_comprobante_gestion_generar_vinculo_debe' name='form_vta_comprobante_gestion_generar_vinculo_debe' method='POST' action='' clase="<?php echo $clase ?>" vta_comprobante_id="<?php echo $vta_comprobante_seleccionado->getId() ?>">

            <h3><?php Lang::_lang('Notas de Credito y Recibos') ?> <?php Lang::_lang('Imputables') ?></h3>
            <?php
            if (count($vta_comprobantes) > 0) {
                ?>
                <table border='0' align='center' class='listado_adm_vta_comprobante_gestion' id='listado_adm_vta_comprobante_gestion_debe'>

                    <tr>

                        <td align='center' class='adm_tbl_encabezado'>
                            <input type="checkbox" name="chk_vta_comprobante_debe_select_all" id="chk_vta_comprobante_debe_select_all" >
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
                            <?php include "vta_comprobante_gestion_vinculacion_debe_uno.php" ?>
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
        <?php include 'bloque_vta_comprobante_gestion_totales_debe.php'; ?>
    </div>
</div>


<script>
    setInit();
    setInitVtaComprobanteGestion();
</script>