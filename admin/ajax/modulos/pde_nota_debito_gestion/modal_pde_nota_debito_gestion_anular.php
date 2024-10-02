<?php
include_once '_autoload.php';

$pde_nota_debito_id = Gral::getVars(Gral::VARS_GET, 'pde_nota_debito_id', 0);
$pde_nota_debito = PdeNotaDebito::getOxId($pde_nota_debito_id);

$prv_proveedor = $pde_nota_debito->getPrvProveedor();
?>
<form id='form_datos_anular_recibo' name='form_datos_rechazar_recibo' method='post' >
    <div class='datos anular-recibo' pde_nota_debito_id="<?php echo $pde_nota_debito_id ?>">

        <?php include "pde_nota_debito_gestion_modal_top.php" ?>   

        <div class="par">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_nota_debito->getCodigo()) ?>
            </div>
        </div>

        <div class="par">
            <div class="label"><?php Lang::_lang('Proveedor') ?></div>
            <div class="dato">
                <?php Gral::_echo($prv_proveedor->getDescripcion()) ?>
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
