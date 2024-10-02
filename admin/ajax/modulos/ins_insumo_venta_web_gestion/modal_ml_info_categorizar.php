<?php
include "_autoload.php";

$insumo_id = Gral::getVars(2, 'insumo_id', 0);
$ins_insumo = InsInsumo::getOxId($insumo_id);

$ins_venta_ml_infos = $ins_insumo->getInsVentaMlInfos();
$ins_venta_ml_info = $ins_venta_ml_infos[0];

if (!$ins_venta_ml_info) {
    $ins_venta_ml_info = new InsVentaMlInfo();
    $ins_venta_ml_info->setDescripcion($ins_insumo->getDescripcion());
}
$palabras_claves = $ins_venta_ml_info->getDescripcion();
//MlGeneral::getMlCategoriasSugeridasGet($ins_venta_ml_info->getDescripcion());
?>
<div class="datos" insumo_id="<?php echo $ins_insumo->getId() ?>" venta_ml_info_id="<?php echo $ins_venta_ml_info->getId() ?>">
    <form id="form_ml_categorizar" name="form_ml_categorizar" method="post">

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
            <div class="label"><?php Lang::_lang('Titulo ML') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_venta_ml_info->getDescripcion()) ?> 
            </div>
        </div>

        <div class="par">
            <div class="label"><?php Lang::_lang('Categoria ML') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_venta_ml_info->getMlCategoryCod()) ?> 
            </div>
        </div>
        
        <div class="par">
            <div class="label"><?php Lang::_lang('Categoria ML Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_venta_ml_info->getMlCategoryDesc()) ?> 
            </div>
        </div>

        <div class="par">
            <div class="label"><?php Lang::_lang('Palabras Claves') ?></div>
            <div class="dato">
                <input type="text" class="textbox" size="90" id="txt_categorizar_palabras_claves" name="txt_categorizar_palabras_claves" value="<?php Gral::_echoTxt($ins_venta_ml_info->getDescripcion()) ?>" />
                <div class="comentario">Estas palabras no se publicaran en ML, solo se utilizaran para obtener una mejor sugerencia de categoria.</div>
            </div>
        </div>
        
        <div class="botonera">
            <button type="button" class="boton" id="btn_ml_buscar_categorias" name="btn_ml_buscar_categorias"><?php Lang::_lang('Buscar Categorias en ML') ?></button>
        </div>
        
        <div class="ml-categorias-propuestas">
            <?php include "bloque_categorias_propuestas.php" ?>
        </div>
        
    </form>
</div>