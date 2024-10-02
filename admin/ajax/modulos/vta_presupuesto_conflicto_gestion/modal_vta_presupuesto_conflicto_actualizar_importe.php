<?php
include "_autoload.php";

$vta_presupuesto_conflicto_id = Gral::getVars(Gral::VARS_GET, 'vta_presupuesto_conflicto_id', null);
$vta_presupuesto_conflicto = VtaPresupuestoConflicto::getOxId($vta_presupuesto_conflicto_id);
$vta_presupuesto_ins_insumo = $vta_presupuesto_conflicto->getVtaPresupuestoInsInsumo();
$vta_presupuesto = $vta_presupuesto_ins_insumo->getVtaPresupuesto();
?>

<div class="datos actualizar-importe" vta_presupuesto_conflicto_id="<?php Gral::_echo($vta_presupuesto_conflicto->getId()) ?>">
    <form id='form_actualizar_importe' name='form_actualizar_importe' method='post' action='' >
        <div class="label-error" id="error_general_error"></div>

        <div class="par">
            <div class="label"><?php Lang::_lang('Codigo ') ?></div>
            <div class="dato"><?php Gral::_echo($vta_presupuesto->getCodigo()) ?></div>
        </div>
        
        <div class="par">
            <div class="label"><?php Lang::_lang('Insumo ') ?></div>
            <div class="dato"><?php Gral::_echo($vta_presupuesto_ins_insumo->getDescripcion()) ?></div>
        </div>
        
        <div class="par">
            <div class="label"><?php Lang::_lang('Imp Inicial') ?></div>
            <div class="dato"><?php Gral::_echoImp($vta_presupuesto_conflicto->getImporteInicial()) ?></div>
        </div>
        
        <div class="par">
            <div class="label"><?php Lang::_lang('Imp Actualizado') ?></div>
            <div class="dato" style="background-color: #84c642; font-size: 14px;"><?php Gral::_echoImp($vta_presupuesto_conflicto->getImporteActualizado()) ?></div>
        </div>

        <div class="par">
            <div class="label"><?php Lang::_lang('Diferencia') ?></div>
            <div class="dato"><?php Gral::_echoImp($vta_presupuesto_conflicto->getImporteActualizado() - $vta_presupuesto_conflicto->getImporteInicial()) ?></div>
        </div>
        
        <div class="par">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <textarea name='txa_observacion' rows='3' cols='45' id='txa_observacion' class='textbox'></textarea>
                <div class="label-error" id="txa_observacion_error"></div>
            </div>
        </div>

        <div class="botonera">
            <button class="boton" id='btn_guardar' name='btn_guardar' type='button' class='btn_guardar'><?php Lang::_lang('Guardar') ?></button>
        </div>

    </form>
</div>
<script>
    setInit();
    setInitVtaPresupuestoConflictoGestion();
</script>