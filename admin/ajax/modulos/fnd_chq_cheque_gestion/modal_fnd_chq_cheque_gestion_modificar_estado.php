<?php
include_once '_autoload.php';

$fnd_chq_cheque_id = Gral::getVars(Gral::VARS_GET, 'fnd_chq_cheque_id', 0);
$fnd_chq_cheque    = FndChqCheque::getOxId($fnd_chq_cheque_id);

if($fnd_chq_cheque)
{
    $fnd_chq_tipo_emisor = $fnd_chq_cheque->getFndChqTipoEmisor();
    //Gral::prr($fnd_chq_tipo_emisor);
    if($fnd_chq_tipo_emisor)
    {
        $fnd_chq_tipo_estados_cmb = $fnd_chq_cheque->getFndChqTipoEstadoPosiblesCmb();
    }
}

?>
<form id='form_datos_modificar_estado' name='form_datos_modificar_estado' method='post' >
    <div class='datos modificar-estado' fnd_chq_cheque_id="<?php echo $fnd_chq_cheque_id ?>">

        <div class="par">
            <div class="label"><?php Lang::_lang('Firmante'); ?></div>
            <div class="dato">
                <?php Gral::_echo($fnd_chq_cheque->getFirmante()) ?>
            </div>
        </div>
        
        <div class="par">
            <div class="label"><?php Lang::_lang('Numero'); ?></div>
            <div class="dato">
                <?php Gral::_echo($fnd_chq_cheque->getNumero()) ?>
            </div>
        </div>
        
        <div class="par">
            <div class="label"><?php Lang::_lang('Estado Actual'); ?></div>
            <div class="dato">
                <?php Gral::_echo($fnd_chq_cheque->getFndChqTipoEstado()->getDescripcion()); ?>
            </div>
        </div>
        <div class="par">
            <div class="dato"></div>
            <div class="dato"></div>
        </div>
        <div class="par">
            <div class="label"><?php Lang::_lang('Tipo Estado'); ?></div>
            <div class="dato">
                <?php Html::html_dib_select(1, 'cmb_fnd_chq_tipo_estado_id', Gral::getCmbFiltro($fnd_chq_tipo_estados_cmb, '...'), $cmb_fnd_chq_tipo_estado_id, 'textbox') ?>
                <div class="error label-error" id="cmb_fnd_chq_tipo_estado_id_error"><?php Gral::_echo($cmb_fnd_chq_tipo_estado_id_error) ?></div>
            </div>
        </div>
        
        <div class="par">
            <div class="label"><?php Lang::_lang('Observacion'); ?></div>
            <div class="dato">
                <textarea name='txa_observacion' rows='7' cols='50' id='txa_observacion' class='textbox'></textarea>
                <div class="error label-error" id="txa_observacion_error"><?php Gral::_echo($txa_observacion_error) ?></div>
            </div>
        </div>
        
        <div class="botonera">
            <input id="btn_modificar_estado" name='btn_modificar_estado' type='button' class='boton' value='<?php Lang::_lang('Modificar Estado'); ?>' />
        </div>
        
    </div>
</form>
