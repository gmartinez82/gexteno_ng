<?php
include "_autoload.php";

$insumo_id = Gral::getVars(2, 'insumo_id', 0);
$ins_insumo = InsInsumo::getOxId($insumo_id);
$ins_categoria = $ins_insumo->getInsCategoria();

?>

<div class="datos">

	<form id="form_editar_descripcion_corta" name="form_editar_descripcion_corta" method="post" action="">
        <div class="par">
            <div class="label"><?php Lang::_lang('Categoria') ?></div>
            <div class="dato"><?php Gral::_echo($ins_categoria->getDescripcion()) ?></div>
        </div>
    
        <div class="par">
            <div class="label"><?php Lang::_lang('Insumo') ?></div>
            <div class="dato"><?php Gral::_echo($ins_insumo->getDescripcion()) ?></div>
        </div>

        <div class="par">
            <div class="label"><?php Lang::_lang('Descripcion Corta') ?></div>
            <div class="dato"><?php Gral::_echo($ins_insumo->getDescripcionCorta()) ?></div>
        </div>
    
        <div class="par">
            <div class="label"><?php Lang::_lang('Descripcion Corta Nueva') ?></div>
            <div class="dato">
                <input class="textbox" type="text" id="txt_coche_descripcion_corta" name="txt_coche_descripcion_corta" size="40" value="<?php Gral::_echo($ins_insumo->getDescripcionCorta()) ?>" />
                
                <div class="label-error error txt_coche_descripcion_corta_error"></div>
            </div>
        </div>
            
        <div class="botonera">
            <input class="boton" type="button" id="btn_guardar_descripcion_corta" name="btn_guardar_descripcion_corta" value="<?php Lang::_lang('Guardar') ?>" />
            
            <input type="hidden" size="5" id="hdn_insumo_id" name="hdn_insumo_id" value="<?php echo $insumo_id ?>">
        </div>
    </form>
    
</div>