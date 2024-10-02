<?php
include_once '_autoload.php';

$pde_orden_pago_id = Gral::getVars(Gral::VARS_GET, 'pde_orden_pago_id', 0);
$pde_orden_pago = PdeOrdenPago::getOxId($pde_orden_pago_id);

$prv_proveedor = $pde_orden_pago->getPrvProveedor();
?>
<form id='form_datos_editar_nota_publica' name='form_datos_editar_nota_publica' method='post' >
    <div class='datos editar-nota-publica' pde_orden_pago_id="<?php echo $pde_orden_pago_id ?>">

        <?php include "pde_orden_pago_gestion_modal_top.php" ?>   

        <div class="par">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_orden_pago->getCodigo()) ?>
            </div>
        </div>

        <div class="par">
            <div class="label"><?php Lang::_lang('Proveedor') ?></div>
            <div class="dato">
                <?php Gral::_echo($prv_proveedor->getDescripcion()) ?>
            </div>
        </div>
        
        <div class="par">
            <div class="label"><?php Lang::_lang('Nota Publica') ?></div>
            <div class="dato">
                <textarea name='txa_nota_publica' rows='7' cols='50' id='txa_nota_publica' class='textbox'><?php Gral::_echoTxt($pde_orden_pago->getNotaPublica()) ?></textarea>
                <div class="error label-error" id="txa_nota_publica_error"><?php Gral::_echo($txa_nota_publica_error) ?></div>
            </div>
        </div>

        <div class="botonera">
            <input id="btn_registrar" name='btn_registrar' type='button' class='boton' value='<?php Lang::_lang('Guardar Nota Publica') ?>' />
        </div>

    </div>
</form>
