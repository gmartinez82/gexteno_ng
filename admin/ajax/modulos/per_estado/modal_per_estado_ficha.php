<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$per_estado = PerEstado::getOxId($id);
//Gral::prr($per_estado);
?>

<div class="tabs ficha-per_estado" identificador="<?php echo $per_estado->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par per_estado id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($per_estado->getId()) ?>
            </div>
        </div>

	
        <div class="par per_estado per_persona_id">
            <div class="label"><?php Lang::_lang('PerPersona') ?></div>
            <div class="dato">
                <?php Gral::_echo($per_estado->getPerPersona()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par per_estado per_tipo_estado_id">
            <div class="label"><?php Lang::_lang('PerTipoEstado') ?></div>
            <div class="dato">
                <?php Gral::_echo($per_estado->getPerTipoEstado()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par per_estado inicial">
            <div class="label"><?php Lang::_lang('Inicial') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($per_estado->getInicial())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par per_estado actual">
            <div class="label"><?php Lang::_lang('Actual') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($per_estado->getActual())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

