<?php
include "_autoload.php";

$us_memo_id = Gral::getVars(Gral::VARS_GET, 'us_memo_id', 0);
$us_memo = UsMemo::getOxId($us_memo_id);

if($us_memo){
    $txt_descripcion = $us_memo->getDescripcion();
    $us_memo_tipo_id = $us_memo->getUsMemoTipoId();
    $us_memo_tipo_estado_id = $us_memo->getUsMemoTipoEstadoId();
    $txa_observacion = $us_memo->getObservacion();
}

?>
<div class="datos agregar-us-memo" identificador="<?php echo $us_memo_id ?>">
    <form id='form_agregar_us_memo' name='form_agregar_us_memo' method='post' action='' >

        <div class="label-error" id="error_general_error"></div>

        <div class="par">
            <div class="label">Titulo</div>
            <div class="dato">
                <input type="text" id="txt_descripcion" name="txt_descripcion" value="<?php echo $txt_descripcion?>" size="40" class="textbox" />
                <div class="label-error" id="txt_descripcion_error"></div>
            </div>
        </div>

        <div class="par">
            <div class="label">Tipo</div>
            <div class="dato">
                <?php Html::html_dib_select(1, 'cmb_us_memo_tipo_id', Gral::getCmbFiltro(UsMemoTipo::getUsMemoTiposCmb(), '...'), $us_memo_tipo_id, 'textbox ') ?>
                <div class="label-error" id="cmb_us_memo_tipo_id_error"></div>
            </div>
        </div>
        
        <div class="par">
            <div class="label">Tipo Estado</div>
            <div class="dato">
                <?php Html::html_dib_select(1, 'cmb_us_memo_tipo_estado_id', Gral::getCmbFiltro(UsMemoTipoEstado::getUsMemoTipoEstadosCmb(), '...'), $us_memo_tipo_estado_id, 'textbox ') ?>
                <div class="label-error" id="cmb_us_memo_tipo_estado_id_error"></div>
            </div>
        </div>

        <div class="par">
            <div class="label">Comentarios</div>
            <div class="dato">
                <textarea name='txa_observacion' rows='10' cols='60' id='txa_observacion' class='textbox'><?php Gral::_echoTxt($txa_observacion) ?></textarea>
                <div class="label-error" id="txa_observacion_error"></div>
            </div>
        </div>
        
        <div class="botonera">
            <button class="boton" id="btn_registrar_us_memo" name='btn_registrar_us_memo' type='button'><?php Lang::_lang('Agregar Nota') ?></button>
        </div>

    </form>
</div>