<?php
include "_autoload.php";

$pde_comprobante_id = Gral::getVars(Gral::VARS_POST, 'pde_comprobante_id', 0);
$clase = Gral::getVars(Gral::VARS_POST, 'clase', '');

if ($clase == 'PdeNotaCredito') {
    $pde_nota_credito = PdeNotaCredito::getOxId($pde_comprobante_id);
    $pde_comprobante_seleccionado = $pde_nota_credito;
}

if ($clase == 'PdeRecibo') {
    $pde_recibo = PdeRecibo::getOxId($pde_comprobante_id);
    $pde_comprobante_seleccionado = $pde_recibo;
}

$prv_proveedor_id = $pde_comprobante_seleccionado->getPrvProveedorId();
$gral_empresa_id = $pde_comprobante_seleccionado->getGralEmpresaId();

$pde_nota_debitos = PdeNotaDebito::getPdeNotaDebitosImputables($prv_proveedor_id, $gral_empresa_id);
$pde_facturas = PdeFactura::getPdeFacturasImputables($prv_proveedor_id, $gral_empresa_id);

include "set_pde_comprobante_ordenar_por_fecha_debe.php";

include "modal_pde_comprobante_gestion_vincular_comprobante_haber_top.php"
?>

<div class="div_listado_datos comprobantes" clase="<?php echo $clase ?>" pde_comprobante_id="<?php echo $pde_comprobante_seleccionado->getId() ?>">
    <div class="col col1">
        <form id='form_pde_comprobante_gestion_generar_vinculo_haber' name='form_pde_comprobante_gestion_generar_vinculo_haber' method='POST' action='' clase="<?php echo $clase ?>" pde_comprobante_id="<?php echo $pde_comprobante_seleccionado->getId() ?>">

            <h3><?php Lang::_lang('Facturas y Notas de Debito') ?> <?php Lang::_lang('Saldables') ?></h3>
            <?php
            if (count($pde_comprobantes) > 0) {
                ?>
                <table border='0' align='center' class='listado_adm_pde_comprobante_gestion' id='listado_adm_pde_comprobante_gestion_haber'>

                    <tr>
                        <td align='center' class='adm_tbl_encabezado'>
                            <input type="checkbox" name="chk_pde_comprobante_haber_select_all" id="chk_pde_comprobante_haber_select_all" >
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
                    foreach ($pde_comprobantes as $pde_comprobante) {
                        $estado = ($pde_comprobante->getEstado()) ? 'habilitado' : 'deshabilitado';

                        $id_tr = get_class($pde_comprobante) . '_' . $pde_comprobante->getId();
                        ?>

                        <tr id="tr_pde_comprobante_uno_<?php Gral::_echo($id_tr) ?>" class="uno" identificador="<?php Gral::_echo($pde_comprobante->getId()) ?>">
                            <?php include "pde_comprobante_gestion_vinculacion_haber_uno.php" ?>
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
    <div class="col col2" id="pde_comprobante_gestion_totales">
        <?php include 'bloque_pde_comprobante_gestion_totales_haber.php'; ?>
    </div>
</div>


<script>
    setInit();
    setInitPdeComprobanteGestion();
</script>