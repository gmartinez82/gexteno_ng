<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$prd_proceso_productivo = PrdProcesoProductivo::getOxId($id);
//Gral::prr($prd_proceso_productivo);
?>

<div class="tabs ficha-prd_proceso_productivo" identificador="<?php echo $prd_proceso_productivo->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par prd_proceso_productivo id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($prd_proceso_productivo->getId()) ?>
            </div>
        </div>

	
        <div class="par prd_proceso_productivo descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($prd_proceso_productivo->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par prd_proceso_productivo descripcion_corta">
            <div class="label"><?php Lang::_lang('Descripcion Corta') ?></div>
            <div class="dato">
                <?php Gral::_echo($prd_proceso_productivo->getDescripcionCorta()) ?>
            </div>
        </div>
		
        <div class="par prd_proceso_productivo ins_insumo_id">
            <div class="label"><?php Lang::_lang('InsInsumo') ?></div>
            <div class="dato">
                <?php Gral::_echo($prd_proceso_productivo->getInsInsumo()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par prd_proceso_productivo cantidad">
            <div class="label"><?php Lang::_lang('Cantidad') ?></div>
            <div class="dato">
                <?php Gral::_echo($prd_proceso_productivo->getCantidad()) ?>
            </div>
        </div>
		
        <div class="par prd_proceso_productivo configurado">
            <div class="label"><?php Lang::_lang('Configurado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($prd_proceso_productivo->getConfigurado())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par prd_proceso_productivo codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($prd_proceso_productivo->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par prd_proceso_productivo observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($prd_proceso_productivo->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par prd_proceso_productivo orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($prd_proceso_productivo->getOrden()) ?>
            </div>
        </div>
		
        <div class="par prd_proceso_productivo estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($prd_proceso_productivo->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

