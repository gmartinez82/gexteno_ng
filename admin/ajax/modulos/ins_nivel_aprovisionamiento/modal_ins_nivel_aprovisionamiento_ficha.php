<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$ins_nivel_aprovisionamiento = InsNivelAprovisionamiento::getOxId($id);
//Gral::prr($ins_nivel_aprovisionamiento);
?>

<div class="tabs ficha-ins_nivel_aprovisionamiento" identificador="<?php echo $ins_nivel_aprovisionamiento->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par ins_nivel_aprovisionamiento id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_nivel_aprovisionamiento->getId()) ?>
            </div>
        </div>

	
        <div class="par ins_nivel_aprovisionamiento descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_nivel_aprovisionamiento->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par ins_nivel_aprovisionamiento codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_nivel_aprovisionamiento->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par ins_nivel_aprovisionamiento observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_nivel_aprovisionamiento->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par ins_nivel_aprovisionamiento orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_nivel_aprovisionamiento->getOrden()) ?>
            </div>
        </div>
		
        <div class="par ins_nivel_aprovisionamiento estado">
            <div class="label"><?php Lang::_lang('estado') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_nivel_aprovisionamiento->getOrden()) ?>
            </div>
        </div>
	
    </div>    

</div>

