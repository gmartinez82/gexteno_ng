<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$gen_api_consumer = GenApiConsumer::getOxId($id);
//Gral::prr($gen_api_consumer);
?>

<div class="tabs ficha-gen_api_consumer" identificador="<?php echo $gen_api_consumer->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par gen_api_consumer id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($gen_api_consumer->getId()) ?>
            </div>
        </div>

	
        <div class="par gen_api_consumer descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($gen_api_consumer->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par gen_api_consumer gen_api_proyecto_id">
            <div class="label"><?php Lang::_lang('GenApiProyecto') ?></div>
            <div class="dato">
                <?php Gral::_echo($gen_api_consumer->getGenApiProyecto()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par gen_api_consumer consumer">
            <div class="label"><?php Lang::_lang('Consumer') ?></div>
            <div class="dato">
                <?php Gral::_echo($gen_api_consumer->getConsumer()) ?>
            </div>
        </div>
		
        <div class="par gen_api_consumer secret_code">
            <div class="label"><?php Lang::_lang('Secret Code') ?></div>
            <div class="dato">
                <?php Gral::_echo($gen_api_consumer->getSecretCode()) ?>
            </div>
        </div>
		
        <div class="par gen_api_consumer codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($gen_api_consumer->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par gen_api_consumer observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($gen_api_consumer->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par gen_api_consumer orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($gen_api_consumer->getOrden()) ?>
            </div>
        </div>
		
        <div class="par gen_api_consumer estado">
            <div class="label"><?php Lang::_lang('estado') ?></div>
            <div class="dato">
                <?php Gral::_echo($gen_api_consumer->getOrden()) ?>
            </div>
        </div>
	
    </div>    

</div>

