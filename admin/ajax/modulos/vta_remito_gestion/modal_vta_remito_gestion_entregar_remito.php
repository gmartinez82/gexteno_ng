<?php
include "_autoload.php";

$vta_remito_id = Gral::getVars(Gral::VARS_GET, 'vta_remito_id', null);
$vta_remito = VtaRemito::getOxId($vta_remito_id);
?>

<div class="datos entregar-remito" vta_remito_id="<?php Gral::_echo($vta_remito->getId()) ?>">
    <form id='form_entregar_remito' name='form_entregar_remito' method='post' action='' >
        <div class="label-error" id="error_general_error"></div>

        <div class="par">
            <div class="label"><?php Lang::_lang('Remito') ?></div>
            <div class="dato"><?php Gral::_echo($vta_remito->getCodigo()) ?></div>
        </div>
        
        <div class="par">
            <div class="label"><?php Lang::_lang('Cliente') ?></div>
            <div class="dato"><?php Gral::_echo($vta_remito->getPersonaDescripcion()) ?></div>
        </div>

        <div class="par">
            <div class="label"><?php Lang::_lang('Cantidad') ?></div>
            <div class="dato"><?php Gral::_echo($vta_remito->getCantidadItemsRemito()) ?> Items</div>
        </div>

        <div class="par">
            <div class="label"><?php Lang::_lang('Nota Interna') ?></div>
            <div class="dato">
                <textarea name='txa_nota_interna' rows='3' cols='45' id='txa_nota_interna' class='textbox'></textarea>
                <div class="label-error" id="txa_nota_interna_error"></div>
            </div>
        </div>

        <div class="botonera">
            <button class="boton" id='btn_entregar' name='btn_entregar' type='button' class='btn_guardar'><?php Lang::_lang('Entregar') ?></button>
        </div>

    </form>
</div>
<script>
    setInit();
</script>