<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$us_usuario = UsUsuario::getOxId($id);
//Gral::prr($us_usuario);
?>

<div class="tabs ficha-us_usuario" identificador="<?php echo $us_usuario->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par us_usuario id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($us_usuario->getId()) ?>
            </div>
        </div>

	
        <div class="par us_usuario gral_lenguaje_id">
            <div class="label"><?php Lang::_lang('Lenguaje') ?></div>
            <div class="dato">
                <?php Gral::_echo($us_usuario->getGralLenguaje()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par us_usuario descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($us_usuario->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par us_usuario apellido">
            <div class="label"><?php Lang::_lang('Apellido') ?></div>
            <div class="dato">
                <?php Gral::_echo($us_usuario->getApellido()) ?>
            </div>
        </div>
		
        <div class="par us_usuario nombre">
            <div class="label"><?php Lang::_lang('Nombre') ?></div>
            <div class="dato">
                <?php Gral::_echo($us_usuario->getNombre()) ?>
            </div>
        </div>
		
        <div class="par us_usuario usuario">
            <div class="label"><?php Lang::_lang('Usuario') ?></div>
            <div class="dato">
                <?php Gral::_echo($us_usuario->getUsuario()) ?>
            </div>
        </div>
		
        <div class="par us_usuario codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($us_usuario->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par us_usuario hash">
            <div class="label"><?php Lang::_lang('Hash') ?></div>
            <div class="dato">
                <?php Gral::_echo($us_usuario->getHash()) ?>
            </div>
        </div>
		
        <div class="par us_usuario email">
            <div class="label"><?php Lang::_lang('Email') ?></div>
            <div class="dato">
                <?php Gral::_echo($us_usuario->getEmail()) ?>
            </div>
        </div>
		
        <div class="par us_usuario telefono">
            <div class="label"><?php Lang::_lang('Telefono') ?></div>
            <div class="dato">
                <?php Gral::_echo($us_usuario->getTelefono()) ?>
            </div>
        </div>
		
        <div class="par us_usuario celular">
            <div class="label"><?php Lang::_lang('Celular') ?></div>
            <div class="dato">
                <?php Gral::_echo($us_usuario->getCelular()) ?>
            </div>
        </div>
		
        <div class="par us_usuario absoluto">
            <div class="label"><?php Lang::_lang('absoluto') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($us_usuario->getAbsoluto())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par us_usuario observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($us_usuario->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par us_usuario orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($us_usuario->getOrden()) ?>
            </div>
        </div>
		
        <div class="par us_usuario activado">
            <div class="label"><?php Lang::_lang('Activado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($us_usuario->getActivado())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par us_usuario estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($us_usuario->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

