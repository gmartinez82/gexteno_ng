<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$gen_widget_gen_widget_modulo = GenWidgetGenWidgetModulo::getOxId($id);
//Gral::prr($gen_widget_gen_widget_modulo);
?>

<div class="tabs ficha-gen_widget_gen_widget_modulo" identificador="<?php echo $gen_widget_gen_widget_modulo->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par gen_widget_gen_widget_modulo id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($gen_widget_gen_widget_modulo->getId()) ?>
            </div>
        </div>

	
        <div class="par gen_widget_gen_widget_modulo descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($gen_widget_gen_widget_modulo->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par gen_widget_gen_widget_modulo gen_widget_id">
            <div class="label"><?php Lang::_lang('GenWidget') ?></div>
            <div class="dato">
                <?php Gral::_echo($gen_widget_gen_widget_modulo->getGenWidget()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par gen_widget_gen_widget_modulo gen_widget_modulo_id">
            <div class="label"><?php Lang::_lang('GenWidgetModulo') ?></div>
            <div class="dato">
                <?php Gral::_echo($gen_widget_gen_widget_modulo->getGenWidgetModulo()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par gen_widget_gen_widget_modulo codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($gen_widget_gen_widget_modulo->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par gen_widget_gen_widget_modulo observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($gen_widget_gen_widget_modulo->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par gen_widget_gen_widget_modulo orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($gen_widget_gen_widget_modulo->getOrden()) ?>
            </div>
        </div>
		
        <div class="par gen_widget_gen_widget_modulo estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($gen_widget_gen_widget_modulo->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

