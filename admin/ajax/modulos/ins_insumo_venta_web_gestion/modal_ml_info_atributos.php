<?php
include "_autoload.php";

$insumo_id = Gral::getVars(2, 'insumo_id', 0);
$ins_insumo = InsInsumo::getOxId($insumo_id);
$ins_marca = $ins_insumo->getInsMarca();

$ins_venta_ml_infos = $ins_insumo->getInsVentaMlInfos();
$ins_venta_ml_info = $ins_venta_ml_infos[0];

if (!$ins_venta_ml_info) {
    $ins_venta_ml_info = new InsVentaMlInfo();
    $ins_venta_ml_info->setDescripcion($ins_insumo->getDescripcion());
}

$ml_category = $ins_venta_ml_info->getMlCategory();
$ml_category_ml_attributes = $ml_category->getMlCategoryMlAttributes();
?>
<div class="datos" insumo_id="<?php echo $ins_insumo->getId() ?>" venta_ml_info_id="<?php echo $ins_venta_ml_info->getId() ?>">
    <form id="form_ml_atributos" name="form_ml_atributos" method="post">

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
        
        <?php
        foreach ($ml_category_ml_attributes as $ml_category_ml_attribute) {
            $ml_attribute = $ml_category_ml_attribute->getMlAttribute();
            $ml_attribute_type = $ml_attribute->getMlAttributeType();
            $ml_values = $ml_attribute->getMlValuesXMlAttributeMlValue();
                        
            $ins_venta_ml_info_ml_attribute = $ins_venta_ml_info->getInsVentaMlInfoMlAttributeXMlAttribute($ml_attribute);
            
            $valor_inicial_sugerido = '';
            
            // -----------------------------------------------------------------
            // se determina valor sugerido por vinculo con atributo
            // -----------------------------------------------------------------
            $ins_atributo = $ml_attribute->getInsAtributoXMlAttributeInsAtributo();
            if($ins_atributo){
                $ins_insumo_ins_atributo = $ins_insumo->getInsInsumoInsAtributoXInsAtributo($ins_atributo);
                if($ins_insumo_ins_atributo){
                    $valor_inicial_sugerido = $ins_insumo_ins_atributo->getValor();
                }
            }
            
            // -----------------------------------------------------------------
            // se determina valor sugerido desde campo
            // -----------------------------------------------------------------
            switch($ml_attribute->getCodigo()){
                case 'MARCA': // BRAND
                    $valor_inicial_sugerido = $ins_marca->getDescripcion();
                    break;
                case 'NUMERO-DE-PIEZA': // PART_NUMBER
                    $valor_inicial_sugerido = $ins_insumo->getCodigoMarca();
                    break;
                case 'OEM': // OEM
                case 'UPC': // UPC
                    $valor_inicial_sugerido = $ins_insumo->getCodigoMarca();
                    break;
                case 'SKU': // SKU
                    $valor_inicial_sugerido = $ins_insumo->getId();
                    break;
                case 'CODIGO-UNIVERSAL-DE-PRODUCTO': // GTIN
                    $valor_inicial_sugerido = $ins_insumo->getCodigoBarra();
                    break;
            }

            ?>
            <div class="par">
                <div class="label"><?php echo($ml_attribute->getDescripcion()) ?></div>

                <?php
                switch ($ml_attribute_type->getCodigo()) {
                    case MlAttributeType::TIPO_LIST:
                    case MlAttributeType::TIPO_BOOLEAN:
                        ?>
                        <div class="dato">

                            <select class="textbox" id="cmb_attribute_<?php echo strtolower($ml_attribute->getCodigoMl()) ?>" name="cmb_attribute_<?php echo strtolower($ml_attribute->getCodigoMl()) ?>">
                                <option value="0">...</option>
                                <?php 
                                foreach ($ml_values as $ml_value) { 
                                    $selected = ($ins_venta_ml_info_ml_attribute && $ins_venta_ml_info_ml_attribute->getMlValueId() == $ml_value->getId()) ? 'selected' : '';
                                    ?>
                                    <option value="<?php echo $ml_value->getId() ?>" <?php echo $selected ?> ><?php echo $ml_value->getDescripcion() ?></option>
                                <?php } ?>
                            </select>
                            <div class="label-error" id="cmb_attribute_<?php echo strtolower($ml_attribute->getCodigoMl()) ?>_error"></div>
                            
                            <div class="comentario-atributo">
                                <?php Gral::_echo($ml_attribute->getTooltip()) ?>
                                <?php Gral::_echo($ml_attribute->getObservacion()) ?>
                            </div>

                        </div>

                        <?php
                        break;
                    default:
                        ?>
                        <div class="dato">
                            <input type="text" class="textbox" id="txt_attribute_<?php echo strtolower($ml_attribute->getCodigoMl()) ?>" name="txt_attribute_<?php echo strtolower($ml_attribute->getCodigoMl()) ?>" value="<?php echo ($ins_venta_ml_info_ml_attribute) ? $ins_venta_ml_info_ml_attribute->getMlValueValor() : $valor_inicial_sugerido ?>" size="50" />
                            <div class="label-error" id="txt_attribute_<?php echo strtolower($ml_attribute->getCodigoMl()) ?>_error"></div>
                            
                            <div class="comentario-atributo">
                                <?php Gral::_echo($ml_attribute->getTooltip()) ?>
                                <?php Gral::_echo($ml_attribute->getObservacion()) ?>
                            </div>
                        </div>                        
                    <?php
                }
                ?>

            </div>

            <?php
        }
        ?>

        <div class="botonera">
            <button type="button" class="boton" id="btn_ml_atributos" name="btn_ml_atributos"><?php Lang::_lang('Atributos para ML') ?></button>
        </div>
    </form>
</div>