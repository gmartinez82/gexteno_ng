<?php
include "_autoload.php";

$vta_presupuesto_ins_insumo_id = Gral::getVars(Gral::VARS_GET, 'vta_presupuesto_ins_insumo_id', 0);
$vta_presupuesto_ins_insumo = VtaPresupuestoInsInsumo::getOxId($vta_presupuesto_ins_insumo_id);
$ins_insumo = $vta_presupuesto_ins_insumo->getInsInsumo();
?>

<div class="datos editar-descripcion" vta_presupuesto_ins_insumo_id="<?php Gral::_echo($vta_presupuesto_ins_insumo->getId()) ?>">
    <form id='form_editar_descripcion' name='form_editar_descripcion' method='post' action='' >
        <div class="label-error" id="error_general_error"></div>

        <div class="par">
            <div class="label"><?php Lang::_lang('InsInsumo') ?></div>
            <div class="dato"><?php Gral::_echo($ins_insumo->getDescripcion()) ?></div>
        </div>

        <div class="par">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <input type="text" id='txt_descripcion' class="textbox" name="txt_descripcion" size="80" value="<?php Gral::_echo($vta_presupuesto_ins_insumo->getDescripcion()) ?>"/>
                <div class="label-error" id="txt_descripcion_error"></div>
            </div>
        </div>

        <div class="botonera">
            <button class="boton" id='btn_guardar' name='btn_guardar' type='button' class='btn_guardar'><?php Lang::_lang('Guardar') ?></button>
        </div>

    </form>
</div>
<script>
    setInit();
</script>