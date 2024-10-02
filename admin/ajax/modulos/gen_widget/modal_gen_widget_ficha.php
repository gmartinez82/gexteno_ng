<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$gen_widget = GenWidget::getOxId($id);
//Gral::prr($gen_widget);
?>

<div class="tabs ficha-gen_widget" identificador="<?php echo $gen_widget->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par gen_widget id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($gen_widget->getId()) ?>
            </div>
        </div>

	
        <div class="par gen_widget descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($gen_widget->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par gen_widget gen_widget_sector_id">
            <div class="label"><?php Lang::_lang('Widget Sector') ?></div>
            <div class="dato">
                <?php Gral::_echo($gen_widget->getGenWidgetSector()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par gen_widget gen_widget_modulo_id">
            <div class="label"><?php Lang::_lang('Widget Modulo') ?></div>
            <div class="dato">
                <?php Gral::_echo($gen_widget->getGenWidgetModulo()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par gen_widget ancho">
            <div class="label"><?php Lang::_lang('Ancho') ?></div>
            <div class="dato">
                <?php Gral::_echo($gen_widget->getAncho()) ?>
            </div>
        </div>
		
        <div class="par gen_widget codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($gen_widget->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par gen_widget observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($gen_widget->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par gen_widget orden">
            <div class="label"><?php Lang::_lang('Orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($gen_widget->getOrden()) ?>
            </div>
        </div>
		
        <div class="par gen_widget estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($gen_widget->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

