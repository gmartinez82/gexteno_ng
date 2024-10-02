<?php
include "_autoload.php";

$insumo_id = Gral::getVars(2, 'insumo_id', 0);
$ins_insumo = InsInsumo::getOxId($insumo_id);

$ins_venta_web_infos = $ins_insumo->getInsVentaWebInfos();
$ins_venta_web_info = $ins_venta_web_infos[0];
if (!$ins_venta_web_info) {
    $ins_venta_web_info = new InsVentaWebInfo();
    $ins_venta_web_info->setDescripcion($ins_insumo->getDescripcion());
}
?>
<div class="datos" insumo_id="<?php echo $ins_insumo->getId() ?>" venta_web_info_id="<?php echo $ins_venta_web_info->getId() ?>">
    <form id="form_von_info" name="form_von_info" method="post">
        
        <div class="par">
            <div class="label"><?php Lang::_lang('Insumo') ?></div>
            <div class="dato">
               <?php Gral::_echo($ins_insumo->getDescripcion()) ?> 
            </div>
        </div>

        <div class="par">
            <div class="label"><?php Lang::_lang('Codigo Interno') ?></div>
            <div class="dato">
               <?php Gral::_echo($ins_insumo->getCodigoInterno()) ?> 
            </div>
        </div>
        
        
        <div class="par">
            <div class="label"><?php Lang::_lang('Titulo') ?></div>
            <div class="dato">
                <input type="text" class="textbox" size="60" id="txt_von_descripcion" name="txt_von_descripcion" value="<?php Gral::_echoTxt($ins_venta_web_info->getDescripcion()) ?>" />
            </div>
        </div>

        <div class="par">
            <div class="label"><?php Lang::_lang('Descripcion Breve') ?></div>
            <div class="dato">
                <textarea id="txa_von_descripcion_breve" name="txa_von_descripcion_breve" cols="60" rows="3"><?php Gral::_echoTxt($ins_venta_web_info->getDescripcionBreve()) ?></textarea>
            </div>
        </div>

        <div class="par">
            <div class="label"><?php Lang::_lang('Descripcion Extendida') ?></div>
            <div class="dato">
                <textarea id="txa_von_descripcion_ext" name="txa_von_descripcion_ext" cols="60" rows="12"><?php Gral::_echoTxt($ins_venta_web_info->getDescripcionExt()) ?></textarea>
            </div>
        </div>

        <div class="botonera">
            <button type="button" class="boton" id="btn_von_guardar" name="btn_von_guardar"><?php Lang::_lang('Guardar Info Web') ?></button>

            <?php if ($ins_venta_web_info->getId() != '') { ?>
            <button type="button" class="boton" id="btn_von_eliminar" name="btn_von_eliminar"><?php Lang::_lang('Eliminar Info Web') ?></button>
            <?php } ?>
            
        </div>
    </form>
</div>