<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$prd_linea_produccion_prd_param_operacion_prd_equipo = PrdLineaProduccionPrdParamOperacionPrdEquipo::getOxId($id);
//Gral::prr($prd_linea_produccion_prd_param_operacion_prd_equipo);
?>

<div class="tabs ficha-prd_linea_produccion_prd_param_operacion_prd_equipo" identificador="<?php echo $prd_linea_produccion_prd_param_operacion_prd_equipo->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par prd_linea_produccion_prd_param_operacion_prd_equipo id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($prd_linea_produccion_prd_param_operacion_prd_equipo->getId()) ?>
            </div>
        </div>

	
        <div class="par prd_linea_produccion_prd_param_operacion_prd_equipo descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($prd_linea_produccion_prd_param_operacion_prd_equipo->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par prd_linea_produccion_prd_param_operacion_prd_equipo prd_linea_produccion_id">
            <div class="label"><?php Lang::_lang('PrdLineaProduccion') ?></div>
            <div class="dato">
                <?php Gral::_echo($prd_linea_produccion_prd_param_operacion_prd_equipo->getPrdLineaProduccion()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par prd_linea_produccion_prd_param_operacion_prd_equipo prd_param_operacion_id">
            <div class="label"><?php Lang::_lang('PrdParamOperacion') ?></div>
            <div class="dato">
                <?php Gral::_echo($prd_linea_produccion_prd_param_operacion_prd_equipo->getPrdParamOperacion()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par prd_linea_produccion_prd_param_operacion_prd_equipo prd_equipo_id">
            <div class="label"><?php Lang::_lang('PrdEquipo') ?></div>
            <div class="dato">
                <?php Gral::_echo($prd_linea_produccion_prd_param_operacion_prd_equipo->getPrdEquipo()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par prd_linea_produccion_prd_param_operacion_prd_equipo codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($prd_linea_produccion_prd_param_operacion_prd_equipo->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par prd_linea_produccion_prd_param_operacion_prd_equipo observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($prd_linea_produccion_prd_param_operacion_prd_equipo->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par prd_linea_produccion_prd_param_operacion_prd_equipo orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($prd_linea_produccion_prd_param_operacion_prd_equipo->getOrden()) ?>
            </div>
        </div>
		
        <div class="par prd_linea_produccion_prd_param_operacion_prd_equipo estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($prd_linea_produccion_prd_param_operacion_prd_equipo->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

