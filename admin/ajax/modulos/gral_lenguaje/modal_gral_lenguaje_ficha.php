<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$gral_lenguaje = GralLenguaje::getOxId($id);
//Gral::prr($gral_lenguaje);
?>

<div class="tabs ficha-gral_lenguaje" identificador="<?php echo $gral_lenguaje->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par gral_lenguaje id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_lenguaje->getId()) ?>
            </div>
        </div>

	
        <div class="par gral_lenguaje descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_lenguaje->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par gral_lenguaje codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_lenguaje->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par gral_lenguaje observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_lenguaje->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par gral_lenguaje orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_lenguaje->getOrden()) ?>
            </div>
        </div>
		
        <div class="par gral_lenguaje estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($gral_lenguaje->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

