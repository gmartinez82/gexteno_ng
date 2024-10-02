<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$gen_prca_proceso = GenPrcaProceso::getOxId($id);
//Gral::prr($gen_prca_proceso);
?>

<div class="tabs ficha-gen_prca_proceso" identificador="<?php echo $gen_prca_proceso->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par gen_prca_proceso id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($gen_prca_proceso->getId()) ?>
            </div>
        </div>

	
        <div class="par gen_prca_proceso descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($gen_prca_proceso->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par gen_prca_proceso codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($gen_prca_proceso->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par gen_prca_proceso observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($gen_prca_proceso->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par gen_prca_proceso orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($gen_prca_proceso->getOrden()) ?>
            </div>
        </div>
		
        <div class="par gen_prca_proceso estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($gen_prca_proceso->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

