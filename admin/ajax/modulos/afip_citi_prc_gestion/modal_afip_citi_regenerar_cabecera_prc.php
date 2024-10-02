<?php
include "_autoload.php";
$afip_citi_prc_id = Gral::getVars(2, 'afip_citi_prc_id', 0);

$afip_citi_prc = AfipCitiPrc::getOxId($afip_citi_prc_id);
if($afip_citi_prc)
{
   $afip_citi_descripcion = $afip_citi_prc->getDescripcion();
}
?>

<div class="datos modal-afip-citi-regenerar-cabecera-prc" afip_citi_prc_id="<?php Gral::_echo($afip_citi_prc_id); ?>">
    <form id='form_afip_citi_regenerar_cabecera_prc' name='form_afip_citi_regenerar_cabecera_prc' method='POST' action='' >
        
        <div class="par">
            <div class="label">
                <?php Lang::_lang('Proceso'); ?>
            </div>
            <div class="dato">
                 <?php Gral::_echo($afip_citi_descripcion); ?>
            </div>
        </div>
        
        <div class="par">
            <div class="label">
                <?php Lang::_lang('Secuencia'); ?>
            </div>
            <div class="dato">
                 <input id='txt_secuencia' name='txt_secuencia' type='text' class='textbox spinner'  value='<?php Gral::_echo($secuencia) ?>' size='5'  />
                 <div id="txt_secuencia_error" class="error label-error" ><?php Gral::_echo($txt_secuencia_error) ?></div>
                <div class="comentario">Solamente se debe modificar la secuencia si se ha informado a AFIP y el organismo ha rechazado el proceso.</div>
            </div>
        </div>
        
        <div class="par">
            <div class="label">
                <?php Lang::_lang('Observacion'); ?>
            </div>
            <div class="dato">
                 <textarea name='txa_observacion' rows='3' cols='50' id='txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echo($txa_observacion) ?></textarea>
                 <div id="txa_observacion_error" class="error label-error" ><?php Gral::_echo($txa_observacion_error) ?></div>
            </div>
        </div>
        <div class="botonera">
            <button class="boton" id='btn_afip_citi_regenerar_cabecera_prc' name='btn_afip_citi_regenerar_cabecera_prc' type='button' class='btn_afip_citi_generar_prc'>
                <?php Lang::_lang('Regenerar Cabecera Proceso AFIP') ?>
            </button>
        </div>
    </form>
</div>

<script>
    setInit();
    setInitAfipCitiPrc();
</script>