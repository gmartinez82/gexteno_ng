<?php
include_once '_autoload.php';

$vta_nota_debito_id = Gral::getVars(Gral::VARS_GET, 'vta_nota_debito_id', 0);
$vta_nota_debito = VtaNotaDebito::getOxId($vta_nota_debito_id);

$cli_cliente = $vta_nota_debito->getCliCliente();
?>
<form id='form_datos_anular_nota_debito' name='form_datos_anular_nota_debito' method='post' >
    <div class='datos anular-nota-debito' vta_nota_debito_id="<?php echo $vta_nota_debito_id ?>">

        <?php include "vta_nota_debito_gestion_modal_top.php" ?>   

        <div class="par">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_nota_debito->getCodigo()) ?>
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
