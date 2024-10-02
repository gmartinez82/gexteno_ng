<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$prd_param_operacion = PrdParamOperacion::getOxId($id);
//Gral::prr($prd_param_operacion);
?>

<div class="tabs ficha-prd_param_operacion" identificador="<?php echo $prd_param_operacion->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par prd_param_operacion id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($prd_param_operacion->getId()) ?>
            </div>
        </div>

	
        <div class="par prd_param_operacion descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($prd_param_operacion->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par prd_param_operacion descripcion_corta">
            <div class="label"><?php Lang::_lang('Descripcion Corta') ?></div>
            <div class="dato">
                <?php Gral::_echo($prd_param_operacion->getDescripcionCorta()) ?>
            </div>
        </div>
		
        <div class="par prd_param_operacion prd_param_tipo_operacion_id">
            <div class="label"><?php Lang::_lang('PrdParamTipoOperacion') ?></div>
            <div class="dato">
                <?php Gral::_echo($prd_param_operacion->getPrdParamTipoOperacion()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par prd_param_operacion numero">
            <div class="label"><?php Lang::_lang('Numero') ?></div>
            <div class="dato">
                <?php Gral::_echo($prd_param_operacion->getNumero()) ?>
            </div>
        </div>
		
        <div class="par prd_param_operacion prd_proceso_productivo_id">
            <div class="label"><?php Lang::_lang('PrdProcesoProductivo') ?></div>
            <div class="dato">
                <?php Gral::_echo($prd_param_operacion->getPrdProcesoProductivo()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par prd_param_operacion prd_linea_produccion_id">
            <div class="label"><?php Lang::_lang('PrdLineaProduccion') ?></div>
            <div class="dato">
                <?php Gral::_echo($prd_param_operacion->getPrdLineaProduccion()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par prd_param_operacion prd_equipo_id">
            <div class="label"><?php Lang::_lang('PrdEquipo') ?></div>
            <div class="dato">
                <?php Gral::_echo($prd_param_operacion->getPrdEquipo()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par prd_param_operacion cantidad_operarios">
            <div class="label"><?php Lang::_lang('Cant Operarios') ?></div>
            <div class="dato">
                <?php Gral::_echo($prd_param_operacion->getCantidadOperarios()) ?>
            </div>
        </div>
		
        <div class="par prd_param_operacion cantidad_equipos">
            <div class="label"><?php Lang::_lang('Cant Equipos') ?></div>
            <div class="dato">
                <?php Gral::_echo($prd_param_operacion->getCantidadEquipos()) ?>
            </div>
        </div>
		
        <div class="par prd_param_operacion codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($prd_param_operacion->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par prd_param_operacion observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($prd_param_operacion->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par prd_param_operacion orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($prd_param_operacion->getOrden()) ?>
            </div>
        </div>
		
        <div class="par prd_param_operacion estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($prd_param_operacion->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

