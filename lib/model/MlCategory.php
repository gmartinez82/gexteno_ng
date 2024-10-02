<?php

require_once "base/BMlCategory.php";

class MlCategory extends BMlCategory {

    static function setRegistrarCategoriaDesdeMl($ml_category_cod) {
        $result = MlGeneral::getCategoria($ml_category_cod);

        if ($result['httpCode'] == 200) {

            $cont = 0;
            $cantidad = count($result['body']->path_from_root);
            $full_category = '';
            foreach ($result['body']->path_from_root as $o) {
                $cont++;
                $full_category .= $o->name;

                if ($cont < $cantidad) {
                    $full_category .= ' > ';
                }
            }

            $codigo = $result['body']->id;

            $ml_category = MlCategory::getOxCodigoMl($codigo);
            if (!$ml_category) {
                $ml_category = new MlCategory();
                $ml_category->setCodigoMl($codigo);
                $ml_category->setDescripcion($full_category);
                $ml_category->setEstado(1);
                $ml_category->save();
            }

            return $ml_category;
        }

        return false;
    }

    public function getMlAttributesDesdeML() {
        $result = MlGeneral::getAtributosXCategoria($this->getCodigoMl());

        $arr_attributes = array();

        foreach ($result['body'] as $attribute) {

            $ml_relevance = $attribute->relevance;
            if ($ml_relevance == 1) {
                // --------------------------------------------------------------
                // solo se usan atributos cuya relevancia sea "1"
                // --------------------------------------------------------------
                $arr_attributes[] = $attribute;
            }
        }

        return $arr_attributes;
    }

    public function setMlAttributesDesdeML() {
        $arr_attributes = $this->getMlAttributesDesdeML();

        foreach ($arr_attributes as $arr_attribute) {
            $id = $arr_attribute->id;
            $name = $arr_attribute->name;
            $relevance = $arr_attribute->relevance;
            $value_type = $arr_attribute->value_type;
            $values = $arr_attribute->values;
            $tooltip = $arr_attribute->tooltip;

            // -----------------------------------------------------------------
            // se inicializa el value type
            // -----------------------------------------------------------------
            $ml_attribute_type = MlAttributeType::getOxCodigoMl($value_type);
            if ($ml_attribute_type) {
                // fueron inicializados desde script sql
            }

            // -----------------------------------------------------------------
            // se crea el atributo, si no existe
            // -----------------------------------------------------------------
            $ml_attribute = MlAttribute::getOxCodigoMl($id);
            if (!$ml_attribute) {
                $ml_attribute = new MlAttribute();

                if ($ml_attribute_type) {
                    $ml_attribute->setMlAttributeTypeId($ml_attribute_type->getId());
                }
                $ml_attribute->setDescripcion($name);
                $ml_attribute->setCodigo(strtoupper(Gral::getStringSaneadoSinCaracteresEspeciales($name)));
                $ml_attribute->setCodigoMl($id);
                $ml_attribute->setTooltip($tooltip);
                $ml_attribute->setEstado(1);
                $ml_attribute->save();
            }

            // -----------------------------------------------------------------
            // se crea los value correspondientes al atributo, si tuviese
            // -----------------------------------------------------------------
            if ($ml_attribute_type) {
                switch ($ml_attribute_type->getCodigo()) {

                    case MlAttributeType::TIPO_LIST:
                    case MlAttributeType::TIPO_BOOLEAN:
                        foreach ($values as $value) {
                            $value_id = $value->id;
                            $value_name = $value->name;

                            $ml_value = MlValue::getOxCodigoMl($value_id);
                            if (!$ml_value) {

                                // ---------------------------------------------
                                // si no existe se inicializa el value
                                // ---------------------------------------------
                                $ml_value = new MlValue();
                                $ml_value->setDescripcion($value_name);
                                $ml_value->setCodigo(strtoupper(Gral::getStringSaneadoSinCaracteresEspeciales($value_name)));
                                $ml_value->setCodigoMl($value_id);
                                $ml_value->setEstado(1);
                                $ml_value->save();
                            }
                            
                            // ---------------------------------------------
                            // se vincula el value al atributo
                            // ---------------------------------------------
                            $ml_attribute_ml_value = new MlAttributeMlValue();
                            $ml_attribute_ml_value->setMlAttributeId($ml_attribute->getId());
                            $ml_attribute_ml_value->setMlValueId($ml_value->getId());
                            $ml_attribute_ml_value->setEstado(1);
                            $ml_attribute_ml_value->save();
                            
                        }
                        break;
                }
            }

            // -----------------------------------------------------------------
            // se vincula el atributo con la categoria
            // -----------------------------------------------------------------
            $array = array(
                array('campo' => MlCategoryMlAttribute::GEN_ATTR_MIN_ML_CATEGORY_ID, 'valor' => $this->getId()),
                array('campo' => MlCategoryMlAttribute::GEN_ATTR_MIN_ML_ATTRIBUTE_ID, 'valor' => $ml_attribute->getId()),
            );
            $ml_category_ml_attribute = MlCategoryMlAttribute::getOxArray($array);
            if (!$ml_category_ml_attribute) {
                $ml_category_ml_attribute = new MlCategoryMlAttribute();
                $ml_category_ml_attribute->setMlCategoryId($this->getId());
                $ml_category_ml_attribute->setMlAttributeId($ml_attribute->getId());
                $ml_category_ml_attribute->setMlRelevance($relevance);
                $ml_category_ml_attribute->setEstado(1);
                $ml_category_ml_attribute->save();
            }
        }

        return true;
    }

}

?>