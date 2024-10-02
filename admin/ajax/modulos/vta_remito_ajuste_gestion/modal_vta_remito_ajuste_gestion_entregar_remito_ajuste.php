<?php
include "_autoload.php";

$vta_remito_ajuste_id = Gral::getVars(Gral::VARS_GET, 'vta_remito_ajuste_id', null);
$vta_remito_ajuste = VtaRemitoAjuste::getOxId($vta_remito_ajuste_id);
?>

<div class="datos entregar-remito-ajuste" vta_remito_ajuste_id="<?php Gral::_echo($vta_remito_ajuste->getId()) ?>">
    <form id='form_entregar_remito_ajuste' name='form_entregar_remito_ajuste' method='post' action='' >
        <div class="label-error" id="error_general_error"></div>

        <div class="par">
            <div class="label"><?php Lang::_lang('RemitoAjuste') ?></div>
            <div class="dato"><?php Gral::_echo($vta_remito_ajuste->getCodigo()) ?></div>
        </div>
        
        <div class="par">
            <div class="label"><?php Lang::_lang('Cliente') ?></div>
            <div class="dato"><?php Gral::_echo($vta_remito_ajuste->getPersonaDescripcion()) ?></div>
        </div>

        <div class="par">
            <div class="label"><?php Lang::_lang('Cantidad') ?></div>
            <div class="dato"><?php Gral::_echo($vta_remito_ajuste->getCantidadItemsRemitoAjuste()) ?> Items</div>
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