<?php
include "_autoload.php";

$vta_factura_id = Gral::getVars(Gral::VARS_GET, 'vta_factura_id', null);
$vta_factura = VtaFactura::getOxId($vta_factura_id);

$vta_factura_importe_total_a_imputar = $vta_factura->getSaldoImputable();

$user = UsUsuario::autenticado();
$fnd_cajero = $user->getFndCajeroXFndCajeroUsUsuario();

$txt_fecha = date('Y-m-d');

// --------------------------------------------------------
// se inicializan variables para vta recibo item generico
// --------------------------------------------------------
$vta_recibo_concepto = VtaReciboConcepto::getOxCodigo(VtaReciboConcepto::TIPO_COBRO_FACTURA);
$cmb_vta_recibo_item_generico_vta_recibo_concepto_id = ($vta_recibo_concepto) ? $vta_recibo_concepto->getId() : 0;
$txt_vta_recibo_item_generico_descripcion = 'Cobro de Venta';
$txt_vta_recibo_item_generico_referencia = '';
$txt_vta_recibo_item_generico_importe_unitario = $vta_factura_importe_total_a_imputar;
$cmb_vta_recibo_item_generico_gral_fp_forma_pago_id = 0;
?>
<div class="datos registrar-recibo" vta_factura_id="<?php Gral::_echo($vta_factura->getId()) ?>">
    <form id='form_registrar_recibo' name='form_registrar_recibo' method='post' action='' >

        <div class="par">
            <div class="label"><?php Lang::_lang('Para') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_factura->getPersonaDescripcion()) ?>
            </div>
        </div>

        <div class="par">
            <div class="label"><?php Lang::_lang('Fecha Emison') ?></div>
            <div class="dato">
                <input name='txt_fecha' type='text' class='textbox date' id='txt_fecha' value='<?php Gral::_echoTxt(Gral::getFechaToWeb($txt_fecha)) ?>' size='10' placeholder="dd/mm/aaaa" />
                <input type='button' id='cal_txt_fecha' value='...' />

                <script type='text/javascript'>
                    Calendar.setup({
                        inputField: 'txt_fecha', ifFormat: '%d/%m/%Y', button: 'cal_txt_fecha'
                    });
                </script>
                <div class="label-error" id="txt_fecha_error"><?php Gral::_echo($txt_fecha_error) ?></div>  
            </div>
        </div>

        <div class="par">
            <div class="label"><?php Lang::_lang('Caja Afectada') ?></div>
            <div class="dato">
                <?php
                if ($fnd_cajero) {
                    Html::html_dib_select(1, 'cmb_fnd_caja_id', Gral::getCmbFiltro($fnd_cajero->getFndCajaAbiertaCmb(), '...'), $cmb_fnd_caja_id, 'textbox ' . $error_input_css);
                } else {
                    echo 'No se afectan cajas';
                }
                ?>
                <div class="label-error" id="cmb_fnd_caja_id_error"></div>
            </div>
        </div>        

        <div class="par">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <textarea name='txa_observacion' rows='3' cols='50' id='txa_observacion' class='textbox'></textarea>
                <div class="label-error" id="txa_observacion_error"></div>
            </div>
        </div>

        <div class="div_dato_recibo_item_generico">
            <?php
            $key = 1;
            ?>
            <?php include Gral::getPathAbs() . 'admin/ajax/modulos/vta_recibo_item_generico/bloque_vta_recibo_item_generico_datos.php'; ?>          
        </div>

        <div class="botonera">
            <button class="boton gen-modal-btn-confirmar" id='btn_despachar_datos' name='btn_despachar_datos' type='button' gen-modal-file-post="ajax/modulos/vta_factura_gestion/set_vta_factura_gestion_generar_recibo.php?vta_factura_id=<?php echo $vta_factura->getId() ?>" gen-modal-content=".div_modal" gen-modal-callback="refreshAdmUno('vta_factura_gestion', <?php echo $vta_factura->getId() ?>); setInitVtaFacturaGestion()"><?php Lang::_lang('Generar Recibo') ?></button>
        </div>

    </form>
</div>
<script>
    setInit();
</script>