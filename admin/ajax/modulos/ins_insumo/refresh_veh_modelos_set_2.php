<?php
include_once '_autoload.php';

$padre = Gral::getVars(1, 'padre');
$padre_id = Gral::getVars(1, 'padre_id');
$padre_clase = Gral::getVars(1, 'padre_clase');
$relacion = Gral::getVars(1, 'relacion');
$palabra = Gral::getVars(1, 'palabra');
$pagina = Gral::getVars(1, 'pagina', 1);

$o_padre = eval('return ' . $padre_clase . '::getOxId(' . $padre_id . ');');
$o_ids = eval('return $o_padre->getInsInsumoVehModelosId();');


// elementos seleccionados
$c = new Criterio();
$c->addDistinct(false);
$c->setAmbiguo(true);
$c->add(VehModelo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);

$c->add(VehModelo::GEN_ATTR_DESCRIPCION, '%' . $palabra . '%', Criterio::LIKE);

$c->addTabla(VehModelo::GEN_TABLA);
$c->addRealJoin(VehMarca::GEN_TABLA, VehMarca::GEN_ATTR_ID, VehModelo::GEN_ATTR_VEH_MARCA_ID);
$c->addOrden(VehMarca::GEN_ATTR_DESCRIPCION, Criterio::_ASC);
$c->addOrden(VehModelo::GEN_ATTR_DESCRIPCION, Criterio::_ASC);
$c->setCriterios();

$ids_seleccionados = '';
$veh_modelos = VehModelo::getVehModelos(null, $c);

$array_relacion_arbols = array();
foreach ($veh_modelos as $veh_modelo) {
    $veh_marca = $veh_modelo->getVehMarca();
    if ($veh_marca) {
        $array_relacion_arbols[$veh_marca->getId()][$veh_modelo->getId()] = $veh_modelo;
    }
}

//Gral::prr($array_relacion_arbols);
?>

<div class="relacion-arbol">
    <?php
    foreach ($array_relacion_arbols as $marca_id => $array_relacion_arbol_marcas) {
        $veh_marca = VehMarca::getOxId($marca_id);

        $arr_ins_insumo_veh_modelo_seleccionados_ids = array();
        $ins_insumo_veh_modelo_seleccionados = $o_padre->getInsInsumoVehModelos();

        foreach ($ins_insumo_veh_modelo_seleccionados as $ins_insumo_veh_modelo_seleccionado) {
            $arr_ins_insumo_veh_modelo_seleccionados_ids[$ins_insumo_veh_modelo_seleccionado->getVehModeloId()] = $ins_insumo_veh_modelo_seleccionado->getVehModeloId();
            $arr_ins_insumo_veh_modelo_seleccionados[$ins_insumo_veh_modelo_seleccionado->getVehModeloId()] = $ins_insumo_veh_modelo_seleccionado;
        }
        //Gral::prr($arr_ins_insumo_veh_modelo_seleccionados_ids);
        //Gral::prr($arr_ins_insumo_veh_modelo_seleccionados);
        ?>
        <div class="uno item n0 veh_marca">
            <input type="checkbox" 
                   id="chk_marca_<?php echo $veh_marca->getId() ?>" 
                   name="chk_marca[<?php echo $veh_marca->getId() ?>]" 
                   class="textbox n0" 
                   value="<?php echo $veh_marca->getId() ?>" 
                   />
            <label class="descripcion"><?php Gral::_echo($veh_marca->getDescripcion()) ?></label>

            <div class="veh_modelos">
                <?php
                foreach ($array_relacion_arbol_marcas as $modelo_id => $array_relacion_arbol_modelos) {
                    $veh_modelo = VehModelo::getOxId($modelo_id);

                    $checked = (in_array($veh_modelo->getId(), $arr_ins_insumo_veh_modelo_seleccionados_ids)) ? 'checked="checked"' : '';
                    $sel = (in_array($veh_modelo->getId(), $arr_ins_insumo_veh_modelo_seleccionados_ids)) ? 'sel' : '';
                    $ins_insumo_veh_modelo = (in_array($veh_modelo->getId(), $arr_ins_insumo_veh_modelo_seleccionados_ids)) ? $arr_ins_insumo_veh_modelo_seleccionados[$veh_modelo->getId()] : false;
                    if ($ins_insumo_veh_modelo) {
                        $ins_insumo_veh_modelo_id = (in_array($veh_modelo->getId(), $arr_ins_insumo_veh_modelo_seleccionados_ids)) ? $ins_insumo_veh_modelo->getId() : '';
                    }
                    ?>
                    <div class="uno item n1" id='uno_veh_modelo_<?php echo $veh_modelo->getId() ?>' >
                        <?php
                        include 'uno_veh_modelo_set.php';
                        ?>
                    </div>
                <?php } ?>
            </div>

        </div>
    <?php } ?>
</div>
