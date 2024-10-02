<?php
include "_autoload.php";
include Gral::getPathAbs().'admin/control/seguridad_modulo.php';

$vta_presupuesto_id = Gral::getVars(Gral::VARS_GET, 'vta_presupuesto_id', 0, Gral::TIPO_INTEGER);
$tipo_estado = Gral::getVars(Gral::VARS_GET, 'tipo_estado', '', Gral::TIPO_STRING);

$vta_presupuesto = VtaPresupuesto::getOxId($vta_presupuesto_id);
?>
<form id='form_cambiar_estado' name='form_cambiar_estado' method='post' action='' >
    <div class="datos cambiar_estado" >       
        
        <div class="label-error" id="error_general_error"></div>
        
        <div class="par">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_presupuesto->getCodigo()); ?>
            </div>
        </div>

        <div class="par">
            <div class="label"><?php Lang::_lang('Cliente') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_presupuesto->getPersonaDescripcion()); ?>
            </div>
        </div>

        <div class="par">
            <div class="label"><?php Lang::_lang('Cambiar a') ?></div>
            <div class="dato">
                <?php Gral::_echo($tipo_estado); ?>
            </div>
        </div>
                
        <div class="par">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <textarea name='txa_observacion' rows='2' cols='60' id='txa_observacion' class='textbox'></textarea>
                <div class="label-error" id="txa_observacion_error"></div>
            </div>
        </div>

        <div class="botonera">
            <button class="boton gen-modal-btn-confirmar" id='btn_registrar' name='btn_registrar' type='button' gen-modal-file-post="ajax/modulos/vta_presupuesto_gestion/set_cambiar_estado.php?vta_presupuesto_id=<?php echo $vta_presupuesto_id; ?>&tipo_estado=<?php echo $tipo_estado ?>" gen-modal-content=".div_modal" gen-modal-callback="setInitVtaPresupuestoGestion(); refreshAdmAll('vta_presupuesto_gestion', 1);"><?php Lang::_lang('Cambiar a') ?> <?php echo $tipo_estado ?></button>
        </div>
    </div>
</form>
<script>
    setInit();
    setInitVtaPresupuestoGestion();
</script>