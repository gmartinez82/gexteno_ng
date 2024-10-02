<?php
//include_once '../../../control/seguridad.php';
//include_once '../../../control/saneamiento.php';
include_once '_autoload.php';


$error = new DbError();
$hdn_error = 1;

if (Gral::esPost()) {
    $hdn_id = Gral::getVars(Gral::VARS_POST, 'hdn_id', 0);
    $fnd_caja_ingreso_id = Gral::getVars(Gral::VARS_POST, 'hdn_fnd_caja_ingreso_id', 0);
    $fnd_caja = FndCaja::getOxId($hdn_id);

    $fnd_caja_importe = FndCajaIngreso::getOxId($fnd_caja_ingreso_id);

    // se reciben variable por post
    $txt_descripcion = Gral::getVars(Gral::VARS_POST, 'txt_descripcion', '');
    $cmb_fnd_caja_tipo_ingreso_id = Gral::getVars(Gral::VARS_POST, 'cmb_fnd_caja_tipo_ingreso_id', 0);
    $cmb_gral_fp_forma_pago_id = Gral::getVars(Gral::VARS_POST, 'cmb_gral_fp_forma_pago_id', 0);
    $txt_importe = Gral::getVars(Gral::VARS_POST, 'txt_importe', 0);
    $txt_codigo_referencia = Gral::getVars(Gral::VARS_POST, 'txt_codigo_referencia', '');
    $txa_observacion = Gral::getVars(Gral::VARS_POST, 'txa_observacion', '');
    $var_sesion_modulo = Gral::getVars(Gral::VARS_POST, 'hdn_var_sesion_modulo', '');

    $txt_importe = Gral::getImporteDesdePriceFormatToDB($txt_importe);

    $estado = true;

    // se realizan los controles necesarios
    if (Ctrl::esVacio($txt_descripcion)) {
        $estado = false;
        $txt_descripcion_error = 'Debe ingresar una descripcion breve del movimiento';
    }

    if ($cmb_fnd_caja_tipo_ingreso_id == 0) {
        $estado = false;
        $cmb_fnd_caja_tipo_ingreso_id_error = 'Debe seleccionar un tipo de ingreso';
    }

    if ($cmb_gral_fp_forma_pago_id == 0) {
        $estado = false;
        $cmb_gral_fp_forma_pago_id_error = 'Debe seleccionar una forma de pago';
    }

    if (!Ctrl::esNumero($txt_importe) || $txt_importe <= 0) {
        $estado = false;
        $txt_importe_error = 'Debe ingresar un importe real';
    }

    if (Ctrl::esVacio($txt_codigo_referencia)) {
        $gral_fp_forma_pago_cheque = GralFpFormaPago::getOxId($cmb_gral_fp_forma_pago_id);
        if ($gral_fp_forma_pago_cheque) {
            if ($gral_fp_forma_pago_cheque->getRequiereReferencia() == 1) {
                $estado = false;
                $txt_codigo_referencia_error = 'Debe ingresar un codigo de referencia';
            }
        }

        //$estado = false;
        //$txt_codigo_referencia_error = 'Debe ingresar un codigo de referencia';
    }

    if ($estado) {
        $fnd_caja->setRegistrarIngreso($fnd_caja_ingreso_id, $txt_descripcion, $cmb_fnd_caja_tipo_ingreso_id, $cmb_gral_fp_forma_pago_id, $txt_importe, $txt_codigo_referencia, $txa_observacion, $var_sesion_modulo);
        $hdn_error = 0;
    }
} else {
    $modulo = Gral::getVars(Gral::VARS_GET, 'modulo', 0);
    $key = 0;

    $var_sesion_random = '_' . rand(1, 999999);
    $var_sesion_modulo = $modulo . '_cheque_info' . $var_sesion_random;

    foreach ($_SESSION as $key => $value) {
        //if (strpos($key, 'fnd_caja_ingreso_cheque_info') === 0)
        //    unset($_SESSION[$key]);
    }

    $id = Gral::getVars(2, 'fnd_caja_id', 0);
    $fnd_caja = FndCaja::getOxId($id);

    $fnd_caja_ingreso_id = Gral::getVars(2, 'fnd_caja_ingreso_id', 0);
    $fnd_caja_ingreso = FndCajaIngreso::getOxId($fnd_caja_ingreso_id);
    if ($fnd_caja_ingreso) {
        $txt_descripcion = $fnd_caja_ingreso->getDescripcion();
        $cmb_fnd_caja_tipo_ingreso_id = $fnd_caja_ingreso->getFndCajaTipoIngresoId();
        $cmb_gral_fp_forma_pago_id = $fnd_caja_ingreso->getGralFpFormaPagoId();
        $txt_importe = $fnd_caja_ingreso->getImporte();
        $txt_codigo_referencia = $fnd_caja_ingreso->getCodigoReferencia();
        $txa_observacion = $fnd_caja_ingreso->getObservacion();
    }
}
?>
<body>
    <form id='formu-ingreso' name='formu-ingreso' method='post' var_sesion_random='<?php echo $var_sesion_random; ?>' action='ajax/modulos/fnd_caja_gestion/modal_ficha_ingreso_agregar.php' >

        <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_fnd_caja_pan_panol'>

            <tr>
                <td width='150' class='adm_carga_datos_titulos'>
                    <?php Lang::_lang('FndCaja') ?>
                </td>
                <td width='300' class='adm_carga_datos_datos' id="dato_fnd_caja_descripcion">
                    <div class="insumo">    
                        <strong><?php Gral::_echo($fnd_caja->getDescripcion()) ?></strong>
                    </div>
                </td>
            </tr>

            <tr>
                <td width='150' class='adm_carga_datos_titulos'>
                    <?php Lang::_lang('Cajero') ?>
                </td>
                <td width='300' class='adm_carga_datos_datos' id="dato_fnd_caja_cajero">
                    <div class="insumo">    
                        <strong><?php Gral::_echo($fnd_caja->getFndCajero()->getDescripcion()) ?></strong>
                    </div>
                </td>
            </tr>

            <tr>
                <td width='150' class='adm_carga_datos_titulos'>
                    <?php Lang::_lang('Descripcion') ?>
                </td>
                <td width='300' class='adm_carga_datos_datos' id="dato_fnd_caja_ingreso_codigo_referencia">
                    <?php $error_input_css = ($txt_descripcion_error) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?>' id='txt_descripcion' value='<?php Gral::_echoTxt($txt_descripcion) ?>' size='40' />
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($txt_descripcion_error) ?></div>
                </td>
            </tr>

            <tr>
                <td width='150' class='adm_carga_datos_titulos'>
                    <?php Lang::_lang('Tipo de Ingreso') ?>
                </td>
                <td width='300' class='adm_carga_datos_datos' id="dato_fnd_caja_ingreso_tipo_ingreso">
                    <?php $error_input_css = ($cmb_fnd_caja_tipo_ingreso_id_error) ? 'error-mensaje-input' : ''; ?>
                    <?php Html::html_dib_select(1, 'cmb_fnd_caja_tipo_ingreso_id', Gral::getCmbFiltro(FndCajaTipoIngreso::getFndCajaTipoIngresosCmb(), '...'), $cmb_fnd_caja_tipo_ingreso_id, 'textbox ' . $error_input_css) ?>
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($cmb_fnd_caja_tipo_ingreso_id_error) ?></div>
                </td>
            </tr>

            <tr>
                <td width='150' class='adm_carga_datos_titulos'>
                    <?php Lang::_lang('Forma de Pago') ?>
                </td>
                <td width='300' class='adm_carga_datos_datos' id="dato_fnd_caja_ingreso_forma_pago">
                    <?php $error_input_css = ($cmb_gral_fp_forma_pago_id_error) ? 'error-mensaje-input' : ''; ?>
                    <?php Html::html_dib_select(1, 'cmb_gral_fp_forma_pago_id', Gral::getCmbFiltro(GralFpFormaPago::getGralFpFormaPagosCmbDeCobro(true), '...'), $cmb_gral_fp_forma_pago_id, 'textbox ' . $error_input_css) ?>
                    <label id="btn_ver_modal_set_cheque_info" class="boton ver_modal_set_cheque_info" title="<?php Lang::_lang('Agregar Datos del Cheque') ?>" >
                        <img src="imgs/btn_modi.gif" width="15">
                    </label>
                    <div class="error-mensaje-input-texto" id="cmb_gral_fp_forma_pago_id_error"><?php Gral::_echo($cmb_gral_fp_forma_pago_id_error) ?></div>
                </td>
            </tr>

            <tr>
                <td width='150' class='adm_carga_datos_titulos'>
                    <?php Lang::_lang('Importe') ?>
                </td>
                <td width='300' class='adm_carga_datos_datos' id="dato_fnd_caja_ingreso_importe">
                    <?php $error_input_css = ($txt_importe_error) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_importe' type='text' class='textbox moneda <?php echo $error_input_css ?>' id='txt_importe' value='<?php Gral::_echoTxt(Gral::getImporteDesdeDbToPriceFormat($txt_importe)) ?>' size='15' />
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($txt_importe_error) ?></div>
                </td>
            </tr>

            <tr>
                <td width='150' class='adm_carga_datos_titulos'>
                    <?php Lang::_lang('Codigo de Referencia') ?>
                </td>
                <td width='300' class='adm_carga_datos_datos' id="dato_fnd_caja_ingreso_codigo_referencia">
                    <?php $error_input_css = ($txt_codigo_referencia_error) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_codigo_referencia' type='text' class='textbox <?php echo $error_input_css ?>' id='txt_codigo_referencia' value='<?php Gral::_echoTxt($txt_codigo_referencia) ?>' size='20' />
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($txt_codigo_referencia_error) ?></div>
                </td>
            </tr>

            <tr>
                <td width='150' class='adm_carga_datos_titulos'>
                    <?php Lang::_lang('Observaciones') ?>
                </td>
                <td width='300' class='adm_carga_datos_datos' id="dato_fnd_caja_ingreso_observacion">
                    <?php $error_input_css = ($txa_observacion_error) ? 'error-mensaje-input' : ''; ?>
                    <textarea name='txa_observacion' rows='3' cols='50' id='txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($txa_observacion) ?></textarea>
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($txa_observacion_error) ?></div>
                </td>
            </tr>


        </table>
        <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php echo $fnd_caja->getId() ?>'/>
                    <input name='hdn_fnd_caja_ingreso_id' type='hidden' id='hdn_id' size='1' value='<?php echo $fnd_caja_ingreso_id ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>

                    <input name='hdn_error' type='hidden' class='hdn_error' value='<?php echo $hdn_error ?>' />

                    <input name='btn_cerrar' type='button' class='btn_cerrar' value='<?php Lang::_lang('Cerrar') ?>' />

                    <input name='btn_guardar' type='button' class='btn_guardar' value='<?php Lang::_lang('Guardar') ?>' /></td>

            <input name='hdn_var_sesion_modulo' type='hidden' id='hdn_var_sesion_modulo' size='50' value='<?php echo $var_sesion_modulo; ?>'/>

            </tr>
        </table>


    </form>
</body>
</html>
<script>
    setInit();
</script>