<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$us_credencial = UsCredencial::getOxId($id);
//Gral::prr($us_credencial);
?>

<div class="tabs ficha-us_credencial" identificador="<?php echo $us_credencial->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par us_credencial id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($us_credencial->getId()) ?>
            </div>
        </div>

	
        <div class="par us_credencial descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($us_credencial->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par us_credencial codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($us_credencial->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par us_credencial observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($us_credencial->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par us_credencial orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($us_credencial->getOrden()) ?>
            </div>
        </div>
		
        <div class="par us_credencial estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($us_credencial->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

