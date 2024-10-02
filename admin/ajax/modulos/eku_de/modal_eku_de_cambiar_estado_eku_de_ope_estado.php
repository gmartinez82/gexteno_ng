<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$eku_de = EkuDe::getOxId($id);
?>
<form id='form_datos_adm_modificar_estado' name='form_datos_adm_modificar_estado' method='post' >
    <div class='datos modificar-estado' identificador="<?php echo $eku_de->getId() ?>" modulo="eku_de" modulo_estado="eku_de_ope_estado">
        
        <div class="par">
            <div class="label"><?php Lang::_lang('Descripcion'); ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de->getDescripcion()) ?>
            </div>
        </div>
        
        <div class="par">
            <div class="label"><?php Lang::_lang('Estado Actual'); ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de->getEkuDeOpeTipoEstado()->getDescripcion()); ?>
            </div>
        </div>
        
        <div class="par">
            <div class="label"><?php Lang::_lang('Tipo Estado'); ?></div>
            <div class="dato">
                <?php Html::html_dib_select(1, 'cmb_eku_de_ope_tipo_estado_id', Gral::getCmbFiltro($eku_de->getEkuDeOpeTipoEstadosPotencialesCmb(), '...'), $cmb_fnd_chq_tipo_estado_id, 'textbox') ?>
                <div class="error label-error" id="cmb_eku_de_ope_tipo_estado_id_error"><?php Gral::_echo($eku_de_ope_tipo_estado_id_error) ?></div>
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

