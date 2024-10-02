<?php
include_once '_autoload.php';

$pde_factura_id = Gral::getVars(Gral::VARS_GET, 'pde_factura_id', 0);
$pde_factura = PdeFactura::getOxId($pde_factura_id);

$prv_proveedor = $pde_factura->getPrvProveedor();
?>
<form id='form_datos_editar_nota_interna' name='form_datos_editar_nota_interna' method='post' >
    <div class='datos editar-nota-interna' pde_factura_id="<?php echo $pde_factura_id ?>">

        <?php include "pde_factura_gestion_modal_top.php" ?>   

        <div class="par">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_factura->getCodigo()) ?>
            </div>
        </div>

        <div class="par">
            <div class="label"><?php Lang::_lang('Proveedor') ?></div>
            <div class="dato">
                <?php Gral::_echo($prv_proveedor->getDescripcion()) ?>
            </div>
        </div>
        
        <div class="par">
            <div class="label"><?php Lang::_lang('Nota Interna') ?></div>
            <div class="dato">
                <textarea name='txa_nota_interna' rows='7' cols='50' id='txa_nota_interna' class='textbox'><?php Gral::_echoTxt($pde_factura->getNotaInterna()) ?></textarea>
                <div class="error label-error" id="txa_nota_interna_error"><?php Gral::_echo($txa_nota_interna_error) ?></div>
            </div>
        </div>

        <div class="botonera">
            <input id="btn_registrar" name='btn_registrar' type='button' class='boton' value='<?php Lang::_lang('Guardar Nota Interna') ?>' />
        </div>

    </div>
</form>
