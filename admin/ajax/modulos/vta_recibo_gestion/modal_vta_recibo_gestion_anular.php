<?php
include_once '_autoload.php';

$vta_recibo_id = Gral::getVars(Gral::VARS_GET, 'vta_recibo_id', 0);
$vta_recibo = VtaRecibo::getOxId($vta_recibo_id);

$cli_cliente = $vta_recibo->getCliCliente();
?>
<form id='form_datos_anular_recibo' name='form_datos_rechazar_recibo' method='post' >
    <div class='datos anular-recibo' vta_recibo_id="<?php echo $vta_recibo_id ?>">

        <?php include "vta_recibo_gestion_modal_top.php" ?>   

        <div class="par">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_recibo->getCodigo()) ?>
            </div>
        </div>

        <div class="par">
            <div class="label"><?php Lang::_lang('Cliente') ?></div>
            <div class="dato">
                <?php Gral::_echo($cli_cliente->getDescripcion()) ?>
            </div>
        </div>
        
        <div class="par">
            <div class="label"><?php Lang::_lang('Motivo de la anulacion') ?></div>
            <div class="dato">
                <textarea name='txa_observacion' rows='7' cols='50' id='txa_observacion' class='textbox'></textarea>
                <div class="error label-error" id="txa_observacion_error"><?php Gral::_echo($txa_observacion_error) ?></div>
            </div>
        </div>

        <div class="botonera">
            <input id="btn_registrar" name='btn_registrar' type='button' class='boton' value='<?php Lang::_lang('Anular Comprobante') ?>' />
        </div>

    </div>
</form>
