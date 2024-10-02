<?php
include "_autoload.php";

$us_usuario = UsUsuario::autenticado();

$modulo = Gral::getVars(Gral::VARS_GET, 'modulo', '');
$atributo = Gral::getVars(Gral::VARS_GET, 'atributo', '');
?>
<form id="form_db_modal_help" name="form_db_modal_help">
    <div class="datos db_modal_help" atributo="<?php Gral::_echo($atributo) ?>" modulo="<?php Gral::_echo($modulo) ?>">
        
        <div class="par">
            <div class="label"><?php Lang::_lang('Lenguaje') ?></div>
            <div class="dato">
                <?php Html::html_dib_select(1, 'cmb_gral_lenguaje_id', GralLenguaje::getGralLenguajesCmb(), $us_usuario->getGralLenguajeId(), 'textbox '.$error_input_css) ?>
                <div class="label-error" id="cmb_gral_lenguaje_id_error"></div>                
            </div>
        </div>

        <div class="par">
            <div class="label"><?php Lang::_lang('Texto de Ayuda') ?></div>
            <div class="dato">
                <textarea class="textbox ckeditor" rows="10" cols="80" name="txa_texto_ayuda" id="txa_texto_ayuda"><?php Lang::_lang(('help_' . $modulo . '_' . $atributo), false, false, XmlLenguajeTipo::TIPO_AYUDA) ?></textarea>
                <div class="label-error" id="txa_texto_ayuda_error"></div>                
            </div>
        </div>

        <div class="par">
            <div class="label"><?php Lang::_lang('Comentario') ?></div>
            <div class="dato">
                <textarea class="textbox" rows="3" cols="80" name="txa_texto_comentario" id="txa_texto_comentario"><?php Lang::_lang(('comentario_' . $modulo . '_' . $atributo), false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></textarea>
                <div class="label-error" id="txa_texto_comentario_error"></div>                
            </div>
        </div>
        
        <div class="botonera">
            <button type="button" class="boton" id="btn_guardar_ayuda" name="btn_guardar_ayuda"><?php Lang::_lang('Guardar') ?></button>
        </div>

    </div>
</form>