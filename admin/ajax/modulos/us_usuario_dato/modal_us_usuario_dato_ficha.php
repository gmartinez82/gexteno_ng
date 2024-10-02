<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$us_usuario_dato = UsUsuarioDato::getOxId($id);
//Gral::prr($us_usuario_dato);
?>

<div class="tabs ficha-us_usuario_dato" identificador="<?php echo $us_usuario_dato->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par us_usuario_dato id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($us_usuario_dato->getId()) ?>
            </div>
        </div>

	
        <div class="par us_usuario_dato us_usuario_id">
            <div class="label"><?php Lang::_lang('Datos de Usuario') ?></div>
            <div class="dato">
                <?php Gral::_echo($us_usuario_dato->getUsUsuario()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par us_usuario_dato email">
            <div class="label"><?php Lang::_lang('Email') ?></div>
            <div class="dato">
                <?php Gral::_echo($us_usuario_dato->getEmail()) ?>
            </div>
        </div>
		
        <div class="par us_usuario_dato telefono">
            <div class="label"><?php Lang::_lang('Telefono') ?></div>
            <div class="dato">
                <?php Gral::_echo($us_usuario_dato->getTelefono()) ?>
            </div>
        </div>
		
        <div class="par us_usuario_dato observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($us_usuario_dato->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par us_usuario_dato orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($us_usuario_dato->getOrden()) ?>
            </div>
        </div>
		
        <div class="par us_usuario_dato estado">
            <div class="label"><?php Lang::_lang('estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($us_usuario_dato->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

