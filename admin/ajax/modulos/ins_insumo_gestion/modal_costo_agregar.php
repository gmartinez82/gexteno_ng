<?php
//include_once '../../../control/seguridad.php';
//include_once '../../../control/saneamiento.php';
include_once '_autoload.php';

$error = new DbError();
$hdn_error = 1;

if (Gral::esPost()) {
    $hdn_id = Gral::getVars(1, 'hdn_id', 0);
    $insumo_costo_id = Gral::getVars(1, 'hdn_insumo_costo_id', 0);
    $ins_insumo = InsInsumo::getOxId($hdn_id);

    $ins_insumo_costo = InsInsumoCosto::getOxId($insumo_costo_id);

    // se reciben variable por post
    $txt_costo = Gral::getVars(1, 'txt_costo', 0);
    $cmb_iva_incluido = Gral::getVars(1, 'cmb_iva_incluido', 0);    
    $txt_descripcion = Gral::getVars(1, 'txt_descripcion', '');
    $txa_observacion = Gral::getVars(1, 'txa_observacion', '');
    
    $txt_costo = Gral::getImporteDesdePriceFormatToDB($txt_costo);

    $estado = true;

    // se realizan los controles necesarios
    if (!Ctrl::esNumero($txt_costo) || $txt_costo <= 0) {
        $estado = false;
        $txt_costo_error = 'Debe ingresar un costo real';
    }
    if (Ctrl::esVacio($txt_descripcion)) {
        $estado = false;
        $txt_descripcion_error = 'Debe ingresar un motivo para el costo';
    }

    if ($estado) {

        if (!$ins_insumo_costo) {
            // se agrega costo nuevo
            $ins_insumo->setInsInsumoCostoActual(
                    false, $txt_costo, $txa_observacion, $txt_descripcion, false, false, $cmb_iva_incluido
            );
        } else {
            // se edita costo
            //$ins_insumo_identificado->setInsInsumoIdentificadoCostoEditar(
            //        $ins_insumo_identificado_costo, $gral_moneda, $txt_costo, $txt_descripcion, $txa_observacion
            //);
        }

        $hdn_error = 0;
    }
} else {
    $id = Gral::getVars(2, 'insumo_id', 0);
    $ins_insumo = InsInsumo::getOxId($id);

    $insumo_costo_id = Gral::getVars(2, 'insumo_costo_id', 0);
    $ins_insumo_costo = InsInsumoCosto::getOxId($insumo_costo_id);
    if ($ins_insumo_costo) {
        $txt_costo = $ins_insumo_identificado_costo->getCosto();
        $txt_descripcion = $ins_insumo_identificado_costo->getDescripcion();
        $txa_observacion = $ins_insumo_identificado_costo->getObservacion();
    }
}
$ins_categoria = $ins_insumo->getInsCategoria();
?>
<body>
    <form id='formu' name='formu' method='post' action='ajax/modulos/ins_insumo_gestion/modal_costo_agregar.php' >

        <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_ins_insumo_pan_panol'>

            <tr>
                <td width='150' class='adm_carga_datos_titulos'>
                    <?php Lang::_lang('InsCategoria') ?>
                </td>
                <td width='300' class='adm_carga_datos_datos' id="dato_ins_insumo_pan_panol_cmb_ins_insumo_id">
                    <div class="insumo">    
                        <strong><?php Gral::_echo($ins_categoria->getFamiliaDescripcion()) ?></strong>
                    </div>
                </td>
            </tr>

            <tr>
                <td width='150' class='adm_carga_datos_titulos'>
                    <?php Lang::_lang('InsInsumo') ?>
                </td>
                <td width='300' class='adm_carga_datos_datos' id="dato_ins_insumo_pan_panol_cmb_ins_insumo_id">
                    <div class="insumo">    
                        <strong><?php Gral::_echo($ins_insumo->getDescripcion()) ?></strong>
                    </div>
                </td>
            </tr>

            <tr>
                <td width='150' class='adm_carga_datos_titulos'>
                    <?php Lang::_lang('Codigo Marca') ?>
                </td>
                <td width='300' class='adm_carga_datos_datos' id="dato_ins_insumo_pan_panol_cmb_ins_insumo_id">
                    <div class="insumo">    
                        <strong><?php Gral::_echo($ins_insumo->getCodigoMarca()) ?></strong>
                    </div>
                </td>
            </tr>

            <tr>
                <td width='150' class='adm_carga_datos_titulos'>
                    <?php Lang::_lang('Costo del Insumo') ?>
                </td>
                <td width='300' class='adm_carga_datos_datos' id="dato_ins_insumo_pan_panol_txt_punto_minimo">
                    <?php $error_input_css = ($txt_costo_error) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_costo' type='text' class='textbox moneda <?php echo $error_input_css ?>' id='txt_costo' value='<?php Gral::_echoTxt($txt_costo) ?>' size='15' />
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($txt_costo_error) ?></div>
                </td>
            </tr>

            <tr>
                <td width='150' class='adm_carga_datos_titulos'>
                    <?php Lang::_lang('IVA Incluido') ?>
                </td>
                <td width='300' class='adm_carga_datos_datos' id="dato_ins_insumo_pan_panol_txt_punto_minimo">                    
                    <?php Html::html_dib_select(1, 'cmb_iva_incluido', GralSiNo::getGralSiNosCmb(), $cmb_iva_incluido = 1, 'textbox') ?>
                    <div class="label-error" id="cmb_iva_incluido_error"><?php Gral::_echo($cmb_iva_incluido_error) ?></div>
                </td>
            </tr>
            
            <tr>
                <td width='150' class='adm_carga_datos_titulos'>
                    <?php Lang::_lang('Motivo') ?>
                </td>
                <td width='300' class='adm_carga_datos_datos' id="dato_ins_insumo_pan_panol_txt_punto_minimo">
                    <?php $error_input_css = ($txt_descripcion_error) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?>' id='txt_descripcion' value='<?php Gral::_echoTxt($txt_descripcion) ?>' size='35' />
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($txt_descripcion_error) ?></div>
                </td>
            </tr>

            <tr>
                <td width='150' class='adm_carga_datos_titulos'>
                    <?php Lang::_lang('Observaciones') ?>
                </td>
                <td width='300' class='adm_carga_datos_datos' id="dato_ins_insumo_pan_panol_txt_punto_minimo">
                    <?php $error_input_css = ($txa_observacion_error) ? 'error-mensaje-input' : ''; ?>
                    <textarea name='txa_observacion' rows='3' cols='50' id='txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($txa_observacion) ?></textarea>
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($txa_observacion_error) ?></div>
                </td>
            </tr>


        </table>
        <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php echo $ins_insumo->getId() ?>'/>
                    <input name='hdn_insumo_costo_id' type='hidden' id='hdn_id' size='1' value='<?php echo $insumo_costo_id ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>

                    <input name='hdn_error' type='hidden' class='hdn_error' value='<?php echo $hdn_error ?>' />

                    <input name='btn_cerrar' type='button' class='btn_cerrar' value='<?php Lang::_lang('Cerrar') ?>' />

                    <input name='btn_guardar' type='button' class='btn_guardar' value='<?php Lang::_lang('Guardar') ?>' /></td>
            </tr>
        </table>


    </form>
</body>
</html>
<script>
    setInit();
</script>
