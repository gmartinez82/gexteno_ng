<?php
include "_autoload.php";

$vta_remito_ajuste_id = Gral::getVars(Gral::VARS_GET, 'vta_remito_ajuste_id', null);
$vta_remito_ajuste = VtaRemitoAjuste::getOxId($vta_remito_ajuste_id);

$vta_remito_ajuste_estado = $vta_remito_ajuste->getVtaRemitoAjusteEstadoActual();
$vta_remito_ajuste_tipo_estado = $vta_remito_ajuste->getVtaRemitoAjusteTipoEstadoActual();
$vta_presupuesto = $vta_remito_ajuste->getVtaPresupuesto();


?>

<div class="datos entregar-remito-ajuste" vta_remito_ajuste_id="<?php Gral::_echo($vta_remito_ajuste->getId()) ?>">
    <form id='form_despacho_autorizado' name='form_despacho_autorizado' method='post' action='' >
        <div class="label-error" id="error_general_error"></div>

        <div class="par">
            <div class="label"><?php Lang::_lang('RemitoAjuste') ?></div>
            <div class="dato"><?php Gral::_echo($vta_remito_ajuste->getCodigo()) ?></div>
        </div>
        
        <div class="par">
            <div class="label"><?php Lang::_lang('Presupuesto') ?></div>
            <div class="dato"><?php Gral::_echo($vta_presupuesto->getCodigo()) ?></div>
        </div>
        
        <div class="par">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato"><?php Gral::_echo($vta_remito_ajuste_tipo_estado->getDescripcion()) ?></div>
        </div>
        
        <div class="par">
            <div class="label"><?php Lang::_lang('Fecha') ?></div>
            <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWEB($vta_remito_ajuste_estado->getCreado())) ?></div>
        </div>

        <div class="par">
            <div class="label"><?php Lang::_lang('Cant Bultos') ?></div>
            <div class="dato">
                <input name='txt_cantidad_bultos' id='txt_cantidad_bultos' class='textbox spinner' size="7"></input>
                <div class="label-error" id="txt_cantidad_bultos_error"></div>
            </div>
        </div>

        <div class="par">
            <div class="label"><?php Lang::_lang('Peso') ?></div>
            <div class="dato">
                <input name='txt_peso' id='txt_peso' class='textbox' size="7"></input> kg
                <div class="label-error" id="txt_peso_error"></div>
            </div>
        </div>
       
        <div class="par">
            <div class="label"><?php Lang::_lang('Nota Interna') ?></div>
            <div class="dato">
                <textarea name='txa_nota_interna' rows='3' cols='45' id='txa_nota_interna' class='textbox'></textarea>
                <div class="label-error" id="txa_nota_interna_error"></div>
            </div>
        </div>

        <div class="botonera">
            <button class="boton" id='btn_despachar' name='btn_despachar' type='button' class='btn_despachar'><?php Lang::_lang('Despachar') ?></button>
        </div>

    </form>
</div>
<script>
    setInit();
</script>