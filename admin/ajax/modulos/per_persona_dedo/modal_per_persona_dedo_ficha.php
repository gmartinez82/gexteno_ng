<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$per_persona_dedo = PerPersonaDedo::getOxId($id);
//Gral::prr($per_persona_dedo);
?>

<div class="tabs ficha-per_persona_dedo" identificador="<?php echo $per_persona_dedo->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par per_persona_dedo id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($per_persona_dedo->getId()) ?>
            </div>
        </div>

	
        <div class="par per_persona_dedo descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($per_persona_dedo->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par per_persona_dedo per_persona_id">
            <div class="label"><?php Lang::_lang('PerPersona') ?></div>
            <div class="dato">
                <?php Gral::_echo($per_persona_dedo->getPerPersona()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par per_persona_dedo codigo">
            <div class="label"><?php Lang::_lang('codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($per_persona_dedo->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par per_persona_dedo dedo_numero">
            <div class="label"><?php Lang::_lang('Dedo Numero') ?></div>
            <div class="dato">
                <?php Gral::_echo($per_persona_dedo->getDedoNumero()) ?>
            </div>
        </div>
		
        <div class="par per_persona_dedo dedo_info">
            <div class="label"><?php Lang::_lang('Dedo Info') ?></div>
            <div class="dato">
                <?php Gral::_echo($per_persona_dedo->getDedoInfo()) ?>
            </div>
        </div>
		
        <div class="par per_persona_dedo observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($per_persona_dedo->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par per_persona_dedo orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($per_persona_dedo->getOrden()) ?>
            </div>
        </div>
		
        <div class="par per_persona_dedo estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($per_persona_dedo->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

