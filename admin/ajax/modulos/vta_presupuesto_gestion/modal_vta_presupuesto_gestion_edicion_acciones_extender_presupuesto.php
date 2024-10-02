<?php
include "_autoload.php";

$vta_presupuesto_id = Gral::getVars(Gral::VARS_GET, 'vta_presupuesto_id', 0);
$vta_presupuesto = VtaPresupuesto::getOxId($vta_presupuesto_id);

$cli_cliente = $vta_presupuesto->getCliCliente();
?>

<div class="datos extender-presupuesto" vta_presupuesto_id="<?php Gral::_echo($vta_presupuesto->getId()) ?>">
    <form id='form_exteder_presupuesto' name='form_exteder_presupuesto' method='post' action='' >
        <div class="label-error" id="error_general_error"></div>

        <div class="par">
            <div class="label"><?php Lang::_lang('Cod Presupuesto') ?></div>
            <div class="dato"><?php Gral::_echo($vta_presupuesto->getCodigo()) ?></div>
        </div>
        
        <div class="par">
            <div class="label"><?php Lang::_lang('Fecha') ?></div>
            <div class="dato"><?php Gral::_echo(Gral::getFechaToWEB($vta_presupuesto->getFecha())) ?></div>
        </div>

        <?php if ($cli_cliente) { ?>
            <div class="par">
                <div class="label"><?php Lang::_lang('Cliente') ?></div>
                <div class="dato"><?php Gral::_echo($cli_cliente->getDescripcion()) ?></div>
            </div>
        <?php } ?>


        <div class="par">
            <div class="label"><?php Lang::_lang('Vencimiento') ?></div>
            <div class="dato">
                <input name='txt_fecha_vencimiento' type='text' class='textbox' id='txt_fecha_vencimiento' value='<?php Gral::_echo(Gral::getFechaToWEB($vta_presupuesto->getFechaVencimiento())) ?>' size='15' />
                <input type="button" id="cal_txt_fecha_vencimiento" value=" ... ">
                <div class="label-error" id="txt_fecha_vencimiento_error"></div>

                <script type='text/javascript'>
                    Calendar.setup({
                        inputField: 'txt_fecha_vencimiento', ifFormat: '%d/%m/%Y', button: 'cal_txt_fecha_vencimiento'
                    });
                </script>
            </div>
        </div>

        <div class="par">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <textarea name='txa_observacion' rows='3' cols='50' id='txa_observacion' class='textbox'></textarea>
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
</script>