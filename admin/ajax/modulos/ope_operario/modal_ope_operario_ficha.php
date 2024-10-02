<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$ope_operario = OpeOperario::getOxId($id);
//Gral::prr($ope_operario);
?>

<div class="tabs ficha-ope_operario" identificador="<?php echo $ope_operario->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par ope_operario id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($ope_operario->getId()) ?>
            </div>
        </div>

	
        <div class="par ope_operario descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($ope_operario->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par ope_operario per_persona_id">
            <div class="label"><?php Lang::_lang('PerPersona') ?></div>
            <div class="dato">
                <?php Gral::_echo($ope_operario->getPerPersona()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par ope_operario codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($ope_operario->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par ope_operario observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($ope_operario->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par ope_operario orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($ope_operario->getOrden()) ?>
            </div>
        </div>
		
        <div class="par ope_operario estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($ope_operario->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

