<?php
include_once '_autoload.php';

$id = Gral::getVars(2, 'id', 0);
$vta_remito_ajuste = VtaRemitoAjuste::getOxId($id);
$cli_cliente = $vta_remito_ajuste->getCliCliente();
?>
<div class="datos etiqueta-remision" vta_remito_ajuste_id="<?php Gral::_echo($vta_remito_ajuste->getId()) ?>">
    
    <div class="par">
        <div class="label"><?php Lang::_lang('Codigo') ?></div>
        <div class="dato"><?php Gral::_echo($vta_remito_ajuste->getCodigo()) ?></div>
    </div>
    
    <div class="par">
        <div class="label"><?php Lang::_lang('Cliente') ?></div>
        <div class="dato"><?php Gral::_echo($cli_cliente->getDescripcion()) ?></div>
    </div>
    
    <div class="par">
        <div class="label"><?php Lang::_lang('Codigo EPL') ?></div>
        <div class="dato epl"><?php Gral::_echo($vta_remito_ajuste->getEtiquetaRemisionEPL(1)) ?></div>
    </div>
    
    <div class="par">
        <div class="label"><?php Lang::_lang('Cant Etiquetas') ?></div>
        <div class="dato"><input type="text" class="textbox spinner" id="txt_cantidad" name="txt_cantidad" value="1" size="5" /></div>
    </div>

    <div class="botonera">
        <!--
        <input type="button" class="boton generar-archivo" value="<?php Lang::_lang('Generar Archivo') ?>" />
        -->
        <input type="button" class="boton generar-archivo-exec" value="<?php Lang::_lang('Enviar Etiqueta a Impresora') ?>" />
        <!--
        <input type="button" class="boton generar-archivo-pdf" value="<?php Lang::_lang('Generar Archivo PDF') ?>" />
        -->
    </div>
    
</div>
<script>
    setInit();
</script>
