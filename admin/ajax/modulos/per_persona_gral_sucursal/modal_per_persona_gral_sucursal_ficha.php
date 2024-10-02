<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$per_persona_gral_sucursal = PerPersonaGralSucursal::getOxId($id);
//Gral::prr($per_persona_gral_sucursal);
?>

<div class="tabs ficha-per_persona_gral_sucursal" identificador="<?php echo $per_persona_gral_sucursal->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par per_persona_gral_sucursal id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($per_persona_gral_sucursal->getId()) ?>
            </div>
        </div>

	
        <div class="par per_persona_gral_sucursal per_persona_id">
            <div class="label"><?php Lang::_lang('PerPersona') ?></div>
            <div class="dato">
                <?php Gral::_echo($per_persona_gral_sucursal->getPerPersona()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par per_persona_gral_sucursal gral_sucursal_id">
            <div class="label"><?php Lang::_lang('GralSucursal') ?></div>
            <div class="dato">
                <?php Gral::_echo($per_persona_gral_sucursal->getGralSucursal()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par per_persona_gral_sucursal codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($per_persona_gral_sucursal->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par per_persona_gral_sucursal estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($per_persona_gral_sucursal->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

