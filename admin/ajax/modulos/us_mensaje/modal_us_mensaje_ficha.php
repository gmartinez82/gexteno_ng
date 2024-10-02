<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$us_mensaje = UsMensaje::getOxId($id);
//Gral::prr($us_mensaje);
?>

<div class="tabs ficha-us_mensaje" identificador="<?php echo $us_mensaje->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par us_mensaje id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($us_mensaje->getId()) ?>
            </div>
        </div>

	
        <div class="par us_mensaje descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($us_mensaje->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par us_mensaje us_usuario_id">
            <div class="label"><?php Lang::_lang('Usuario') ?></div>
            <div class="dato">
                <?php Gral::_echo($us_mensaje->getUsUsuario()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par us_mensaje codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($us_mensaje->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par us_mensaje observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($us_mensaje->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par us_mensaje leido">
            <div class="label"><?php Lang::_lang('Leido') ?></div>
            <div class="dato">
                <?php Gral::_echo($us_mensaje->getLeido()) ?>
            </div>
        </div>
		
        <div class="par us_mensaje orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($us_mensaje->getOrden()) ?>
            </div>
        </div>
		
        <div class="par us_mensaje estado">
            <div class="label"><?php Lang::_lang('estado') ?></div>
            <div class="dato">
                <?php Gral::_echo($us_mensaje->getEst()->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

