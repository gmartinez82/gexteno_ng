<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$gen_api_token = GenApiToken::getOxId($id);
//Gral::prr($gen_api_token);
?>

<div class="tabs ficha-gen_api_token" identificador="<?php echo $gen_api_token->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par gen_api_token id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($gen_api_token->getId()) ?>
            </div>
        </div>

	
        <div class="par gen_api_token descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($gen_api_token->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par gen_api_token gen_api_consumer_id">
            <div class="label"><?php Lang::_lang('GenApiConsumer') ?></div>
            <div class="dato">
                <?php Gral::_echo($gen_api_token->getGenApiConsumer()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par gen_api_token gen_api_proyecto_id">
            <div class="label"><?php Lang::_lang('GenApiProyecto') ?></div>
            <div class="dato">
                <?php Gral::_echo($gen_api_token->getGenApiProyecto()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par gen_api_token vencimiento">
            <div class="label"><?php Lang::_lang('Vencimiento') ?></div>
            <div class="dato">
                <?php Gral::_echo(Gral::getFechaHoraToWeb($gen_api_token->getVencimiento())) ?>
            </div>
        </div>
		
        <div class="par gen_api_token activo">
            <div class="label"><?php Lang::_lang('Activo') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($gen_api_token->getActivo())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par gen_api_token codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($gen_api_token->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par gen_api_token observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($gen_api_token->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par gen_api_token orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($gen_api_token->getOrden()) ?>
            </div>
        </div>
		
        <div class="par gen_api_token estado">
            <div class="label"><?php Lang::_lang('estado') ?></div>
            <div class="dato">
                <?php Gral::_echo($gen_api_token->getOrden()) ?>
            </div>
        </div>
	
    </div>    

</div>

