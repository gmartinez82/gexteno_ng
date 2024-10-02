<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$ope_operario_us_usuario = OpeOperarioUsUsuario::getOxId($id);
//Gral::prr($ope_operario_us_usuario);
?>

<div class="tabs ficha-ope_operario_us_usuario" identificador="<?php echo $ope_operario_us_usuario->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par ope_operario_us_usuario id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($ope_operario_us_usuario->getId()) ?>
            </div>
        </div>

	
        <div class="par ope_operario_us_usuario descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($ope_operario_us_usuario->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par ope_operario_us_usuario ope_operario_id">
            <div class="label"><?php Lang::_lang('OpeOperario') ?></div>
            <div class="dato">
                <?php Gral::_echo($ope_operario_us_usuario->getOpeOperario()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par ope_operario_us_usuario us_usuario_id">
            <div class="label"><?php Lang::_lang('UsUsuario') ?></div>
            <div class="dato">
                <?php Gral::_echo($ope_operario_us_usuario->getUsUsuario()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par ope_operario_us_usuario codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($ope_operario_us_usuario->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par ope_operario_us_usuario observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($ope_operario_us_usuario->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par ope_operario_us_usuario orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($ope_operario_us_usuario->getOrden()) ?>
            </div>
        </div>
		
        <div class="par ope_operario_us_usuario estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($ope_operario_us_usuario->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

