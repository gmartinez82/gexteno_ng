<?php
include "_autoload.php";

$vta_presupuesto_ins_insumo_id = Gral::getVars(Gral::VARS_GET, 'vta_presupuesto_ins_insumo_id', 0);
$vta_presupuesto_ins_insumo = VtaPresupuestoInsInsumo::getOxId($vta_presupuesto_ins_insumo_id);
?>

<div class="datos cancelar-item" vta_presupuesto_ins_insumo_id="<?php Gral::_echo($vta_presupuesto_ins_insumo->getId()) ?>">
    <form id='form_cancelar_item' name='form_cancelar_item' method='post' action='' >
        <div class="label-error" id="error_general_error"></div>

        <div class="par">
            <div class="label"><?php Lang::_lang('Insumo') ?></div>
            <div class="dato"><?php Gral::_echo($vta_presupuesto_ins_insumo->getDescripcion()) ?></div>
        </div>

        <div class="par">
            <div class="label"><?php Lang::_lang('Motivos de la Cancelacion') ?></div>
            <div class="dato">
                <textarea name='txa_cancelar_observacion' rows='3' cols='45' id='txa_cancelar_observacion' class='textbox'></textarea>
                <div class="label-error" id="txa_cancelar_observacion_error"></div>
            </div>
        </div>

        <div class="botonera">
            <!--button class="boton" id='btn_guardar' name='btn_guardar' type='button' class='btn_guardar'><?php //Lang::_lang('Guardar')  ?></button-->
            <button class="boton" id='btn_guardar' name='btn_guardar' type='button' class='btn_guardar' vta_presupuesto_id="<?php echo $vta_presupuesto_ins_insumo->getVtaPresupuestoId() ?>"><?php Lang::_lang('Guardar') ?></button>
        </div>

    </form>
</div>
<script>
    setInit();
</script>