<?php
include_once '_autoload.php';

$id = Gral::getVars(2, 'id', 0);
$ins_insumo = InsInsumo::getOxId($id);
?>
<div class="datos barcode-interno" insumo_id="<?php Gral::_echo($ins_insumo->getId()) ?>">
    
    <div class="par">
        <div class="label"><?php Lang::_lang('InsInsumo') ?></div>
        <div class="dato"><?php Gral::_echo($ins_insumo->getDescripcion()) ?></div>
    </div>
    
    <div class="par">
        <div class="label"><?php Lang::_lang('Descripcion Corta') ?></div>
        <div class="dato"><?php Gral::_echo($ins_insumo->getDescripcionCorta()) ?></div>
    </div>
    
    <div class="par">
        <div class="label"><?php Lang::_lang('Codigo Interno') ?></div>
        <div class="dato"><?php Gral::_echo($ins_insumo->getCodigoInterno()) ?></div>
    </div>
    
    <div class="par">
        <div class="label"><?php Lang::_lang('Marca') ?></div>
        <div class="dato"><?php Gral::_echo($ins_insumo->getInsMarca()->getDescripcion()) ?></div>
    </div>
    
    <div class="par">
        <div class="label"><?php Lang::_lang('Codigo Marca') ?></div>
        <div class="dato"><?php Gral::_echo($ins_insumo->getCodigoMarca()) ?></div>
    </div>
    
    <div class="par">
        <div class="label"><?php Lang::_lang('Codigo EPL') ?></div>
        <div class="dato epl"><?php Gral::_echo($ins_insumo->getBarcodeInternoCodigoEPL(1)) ?></div>
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
        <input type="button" class="boton generar-archivo-pdf" value="<?php Lang::_lang('Generar Archivo PDF') ?>" />
    </div>
    
</div>
<script>
    setInit();
</script>
