<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";

$padre = Gral::getVars(1, 'padre');
$padre_id = Gral::getVars(1, 'padre_id');
$padre_clase = Gral::getVars(1, 'padre_clase');
$relacion = Gral::getVars(1, 'relacion');
$palabra = Gral::getVars(1, 'palabra');
$pagina = Gral::getVars(1, 'pagina', 1);

$o_padre = eval('return '.$padre_clase.'::getOxId('.$padre_id.');');
$o_ids = eval('return $o_padre->getInsInsumoVehModelosId();');


// elementos seleccionados
$c = new Criterio();
$c->addDistinct(false);
$c->setAmbiguo(true);


	$c->add(VehModelo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                    
        $c->addInicioSubconsulta();
        $c->add('', 'false', Criterio::SINCOMPARADOR);
	$c->add(VehModelo::GEN_ATTR_DESCRIPCION, '%' . $palabra . '%', Criterio::LIKE, false, Criterio::_OR);
	$c->add(VehModelo::GEN_ATTR_CODIGO, '%' . $palabra . '%', Criterio::LIKE, false, Criterio::_OR);
	$c->add(VehModelo::GEN_ATTR_OBSERVACION, '%' . $palabra . '%', Criterio::LIKE, false, Criterio::_OR);
        $c->addFinSubconsulta();
	

$c->addTabla(VehModelo::GEN_TABLA);
$c->addRealJoin(VehMarca::GEN_TABLA, VehMarca::GEN_ATTR_ID, VehModelo::GEN_ATTR_VEH_MARCA_ID);
$c->addOrden(VehMarca::GEN_ATTR_DESCRIPCION, Criterio::_ASC);
$c->addOrden(VehModelo::GEN_ATTR_DESCRIPCION, Criterio::_ASC);
$c->setCriterios();

$paginador = new Paginador(20, $pagina);

$ids_seleccionados = '';
$veh_modelos = VehModelo::getVehModelos($paginador, $c);

$array_relacion_arbols = array();
foreach ($veh_modelos as $veh_modelo) {
    $veh_marca = $veh_modelo->getVehMarca();
    if ($veh_marca) {
        $array_relacion_arbols[$veh_marca->getId()][$veh_modelo->getId()] = $veh_modelo;
    }
}
?>
<div class="relacion-arbol">
    <?php
    $ins_insumo_veh_modelo_seleccionados = $o_padre->getInsInsumoVehModelos();
    foreach ($array_relacion_arbols as $veh_marca_id => $array_relacion_arbol_veh_marcas) {
        $veh_marca = VehMarca::getOxId($veh_marca_id);

        $arr_ins_insumo_veh_modelo_seleccionados_ids = array();

        foreach ($ins_insumo_veh_modelo_seleccionados as $ins_insumo_veh_modelo_seleccionado) {
            $arr_ins_insumo_veh_modelo_seleccionados_ids[$ins_insumo_veh_modelo_seleccionado->getVehModeloId()] = $ins_insumo_veh_modelo_seleccionado->getVehModeloId();
            $arr_ins_insumo_veh_modelo_seleccionados[$ins_insumo_veh_modelo_seleccionado->getVehModeloId()] = $ins_insumo_veh_modelo_seleccionado;
        }
        //Gral::prr($arr_ins_insumo_veh_modelo_seleccionados_ids);
        //Gral::prr($arr_ins_insumo_veh_modelo_seleccionados);
        ?>
        <div class="uno item n0 veh_marca">
            <div class="n0-titulo">
                <input type="checkbox" 
                       id="chk_veh_marca_<?php echo $veh_marca->getId() ?>" 
                       name="chk_veh_marca[<?php echo $veh_marca->getId() ?>]" 
                       class="textbox n0" 
                       value="<?php echo $veh_marca->getId() ?>" 
                       />
                <label class="descripcion"><?php Gral::_echo($veh_marca->getDescripcion()) ?></label>
            </div>

            <div class="veh_modelos">
                <?php
                foreach ($array_relacion_arbol_veh_marcas as $veh_modelo_id => $array_relacion_arbol_veh_modelos) {
                    $veh_modelo = VehModelo::getOxId($veh_modelo_id);

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
    <?php include Gral::getPathAbs()."admin/parciales/paginador_set.php"; ?>
</div>

