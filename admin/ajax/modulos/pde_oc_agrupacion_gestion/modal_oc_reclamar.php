<?php
include_once '_autoload.php';

$db_nombre_objeto = 'pde_oc';
$hdn_error = 1;

$oc_id = Gral::getVars(Gral::VARS_GET, 'oc_id', 0);

if($oc_id != 0)
{
    $pde_oc = PdeOc::getOxId($oc_id);
    $pde_oc->setPdeOcLeido();
} 

?>

<form id='form_reclamar' name='form_reclamar' method='post' method='post' >
    <div class='datos pde-oc reclamar' oc_id='<?php echo $oc_id; ?>'>

        <div class='par'>
            <div class='label'><?php Lang::_lang('OC') ?></div>
            <div class='dato'>
                <?php Gral::_echo($pde_oc->getCodigo()); ?>
            </div>
        </div>

        <div class='par'>
            <div class='label'><?php Lang::_lang('Insumo') ?></div>
            <div class='dato'>
                <?php Gral::_echo($pde_oc->getInsInsumo()->getDescripcion()); ?>
            </div>
        </div>

        <div class='par'>
            <div class='label'><?php Lang::_lang('Cantidad') ?></div>
            <div class='dato'>
                <?php Gral::_echo($pde_oc->getCantidad()); ?>
            </div>
        </div>

        <div class='par'>
            <div class='label'><?php Lang::_lang('Motivo') ?></div>
            <div class='dato'>
                <?php Html::html_dib_select(1, 'pde_oc_cmb_reclamo_motivo_id', Gral::getCmbFiltro(PdeOcReclamoMotivo::getPdeOcReclamoMotivosCmb(),'Seleccione Motivo'), $pde_oc_cmb_reclamo_motivo_id, 'textbox') ?>
                <div id='pde_oc_cmb_reclamo_motivo_id_error' class='error label-error' ><?php Gral::_echo($pde_oc_cmb_reclamo_motivo_id_error) ?></div>
            </div>
        </div>
        
        <div class='par'>
            <div class='label'><?php Lang::_lang('Observaciones') ?></div>
            <div class='dato'>
                <textarea id='pde_oc_txa_observacion' name='pde_oc_txa_observacion' rows='10' cols='60' class='textbox'><?php Gral::_echoTxt($pde_oc_txa_observacion) ?></textarea>
                <div id='pde_oc_txa_observacion_error' class='error label-error' ><?php Gral::_echo($pde_oc_txa_observacion) ?></div>
            </div>
            <div class='error'></div>
        </div>
        
         <div class='botonera'>
            <div class='label-error' id='lbl_general_error'></div>
            <input name='btn_guardar' class='boton' type='button' id='btn_guardar' value='<?php Lang::_lang('Guardar'); ?>' />
        </div>
    </div>
</form>

<script>
    //setInit();
    //setInitPdeFacturaGestion();
</script>